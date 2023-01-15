<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


   

    // public function Admin()
    // {
    //     return $this->belongsTo(Admin::class,"admin_id","id");
    // }

   

    // public function Seccursale()
    // {
    //     return $this->belongsToMany(Seccursale::class,"_service_succ","service_id","succursale_id");
    // }

    // public function Technicien()
    // {
    //     return $this->belongsToMany(Technicien::class,"_service_tech","service_id","technicien_id");
    // }

}
