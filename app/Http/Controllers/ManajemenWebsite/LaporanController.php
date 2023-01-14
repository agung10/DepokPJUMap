<?php

namespace App\Http\Controllers\ManajemenWebsite;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Repositories\LaporanRepository;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function __construct(LaporanRepository $laporanRepository)
    {
        $this->laporanRepo = $laporanRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manajemen.laporan.index');
    }

    public function sendLaporan(Request $request) 
    {
        $input = $request->except('proengsoft_jsvalidation');
        $input['no_laporan'] = 'LAP/' . $request->kecamatan_id . '/' . $request->kelurahan_id . '/' . date('Y');

        \DB::beginTransaction();
        try {
            if ($request->hasFile('gambar')) {
                $input['gambar'] = 'gambar' . rand() . '.' . $request->gambar->getClientOriginalExtension();
                $request->gambar->move(public_path('uploaded_files/laporan'), $input['gambar']);
            }
            if ($request->hasFile('bukti_warga')) {
                $input['bukti_warga'] = 'bukti_warga' . rand() . '.' . $request->bukti_warga->getClientOriginalExtension();
                $request->bukti_warga->move(public_path('uploaded_files/laporan'), $input['bukti_warga']);
            }

            $this->laporanRepo->create($input);
            \DB::commit();

            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            \DB::rollback();
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->laporanRepo->show($id);

        $statusPengajuan = $this->laporanRepo->statusPengajuan($data);
        return view('manajemen.laporan.show', compact('data', 'statusPengajuan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->laporanRepo->show($id);
        $statusOpt = $this->laporanRepo->statusOpt();

        return view('manajemen.laporan.edit', compact('data', 'statusOpt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['keterangan'] = $request->keterangan ? $request->keterangan : 'Pengajuan Ditolak';
        $update = $this->laporanRepo->update($request->all(), $id);
        
        return redirect()->route('laporan.index')->with(Helper::alertStatus('update', $update));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->laporanRepo->show($id);
        if ($data->gambar) {
            \File::delete(public_path('uploaded_files/laporan/' . $data->gambar));
        }
        if ($data->bukti_warga) {
            \File::delete(public_path('uploaded_files/laporan/' . $data->bukti_warga));
        }

        return $this->laporanRepo->delete($id);
    }

    public function ajaxDatatable(Request $request)
    {
        return $this->laporanRepo->ajaxDatatable($request);
    }

    public function kelurahanByKecamatan(Request $request) 
    {
        $kelurahan = \DB::table('kelurahan')->select('kelurahan_id', 'nama_kelurahan')->where('kecamatan_id', $request->kecamatan_id)->orderBy('nama_kelurahan', 'ASC')->get();
        return response()->json($kelurahan);
    }
}
