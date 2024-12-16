<?php

use App\Http\Controllers\NewsController;
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

Auth::routes(['register' => true]);
Route::get('/contact-us', function () {
    return view('contact-us');
});
// Auth::routes();
Route::get('/', 'WelcomeController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('news', 'NewsController');
Route::delete('/unfeaturenews/{news}',  'NewsController@unfeaturenews')->name('unfeaturenews');
Route::get('/featurenews/{news}',  'NewsController@featurenews')->name('featurenews');
Route::get('/allnews', 'NewsController@allnews')->name('allnews');
Route::resource('events', 'EventController');
Route::delete('/unfeatureevent/{event}',  'EventController@unfeatureevent')->name('unfeatureevent');
Route::get('/featureevent/{event}',  'EventController@featureevent')->name('featureevent');
Route::get('/allevents', 'EventController@allevents')->name('allevents');
Route::resource('departments','DepartmentController');
Route::resource('departments.courses', 'CourseController')->shallow();
Route::get('/programs', 'WelcomeController@programs')->name('programs');
Route::get('/partners', 'WelcomeController@partners')->name('partners');
Route::resource('tops', 'TopController');
Route::resource('ads', 'AdController');
Route::delete('/unfeaturead/{ad}',  'AdController@unfeaturead')->name('unfeaturead');
Route::get('/featuread/{ad}',  'AdController@featuread')->name('featuread');
Route::get('/allads', 'AdController@allads')->name('allads');
Route::resource('categories', 'CategoryController');
Route::get('/sdgs', 'WelcomeController@sdgs')->name('sdgs');
Route::get('/sdgs/{category}', 'WelcomeController@sdgshow')->name('sdgs.show');
