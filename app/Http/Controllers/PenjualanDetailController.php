<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Penjualan;
use App\Models\PenjualanDetail;
use App\Models\Produk;
use App\Models\Setting;
use Illuminate\Http\Request;

class PenjualanDetailController extends Controller
{
    public function index()
    {
        $produk = Produk::orderBy('name')->get();
        $member = Member::orderBy('name')->get();
        $diskon = Setting::first()->diskon ?? 0;

        // Cek apakah ada transaksi yang sedang berjalan
        if ($id_penjualan = session('id_penjualan')) {
            $penjualan = Penjualan::find($id_penjualan);
            $memberSelected = $penjualan->member ?? new Member();

            return view('penjualan_detail.index', compact('produk', 'member', 'diskon', 'id_penjualan', 'penjualan', 'memberSelected'));
        } else {
            if (auth()->user()->level == 1) {
                return redirect()->route('transaksi.baru');
            } else {
                return redirect()->route('home');
            }
        }
    }

    public function data($id)
    {
        $detail = PenjualanDetail::with('produk')
            ->where('id_penjualan', $id)
            ->get();

        $data = array();
        $total = 0;
        $total_item = 0;

        foreach ($detail as $item) {
            $row = array();
            $row['sku'] = '<span class="label label-success">' . $item->produk['sku'] . '</span';
            $row['name'] = $item->produk['name'];
            $row['harga_jual']  = 'Rp. ' . format_uang($item->harga_jual);
            $row['jumlah']      = '<input type="number" class="form-control input-sm quantity" data-id="' . $item->id_penjualan_detail . '" value="' . $item->jumlah . '">';
            $row['diskon']      = $item->diskon . '%';
            $row['subtotal']    = 'Rp. ' . format_uang($item->subtotal);
            $row['aksi']        = '<div class="btn-group">
                                    <button onclick="deleteData(`' . route('transaksi.destroy', $item->id_penjualan_detail) . '`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                                </div>';
            $data[] = $row;

            $total += $item->harga_jual * $item->jumlah - (($item->diskon * $item->jumlah) / 100 * $item->harga_jual);;
            $total_item += $item->jumlah;
        }
        $data[] = [
            'sku' => '
                <div class="total hide">' . $total . '</div>
                <div class="total_item hide">' . $total_item . '</div>',
            'name' => '',
            'harga_jual'  => '',
            'jumlah'      => '',
            'diskon'      => '',
            'subtotal'    => '',
            'aksi'        => '',
        ];

        return datatables()
            ->of($data)
            ->addIndexColumn()
            ->rawColumns(['aksi', 'sku', 'jumlah'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $produk = Produk::where('id', $request->id)->first();
        if (!$produk) {
            return response()->json('Data gagal disimpan', 400);
        }

        $detail = new PenjualanDetail();
        $detail->id_penjualan = $request->id_penjualan;
        $detail->id_produk = $produk->id;
        $detail->harga_jual = $produk->harga_jual;
        $detail->jumlah = 1;
        $detail->diskon = $produk->diskon;
        $detail->subtotal = $produk->harga_jual - ($produk->diskon / 100 * $produk->harga_jual);;
        $detail->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    public function update(Request $request, $id)
    {
        if ($request->biaya_resep) {
            $detail = Penjualan::find($id);
            $detail->biaya_resep = $request->biaya_resep;
            $detail->update();
        }

        $detail = PenjualanDetail::find($id);
        $detail->jumlah = $request->jumlah;
        $detail->subtotal = $detail->harga_jual * $request->jumlah - (($detail->diskon * $request->jumlah) / 100 * $detail->harga_jual);;
        $detail->update();
    }

    public function destroy($id)
    {
        $detail = PenjualanDetail::find($id);
        $detail->delete();

        return response(null, 204);
    }

    public function loadForm($diskon = 0, $total = 0, $diterima = 0, $resep = 0)
    {
        $bayar   = ($total + $resep) - ($diskon / 100 * $total);
        $kembali = ($diterima != 0) ? $diterima - $bayar : 0;
        $data    = [
            'totalrp' => format_uang($total),
            'bayar' => $bayar,
            'bayarrp' => format_uang($bayar),
            'terbilang' => ucwords(terbilang($bayar) . ' Rupiah'),
            'kembalirp' => format_uang($kembali),
            'resep' => format_uang($resep),
            'kembali_terbilang' => ucwords(terbilang($kembali) . ' Rupiah'),
        ];

        return response()->json($data);
    }
}
