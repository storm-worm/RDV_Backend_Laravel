<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    use HasFactory;

    public function Calendrier()
    {
        return $this->belongsTo(Service::class,"service_id","id");
    }
}
