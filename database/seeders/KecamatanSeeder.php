<?php

namespace Database\Seeders;

use App\Models\ManajemenWebsite\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kecamatan::truncate();
        
        Kecamatan::create([
            'nama_kecamatan' => 'Beji',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Bojongsari',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Cilodong',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Cimanggis',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Cinere',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Cipayung',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Limo',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Pancoran Mas',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Sawangan',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Sukmajaya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kecamatan::create([
            'nama_kecamatan' => 'Tapos',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
    }
}
