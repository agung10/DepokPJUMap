<?php

namespace App\Repositories;

use App\Models\ManajemenWebsite\Pertanyaan;
use App\Repositories\BaseRepository;

class PertanyaanRepository extends BaseRepository
{
    public function __construct(Pertanyaan $pertanyaan)
    {
        $this->model = $pertanyaan;
    }

    public function ajaxDatatable($request)
    {
        $collection = $this->model
            ->select([
                $this->addRowNum($request),
                'pertanyaan.pertanyaan_id',
                'pertanyaan.pertanyaan',
                'pertanyaan.jawaban',
                'pertanyaan.view',
                'pertanyaan.created_at',
                'pertanyaan.updated_at',
            ]);

        return \DataTables::of($collection)
            ->editColumn('jawaban', function ($row) {
                if ($row->jawaban == null) {
                    return '-';
                } else {
                    return $row->jawaban;
                }
            })
            ->addColumn('status', function ($row) {
                if ($row->view == true) {
                    return '<span class="badge badge-light-success">Tampil</span>';
                } else {
                    return '<span class="badge badge-light-danger">Sembunyi</span>';
                }
            })
            ->addColumn('action', function ($row) {
                $show   =   '<a title="Show details" href="'. route('pertanyaan.show', $row->pertanyaan_id) .'" class="btn btn-light-primary btn-sm btn-show-datatable mx-1">
                                <i class="fa fa-search"></i>
                            </a>';
                $edit   =   '<a title="Edit details" href="'. route('pertanyaan.edit', $row->pertanyaan_id) .'" class="btn btn-light-primary btn-sm btn-edit-datatable mx-1">
                                <i class="fa fa-edit"></i>
                            </a>';
                $destroy =  '<a title="Delete" href="'. route('pertanyaan.destroy', $row->pertanyaan_id) .'" class="btn btn-light-primary btn-sm btn-delete-datatable mx-1">
                                <i class="fa fa-trash"></i>
                            </a>';
                        
                return $show . $edit . $destroy;
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

    public function statusPengajuan($row) {
        if ($row->status == 1) {
            $statusPengajuan =  'Diterima';
        } else if ($row->status == 2) {
            $statusPengajuan =  'Diteruskan';
        } else if ($row->status == 3) {
            $statusPengajuan =  'Ditolak';
        } else {
            $statusPengajuan =  'Belum Ditindak Lanjut';
        };

        return $statusPengajuan;
    }
}