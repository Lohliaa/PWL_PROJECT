<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ServiceDetails;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';
    protected $primaryKey = 'id';

    protected $fillable = [
        'tanggal',
        'status',
        'jumlah_harga'
    ];

    public function user() 
	{
         return $this->belongsTo(User::class,'user_id', 'id');
	}
    public function service_details() 
	{
	     return $this->hasMany(ServiceDetails::class,'service_id', 'id');
	}
}
