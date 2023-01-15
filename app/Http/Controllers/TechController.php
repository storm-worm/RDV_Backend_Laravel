<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technicien;


class TechController extends Controller
{
    //
        //
        public function Technicien(Request $request){

            $Technicien = Technicien::with('User')->with('Admin')->with('Succursale')->with('Service')->paginate();
              
            return response()->json([$Technicien]);
    
        }
        public function TechnicienByCityAndService(Request $request){

            $Technicien = Technicien::with('User')
            ->with('Admin')
            ->with('Succursale')
            ->with('Service')            
            ->whereRelation('Succursale', 'succursale_lib', '=',  $request->city)
            ->whereRelation('Service', 'service_lib', '=', $request->service)
            ->paginate();

           return response()->json([$Technicien]);
    
        }
}
