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


Route::get('checkListsItems', 'CheckListsController@index');

Route::get('getClientDetails', 'CheckListsController@getClientDetails');

Route::get('getClientById/{Id}', 'CheckListsController@getClientById');

Route::get('getStffDetailById/{Id}', 'CheckListsController@getStffDetailById');

Route::post('/forms/index/editData', 'CheckListsController@editData');

Route::post('/forms/AddCustomerProfile', 'CheckListsController@AddCustomerProfile');
Route::post('/forms/EditCustomerProfile', 'CheckListsController@editCustProfile');


// Route::group(['middleware' => 'web'], function () { 
  // Edit Data
//    Route::post('/forms/index/editData', [
//     'as' => 'editData', 
//     'uses' => 'App\Http\Controllers\CheckListsController@editData'
// ]);

Route::post('/forms/index/editData', 'CheckListsController@editData');

Route::post('/forms/index/editCustProfile', 'CheckListsController@editCustProfile');
// });



