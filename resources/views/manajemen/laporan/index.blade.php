@extends('layouts.base')
@section('content')
<link href="assets/admin/plugins/dataTables/css/bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

<div class="card mb-5 mb-xxl-8">
    <div class="card-body pt-9 pb-0">
        @include('partials.alert')
        <table id="table" class="table table-row-bordered gy-5">
            <thead>
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th>No</th>
                    <th>No. Laporan</th>
                    <th>Detail Pelapor</th>
                    <th>Kategori Pelapor</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<script src="assets/admin/plugins/dataTables/js/jquery.dataTables.min.js"></script>
<script src="assets/admin/plugins/dataTables/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script>
    $(function () {
    var t = $("#table").DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('laporan.ajaxDatatable') }}',
        columns: [
            { data: "rownum", searchable: false, width: "10%", className: 'text-center' },
            { data: "no_laporan", name: "laporan.no_laporan" },
            { data: "laporan_warga", name: "laporan_warga" },
            { data: "kategori", name: "laporan.kategori" },
            { data: "status", name: "status" },
            { data: "action", orderable: false, searchable: false, className: "text-center", width: "25%" },
        ],
        "drawCallback": function(settings) {
            $('[data-toggle="tooltip"]').tooltip()
            $('.popup-cover').magnificPopup({
                type: 'image',
                gallery:{
                enabled:true
                }
            });
        }, 
        pageLength: 10,
    });
});
</script>
@include('partials.datatable-delete', ['text' => __('laporan'), 'table' => '#table'])
@endsection