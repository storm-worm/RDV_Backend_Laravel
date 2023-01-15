<?php

namespace App\Http\Controllers;

use App\Models\Rdv;
use Illuminate\Http\Request;

class RDVController extends Controller
{
    //
    public function addRDV(Request $request)
    {
        // check if already exist
        $record = Rdv::where('dates', '=',  $request->dates)->where('heures', '=',   $request->heures)->where('technicien_id', '=',  $request->technicien_id)->get()->first();
        
        if($record === null){
            //creer une instance
            $rdv = new Rdv();

            //stocker les informations
            $rdv->dates = $request->dates;
            $rdv->heures = $request->heures;
            $rdv->technicien_id = $request->technicien_id;

            $rdv->save();
            return response()->json([
                'message' => 'the appointment that you choosed is stored succesfully'
            ]);

     }

        return response()->json([
            'message' => 'the appointment that you choosed is already taken try to choose another schedule'
        ]);
    }
}
