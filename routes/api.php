<?php
use App\Http\Controllers\Api\CategoriesController;
use Illuminate\Support\Facades\Route;
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

     // all routs /api here most be api authenticated
Route::group(['middleware' => 'api' ,'namespace' => 'Api'], function() {


Route::post('/get-main-categories' ,'CategoriesController@index');

});
