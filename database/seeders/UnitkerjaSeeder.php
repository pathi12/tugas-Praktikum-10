<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitkerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unitkerja')->insert([
            [
                'nama' => 'pathi',
                'lokasi' => 'Rs hermina',
                'keterangan' => 'Keterangan Unit Kerja 1',
            ],
            [
                'nama' => 'Unit Kerja 2',
                'lokasi' => 'Rs kencana',
                'keterangan' => 'Keterangan Unit Kerja 2',
            ],
            // Add more entries as needed
        ]);
    }
}
