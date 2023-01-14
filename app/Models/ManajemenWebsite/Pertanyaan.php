<?php

namespace App\Models\ManajemenWebsite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $table      = 'pertanyaan';
    protected $primaryKey = 'pertanyaan_id';
    protected $guarded    = [];
}
