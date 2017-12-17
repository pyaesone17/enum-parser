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

Route::domain('api.enum-parser.test')->group(function () {
    Route::get('/{folder}/{file}',function ($folder, $file){
        $folder = ucfirst($folder);
        $file = ucfirst($file);
        $user = request()->user();
        
        $resource = "App\\Http\\Resources\\".$folder."\\".$file;
        return response( new $resource($user) );
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::group([ 'middleware' => 'auth'],function (){
    Route::get('/object/show',function (){
        $user = request()->user();
        $user->load('identity');

        $parsedUser = (new App\EnumParser\ProfileParser($user))->parse();
        // dd($parsedUser,$user);
        return view('object.show',compact('parsedUser'));
    });
    Route::resource('/profile','ProfileController');
});


Route::group([ 'middleware' => 'auth'],function (){
    Route::get('/{folder}/{file}',function ($folder, $file){
        return view($folder.'.'.$file);
    });
    Route::resource('/profile','ProfileController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

