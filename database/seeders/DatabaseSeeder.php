<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([BarangSeeder::class]);
        $this->call([CustomerSeeder::class]);
        $this->call([JenisServiceSeeder::class]);

    }
}
