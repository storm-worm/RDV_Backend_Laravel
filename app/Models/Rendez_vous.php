<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendez_vous extends Model
{
    use HasFactory;

    public function Technicien()
    {
        return $this->belongsTo(Technicien::class,"technicien_id","id");
    }

    public function User()
{
    return $this->belongsToMany(User::class,"rdv_user","rdv_id","user_id");
}
}
