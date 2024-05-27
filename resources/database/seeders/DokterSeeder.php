<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'Pathi',
                'gender' => 'L',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '2006-02-07',
                'kategori' => 'Umum',
                'telpon' => '088293593710',
                'alamat' => 'kp.pagutan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Husnul Mariyah',
                'gender' => 'p',
                'tmp_lahir' => 'Bogor',
                'tgl_lahir' => '2005-02-12',
                'kategori' => 'Spesialis',
                'telpon' => '086579090',
                'alamat' => 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data dokter lainnya sesuai kebutuhan
        ]);
    }
}