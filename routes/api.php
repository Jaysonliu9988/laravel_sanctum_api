<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::get('products', function(){
//     return Product::all();
// });

Route::get('/products', [ProductController::class, 'index']);


// Route::post('/products', function() {
//     return Product::create([
//         'name' => 'Product One',
//         'slug' => 'product-one',
//         'descripton' => 'This is product one',
//         'price' => '99.99'
//     ]);
// });

Route::post('/products', [ProductController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
