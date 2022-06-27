<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            [
                'nama_barang' => 'AKI N100',
                'jenis_barang' => 'Accu / Aki Incoe N100-95E41R',
                'gambar' => '',
                'harga' => 'Rp 230.000',
                'deskripsi' => 'Volt (v): 12, Kapasitas 20 jam (Ah): 100, Kapasitas 5 jam (Ah): 80, CCA (-18C) (A): 537, RC (@25A) (menit): 182'
            ],
            [
                'nama_barang' => 'AKI N150',
                'jenis_barang' => 'Accu / Aki Incoe N150-145G51',
                'gambar' => '',
                'harga' => 'Rp 540.000',
                'deskripsi' => 'Volt (v): 12, Kapasitas 20 jam (Ah): 150, Kapasitas 5 jam (Ah): 120, CCA (-18C) (A): 791, RC (@25A) (menit): 294'
            ],
            [
                'nama_barang' => 'Kabel Listrik Eterna 2x0',
                'jenis_barang' => 'Kabel NYMHY Eterna 2x0,75 mm2',
                'gambar' => '',
                'harga' => 'Rp 5.500,- / meter',
                'deskripsi' => 'Kabel NYMHY Eterna 2x0,75 mm2'
            ],
            [
                'nama_barang' => 'Kabel Listrik Eterna 2x1,5',
                'jenis_barang' => 'Kabel NYMHY Eterna 2x1,5 mm2',
                'gambar' => '',
                'harga' => 'Rp 6.800,- / meter',
                'deskripsi' => 'Kabel NYMHY Eterna 2x1,5 mm2'
            ],
            [
                'nama_barang' => 'Kabel Listrik Eterna 2x10',
                'jenis_barang' => 'Kabel NYMHY Eterna 2x10 mm2',
                'gambar' => '',
                'harga' => 'Rp 50.000,- / meter',
                'deskripsi' => 'Kabel NYMHY Eterna 2x10 mm2'
            ],
            [
                'nama_barang' => 'Kabel Listrik Eterna 3x0',
                'jenis_barang' => 'Kabel NYMHY Eterna 3x0,75 mm2',
                'gambar' => '',
                'harga' => 'Rp 6.500,- / meter',
                'deskripsi' => 'Kabel NYMHY Eterna 3x0,75 mm2'

            ],
            [
                'nama_barang' => 'Kabel Listrik Eterna 4x0',
                'jenis_barang' => 'Kabel NYMHY Eterna 4x0,75 mm2',
                'gambar' =>'',
                'harga' => 'Rp 10.000,- / meter',
                'deskripsi' => 'Kabel NYMHY Eterna 4x0,75 mm2'

            ],
            [
                'nama_barang' => 'Oli Shel R4',
                'jenis_barang' => 'Shell Rimula R4 X 15W-40',
                'gambar' => '',
                'harga' => 'Rp 120.000',
                'deskripsi' => 'untuk keperluan heavy duty mesin Diesel, seperti mesin Genset, Traktor, Buldozer, dan alat-alat berat lainnya.'

            ],
            [
                'nama_barang' => 'Oli Pertamina Meditran SX 15W',
                'jenis_barang' => 'MEDITRAN SX PLUS 15W-40 CI4',
                'gambar' => '',
                'harga' => 'Rp 6.875.000',
                'deskripsi' => 'Oli Pertamina tipe Meditran SX. Oli Pertamina dengan merk ini banyak dipakai untuk keperluan heavy duty mesin Diesel, seperti mesin Genset, Traktor, Buldozer, dan alat-alat berat lainnya'

            ],
            [
                'nama_barang' => 'Oli Pertamina Meditran SX CI4',
                'jenis_barang' => 'MEDITRAN SX CI4 PLUS ELDI',
                'gambar' => '',
                'harga' => 'Rp 7.364.000',
                'deskripsi' => 'Oli Pertamina tipe Meditran SX. Oli Pertamina dengan merk ini banyak dipakai untuk keperluan heavy duty mesin Diesel, seperti mesin Genset, Traktor, Buldozer, dan alat-alat berat lainnya'

            ],
            [
                'nama_barang' => 'Oli Pertamina Meditran SX Ultra',
                'jenis_barang' => 'MEDITRAN SX ULTRA 15W-40 CI4 PLUS',
                'gambar' => '',
                'harga' => 'Rp 360.000',
                'deskripsi' => 'Oli Pertamina tipe Meditran SX. Oli Pertamina dengan merk ini banyak dipakai untuk keperluan heavy duty mesin Diesel, seperti mesin Genset, Traktor, Buldozer, dan alat-alat berat lainnya'

            ],
            [
                'nama_barang' => 'Oli Pertamina Meditran SX 20W',
                'jenis_barang' => 'MEDITRAN SX 20W-50 CH4',
                'gambar' => '',
                'harga' => 'Rp 120.000',
                'deskripsi' => 'Oli Pertamina tipe Meditran SX. Oli Pertamina dengan merk ini banyak dipakai untuk keperluan heavy duty mesin Diesel, seperti mesin Genset, Traktor, Buldozer, dan alat-alat berat lainnya'

            ],
        ]);
    }
}
