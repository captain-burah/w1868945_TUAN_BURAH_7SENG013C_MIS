<?php
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthKey;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('authkey')->prefix('v1/esnaad')->namespace('App\Http\Controllers') ->group(function () {
    Route::post('/booking-payment-secured', 'BookingController@booking_payment_secured');
    Route::post('/booking-payment-failed', 'BookingController@booking_payment_failed');
});


Route::group([
    'prefix' => 'v1',
    'as' => 'api.',
    'namespace' => 'Api\V1\Admin',
    'middleware' => ['auth:sanctum']

], function() {
    // Route::apiResource('projects', 'ProjectsController');
});

