<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('addJobs', [JobController::class, 'create']);
Route::get('job-list', [JobController::class, 'show']);
Route::get('view-job/{id}', [JobController::class, 'viewJobs']);
Route::delete('delete-job/{id}', [JobController::class, 'delete']);
Route::patch('update-job/{id}', [JobController::class, 'update']);
Route::get('job-categories', [JobController::class, 'job_categories']);