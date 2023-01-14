@extends('layouts.base')
@section('content')
<div class="card mb-5 mb-xxl-8">
    <div class="pb-10">
        <div class="card-body pt-9 pb-0">
            <h1 class="anchor fw-bold mb-5">
                Detail Pertanyaan
            </h1>
            <div class="p-5">
                <div class="row">
                    @include('partials.form-input', [
                    'title' => __('Nama Lengkap'),
                    'type' => 'text',
                    'name' => 'nama_lengkap',
                    'value' => $data->nama_lengkap,
                    'placeholder' => true,
                    'attribute' => ['disabled'],
                    'gridClass' => 'col-lg-12'
                    ])
                    @include('partials.form-textarea', [
                    'title' => __('Pertanyaan'),
                    'name' => 'pertanyaan',
                    'value' => $data->pertanyaan,
                    'placeholder' => true,
                    'attribute' => ['disabled'],
                    'multiColumn' => true,
                    'rows' => 5
                    ])
                    @include('partials.form-textarea', [
                    'title' => __('Jawaban'),
                    'name' => 'jawaban',
                    'value' => $data->jawaban,
                    'placeholder' => true,
                    'attribute' => ['disabled'],
                    'multiColumn' => true,
                    'rows' => 5
                    ])
                    @include('partials.form-input', [
                    'title' => __('Status'),
                    'type' => 'text',
                    'name' => 'status',
                    'value' => $data->view ? 'Tampil' : 'Sembunyi',
                    'placeholder' => true,
                    'attribute' => ['disabled'],
                    'gridClass' => 'col-lg-4'
                    ])
                </div>
                <div class="mt-10">
                    <a href="javascript:;" onclick="history.back()" class="btn btn-secondary btn-kembali">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection