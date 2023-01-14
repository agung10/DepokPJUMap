<?php

namespace App\Repositories;

use App\Helpers\Helper;
use App\Models\ManajemenWebsite\Laporan;
use App\Repositories\BaseRepository;

class LaporanRepository extends BaseRepository
{
    public function __construct(Laporan $laporan)
    {
        $this->model = $laporan;
    }

    public function ajaxDatatable($request)
    {
        $collection = $this->model
            ->select([
                $this->addRowNum($request),
                'laporan.laporan_id',
                'laporan.kecamatan_id',
                'laporan.kelurahan_id',
                'laporan.no_laporan',
                'laporan.nama_pelapor',
                'laporan.email_pelapor',
                'laporan.no_hp',
                'laporan.gambar',
                'laporan.deskripsi',
                'laporan.bukti_warga',
                'laporan.kategori',
                'laporan.status',
                'laporan.keterangan',
                'laporan.detail_alamat',
                'laporan.latitude',
                'laporan.longitude',
                'laporan.created_at',
                'laporan.updated_at',
            ]);

        return \DataTables::of($collection)
            ->editColumn('no_laporan', function ($row) {
                return '<code>' . $row->no_laporan . '</code>';
            })
            ->addColumn('laporan_warga', function($row) {
                $row->gambar         = $row->gambar;
                $row->nama_pelapor   = $row->nama_pelapor;
                $row->no_hp          = $row->no_hp;
                $row->email_pelapor  = $row->email_pelapor;

                return view('manajemen.laporan.laporan_warga', compact('row'));
            })
            ->addColumn('status', function ($row) {
                if ($row->status == 1) {
                    return '<span class="badge badge-light-success">Diterima</span>';
                } else if ($row->status == 2) {
                    return '<span class="badge badge-light-primary">Diteruskan</span>';
                } else if ($row->status == 3) {
                    return '<span class="badge badge-light-danger">Ditolak</span>';
                } else {
                    return '<span class="badge badge-secondary">Belum Ditindak Lanjut</span>';
                };
            })
            ->addColumn('action', function ($row) {
                $show   =   '<a title="Show details" href="'. route('laporan.show', $row->laporan_id) .'" class="btn btn-light-primary btn-sm btn-show-datatable mx-1">
                                <i class="fa fa-search"></i>
                            </a>';
                $edit   =   '<a title="Edit details" href="'. route('laporan.edit', $row->laporan_id) .'" class="btn btn-light-primary btn-sm btn-edit-datatable mx-1">
                                <i class="fa fa-edit"></i>
                            </a>';
                $destroy =  '<a title="Delete" href="'. route('laporan.destroy', $row->laporan_id) .'" class="btn btn-light-primary btn-sm btn-delete-datatable mx-1">
                                <i class="fa fa-trash"></i>
                            </a>';
                            
                if ($row->status == 3) {
                    return $show . $destroy;
                } else {
                    return $show . $edit . $destroy;
                }
            })
            ->rawColumns(['action', 'laporan_warga', 'no_laporan', 'status'])
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