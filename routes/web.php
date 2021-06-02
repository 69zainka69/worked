<?php
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeruController;
use App\Http\Controllers\HomeenController;
use App\Http\Controllers\HomedeController;
use App\Http\Controllers\HomeController;


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
Route::get('/youtube', [HomeruController::class, 'youtube']);
Route::get('/politika-konfidenczialnosti', [HomeruController::class, 'politika']);
Route::resource('/form', 'FormController');
Route::resource('/sender', 'SenderController');
Route::get('/en/home', [HomeenController::class, 'index']);
Route::get('/en/about-company', [HomeenController::class, 'kompanii']);
Route::get('/en/about-company/work-at-staffplex', [HomeenController::class, 'rabota']);
Route::get('/en/our-vacancies', [HomeenController::class, 'vakansii']);
Route::get('/en/service/manufactured-by-van-der-elst-visa', [HomeenController::class, 'izgotovleniya']);
Route::get('/en/portfolio-work', [HomeenController::class, 'nashiraboty']);
Route::get('/en/for-the-employer', [HomeenController::class, 'rabotodatelya']);
Route::get('/en/news', [HomeenController::class, 'novosti']);
Route::get('/en/youtube', [HomeenController::class, 'youtube']);
Route::get('/en/reviews', [HomeenController::class, 'otzyvy']);
Route::get('/en/contacts', [HomeenController::class, 'kontakty']);
Route::get('/en/politika-konfidenczialnosti', [HomeenController::class, 'politika']);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('homes');
Auth::routes();

Route::get('/de/hauptseite', [HomedeController::class, 'index']);
Route::get('/de/ueber-das-unternehmen', [HomedeController::class, 'kompanii']);
Route::get('/de/ueber-das-unternehmen/arbeiten-sie-bei-staffplex', [HomedeController::class, 'rabota']);
Route::get('/de/unsere-offenen-stellen', [HomedeController::class, 'vakansii']);
Route::get('/de/service/hergestellt-von-van-der-elst-visum', [HomedeController::class, 'izgotovleniya']);
Route::get('/de/portfolio-2', [HomedeController::class, 'nashiraboty']);
Route::get('/de/fuer-den-arbeitgeber', [HomedeController::class, 'rabotodatelya']);
Route::get('/de/nachrichten', [HomedeController::class, 'novosti']);
Route::get('/de/bewertungen', [HomedeController::class, 'otzyvy']);
Route::get('/de/kontakte', [HomedeController::class, 'kontakty']);
Route::get('/de/politika-konfidenczialnosti', [HomedeController::class, 'politika']);
Route::get('/de/youtube', [HomedeController::class, 'youtube']);
Route::get('/logout', [LogoutController::class, 'index'])->name('logout');



Route::middleware(['role:sclad|admin'])->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});

