<?php

use App\Http\Controllers\FolderController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::controller(FolderController::class)->middleware('auth')->group(function(){
    Route::get('folders','index')
                ->name('folders.index');

    

    Route::get('folders/create','create')
                ->name('folders.create');

    Route::post('folders','store')
                ->name('folders.store');
    Route::get('folders/{id}','show')
                ->name('folders.show');
});

require __DIR__.'/auth.php';
