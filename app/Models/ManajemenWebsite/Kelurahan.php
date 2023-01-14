<?php

namespace App\Models\ManajemenWebsite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $table      = 'kelurahan';
    protected $primaryKey = 'kelurahan_id';
    protected $guarded    = [];

    public function asalKecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }
}
