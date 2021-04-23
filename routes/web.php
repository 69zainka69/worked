<?php
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeruController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeruController::class, 'index']);
Route::get('/o-kompanii', [HomeruController::class, 'kompanii']);
Route::get('/o-kompanii/rabota-v-staffplex', [HomeruController::class, 'rabota']);
Route::get('/nashi-vakansii', [HomeruController::class, 'vakansii']);
Route::get('/service/izgotovleniya-van-der-elst-visa', [HomeruController::class, 'izgotovleniya']);
Route::get('/nashi-raboty', [HomeruController::class, 'nashiraboty']);
Route::get('/dlya-rabotodatelya', [HomeruController::class, 'rabotodatelya']);
Route::get('/novosti', [HomeruController::class, 'novosti']);
Route::get('/otzyvy', [HomeruController::class, 'otzyvy']);
Route::get('/kontakty', [HomeruController::class, 'kontakty']);
Route::get('/politika-konfidenczialnosti', [HomeruController::class, 'politika']);
Route::resource('/form', 'FormController');
Route::resource('/sender', 'SenderController');




Route::middleware(['role:admin|sclad'])->prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');;
});

Auth::routes();