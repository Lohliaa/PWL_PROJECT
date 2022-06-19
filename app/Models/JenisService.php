<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceDetails;

class JenisService extends Model
{
    use HasFactory;

    protected $table = 'jenis_service';
    protected $primaryKey = 'id_jenis_service';

    protected $fillable = [
        'id_jenis_service',
        'foto',
        'kategori',
        'harga_service',
        'deskripsi',
        ];
    
    public function service_details() 
	{
	     return $this->hasMany(ServiceDetails::class,'jenis_service_id', 'id');
	}
}
