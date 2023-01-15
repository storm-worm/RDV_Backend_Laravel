<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendrier;

class CalendarController extends Controller
{
    //
    public function Calendar(Request $request){

        $Service = Calendrier::with('Calendrier')->paginate();
          
            return $Service;
    
    }
    
}
