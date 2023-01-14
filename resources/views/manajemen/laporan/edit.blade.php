@extends('layouts.base')
@section('content')
@push('scripts')
{{-- Leaflet --}}
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endpush
<div class="card mb-5 mb-xxl-8">
    <div class="pb-10">
        <form id="form-update-laporan" action="{{ route('laporan.update', $data->laporan_id) }}" method="post" class="form-cms" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
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

                            <h3 class="mt-5 text-primary mb-0">Ubah Status Pengajuan</h3>
                            <div class="mx-0"> <hr>
                                <div class="col-12">
                                    <div class="row">
                                        @include('partials.form-select', [
                                        'title'       => __('Status'),
                                        'name'        => 'status',
                                        'data'        => $statusOpt,
                                        'selected'    => $data->status,
                                        'placeholder' => true,
                                        'gridClass'   => 'col-lg-5'
                                        ])
            
                                        <div class="mb-5 col-lg-7 {{ $data->status == 3 ? '' : 'd-none'}}">
                                            <label class="form-label"> Keterangan </label>
                                            <textarea class="form-control form-control-solid-bg" name="keterangan" rows="3">{{ $data->keterangan }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <div class="kt-form__actions">
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary btn-submit">
                                <span class="indicator-label">
                                Ubah
                                </span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">
                                Mohon Tunggu...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                                <!--end::Indicator progress-->
                            </button>
                            <a href="javascript:;" onclick="history.back()" class="btn btn-secondary btn-kembali">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(function() {
        $('body').on('change', 'select[name=status]', function() {
            if ($('select[name=status] option').filter(':selected').val() == 3) {
                $('textarea[name=keterangan]').parent().removeClass('d-none');
            } else {
                $('textarea[name=keterangan]').parent().addClass('d-none')
            }
        });

        $('form.form-cms').on('submit', function() {
            $(this).valid() && disableButton();
        });
        function disableButton(){
            $('.btn-submit').attr('data-kt-indicator', 'on');
            $('.btn-submit').css('cursor', 'not-allowed');
        }
    })

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
        className: 'blinking'
	});

	const marker = L.marker(['{{ $data->latitude }}', '{{ $data->longitude }}'], {icon: customIcon}).addTo(map)
		.bindPopup('<b>Lokasi Usulan</b> <br /> {{ $data->alamat }}').openPopup();

</script>
@endsection