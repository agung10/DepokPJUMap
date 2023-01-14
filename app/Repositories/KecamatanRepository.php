<?php

namespace App\Repositories;

use App\Helpers\Helper;
use App\Models\ManajemenWebsite\Kecamatan;
use App\Repositories\BaseRepository;

class KecamatanRepository extends BaseRepository
{
    public function __construct(Kecamatan $kecamatan)
    {
        $this->model = $kecamatan;
    }

    public function ajaxDatatable($request)
    {
        $collection = $this->model
            ->select([
                $this->addRowNum($request),
                'kecamatan.kecamatan_id',
                'kecamatan.nama_kecamatan',
                'kecamatan.created_at',
                'kecamatan.updated_at',
            ]);

        return \DataTables::of($collection)
            ->editColumn('created_at', function ($row) {
                return Helper::tglIndo($row->created_at);
            })
            ->editColumn('updated_at', function ($row) {
                return Helper::tglIndo($row->updated_at);
            })
            // ->addColumn('action', function ($row) {
            //     return view('partials.buttons.datatable', [
            //         'show' => route('kecamatan.show', $row->kecamatan_id),
            //         'edit' => route('kecamatan.edit', $row->kecamatan_id),
            //         'destroy' => route('kecamatan.destroy', $row->kecamatan_id),
            //     ]);
            // })
            ->rawColumns([''])
            ->make(true);
    }
}
