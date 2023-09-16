<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Pengeluaran;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class LaporanObatController extends Controller
{
    public function index(Request $request)
    {
        $tanggalAwal = date('Y-m-d', mktime(0, 0, 0, date('m'), 1, date('Y')));
        $tanggalAkhir = date('Y-m-d');

        if ($request->has('tanggal_awal') && $request->tanggal_awal != "" && $request->has('tanggal_akhir') && $request->tanggal_akhir) {
            $tanggalAwal = $request->tanggal_awal;
            $tanggalAkhir = $request->tanggal_akhir;
        }

        $dataPenjualan =  DB::table('produk')
            ->select('produk.id', 'produk.name', DB::raw('sum(penjualan_detail.jumlah) as qty_penjualan'), DB::raw('sum(penjualan_detail.subtotal) as total_penjualan'))
            ->join('penjualan_detail', 'penjualan_detail.id_produk', '=', 'produk.id')
            ->where('penjualan_detail.created_at', '>=', $tanggalAwal)
            ->where('penjualan_detail.created_at', '<=', $tanggalAkhir)
            ->orderBy('qty_penjualan', 'DESC')
            ->groupBy('produk.id')
            ->get();



        return view('laporan.obat.index', compact('tanggalAwal', 'tanggalAkhir', 'dataPenjualan'));
    }

    public function getData($awal, $akhir)
    {
        $no = 1;
        $data = array();
        $pendapatan = 0;
        $total_pendapatan = 0;

        while (strtotime($awal) <= strtotime($akhir)) {
            $tanggal = $awal;
            $awal = date('Y-m-d', strtotime("+1 day", strtotime($awal)));

            $total_penjualan = Penjualan::where('created_at', 'LIKE', "%$tanggal%")->sum('bayar');
            $total_pembelian = Pembelian::where('created_at', 'LIKE', "%$tanggal%")->sum('bayar');
            $total_pengeluaran = Pengeluaran::where('created_at', 'LIKE', "%$tanggal%")->sum('nominal');

            $pendapatan = $total_penjualan - $total_pembelian - $total_pengeluaran;
            $total_pendapatan += $pendapatan;

            $row = array();
            $row['DT_RowIndex'] = $no++;
            $row['tanggal'] = tanggal_indonesia($tanggal, false);
            $row['penjualan'] = format_uang($total_penjualan);
            $row['pembelian'] = format_uang($total_pembelian);
            $row['pengeluaran'] = format_uang($total_pengeluaran);
            $row['pendapatan'] = format_uang($pendapatan);
            $row['action'] = '
                <div class="btn-group">
                    <a href="' . route('laporan.obat.view', $tanggal) . '" class="btn btn-xs btn-info btn-flat"><i class="fa fa-eye"></i></a>
                </div>
                ';

            $data[] = $row;
        }

        $data[] = [
            'DT_RowIndex' => '',
            'tanggal' => '',
            'penjualan' => '',
            'pembelian' => '',
            'pengeluaran' => 'Total Pendapatan',
            'pendapatan' => format_uang($total_pendapatan),
            'action' => '',
        ];

        return $data;
    }

    public function data($awal, $akhir)
    {
        $data = $this->getData($awal, $akhir);

        return datatables()
            ->of($data)
            ->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kartustock(Request $request, $id)
    {
        $tanggalAwal = date('Y-m-d', mktime(0, 0, 0, date('m'), 1, date('Y')));
        $tanggalAkhir = date('Y-m-d');

        if ($request->has('tanggal_awal') && $request->tanggal_awal != "" && $request->has('tanggal_akhir') && $request->tanggal_akhir) {
            $tanggalAwal = $request->tanggal_awal;
            $tanggalAkhir = $request->tanggal_akhir;
        }

        $produk = Produk::find($id);
        $historyStockPenjualan = DB::table('produk')
            ->select(
                'produk.name',
                DB::raw('DATE(penjualan_detail.created_at) as tanggal'),
                DB::raw('sum(penjualan_detail.jumlah) as keluar')
            )
            ->join('penjualan_detail', 'penjualan_detail.id_produk', '=', 'produk.id')
            ->where('produk.id', $produk->id)
            ->where('penjualan_detail.created_at', '>=', $tanggalAwal)
            ->where('penjualan_detail.created_at', '<=', $tanggalAkhir)
            ->groupBy(DB::raw('DATE(penjualan_detail.created_at)'))
            ->get();
        $historyStockPembelian = DB::table('produk')
            ->select(
                DB::raw('DATE(pembelian_detail.created_at) as tanggal'),
                DB::raw('sum(pembelian_detail.jumlah) as masuk')
            )
            ->join('pembelian_detail', 'pembelian_detail.id_produk', '=', 'produk.id')
            ->where('produk.id', $produk->id)
            ->groupBy(DB::raw('DATE(pembelian_detail.created_at)'))
            ->get();

        $history = [];

        foreach ($historyStockPenjualan as $key => $penjualan) {
            $historyDump = $penjualan;
            foreach ($historyStockPembelian as $key => $pembelian) {
                if ($penjualan->tanggal == $pembelian->tanggal) {
                    $historyDump->masuk = $pembelian->masuk;
                }
            }

            $history[] = $historyDump;
        }

        $dataPenjualan = $produk->toArray();

        $dataPenjualan["history"] = $history;

        return view('laporan.obat.history.index', compact('tanggalAwal', 'tanggalAkhir', 'dataPenjualan', 'produk'));;
    }

    public function view($tanggal)
    {
        return $data = DB::table('produk')
            ->select(
                'penjualan_detail.*',
                DB::raw('TIME(penjualan_detail.created_at) as time'),
                'produk.name'
            )
            ->join('penjualan_detail', 'penjualan_detail.id_produk', '=', 'produk.id')
            ->whereRaw('Date(penjualan_detail.created_at) = CURDATE()')
            ->orderBy('penjualan_detail.id_penJualan', 'desc')
            ->get();
    }

    public function exportPDF($awal, $akhir)
    {
        $data = $this->getData($awal, $akhir);
        $pdf  = PDF::loadView('laporan.obat.pdf', compact('awal', 'akhir', 'data'));
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan-pendapatan-' . date('Y-m-d-his') . '.pdf');
    }
}
