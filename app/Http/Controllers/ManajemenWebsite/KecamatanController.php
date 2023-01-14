<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Http\Controllers\Controller;
use App\Repositories\KecamatanRepository;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function __construct(KecamatanRepository $kecamatanRepo)
    {

        $this->kecamatanRepo = $kecamatanRepo;
    }

    public function index()
    {
        return view('manajemen.master_alamat.kecamatan.index');
    }

    public function ajaxDatatable(Request $request)
    {
        return $this->kecamatanRepo->ajaxDatatable($request);
    }
}
