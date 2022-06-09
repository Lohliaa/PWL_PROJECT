<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            [
                'id' => '1',
                'nama' => 'Lia',
                'alamat' => 'Mojokerto',
                'telepon' => '085856145307',
            ],
            [
                'id' => '2',
                'nama' => 'Puspita',
                'alamat' => 'Malang',
                'telepon' => '089234139232',
            ],
            [
                'id' => '3',
                'nama' => 'Dewi',
                'alamat' => 'Surabaya',
                'telepon' => '081292385903',
            ],
            [
                'id' => '4',
                'nama' => 'Farrel',
                'alamat' => 'Kediri',
                'telepon' => '0881921023909',
            ],
            [
                'id' => '5',
                'nama' => 'Valentino',
                'alamat' => 'Nganjuk',
                'telepon' => '082934034980',
            ],
            [
                'id' => '6',
                'nama' => 'Japri',
                'alamat' => 'Madiun',
                'telepon' => '082382398198',
            ],

        ]);
    }
}
