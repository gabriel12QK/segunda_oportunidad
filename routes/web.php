<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Reporte;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('pacientes-pdf',[Reporte::class,'pacientes']);
Route::get('sintomas-pdf{sintoma}',[Reporte::class,'sintoma']);
Route::get('personast-pdf{tipo}',[Reporte::class,'tipos']);