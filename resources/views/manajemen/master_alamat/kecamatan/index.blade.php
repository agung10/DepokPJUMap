@extends('layouts.base') 
@section('content')
<link href="assets/admin/plugins/dataTables/css/bootstrap5.min.css" rel="stylesheet" type="text/css" />
<div class="card mb-5 mb-xxl-8">
    <div class="card-body pt-9 pb-0">
        @include('partials.alert')
        <table id="table" class="table table-row-bordered gy-5">
            <thead>
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th>No</th>
                    <th>Nama Kecamatan</th>
                    <th>Dibuat pada</th>
                    <th>Diubah pada</th>
                    {{-- <th>Aksi</th> --}}
                </tr>
            </thead>
        </table>
    </div>
</div>
<script src="assets/admin/plugins/dataTables/js/jquery.dataTables.min.js"></script>
<script src="assets/admin/plugins/dataTables/js/dataTables.bootstrap5.min.js"></script>
<script>
$(function () {
    var t = $("#table").DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('kecamatan.ajaxDatatable') }}',
        columns: [
            { data: "rownum", searchable: false, width: "10%", className: 'text-center' },
            { data: "nama_kecamatan", name: "kecamatan.nama_kecamatan" },
            { data: "created_at", name: "kecamatan.created_at", className: 'text-center' },
            { data: "updated_at", name: "kecamatan.updated_at", className: 'text-center' },
            // { data: "action", orderable: false, searchable: false, className: "text-center", width: "25%" },
        ],
        pageLength: 10,
    });
});
</script>
@endsection