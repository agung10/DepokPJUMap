<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\PertanyaanRequest;
use App\Repositories\PertanyaanRepository;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function __construct(PertanyaanRepository $pertanyaanRepo)
    {
        $this->pertanyaanRepo = $pertanyaanRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manajemen.pertanyaan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manajemen.pertanyaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PertanyaanRequest $request)
    {
        $request['view'] = $request->jawaban ? true : false;
        $store = $this->pertanyaanRepo->store($request->all());

        return redirect()->route('pertanyaan.index')->with(Helper::alertStatus('store', $store));
    }

    public function sendMessage(Request $request) 
    {
        $storeData = $request->except('proengsoft_jsvalidation');
        $storeData['view'] = 0;

        $this->pertanyaanRepo->create($storeData);
        return redirect()->route('beranda')->with('successSendMessage', 'Berhasil mengirimkan pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->pertanyaanRepo->show($id);
        
        return view('manajemen.pertanyaan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->pertanyaanRepo->show($id);

        return view('manajemen.pertanyaan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PertanyaanRequest $request, $id)
    {
        $request['view'] = $request->jawaban ? true : false;
        $update = $this->pertanyaanRepo->update($request->all(), $id);

        return redirect()->route('pertanyaan.index')->with(Helper::alertStatus('update', $update));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->pertanyaanRepo->delete($id);
    }

    public function ajaxDatatable(Request $request)
    {
        return $this->pertanyaanRepo->ajaxDatatable($request);
    }
}
