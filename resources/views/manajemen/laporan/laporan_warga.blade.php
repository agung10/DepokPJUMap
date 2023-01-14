@php use App\Helpers\Helper; @endphp

<span style="width: 250px;">
    <div class="d-flex align-items-center">
        <a href="{{ asset('uploaded_files/laporan/'.$row->gambar) }}" class="popup-cover">
            <div class="symbol symbol-40 symbol-sm flex-shrink-0">
                <img class="" src="{{ asset('uploaded_files/laporan/'.$row->gambar) }}" alt="gambar-{{$row->nama_pelapor}}">
            </div>
        </a>
        <div style="margin-left: 10px;">
            <div class="text-dark-75 font-weight-bolder font-size-lg mb-0">
                {{ ucwords($row->nama_pelapor) }} <br>
                ({{ $row->no_hp }})
            </div>
            <a href="javascript:void(0);" class="text-muted font-weight-boldtext-hover-primary">
                {{ $row->email_pelapor }}
            </a>
        </div>
    </div>
</span>