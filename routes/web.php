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

// Home


Route::get('/', function () {

    $courses = App\Course::all();
   
    return view('pages.home',compact('courses'));
})->name('home');


Route::get('/about', function() {
$id = 2;
 $page1 = App\Page::where('id','=', $id)->first();
    return view('pages.about',compact('page1'));
})->name('about');

Route::get('/statement', function () {
    $id = 3;
 $page2 = App\Page::where('id','=', $id)->first();

 $category_id = 3;
 $boxes = App\Box::where('category_id','=', $category_id)->get();

    return view('pages.access-statement',compact('page2','boxes'));
})->name('Access and Participation');

Route::get('/course/{title}', function ($title) {
   
     $course = App\Course::where('title','=', $title)->first();


     $category_id = 4;
    $boxes = App\Box::where('category_id','=', $category_id)->get();
    return view('pages.course',compact('course','boxes'));
})->name('course');

Route::get('/how-to-apply', function () {
    return view('pages.howtoapply');
})->name('How to apply');

Route::get('/courses', function () {
    $courses = App\Course::all();
     return view('pages.courses',compact('courses'));
})->name('courses');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::get('/policies', function () {
    $policies = App\Policy::all();
   
    return view('pages.policies',compact('policies'));
})->name('policies');

//end

//contact form routes
 Route::get('contacts', 'ContactController@contact');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);
Route::get('/search','SearchController@results')->name('search');




//end



Auth::routes([
    'reset' => false,
    'verify' => false,
    'register' => false,
]);

// Route::get('/', 'HomeController@index')->name('home');


Route::group(['prefix' => 'fuzzy'], function () {
    Voyager::routes();
});
