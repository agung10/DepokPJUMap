<?php

namespace App\Models\ManajemenWebsite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table      = 'kecamatan';
    protected $primaryKey = 'kecamatan_id';
    protected $guarded    = [];
}
