<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\PembelianDetail;
use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PembelianDetailController extends Controller
{
    public function index()
    {
        $id_pembelian = session('id_pembelian');
        $produk = Produk::orderBy('name')->get();
        $supplier = Supplier::find(session('id_supplier'));
        $diskon = Pembelian::find($id_pembelian)->diskon ?? 0;

        if (!$supplier) {
            abort(404);
        }

        return view('pembelian_detail.index', compact('id_pembelian', 'produk', 'supplier', 'diskon'));
    }

    public function data($id)
    {
        $detail = PembelianDetail::with('produk')
            ->where('id_pembelian', $id)
            ->get();
        $data = array();
        $total = 0;
        $total_item = 0;

        foreach ($detail as $item) {
            $row = array();
            $row['sku'] = '<span class="label label-success">' . $item->produk['sku'] . '</span';
            $row['name'] = $item->produk['name'];
            $row['batch'] =       '<input type="text" class="form-control input-sm batch" data-id="' . $item->id_pembelian_detail . '"  value="' . $item->batch . '">';
            $row['jumlah']      = '<input type="number" class="form-control input-sm quantity" data-id="' . $item->id_pembelian_detail . '" value="' . $item->jumlah . '">';
            $row['expired_date']      = '<input type="date" class="form-control input-sm expired_date" data-id="' . $item->id_pembelian_detail . '" value="' . date("m/d/Y",strtotime($item->expired_date)) . '">';
            $row['harga_beli']  = 'Rp. ' . format_uang($item->harga_beli);
            $row['subtotal']    = 'Rp. ' . format_uang($item->subtotal);
            $row['aksi']        = '<div class="btn-group">
                                    <button onclick="deleteData(`' . route('pembelian_detail.destroy', $item->id_pembelian_detail) . '`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                                </div>';
            $data[] = $row;

            $total += $item->harga_beli * $item->jumlah;
            $total_item += $item->jumlah;
        }
        $data[] = [
            'sku' => '
                <div class="total hide">' . $total . '</div>
                <div class="total_item hide">' . $total_item . '</div>',
            'name' => '',
            'harga_beli'  => '',
            'batch'      => '',
            'jumlah'      => '',
            'expired_date'      => '',
            'subtotal'    => '',
            'aksi'        => '',
        ];

        return datatables()
            ->of($data)
            ->addIndexColumn()
            ->rawColumns(['aksi', 'sku', 'jumlah', 'batch', 'expired_date'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $produk = Produk::where('id', $request->id)->first();
        if (!$produk) {
            return response()->json('Data gagal disimpan', 400);
        }

        $detail = new PembelianDetail();
        $detail->id_pembelian = $request->id_pembelian;
        $detail->id_produk = $produk->id;
        $detail->harga_beli = $produk->harga_beli;
        $detail->jumlah = 1;
        $detail->subtotal = $produk->harga_beli;
        $detail->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    public function update(Request $request, $id)
    {
        $detail = PembelianDetail::find($id);
        if ($request->jumlah) {
            $detail->jumlah = $request->jumlah;
        }
        if ($request->batch) {
            $detail->batch = $request->batch;
        }
        if ($request->expired_date) {
            $detail->expired_date = $request->expired_date;
        }
        if ($detail->harga_beli * $request->jumlah) {
            $detail->subtotal = $detail->harga_beli * $request->jumlah;
        }
        $detail->update();
    }

    public function destroy($id)
    {
        $detail = PembelianDetail::find($id);
        $detail->delete();

        return response(null, 204);
    }

    public function loadForm($diskon, $total)
    {
        $bayar = $total - ($diskon / 100 * $total);
        $data  = [
            'totalrp' => format_uang($total),
            'bayar' => $bayar,
            'bayarrp' => format_uang($bayar),
            'terbilang' => ucwords(terbilang($bayar) . ' Rupiah')
        ];

        return response()->json($data);
    }
}
