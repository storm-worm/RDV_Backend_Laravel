<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public function super()
    {
        return $this->belongsTo(SuperAdmin::class,"superadmin_id","id");
    }

    public function Technicien()
{
    return $this->hasMany(Technicien::class);

}

public function Service()
{
    return $this->hasMany(Service::class);

}
}
