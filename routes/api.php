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
Route::get('/basic', 'BasicController@show' );

Route::get('/education', 'EducationController@list');

Route::get('/education/{id}', 'EducationController@show');

Route::get('/skills', 'SkillController@list');

Route::get('/skills/{id}', 'SkillController@show');

Route::get('/employment','EmploymentController@list');

Route::fallback(function(){
    return response()->json(['message' => 'Not Found!'], 404);
});
