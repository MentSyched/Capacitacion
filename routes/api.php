<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('route1', function () {
    return 'Hola mundo';
}
);

Route::prefix('make')->group( function (){
Route::get('route1/{id}','UsersController@mostrarUsuarioById');

Route::post('route2','UsersController@mostrarUsuario');

Route::post('route1','UsersController@agregarUsuario');

Route::post('route1/{id}','UsersController@editarUsuario');

Route::delete('route1/{id}', 'UsersController@eliminarUsuario');

Route::get('users', 'UsersController@getUsuarios');
});