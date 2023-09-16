@extends('layouts.master')

@section('title')
Riwayat Stock {{$produk->name}} <br> {{ tanggal_indonesia($tanggalAwal, false) }} s/d {{ tanggal_indonesia($tanggalAkhir, false) }}
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
                        <th>Tanggal</th>
                        <th>Kredit</th>
                        <th>Debet</th>
                    </thead>
                    <tbody>
                        @foreach($dataPenjualan['history'] ??[] as $index => $data)
                        <tr>
                            <td>{{$index++}}</td>
                            <td>{{$data->tanggal}}</td>
                            <td>{{$data->keluar ?? 0}}</td>
                            <td>{{$data->masuk ?? 0}}</td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@includeIf('laporan.obat.history.form')
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
