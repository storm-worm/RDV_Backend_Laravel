<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    use HasFactory;

    public function Technicien()
    {
        return $this->belongsTo(Technicien::class,"technicien_id","id");
    }

}
