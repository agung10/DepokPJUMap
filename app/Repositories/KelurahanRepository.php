<?php

namespace App\Repositories;

use App\Helpers\Helper;
use App\Models\ManajemenWebsite\Kelurahan;
use App\Repositories\BaseRepository;

class KelurahanRepository extends BaseRepository
{
    public function __construct(Kelurahan $kelurahan)
    {
        $this->model = $kelurahan;
    }

    public function ajaxDatatable($request)
    {
        $collection = $this->model
            ->select([
                $this->addRowNum($request),
                'kelurahan.kelurahan_id',
                'kelurahan.kecamatan_id',
                'kelurahan.nama_kelurahan',
                'kelurahan.created_at',
                'kelurahan.updated_at',
            ]);

        return \DataTables::of($collection)
            ->addColumn('nama_kecamatan', function ($row) {
                return '<code>' . $row->asalKecamatan->nama_kecamatan . '</code>';
            })
            ->editColumn('created_at', function ($row) {
                return Helper::tglIndo($row->created_at);
            })
            ->editColumn('updated_at', function ($row) {
                return Helper::tglIndo($row->updated_at);
            })
            // ->addColumn('action', function ($row) {
            //     return view('partials.buttons.datatable', [
            //         'show' => route('kelurahan.show', $row->kelurahan_id),
            //         'edit' => route('kelurahan.edit', $row->kelurahan_id),
            //         'destroy' => route('kelurahan.destroy', $row->kelurahan_id),
            //     ]);
            // })
            ->rawColumns(['nama_kecamatan'])
            ->make(true);
    }
}
