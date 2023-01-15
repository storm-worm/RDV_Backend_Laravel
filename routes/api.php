<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




// functions which trait the table professional 
Route::get('/technicien', [App\Http\Controllers\TechController::class, 'Technicien']);

//Route::get('/service', [App\Http\Controllers\ServiceController::class, 'Service']);

Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'Calendar']);


Route::post('/search', [App\Http\Controllers\TechController::class, 'TechnicienByCityAndService']);

Route::post('/save_rdv', [App\Http\Controllers\RDVController::class, 'addRDV']);
