<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
// PAGES CONTROLLER
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/users/{user}', function (User $user){
    //
});


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

// HOTEL CONTROLLER RESOURCE
Route::resource('hotels', 'HotelsController');
Route::get('/gallery/{id}', 'HotelsController@gallery');
Route::get('/contact/{id}', 'HotelsController@contact');
Route::get('/rooms/{id}', 'HotelsController@rooms');
// REDIRECTION OF BOOKING
Route::get('/book/{id}', 'HotelsController@booking');

// CATEGORY CONTROLLER RESOURCE
Route::resource('categories', 'CategoriesController');

// CONTACT CONTROLLER RESOURCE
Route::resource('contacts', 'ContactController');

// MAP CONTROLLER RESOURCE
Route::resource('maps', 'MapsController');

// INFORMATION CONTROLLER RESOURCE
Route::resource('informations', 'InformationController');

// ROOMS CONTROLLER RESOURCE
Route::resource('rooms', 'RoomsController');

// FIND ROOMS
Route::get('/book/{id}', 'FindRoomsController@index')->name('hotels.index');

// AUTHENTICATION
Route::post('/book/{id}', 'FindRoomsController@index');
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

// -------- HOTEL ---------------
// VIEW HOTEL ADMIN
Route::get('/viewuser_new', [
    'as'=> 'viewuser',
    'uses'=> 'AdminController@viewuser'
]);
// DISPLAYS CREATE NEW HOTEL ADMIN
Route::get('/hoteladmin_new', [
    'as'=> 'hoteladmin',
    'uses'=> 'AdminController@hoteladmin'
]);
// DISPLAYS THE VIEW HOTEL LIST
Route::get('/hotelview_new', [
    'as'=> 'viewhotel',
    'uses'=> 'AdminController@viewhotel'
]);
// DISPLAYS THE CREATE NEW HOTEL
Route::get('/hotelcreate_new', [
    'as'=> 'createhotel',
    'uses'=> 'AdminController@createhotel'
]);
// SAVING THE HOTEL ADMINISTRATOR
Route::post('/hoteladmin_save', [
    'as'=> 'saveadmin',
    'uses'=> 'AdminController@saveadmin'
]);


// -------- GUEST -------------
// DISPLAYS GUEST EDIT PROFILE
Route::get('/profedit', [
    'as'=> 'guestedit',
    'uses'=> 'AdminController@guestedit'
]);
// DISPLAYS GUEST TRANSACTIONS
Route::get('/transactions', [
    'as'=> 'transac',
    'uses'=> 'AdminController@transac'
]);


// ------------- HOTEL ADMIN ------------
// DISPLAYS THE REQUESTS
Route::get('/view_requests', [
    'as'=> 'viewrequests',
    'uses'=> 'AdminController@viewrequests'
]);
// DISPLAYS THE CATEGORY
Route::get('/view_category', [
    'as'=> 'viewcategory',
    'uses'=> 'AdminController@viewcategory'
]);
// CREATE NEW CATEGORY
Route::get('/catcreate_new', [
    'as'=> 'createcategory',
    'uses'=> 'CategoriesController@createcategory'
]);
// DISPLAYS THE ROOMS
Route::get('/view_room', [
    'as'=> 'viewroom',
    'uses'=> 'AdminController@viewroom'
]);
// CREATE NEW ROOMS
Route::get('/roomcreate_new', [
    'as'=> 'createroom',
    'uses'=> 'RoomsController@createroom'
]);
// DISPLAYS AND EDIT GENERAL INFORMATION
Route::get('/generalinfo', [
    'as'=> 'geninfo',
    'uses'=> 'HotelsController@geninfo'
]);
// DISPLAYS AND EDIT DISPLAY INFORMATION
Route::get('/displayinfo', [
    'as'=> 'dispinfo',
    'uses'=> 'HotelsController@dispinfo'
]);
// DISPLAYS AND EDIT GALLER IMAGE
Route::get('/galleryinfo', [
    'as'=> 'galinfo',
    'uses'=> 'HotelsController@galinfo'
]);
// DISPLAYS AND EDIT CONTACT DETAILS
Route::get('/contactinfo', [
    'as'=> 'coninfo',
    'uses'=> 'HotelsController@coninfo'
]);
// DISPLAYS THE BOOKINGS REPORT
Route::get('/bookingsreport', [
    'as'=> 'repinfo',
    'uses'=> 'HotelsController@repinfo'
]);
// DISPLAYS THE MAP CONFIGURATION
Route::get('/configuremap', [
    'as'=> 'map',
    'uses'=> 'HotelsController@map'
]);

