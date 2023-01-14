@extends('layouts.base')
@section('content')
@push('scripts')
{{-- Leaflet --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endpush
<div class="card mb-5 mb-xxl-8">
    <div class="pb-10">
        <div class="card-body pt-9 pb-0">
            <h1 class="anchor fw-bold mb-5">
                Data Pelapor
            </h1>
            <hr>
            <div class="row">
                <div class="col-12">
                    <div class="row mb-3">
                        <div class="text-center" style="margin-bottom: 20px;">
                            @include('partials.form-file', [
                            'title' => __('Gambar Pendukung'),
                            'name' => 'gambar',
                            'value' => 'laporan/'. $data->gambar,
                            'disabled' => true
                            ])
                        </div>
                        @include('partials.form-input', [
                        'title' => __('Nama Pelapor'),
                        'type' => 'text',
                        'name' => 'nama_pelapor',
                        'attribute' => ['disabled'],
                        'value' => $data->nama_pelapor,
                        'gridClass' => 'col-lg-5'
                        ])
                        @include('partials.form-input', [
                        'title' => __('Email Pelapor'),
                        'type' => 'text',
                        'name' => 'email_pelapor',
                        'attribute' => ['disabled'],
                        'value' => $data->email_pelapor,
                        'gridClass' => 'col-lg-4'
                        ])
                        @include('partials.form-input', [
                        'title' => __('No. HP'),
                        'type' => 'text',
                        'name' => 'no_hp',
                        'attribute' => ['disabled'],
                        'value' => $data->no_hp,
                        'gridClass' => 'col-lg-3'
                        ])
                        @include('partials.form-textarea', [
                        'title' => __('Deskripsi Laporan'),
                        'name' => 'deskripsi',
                        'attribute' => ['disabled'],
                        'value' => $data->deskripsi,
                        'gridClass' => 'col-lg-12'
                        ])
                        <div class="col-lg-3 mb-5">
                            <label class="form-label">Bukti Sebagai Warga Sekitar</label> <br>
                            <a href="{{ asset('uploaded_files/laporan/'.$data->bukti_warga) }}" target="_blank">
                                <span class="btn btn-light-info btn-md">Lihat File Bukti</span>
                            </a>
                        </div>
                        @include('partials.form-input', [
                        'title' => __('Kategori Pengajuan'),
                        'type' => 'text',
                        'name' => 'kategori',
                        'attribute' => ['disabled'],
                        'value' => $data->kategori,
                        'gridClass' => 'col-lg-9'
                        ])
                    </div>
                </div>
            </div>

            <h1 class="anchor fw-bold mb-5">
                Data Alamat
            </h1>
            <hr>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @include('partials.form-input', [
                        'title' => __('Kecamatan'),
                        'type' => 'text',
                        'name' => 'nama_kecamatan',
                        'attribute' => ['disabled'],
                        'value' => $data->Kecamatan->nama_kecamatan,
                        'gridClass' => 'col-lg-6'
                        ])
                        @include('partials.form-input', [
                        'title' => __('Kelurahan'),
                        'type' => 'text',
                        'name' => 'nama_kelurahan',
                        'attribute' => ['disabled'],
                        'value' => $data->kelurahan->nama_kelurahan,
                        'gridClass' => 'col-lg-6'
                        ])
                        @include('partials.form-textarea', [
                        'title' => __('Detail Alamat'),
                        'name' => 'detail_alamat',
                        'attribute' => ['disabled'],
                        'value' => $data->detail_alamat,
                        'gridClass' => 'col-lg-12'
                        ])

                        <div class="col-12 my-5" id="map" style="top: 0; bottom: 0; width: 100%; height: 400px;"></div>

                        @include('partials.form-input', [
                        'title' => __('Latitude'),
                        'type' => 'text',
                        'name' => 'latitude',
                        'attribute' => ['disabled'],
                        'value' => $data->latitude,
                        'gridClass' => 'col-lg-6'
                        ])
                        @include('partials.form-input', [
                        'title' => __('Longitude'),
                        'type' => 'text',
                        'name' => 'longitude',
                        'attribute' => ['disabled'],
                        'value' => $data->longitude,
                        'gridClass' => 'col-lg-6'
                        ])

                        @if ($data->status != null)
                            @include('partials.form-input', [
                            'title' => __('Status Pengajuan'),
                            'type' => 'text',
                            'name' => 'status',
                            'attribute' => ['disabled'],
                            'value' => $statusPengajuan,
                            'gridClass' => 'col-lg-5'
                            ])
                            @include('partials.form-textarea', [
                            'title' => __('Keterangan'),
                            'name' => 'keterangan',
                            'attribute' => ['disabled'],
                            'value' => $data->keterangan,
                            'gridClass' => 'col-lg-7'
                            ])
                        @endif
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <a href="javascript:;" onclick="history.back()" class="btn btn-secondary btn-kembali">Kembali</a>
            </div>
        </div>
    </div>
</div>

<script>
    const map = L.map('map').setView(['{{ $data->latitude }}', '{{ $data->longitude }}'], 16);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

    var customIcon = L.icon({ 
		iconUrl: "{{ asset(('assets/landing/custom/img/marker-icon.png')) }}",
        shadowUrl: "{{ asset(('assets/landing/custom/img/marker-shadow.png')) }}",
		iconSize: [25, 40],
		iconAnchor: [12, 41],
		popupAnchor: [1, -34],
		shadowSize: [41, 41],
	});

	const marker = L.marker(['{{ $data->latitude }}', '{{ $data->longitude }}'], {icon: customIcon}).addTo(map)
		.bindPopup('<b>Lokasi Usulan</b> <br /> {{ $data->alamat }}').openPopup();
</script>
@endsection