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

//http://127.0.0.1:8000/api/inventory/warehouses
Route::get('purchase/create', [
    'as' => 'purchaseCreate', 'uses' => 'PurchaseController@create',
]);

Route::get('purchase/index', [
    'as' => 'purchaseCreate', 'uses' => 'PurchaseController@index',
]);

// Route::middleware(['purchase'])->group(function () {
// //http://127.0.0.1:8000/api/inventory/warehouses
//     Route::get('create', [
//         'as' => 'purchaseCreate', 'uses' => 'PurchaseController@create',
//     ]);

//     Route::get('index', [
//         'as' => 'purchaseIndex', 'uses' => 'PurchaseController@index',
//     ]);

// });
