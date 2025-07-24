<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\route_controller;
use App\Http\Controllers\post_controller;
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

// Route::get('/user/profile' , function(){
//     return view('name_view');
// })->name('profile');

// // Controller Route
// Route::controller(route_controller::class)->group(function(){
//     Route::get('/url_1' , 'home');
//     Route::get('/url_2' , 'Us');
// });



// // ============== Blade Templates ==============
// Route::get('/template' , function(){
//     return view('template_view' , ['name' => 'Ahmad',
// ]);
// });

// Route::controller(post::class)->group(function()
// {
//     Route::get('/posts' , 'show');
// }
// );

// Route::get('/post' , [post_controller::class , 'show']);
// Route::DELETE('/post/{id}' , [post_controller::class,'destroy'])->name('post.destroy');
// Route::get('/post/{id}/edit' , [post_controller::class , 'edit'])->name('post.edit');
// Route::put('/post/{id}' , [post_controller::class , 'update'])->name('post.update');

// ========================================
//  Relationship - Hasmany
// -- Posts and Tags
// -- making two models posts and tags
// -- their migrations
// -- seeding 
// -- In model defining the relation
// -- A blade template to show the quries data
use App\Http\Controllers\post_tag_controller;
use App\Http\Controllers\formcontroller;

Route::get('/' , [post_tag_controller::class , 'index'])->name('posts.index');

Route::get('/taged_user' , [post_tag_controller::class , 'taged_users'])->name('tags.post');

Route::get('/form' , [formcontroller::class , 'index'])->name('formRoute');
Route::post('/register' , [formcontroller::class , 'register'])->name('form.submit');




// ===================== Route Binding ====================

use App\Models\posts;
Route::get('/posts/{p}' , function(posts $p)
{
    return $p->title;
});


Route::get('/tags/{tag_id}' , [formcontroller::class , 'tag_show']);