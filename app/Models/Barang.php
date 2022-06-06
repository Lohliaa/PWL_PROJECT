<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'Barang';
    protected $primaryKey = 'id';
    // protected $fillable = [
    //     'id',
    //     'Nama_Barang',
    //     'Jenis_Barang',
    //     'Gambar',
    //     'Harga',
    //     'Deskripsi',
    // ];

    // public function jenis_barang()
    // {
    //     return $this->hasMany(Jenis_Barang::class);
    // }
}
