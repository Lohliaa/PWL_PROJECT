<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_barang',
        'jenis_barang',
        'gambar',
        'harga',
        'deskripsi',
    ];

    public function jenis_barang()
    {
        return $this->belongsTo(Jenis_Barang::class);
    }
}
