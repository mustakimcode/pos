<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Member;
use App\Models\Pembelian;
use App\Models\Pengeluaran;
use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $kategori = Kategori::count();
        $produk = Produk::count();
        $supplier = Supplier::count();
        $member = Member::count();

        $tanggal_awal = date('Y-m-01');
        $tanggal_akhir = date('Y-m-d');

        $data_tanggal = array();
        $data_pendapatan = array();

        while (strtotime($tanggal_awal) <= strtotime($tanggal_akhir)) {
            $data_tanggal[] = (int) substr($tanggal_awal, 8, 2);

            $total_penjualan = Penjualan::where('created_at', 'LIKE', "%$tanggal_awal%")->sum('bayar');
            $total_pembelian = Pembelian::where('created_at', 'LIKE', "%$tanggal_awal%")->sum('bayar');
            $total_pengeluaran = Pengeluaran::where('created_at', 'LIKE', "%$tanggal_awal%")->sum('nominal');

            $pendapatan = $total_penjualan - $total_pembelian - $total_pengeluaran;
            $data_pendapatan[] += $pendapatan;

            $tanggal_awal = date('Y-m-d', strtotime("+1 day", strtotime($tanggal_awal)));
        }

        $tanggal_awal = date('Y-m-01');
        $historyPenjualan = DB::table('produk')
            ->select(
                'penjualan_detail.*',
                DB::raw('TIME(penjualan_detail.created_at) as time'),
                'produk.name'
            )
            ->join('penjualan_detail', 'penjualan_detail.id_produk', '=', 'produk.id')
            ->whereRaw('Date(penjualan_detail.created_at) = CURDATE()')
            ->orderBy('penjualan_detail.id_penJualan', 'desc')
            ->get();

        $tanggalAwal = date('Y-m-d', mktime(0, 0, 0, date('m'), 1, date('Y')));
        $tanggalAkhir = date('Y-m-d');

        $mostBuyObat =  DB::table('produk')
            ->select('produk.id', 'produk.name', DB::raw('sum(penjualan_detail.jumlah) as qty_penjualan'), DB::raw('sum(penjualan_detail.subtotal) as total_penjualan'))
            ->join('penjualan_detail', 'penjualan_detail.id_produk', '=', 'produk.id')
            ->where('penjualan_detail.created_at', '>=', $tanggalAwal)
            ->where('penjualan_detail.created_at', '<=', $tanggalAkhir)
            ->orderBy('qty_penjualan', 'DESC')
            ->groupBy('produk.id')
            ->get(10);

        if (auth()->user()->level == 1) {
            return view('admin.dashboard', compact('kategori', 'produk', 'supplier', 'member', 'tanggal_awal', 'tanggal_akhir', 'data_tanggal', 'data_pendapatan', 'historyPenjualan','mostBuyObat'));
        } else {
            return view('kasir.dashboard');
        }
    }
}
