<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Models\Satuan;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all()->pluck('name', 'id');
        $satuan = Satuan::all()->pluck('name', 'id');

        return view('produk.index', compact('kategori', 'satuan'));
    }

    public function data()
    {
        $produk = Produk::leftJoin('kategori', 'kategori.id', 'produk.id_kategori')
            ->select('produk.*', 'kategori.name as category_name')
            // ->orderBy('sku', 'asc')
            ->get();

        return datatables()
            ->of($produk)
            ->addIndexColumn()
            ->addColumn('select_all', function ($produk) {
                return '
                    <input type="checkbox" name="id[]" value="' . $produk->id . '">
                ';
            })
            ->addColumn('sku', function ($produk) {
                return '<span class="label label-success">' . $produk->sku . '</span>';
            })
            ->addColumn('harga_beli', function ($produk) {
                return format_uang($produk->harga_beli);
            })
            ->addColumn('harga_jual', function ($produk) {
                return format_uang($produk->harga_jual);
            })
            ->addColumn('stok', function ($produk) {
                return format_uang($produk->stok);
            })
            ->addColumn('aksi', function ($produk) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="kartuStock(`' . route('produk.kartu-stok', $produk->id) . '`)" class="btn btn-xs btn-primary btn-flat">Kartu Stok</button>
                    <button type="button" onclick="editForm(`' . route('produk.update', $produk->id) . '`)" class="btn btn-xs btn-info btn-flat">Edit</button>
                    <button type="button" onclick="deleteData(`' . route('produk.destroy', $produk->id) . '`)" class="btn btn-xs btn-danger btn-flat">Delete</button>
                </div>
                ';
            })
            ->rawColumns(['aksi', 'sku', 'select_all'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->id_kategori) {
            $category = Kategori::where('id',  $request->id_kategori)->first();
            $productCategoryCount = Produk::where('id_kategori',  $request->id_kategori)->count();
        } else {
            $productCategoryCount = Produk::latest()->first() ?? new Produk();
        }

        $request['sku'] = mb_substr($category->name ?? '', 0, 4) . preg_replace('/\b(\w)\w*\W*/', '\1', strtoupper($request->name) ?? '') . ($productCategoryCount ?? $productCategoryCount->id);
        $produk = Produk::create($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        $historyStockPenjualan = DB::table('produk')
            ->select(
                DB::raw('DATE(penjualan_detail.created_at) as tanggal'),
                DB::raw('sum(penjualan_detail.jumlah) as keluar')
            )
            ->join('penjualan_detail', 'penjualan_detail.id_produk', '=', 'produk.id')
            ->where('produk.id', $produk->id)
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

        $output = $produk->toArray();
        $output["history"] = $history;


        return response()->json($output);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        return response(null, 204);
    }

    public function deleteSelected(Request $request)
    {
        foreach ($request->id as $id) {
            $produk = Produk::find($id);
            $produk->delete();
        }

        return response(null, 204);
    }

    public function cetakBarcode(Request $request)
    {
        $dataproduk = array();
        foreach ($request->id as $id) {
            $produk = Produk::find($id);
            $dataproduk[] = $produk;
        }

        $no  = 1;
        $pdf = PDF::loadView('produk.barcode', compact('dataproduk', 'no'));
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('produk.pdf');
    }
}
