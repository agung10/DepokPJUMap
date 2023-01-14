<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Http\Controllers\Controller;
use App\Repositories\KelurahanRepository;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function __construct(KelurahanRepository $kelurahanRepo)
    {

        $this->kelurahanRepo = $kelurahanRepo;
    }

    public function index()
    {
        return view('manajemen.master_alamat.kelurahan.index');
    }

    public function ajaxDatatable(Request $request)
    {
        return $this->kelurahanRepo->ajaxDatatable($request);
    }
}
