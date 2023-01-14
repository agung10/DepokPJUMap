<?php

namespace Database\Seeders;

use App\Models\ManajemenWebsite\Kelurahan;
use Illuminate\Database\Seeder;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelurahan::truncate();
        
        // Kecamatan Beji (6)
        Kelurahan::create([
            'kecamatan_id'   => 1,
            'nama_kelurahan' => 'Beji',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 1,
            'nama_kelurahan' => 'Beji Timur',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 1,
            'nama_kelurahan' => 'Kemiri Muka',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 1,
            'nama_kelurahan' => 'Kukusan',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 1,
            'nama_kelurahan' => 'Pondok Cina',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 1,
            'nama_kelurahan' => 'Tanah Baru',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);

        // Kecamatan Bojongsari (7)
        Kelurahan::create([
            'kecamatan_id'   => 2,
            'nama_kelurahan' => 'Bojong Sari Lama',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 2,
            'nama_kelurahan' => 'Bojong Sari Baru',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 2,
            'nama_kelurahan' => 'Curug',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 2,
            'nama_kelurahan' => 'Duren Mekar',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 2,
            'nama_kelurahan' => 'Duren Seribu',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 2,
            'nama_kelurahan' => 'Pondok Petir',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 2,
            'nama_kelurahan' => 'Serua',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        
        // Kecamatan Cilodong (5)
        Kelurahan::create([
            'kecamatan_id'   => 3,
            'nama_kelurahan' => 'Cilodong',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 3,
            'nama_kelurahan' => 'Jatimulya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 3,
            'nama_kelurahan' => 'Kalibaru',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 3,
            'nama_kelurahan' => 'Kalimulya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 3,
            'nama_kelurahan' => 'Sukamaju',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        
        // Kecamatan Cimanggis (6)
        Kelurahan::create([
            'kecamatan_id'   => 4,
            'nama_kelurahan' => 'Cisalak Pasar',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 4,
            'nama_kelurahan' => 'Curug',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 4,
            'nama_kelurahan' => 'Harjamukti',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 4,
            'nama_kelurahan' => 'Mekarsari',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 4,
            'nama_kelurahan' => 'Pasir Gunung Selatan',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 4,
            'nama_kelurahan' => 'Tugu',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        
        // Kecamatan Cinere (4)
        Kelurahan::create([
            'kecamatan_id'   => 5,
            'nama_kelurahan' => 'Cinere',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 5,
            'nama_kelurahan' => 'Gandul',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 5,
            'nama_kelurahan' => 'Pangkalan Jati',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 5,
            'nama_kelurahan' => 'Pangkalan Jati Baru',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        
        // Kecamatan Cipayung (5)
        Kelurahan::create([
            'kecamatan_id'   => 6,
            'nama_kelurahan' => 'Bojong Pondok Terong',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 6,
            'nama_kelurahan' => 'Cipayung',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 6,
            'nama_kelurahan' => 'Cipayung Jaya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 6,
            'nama_kelurahan' => 'Pondok Jaya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 6,
            'nama_kelurahan' => 'Ratu Jaya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        
        // Kecamatan Limo (4)
        Kelurahan::create([
            'kecamatan_id'   => 7,
            'nama_kelurahan' => 'Grogol',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 7,
            'nama_kelurahan' => 'Kerukut',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 7,
            'nama_kelurahan' => 'Limo',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 7,
            'nama_kelurahan' => 'Meruyung',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        
        // Kecamatan Pancoran Mas (6)
        Kelurahan::create([
            'kecamatan_id'   => 8,
            'nama_kelurahan' => 'Depok',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 8,
            'nama_kelurahan' => 'Depok Jaya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 8,
            'nama_kelurahan' => 'Mampang',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 8,
            'nama_kelurahan' => 'Pancoran Mas',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 8,
            'nama_kelurahan' => 'Rangkapan Jaya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 8,
            'nama_kelurahan' => 'Rangkapan Jaya Baru',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        
        // Kecamatan Sawangan (7)
        Kelurahan::create([
            'kecamatan_id'   => 9,
            'nama_kelurahan' => 'Bedahan',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 9,
            'nama_kelurahan' => 'Cinangka',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 9,
            'nama_kelurahan' => 'Kedaung',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 9,
            'nama_kelurahan' => 'Pasir Putih',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 9,
            'nama_kelurahan' => 'Pengasinan',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 9,
            'nama_kelurahan' => 'Sawangan Baru',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 9,
            'nama_kelurahan' => 'Sawangan Lama',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        
        // Kecamatan Sukmajaya (6)
        Kelurahan::create([
            'kecamatan_id'   => 10,
            'nama_kelurahan' => 'Abadijaya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 10,
            'nama_kelurahan' => 'Baktijaya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 10,
            'nama_kelurahan' => 'Cisalak',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 10,
            'nama_kelurahan' => 'Mekarjaya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 10,
            'nama_kelurahan' => 'Sukmajaya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 10,
            'nama_kelurahan' => 'Tirtajaya',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        
        // Kecamatan Tapos (7)
        Kelurahan::create([
            'kecamatan_id'   => 11,
            'nama_kelurahan' => 'Cilangkap',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 11,
            'nama_kelurahan' => 'Ciampeun',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 11,
            'nama_kelurahan' => 'Jatijajar',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 11,
            'nama_kelurahan' => 'Leuwinanggung',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 11,
            'nama_kelurahan' => 'Sukamaju Baru',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 11,
            'nama_kelurahan' => 'Sukatani',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
        Kelurahan::create([
            'kecamatan_id'   => 11,
            'nama_kelurahan' => 'Tapos',
            'created_at'     => date('Y-m-d H:i:s'),
            'updated_at'     => date('Y-m-d H:i:s')
        ]);
    }
}
