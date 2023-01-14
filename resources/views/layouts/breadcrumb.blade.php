<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Manajemen Website
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="javascript:;" class="text-muted text-hover-primary">
                        @if (\Request::route()->getName() === 'dashboard')
                        Dashboard
                        @elseif (\Request::route()->getName() === 'kecamatan.index' || \Request::route()->getName() === 'kelurahan.index')
                            Master Alamat
                        @elseif (\Request::route()->getName() === 'laporan.index' || \Request::route()->getName() === 'laporan.show' || \Request::route()->getName() === 'laporan.edit')
                            Laporan Pengajuan
                        @elseif (\Request::route()->getName() === 'pertanyaan.index' || \Request::route()->getName() === 'pertanyaan.create' || \Request::route()->getName() === 'pertanyaan.show'|| \Request::route()->getName() === 'pertanyaan.edit')
                            Pertanyaan Terkait
                        @endif
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">
                    @if (\Request::route()->getName() === 'dashboard')
                        Dashboard
                    @elseif (\Request::route()->getName() === 'kecamatan.index')
                        Alamat Kecamatan
                    @elseif (\Request::route()->getName() === 'kelurahan.index')
                        Alamat Kelurahan
                    @elseif (\Request::route()->getName() === 'laporan.index' || \Request::route()->getName() === 'laporan.show' || \Request::route()->getName() === 'laporan.edit')
                        List Laporan
                    @elseif (\Request::route()->getName() === 'pertanyaan.index' || \Request::route()->getName() === 'pertanyaan.create' || \Request::route()->getName() === 'pertanyaan.show' || \Request::route()->getName() === 'pertanyaan.edit')
                        List Pertanyaan
                    @endif
                </li>
                @if (\Request::route()->getName() === 'laporan.show' || \Request::route()->getName() === 'laporan.edit' || \Request::route()->getName() === 'pertanyaan.create'  || \Request::route()->getName() === 'pertanyaan.show' || \Request::route()->getName() === 'pertanyaan.edit')
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">
                    @if (\Request::route()->getName() === 'pertanyaan.create')
                        Tambah
                    @elseif (\Request::route()->getName() === 'laporan.show' || \Request::route()->getName() === 'pertanyaan.show')
                        Detail
                    @elseif (\Request::route()->getName() === 'laporan.edit' || \Request::route()->getName() === 'pertanyaan.edit')
                        Ubah
                    @endif
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
