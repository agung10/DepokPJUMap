<?php

namespace App\Http\Controllers;

use App\Models\ManajemenWebsite\Pertanyaan;
use App\Repositories\{KecamatanRepository, KelurahanRepository, LaporanRepository};
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function __construct(Pertanyaan $pertanyaan, KecamatanRepository $kecamatanRepository, KelurahanRepository $kelurahanRepository, LaporanRepository $laporanRepository)
    {
        $this->pertanyaan = $pertanyaan;
        $this->kecamatanRepo = $kecamatanRepository;
        $this->kelurahanRepo = $kelurahanRepository;
        $this->laporanRepo = $laporanRepository;
    }

    public function index() {
        $pertanyaan = \DB::table('pertanyaan')->where('view', true)->limit(7)->get();
        $seluruh_kecamatan = $this->kecamatanRepo->makeDropdown('nama_kecamatan');
        $seluruh_kelurahan = $this->kelurahanRepo->makeDropdown('nama_kelurahan');
        $laporan = $this->laporanRepo->whereNotNull('status')->get();
        $kategoriOpt = $this->laporanRepo->kategoriOpt();

        $laporanData = $this->laporanRepo->get();
        
        return view('beranda', compact('pertanyaan', 'seluruh_kecamatan', 'seluruh_kelurahan', 'laporan', 'kategoriOpt', 'laporanData'));
    }

    public function dashboard() 
    {
        return view('manajemen.dashboard.index');
    }
}
