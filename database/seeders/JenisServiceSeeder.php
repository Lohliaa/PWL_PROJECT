<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_service')->insert([
            [
                'id_jenis_service' => '1',
                'foto' => 'motorwash.jpg',
                'kategori' => 'Motor Wash',
                'harga_service' => '150.000',
                'deskripsi' => 'Snow Wash',
            ],
            [
                'id_jenis_service' => '2',
                'foto' => 'handglove.jpg',
                'kategori' => 'Apparel & Ridding Gear',
                'harga_service' => '300.000',
                'deskripsi' => 'Honda Racing Touring Hand Glove (M)',
            ],
            [
                'id_jenis_service' => '3',
                'foto' => 'hondajaket.jpg',
                'kategori' => 'Apparel & Ridding Gear',
                'harga_service' => '275.000',
                'deskripsi' => 'Honda Taslan Jacket Black (S)',
            ],
            [
                'id_jenis_service' => '4',
                'foto' => 'jalustang.jpg',
                'kategori' => 'Suku Cadang',
                'harga_service' => '2.000',
                'deskripsi' => 'Jalu Stang (End Steering Handle) – New CB150R StreetFire K15G & New CB150R Streetfire K15M',
            ],
            [
                'id_jenis_service' => '5',
                'foto' => 'screwpan.jpg',
                'kategori' => 'Suku Cadang',
                'harga_service' => '2.000',
                'deskripsi' => 'Screw Pan 5X14 - New CBR 150R K45G',
            ],
            [
                'id_jenis_service' => '6',
                'foto' => 'oilshock.jpg',
                'kategori' => 'OLI',
                'harga_service' => '28.500',
                'deskripsi' => 'Oil Shock Depan - Grand, GL MAX, Revo & Tiger',
            ],
            [
                'id_jenis_service' => '7',
                'foto' => 'ahm.jpg',
                'kategori' => 'OLI',
                'harga_service' => '43.500',
                'deskripsi' => 'AHM Oil MPX-3 - 0.8 L NIP',
            ],
        ]);
    }
}
