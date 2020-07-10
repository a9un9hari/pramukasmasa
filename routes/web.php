<?php

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

Auth::routes();
Route::group(['prefix'=>'dashboard','as' => 'dashboard.', 'middleware'=>['auth']], function () {
    Route::resource('regu', 'ReguController');
    Route::get('/peserta/create/{regu}', 'PesertaController@create')->name('peserta.create');
    Route::get('/peserta/edit/{id}', 'PesertaController@edit')->name('peserta.edit');
    Route::post('/peserta/{regu}', 'PesertaController@store')->name('peserta.store');
    Route::delete('/peserta/{id}', 'PesertaController@destroy')->name('peserta.destroy');
    Route::put('/peserta/{id}', 'PesertaController@update')->name('peserta.update');
    // Route::resource('peserta', 'PesertaController');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/livescore', 'LiveScoreController@index')->name('livescore');
    Route::post('/livescore', 'LiveScoreController@store')->name('livescore.store');
});

Route::get('/livescore/laki-laki', 'LiveScoreController@l')->name('livescore.l');
Route::get('/livescore/perempuan', 'LiveScoreController@p')->name('livescore.p');
Route::get('/livescore/p', 'LiveScoreController@perempuan')->name('livescore.perempuan');
Route::get('/livescore/l', 'LiveScoreController@laki')->name('livescore.laki');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


