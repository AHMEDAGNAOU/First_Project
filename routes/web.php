<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Statique;
use App\Http\Controllers\ComputresController;

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

Route::get('/', [statique::class, 'welcome'])->name('home.welcome');
Route::get('/store',[statique::class, 'store'] )->name('home.store');
Route::get('/style',[statique::class, 'style'] )->name('home.style');


Route::resource('computres',ComputresController::class);


/*Route::get('/store/{catigore?}/{item?}', function ($catigore = null, $item = null) {
    return '<h1>hi you are in '.$catigore.'_____'.$item.' </h1>';
});*/

/*
Route::get('/store', function () {
    $filtre = request('style');
        if(isset($filtre)){
            return '<h1>welcom to <spam style="color: red">'.strip_tags($filtre).'</spam></h1>';
        }
        return '<h1>welcom to <spam style="color: red">all prodacte</spam></h1>';
    
});*/