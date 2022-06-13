<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Pegawai')->insert([
            [
                'nama' => 'Lia',
                'ttl' => 'Mojokerto, 20 Maret 2000',
                'alamat' => 'Bandung, JL. Apa Hayo',
                'telepon' => '081709871234',
                'jabatan' => 'Marketing'
            ],
            [
                'nama' => 'Gilang',
                'ttl' => 'Batu, 10 April 2001',
                'alamat' => 'Batu, JL. Kita Beda',
                'telepon' => '081345679876',
                'jabatan' => 'Teknisi'
            ],
            [
                'nama' => 'Farrel',
                'ttl' => 'Kediri, 14 Februari Kediri',
                'alamat' => 'Kediri, JL. Buntu Bro',
                'telepon' => '081267895432',
                'jabatan' => 'Marketing'
            ]
            ]);
    }
}
