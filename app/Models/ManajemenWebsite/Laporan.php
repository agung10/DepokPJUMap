<?php

namespace App\Models\ManajemenWebsite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table      = 'laporan';
    protected $primaryKey = 'laporan_id';
    protected $guarded    = [];

    public function statusOpt() 
    {
        return [
            1 => 'Diterima', 
            2 => 'Diteruskan',
            3 => 'Ditolak',
        ];
    }

    public function kategoriOpt() 
    {
        return [
            'Baru' => 'Pengajuan Baru', 
            'Perbaikan' => 'Pengajuan Perbaikan',
        ];
    }

    public function Kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }

    public function Kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id');
    }
}
