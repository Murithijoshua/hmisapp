
<?php
// use App\Http\Controllers\DwhResourcesController;
use App\Http\Controllers\ApiConsummer;
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


Route::get('/', [ApiConsummer::class, 'apiWithKey'])->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('dwhResources', DwhResourcesController::class)->middleware('auth');
Route::resource('tot', totTechnicalsController::class)->middleware('auth');
Route::resource('endusercontent', endUserController::class)->middleware('auth');
Route::resource('prod', ProdServersController::class);
Route::resource('training', traingServerController::class);