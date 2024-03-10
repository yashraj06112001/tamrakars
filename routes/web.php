<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;
use PhpOffice\PhpSpreadsheet\Style\ConditionalFormatting\ConditionalFormatValueObject;

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

Route::get('/form', function () {
    return view('form');
})->name('form');
Route::post('/formpost', [formController::class,'formhandler'])->name('formpost');
Route::get('/admin',function()
{
return view('admin.download');
})->name('admin');
Route::post('/download', [formController::class, 'process'])->name('download');
Route::post('/all',[formController::class,'newprocess'])->name('newdownload');
Route::get('layout1',function()
{
return view('layout.layout1');
})->name('layout1');
Route::get('/',function()
{
    return view('firstPage');
})->name('first');
Route::get('/relocate',[formController::class,'take'])->name('take');
