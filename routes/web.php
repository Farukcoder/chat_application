<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\User;
use App\Models\Phone;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    $phone = User::find(1)->phone;
//
//    $user = Phone::find(2)->user;

//    return  $user;
    $data = User::all();
//    dd($data);
    return view('welcome',compact('data'));
});
Route::resource("/student", StudentController::class);
