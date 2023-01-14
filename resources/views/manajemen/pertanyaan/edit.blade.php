@extends('layouts.base')
@section('content')
<div class="card mb-5 mb-xxl-8">
    <div class="pb-10">
        <div class="card-body pt-9 pb-0">
            <h1 class="anchor fw-bold mb-5">
                Tambah Pertanyaan
            </h1>
            <div class="p-5">
                <form id="form-edit-pertanyaan" action="{{ route('pertanyaan.update', $data->pertanyaan_id) }}" method="post" class="form-cms">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="row">
                        @include('partials.form-input', [
                        'title' => __('Nama Lengkap'),
                        'type' => 'text',
                        'name' => 'nama_lengkap',
                        'required' => true,
                        'value' => $data->nama_lengkap,
                        'placeholder' => true,
                        'gridClass' => 'col-lg-12'
                        ])
                        @include('partials.form-textarea', [
                        'title' => __('Pertanyaan'),
                        'name' => 'pertanyaan',
                        'required' => true,
                        'value' => $data->pertanyaan,
                        'placeholder' => true,
                        'multiColumn' => true,
                        'rows' => 5
                        ])
                        @include('partials.form-textarea', [
                        'title' => __('Jawaban'),
                        'name' => 'jawaban',
                        'required' => true,
                        'value' => $data->jawaban,
                        'placeholder' => true,
                        'multiColumn' => true,
                        'rows' => 5
                        ])
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
                </form>
            </div>
        </div>
    </div>
</div>
{!! JsValidator::formRequest('App\Http\Requests\PertanyaanRequest', '#form-edit-pertanyaan') !!}

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
            $('.error-help-block').css('color', '#dc3545');
            $(this).valid() && disableButton();
        });
        function disableButton(){
            $('.btn-submit').attr('data-kt-indicator', 'on');
            $('.btn-submit').css('cursor', 'not-allowed');
        }
    })
</script>
@endsection