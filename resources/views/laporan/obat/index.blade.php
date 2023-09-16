@extends('layouts.master')

@section('title')
Laporan Pendapatan {{ tanggal_indonesia($tanggalAwal, false) }} s/d {{ tanggal_indonesia($tanggalAkhir, false) }}
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
@endpush

@section('breadcrumb')
@parent
<li class="active">Laporan</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <button onclick="updatePeriode()" class="btn btn-info btn-xs btn-flat"><i class="fa fa-plus-circle"></i> Ubah Periode</button>
                <!-- <a href="{{ route('laporan.obat.export_pdf', [$tanggalAwal, $tanggalAkhir]) }}" target="_blank" class="btn btn-success btn-xs btn-flat"><i class="fa fa-file-excel-o"></i> Export PDF</a> -->
            </div>
            <div class="box-body table-responsive">
                <table class="table table-stiped table-bordered">
                    <thead>
                        <th width="5%">No</th>
                        <th>Obat</th>
                        <th>Qty Terjual</th>
                        <th>Total Penjualan</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($dataPenjualan as $data)
                        <tr>
                            <td></td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->qty_penjualan}}</td>
                            <td>{{$data->total_penjualan}}</td>
                            <td>
                                <a href="{{ route('produk.kartu-stok', $data->id)}}" class="btn btn-xs btn-info btn-flat">Kartu Stok</a>
                                <!-- <a href="{{ route('produk.laporan', $data->id)}}" class="btn btn-xs btn-danger btn-flat">Laporan</a> -->
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@includeIf('laporan.obat.form')
@endsection

@push('scripts')
<script src="{{ asset('/AdminLTE-2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script>
    let table;

    $(function() {
        table = $('.table').DataTable({
            //     responsive: true,
            //     processing: true,
            //     serverSide: true,
            //     autoWidth: false,
            //     ajax: {
            //         url: '{{ route('laporan.data', [$tanggalAwal, $tanggalAkhir]) }}',
            //     },
            //     columns: [
            //         {data: 'DT_RowIndex', searchable: false, sortable: false},
            //         {data: 'tanggal'},
            //         {data: 'penjualan'},
            //         {data: 'pembelian'},
            //         {data: 'pengeluaran'},
            //         {data: 'pendapatan'},
            //         {data: 'action'}
            //     ],
            //     dom: 'Brt',
            //     bSort: false,
            //     bPaginate: false,
        });

        // $('.datepicker').datepicker({
        //     format: 'yyyy-mm-dd',
        //     autoclose: true
        // });
    });

    function updatePeriode() {
        $('#modal-form').modal('show');
    }
</script>
@endpush
