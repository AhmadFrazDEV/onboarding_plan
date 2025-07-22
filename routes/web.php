<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\route_controller;
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

// Route::get('/user/{id}' , function($id)
// {
//     echo 'user id is' . $id;
// });

// rout for optional parametr
// Route::get('/user_name/{name?}', function($name = null) {
//     if (empty($name)) {
//         echo 'Not logged in';
//     } else {
//         echo "Welcome {$name}";  
//     }
// });

// Routing via controllers
// Route::get('/home/welcome' , [test_controller::class , 'home']);
// Route::get('/about' , [test_controller::class , 'Us']);

// // controller with paramerters
// Route::get('get_parameter/{name}/{id?}' , [test_controller::class , 'show']);

// route::controller(test_controller::class)->group(function(){
//     route::get('/home' , 'welcome');
// });



//  ========= Routes Groups ============
// Name Routes

Route::get('/user/profile' , function(){
    return view('name_view');
})->name('profile');

// Controller Route
Route::controller(route_controller::class)->group(function(){
    Route::get('/url_1' , 'home');
    Route::get('/url_2' , 'Us');
});





