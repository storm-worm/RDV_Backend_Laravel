<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technicien extends Model
{
    use HasFactory;

    public function Succursale()
    {
        return $this->belongsTo(Succursale::class,"succursale_id","id");
    }

    public function Service()
    {
        return $this->belongsToMany(Service::class,"_service_tech","technicien_id","service_id");
    }

    public function Admin()
    {
        return $this->belongsTo(Admin::class,"admin_id","id");
    }

    public function Rendez_vous()
{
    return $this->hasMany(Rendez_vous::class);

}

}
