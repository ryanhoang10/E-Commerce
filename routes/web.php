<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/users/{user}', [UserController::class, 'show']);
Route::get('/', [ProductController::class, 'index']);


// Route::get('/', function () {

//     return Inertia::render('Index', [
//         // 'products'  => Product::where('active', true)->get()->map(function ($product) {
//         //     return [
                
//         //     ];
//         // }),
//     ]);
// });

Route::get('/test', function() {
    return Inertia::render('Learnings/Welcome', [
        'name'  => 'Ryan Hoang',
        'frameworks' => [
            'Laravel', 'Vue', 'Inertia'
        ]
    ]);
});

Route::get('/test/users', function() {
    sleep(2);
    return Inertia::render('Learnings/Users', [
        'name'  => 'Ryan Hoang',
        'frameworks' => [
            'Laravel', 'Vue', 'Inertia'
        ]
    ]);
});

Route::get('/test/settings', function() {
    sleep(2);
    return Inertia::render('Learnings/Settings', [
        'name'  => 'Ryan Hoang',
        'frameworks' => [
            'Laravel', 'Vue', 'Inertia'
        ]
    ]);
});

Route::post('/test/logout', function() {
    dd('klogout');
});