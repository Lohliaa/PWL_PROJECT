<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\JenisService;

class ServiceDetails extends Model
{
    use HasFactory;

    protected $table = 'service_details';
    protected $primaryKey = 'id';

    protected $fillable = [
        'jumlah',
        'jumlah_harga'
    ];

    public function jenis_service() 
	{
         return $this->belongsTo(JenisService::class,'id_jenis_service');
	}
    

    public function service()
	{
	      return $this->belongsTo(Service::class,'service_id', 'id');
	}
}