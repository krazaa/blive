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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontpage');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product/{id}', 'frontend\ProductsController@ShowProduct')->name('product');
Route::get('/package/{id}', 'frontend\PackagesController@ShowPackage')->name('package');
Route::get('/about/{id}', 'frontend\AboutController@Show')->name('about');
Route::get('/page/{id}', 'frontend\AboutController@ShowPages')->name('page');
Route::get('/ranks/{id}', 'frontend\RanksController@Show')->name('ranks');
Route::get('/project/{id}', 'frontend\ProjectsController@Show')->name('project');
Route::get('/faqs', 'frontend\FaqsController@index')->name('faqs');
Route::get('/contact', 'backend\ContactController@create')->name('contact');
Route::post('/contact', 'backend\ContactController@store')->name('contact');

Route::group( [ 'prefix' => 'admin' ], function(){

	Route::resource('/settings', 'admin\SettingController');
	Route::resource('/fpv', 'FpvideosController');
	Route::resource('/slider', 'SliderController');
	Route::resource('/members', 'MembersController');
	Route::resource('/products', 'ProductsController');
	Route::resource('/projects', 'ProjectsController');
	Route::resource('/packages', 'PackagesController');
	Route::resource('/ranks', 'RanksController');
	Route::resource('/pages', 'PagesController');
	Route::resource('/news', 'NewsController');
	Route::resource('/faqs', 'FaqsController');
	Route::resource('/certificates', 'CertificatesController');
	
   
});

Route::get('newsletter',['uses'=>'NewsLetterController@create', 'as'=>'newsletter']);
Route::post('apply',['uses'=>'NewsLetterController@store', 'as'=>'apply']);
Route::post('apply-two',[
    'uses'=>'NewsLetterController@autoMail',
    'as'=>'apply-two'
]);



