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
Auth::routes();

Route::get('/', function () {
    return view('frontend.produk');
});

Route::get('/login', function(){
  return view('frontend.login');
});

Route::get('/home', function(){
    return redirect('/redirecting');
});

Route::get('/redirecting', function(){
    if(Auth::user()->role == 'admin'){
        return redirect('admin');
    }
    elseif(Auth::user()->role == 'user'){
        return redirect('user');
    }
});

Route::get('register', 'RegisterController@formRegister');
Route::post('register','RegisterController@proccessRegister');


Route::group(['middleware' => 'role:user', 'prefix' => 'user', 'namespace' => 'User'], function(){
    Route::get('/', function(){
        return redirect('user/home');
    });
    Route::get('home', 'HomeController@index');
});

Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', function(){
        return redirect('admin/dashboard');
    });
    Route::get('dashboard', 'DashboardController@index');
});
