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


Route::get('/addnewuser-open', 'UsersController@openAddNewUser')->name('addnewuser-open');
Route::post('/addnewuser', 'UsersController@addNewUser')->name('addnewuser');

// Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/play-video{video_id}', 'HomeController@playVideo')->name('play-video');
Route::get('/category{category_id}', 'HomeController@categoryWise')->name('category');

Route::get('/offers{country_name}', 'HomeController@listCountryOffers')->name('country_wise');
// Route::post('/login', 'HomeController@doLogin')->name('country_wise');




// FOR ADMIN PANEL

Route::group(['prefix' => '/adminpanel'], function(){
    Auth::routes();
});

Route::get('/adminpanel/dashboard', 'Backend\AdminPanelController@dashboard')->name('dashboard');


//For Category Controller
Route::get('/adminpanel/view-all-category', 'Backend\CategoryController@index')->name('view.category');
Route::get('/adminpanel/add-new-category', 'Backend\CategoryController@create')->name('add.category');
Route::post('/adminpanel/store-category', 'Backend\CategoryController@store')->name('categories.addnew.category');
Route::get('/adminpanel/edit-category/{id}', 'Backend\CategoryController@edit')->name('edit.category');
Route::post('/adminpanel/update-category/{id}', 'Backend\CategoryController@update')->name('categories.update.category');
Route::delete('/adminpanel/delete-category/{id}', 'Backend\CategoryController@destroy')->name('categories.delete.category');



//For Video Controller
Route::get('/adminpanel/view-all-video', 'Backend\VideoController@index')->name('view.video');
Route::get('/adminpanel/add-new-video', 'Backend\VideoController@create')->name('add.video');
Route::post('/adminpanel/store-videos', 'Backend\VideoController@store')->name('videos.addnew.video');
Route::get('/adminpanel/edit-video/{id}', 'Backend\VideoController@edit')->name('edit.video');
Route::post('/adminpanel/update-video/{id}', 'Backend\VideoController@update')->name('videos.update.video');
Route::delete('/adminpanel/delete-video/{id}', 'Backend\VideoController@destroy')->name('videos.delete.video');





// Ajax Data
Route::get('load-more-data','HomeController@loadMoreData');
Route::get('load-more-offer','HomeController@loadMoreOffer');


// SEARCH AJAX 
// Route::get('search', 'HomeController@searchAjax');
Route::get('search-now', 'HomeController@searchAjax')->name('search-now');

Route::get('search-product{coupon_id}', 'HomeController@searchResult')->name('search-result');

//GET OFFERS API
Route::get('get-offers/{page_no}', 'HomeController@getOffers')->name('get-offers');

