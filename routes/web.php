<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
 
Route::get('/', function () {
    return view('welcome');
});
Route::resource("/pet", PetController::class);