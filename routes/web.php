<?php
use Illuminate\Http\Request;
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

Route::get('/submit', function () {
    return view('submit');
});


Auth::routes(); //?

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);
 
    $link = tap(new App\Link($data))->save();
 
    return redirect('/');
});


// hien thi ra view thong qua controller
Route::get('/news', 'NewsController@index');

// hien thi ra view voi gia tri lay tu routing
Route::get('/about', function () {
    return view('about', ['name' => 'Học Web Chuẩn']);
});