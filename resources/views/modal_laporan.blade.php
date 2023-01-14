<div class="modal fade" id="modalLaporan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background: #4B56D2; color: white;">
                <h5 class="modal-title text-center" id="exampleModalLabel">FORM LAPORAN</h5>
                <button type="button" class="btn-close batal" aria-label="Close"></button>
            </div>
            <form id="send-laporan" action="" method="POST" role="form" class="contact" enctype="multipart/form-data">
                @csrf
                <div class="modal-body php-email-form">
                    <div class="row">
                        <div class="col-12">
                            <h5 style="color: #4B56D2;">DATA PELAPOR</h5>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-5 col-12">
                                    <div class="col form-group">
                                        <label>Nama Pelapor</label>
                                        <input type="text" class="form-control" name="nama_pelapor" id="nama_pelapor"
                                            placeholder="Masukkan nama pelapor" required>
                                        <div class="invalid-feedback err-nama_pelapor" style="display: none;">
                                            Nama pelapor wajib diisi
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="col form-group">
                                        <label>Email Pelapor</label>
                                        <input type="email" class="form-control" name="email_pelapor" id="email_pelapor"
                                            placeholder="Masukkan email pelapor" required>
                                        <div class="invalid-feedback err-email_pelapor" style="display: none;">
                                            Email pelapor wajib diisi
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="col form-group">
                                        <label>No HP</label>
                                        <input type="text" class="form-control" name="no_hp" id="no_hp"
                                            placeholder="Masukkan nomor hp yang valid" required>
                                        <div class="invalid-feedback err-no_hp" style="display: none;">
                                            Nomor hp wajib diisi
                                        </div>
                                    </div>
                                </div>
                                <div class="image-replace"></div>
                                <div class="col-12">
                                    <div class="col form-group">
                                        <label>Gambar Pendukung</label>
                                        <input type="file" class="form-control" name="gambar" id="gambar"
                                            accept="image/*" required>
                                        <div class="invalid-feedback err-gambar" style="display: none;">
                                            Gambar pendukung wajib diisi
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" rows="2"
                                            placeholder="Masukkan deskripsi laporan..." required></textarea>
                                        <div class="invalid-feedback err-deskripsi" style="display: none;">
                                            Deskripsi laporan wajib diisi
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col form-group">
                                        <label>Bukti Sebagai Warga Sekitar</label>
                                        <input type="file" class="form-control" name="bukti_warga" id="bukti_warga"
                                            required>
                                        <div class="invalid-feedback err-bukti_warga" style="display: none;">
                                            Bukti sebagai warga sekitar wajib diisi
                                        </div>
                                        <span style="color: #dc3545; font-size: 15px;">Note: Kirimkan bukti yang
                                            mendukung bahwa pelapor merupakan warga setempat</span>
                                    </div>
                                </div>
                                <div class="col-md-8 col-12">
                                    <div class="form-group" id="data-kategori">
                                        <label>Kategori Pengajuan</label>
                                        <select class="form-control" name="kategori" id="kategori">
                                            <option></option>
                                            @foreach($kategoriOpt as $key => $val)
                                            <option value="{{ $key }}"> {{ $val }} </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback err-kategori" style="display: none;">
                                            Kategori Pengajuan wajib dipilih
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 style="color: #4B56D2;">DATA ALAMAT</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group" id="data-kecamatan">
                                        <label>Kecamatan</label>
                                        <select class="form-control" name="kecamatan_id" id="kecamatan">
                                            <option></option>
                                            @foreach($seluruh_kecamatan as $kecamatan_id => $kecamatan)
                                            <option value="{{ $kecamatan_id }}"> {{ $kecamatan }} </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback err-kecamatan" style="display: none;">
                                            Alamat Kecamatan wajib dipilih
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group" id="data-kelurahan">
                                        <label>Kelurahan</label>
                                        <select class="form-control" name="kelurahan_id" id="kelurahan">
                                            <option></option>
                                        </select>
                                        <div class="invalid-feedback err-kelurahan" style="display: none;">
                                            Alamat Kelurahan wajib dipilih
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Detail Alamat</label>
                                        <textarea class="form-control" name="detail_alamat" rows="2"
                                            placeholder="Masukkan detail alamat..." required></textarea>
                                        <div class="invalid-feedback err-detail_alamat" style="display: none;">
                                            Detail alamat wajib diisi
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-2">
                                    <div id="map_lapor"></div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Latitude</label>
                                        <input type="text" class="form-control" name="latitude" id="latitude"
                                            style="background: #eee;" readonly required>
                                        <div class="invalid-feedback err-latitude" style="display: none;">
                                            Latitude wajib diisi
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Longitude</label>
                                        <input type="text" class="form-control" name="longitude" id="longitude"
                                            style="background: #eee;" readonly required>
                                        <div class="invalid-feedback err-longitude" style="display: none;">
                                            Longitude wajib diisi
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary batal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-purple">Kirim Laporan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('laporan-script')
{{-- Leaflet --}}
@include('leaflet-script-lapor')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/plugins/jquery.mask/jquery.mask.min.js') }}"></script>
<script>
    $(document).ready(function() {
        // Select2
        $('select[name=kecamatan_id]').select2({dropdownParent: $('#data-kecamatan'), width: '100%', placeholder: '-- Pilih Kecamatan --'})
        $('select[name=kelurahan_id]').select2({dropdownParent: $('#data-kelurahan'), width: '100%', placeholder: '-- Pilih Kelurahan --'})
        $('select[name=kategori]').select2({dropdownParent: $('#data-kategori'), width: '100%', placeholder: '-- Pilih Kategori Pengajuan --'})

        let selectKelurahan = $('select[name=kelurahan_id]');
        selectKelurahan.prop("disabled", true)
        
        $('body').on('change', 'select[name=kecamatan_id]', async function(){
            let kecamatanID = $(this).val();
            let kelurahanOption = '<option></option>';
            let url = @json(route('kelurahanByKecamatan'));
                    url += `?kecamatan_id=${ encodeURIComponent(kecamatanID) }`

            selectKelurahan.html('');
            selectKelurahan.prop("disabled", true)

            const cities = await fetch(url).then(res => res.json()).catch((err) => {
                selectKelurahan.prop("disabled", false);
                Swal.fire({
                    title: 'Terjadi kesalahan dalam menghubungi server, silahkan coba lagi...',
                    icon: 'warning'
                })
            })

            for(const kelurahan of cities) {
                kelurahanOption += `<option value="${kelurahan.kelurahan_id}">${kelurahan.nama_kelurahan}</option>`;
            }

            selectKelurahan.html(kelurahanOption);
            selectKelurahan.select2({dropdownParent: $('#data-kelurahan'), width: '100%', placeholder: '-- Pilih Kelurahan --'});
            selectKelurahan.prop("disabled", false);
        })

        // Change Image
        document.querySelector('input[name=gambar]').addEventListener('change',(e) => {
            const imageReplace = document.querySelector('.image-replace')

            const file = e.target.files[0]
            let reader = new FileReader()
            
            reader.onload = () => {
                imageReplace.style.backgroundImage = `url(${reader.result})`;
                imageReplace.classList.add("image-lapor-css");
            }

            reader.readAsDataURL(file)
        })

        // Proses Validations
        $('button.btn-purple').click(async function(e){
            e.preventDefault();

            var _this = $(this);

            const nama_pelapor = $('input[name=nama_pelapor]').val();
            const email_pelapor = $('input[name=email_pelapor]').val();
            const no_hp = $('input[name=no_hp]').val();
            const gambar = $('input[name=gambar]').val();
            const deskripsi = $('textarea[name=deskripsi]').val();
            const bukti_warga = $('input[name=bukti_warga]').val();
            const kecamatan_id = $('select[name=kecamatan_id]').val();
            const kelurahan_id = $('select[name=kelurahan_id]').val();
            const kategori = $('select[name=kategori]').val();
            const detail_alamat = $('textarea[name=detail_alamat]').val();
            const latitude = $('input[name=latitude]').val();
            const longitude = $('input[name=longitude]').val();

            let validation = true;
            if (validation) {
                ((nama_pelapor == "") ? ($('.err-nama_pelapor').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-nama_pelapor').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
                ((email_pelapor == "") ? ($('.err-email_pelapor').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-email_pelapor').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
                ((no_hp == "") ? ($('.err-no_hp').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-no_hp').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
                ((gambar == "") ? ($('.err-gambar').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-gambar').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
                ((deskripsi == "") ? ($('.err-deskripsi').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-deskripsi').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
                ((bukti_warga == "") ? ($('.err-bukti_warga').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-bukti_warga').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
                ((kecamatan_id == "") ? ($('.err-kecamatan').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-kecamatan').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
                ((kelurahan_id == "") ? ($('.err-kelurahan').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-kelurahan').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
                ((kategori == "") ? ($('.err-kategori').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-kategori').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
                ((detail_alamat == "") ? ($('.err-detail_alamat').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-detail_alamat').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
                ((latitude == "") ? ($('.err-latitude').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-latitude').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
                ((longitude == "") ? ($('.err-longitude').css('display', 'block').parents('div.form-group').removeClass('success-validate').addClass('error-validate')) : ($('.err-longitude').css('display', 'none').parents('div.form-group').removeClass('error-validate').addClass('success-validate')));
            }
            
            if (nama_pelapor == '' || email_pelapor == '' || no_hp == '' || gambar == '' || deskripsi == '' || bukti_warga == '' || kecamatan_id == '' || kelurahan_id == '' || kategori == '' || detail_alamat == '' || latitude == '' || longitude == '') {
                validation;

                Swal.fire({
                    text: "Wajib memasukkan semua data!",
                    icon: "error",
                    buttonsStyling: false,
                    customClass: {
                        confirmButton: "btn btn-danger"
                    }
                });
            } else {
                validation;    

                var formData = new FormData(document.querySelector('#send-laporan'));

                $.ajax({
                    url: '{{ route("sendLaporan") }}',
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    dataType   : 'JSON',
                    data: formData,
                    beforeSend: function(){
                        _this.attr('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>&nbsp;<span class="sr-only">Loading...</span>');

                        $('#modalLaporan').modal('hide');
                        $('#process-loading').css({'display':'block'}).addClass('addBackground');
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            setTimeout(() => {
                                $('#modalSuccessLaporan').modal('show');

                                $('#process-loading').css({'display':'none'}).removeClass('addBackground');

                                _this.attr('disabled', false).html('Kirim Laporan');
                                resetValue();
                            }, 5000);
                        }
                    },
                    error: function(err) {
                        Swal.fire({
                            text: "Terjadi kesalahan data!",
                            icon: "error",
                            customClass: {
                                confirmButton: "btn btn-danger",
                            }
                        });
                    }
                });
            }
        });

        // Button Close
        $('.batal').click(function(){
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Karena data yang telah anda input akan terhapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4B56D2',
                cancelButtonColor: '#5c636a',
                confirmButtonText: 'Ya, saya yakin',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    resetValue();
                }
            })
        });

        $('input[name=no_hp]').mask('+62 000-0000-00000');

        function resetValue() {
            $('input[name=nama_pelapor]').val('');
            $('input[name=email_pelapor]').val('');
            $('input[name=no_hp]').val('');
            $('input[name=gambar]').val('');
            $('textarea[name=deskripsi]').val('');
            $('input[name=bukti_warga]').val('');
            $('select[name=kecamatan_id]').val('').trigger('change');
            $('select[name=kelurahan_id]').val('').trigger('change'); 
            $('select[name=kategori]').val('').trigger('change'); 
            $('textarea[name=detail_alamat]').val('');
            $('input[name=latitude]').val('');
            $('input[name=longitude]').val('');
    
            $('#modalLaporan').modal('hide');
            $('.image-replace').removeClass('image-lapor-css').css('background-image', '');
            $('div.form-group').removeClass("success-validate error-validate");
            $('div.invalid-feedback').css('display', 'none');
            
            $('input.glass').val('');
            $('.marker-search-icon').addClass('d-none');
            $('.marker-search-shadow').addClass('d-none');
            map_lapor.removeLayer(marker_laporan);
    
            map_lapor.setView(new L.LatLng(-6.385589, 106.830711), 12);
        }
    });

</script>
@endpush