<?php

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
use App\Doctors;
use App\Patient;
use App\MedicalBills;


// namespace App\Http\Controllers;

Route::get('/', function () {
    return redirect('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::group(['prefix'=>'doctor'],function()
{
    Route::get('list','DoctorsController@getList');

    Route::get('add','DoctorsController@getAdd');
    Route::post('add','DoctorsController@postAdd');  

    Route::get('{id}','DoctorsController@getDetail');

    //Route::post('list','DoctorsController@search')->name('search');

  //  Route::get('list','DoctorsController@search');


    Route::get('edit/{id}','DoctorsController@getEdit');
    Route::post('edit/{id}','DoctorsController@postEdit');
});


Route::group(['prefix'=>'patient'],function()
{
    Route::get('list','PatientsController@getList');

    Route::get('add','PatientsController@getAdd');
    Route::post('add','PatientsController@postAdd')->name("patient.add");  

    Route::get('{id}','PatientsController@getDetail');

  //  Route::get('{id}/edit','PatientsController@getEdit');
   // Route::post('{id}/edit','PatientsController@postEdit');

   Route::get('edit/{id}','PatientsController@getEdit');
   Route::post('edit/{id}','PatientsController@postEdit')->name("patient.edit"); 

});


Route::group(['prefix'=>'medical-bill'],function()
{
    Route::get('list','MedicalBillsController@getList');

    Route::get('upcoming','MedicalBillsController@getList');
    Route::get('took-place','MedicalBillsController@getList');

    Route::get('add','MedicalBillsController@getAdd');
    Route::post('add','MedicalBillsController@postAdd');  

    Route::get('{id}','MedicalBillsController@getDetail');

    Route::get('{id}/edit','MedicalBillsController@getEdit');
    Route::post('{id}/edit','MedicalBillsController@postEdit');
});
