<?php

use App\Http\Controllers\FoodsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/posts', [PostsController::class, 'index']);

Route::resource('/foods', FoodsController::class);    

// Route::get('/products', [ProductsController::class, 'index'])->name('products');
// Route::get('/products/{id}', [ProductsController::class, 'detail'])->where(['id' => '[0-9]*']);
// Route::get('/', function () {
//     return view('home');
//     // return env('MY_NAME');
// });

// Route::get('/user', function () {
//     return 'This is a user page';
// });

// Route::get('/foods', function () {
//     return ['sasimi', 'meat', 'cat', 'dog'];
// });

// Route::get('/aboutMe', function () {
//     return response()->json(
//         [
//             'name' => 'dat',
//             'age' => 24
//         ]
//     );
// });

// Route::get('/something', function () {
//     return redirect('/user');
// });