<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Jenis_Barang extends Model
{
    use HasFactory;
    protected $table='jenis_barang'; //mendefinisikan bahwa model ini terkait dengan tabel jenis barang

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
