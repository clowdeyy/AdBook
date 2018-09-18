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

// PAGES CONTROLLER
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

// HOTEL CONTROLLER
Route::resource('hotels', 'HotelsController');


// AUTHENTICATION
Auth::routes();
// Route::get('/dashboardone', 'DashboardOneController@index');
Route::group(['middleware' => ['web','auth']], function(){

    Route::get('/user', function(){
        if (Auth::user()->admin == 0){
            return view('/user/guest/dashboardone');
        }elseif (Auth::user()->admin == 2){
            return view('/user/hoteladmin/dashboardtwo');
        }else{
            $users['user'] = \App\User::all();
            return view('/user/admin/dashboardadmin', $users);
        }
    });

});


// HOTEL - VIEW
Route::get('/viewuser_new', [
    'as'=> 'viewuser',
    'uses'=> 'AdminController@viewuser'
]);
// ADMIN - CREATE
Route::get('/hoteladmin_new', [
    'as'=> 'hoteladmin',
    'uses'=> 'AdminController@hoteladmin'
]);
// HOTEL - VIEW
Route::get('/hotelview_new', [
    'as'=> 'viewhotel',
    'uses'=> 'AdminController@viewhotel'
]);// HOTEL - CREATE
Route::get('/hotelcreate_new', [
    'as'=> 'createhotel',
    'uses'=> 'AdminController@createhotel'
]);

