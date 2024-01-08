<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::get("/",[HomeController::class,"index"]);

Route::get("/about",function(){
    return view('pages.about');
});

Route::get("/contact",function(){
    return view('pages.contact');
});

Route::get("/testimonials",function(){
    return view('pages.testimonials');
});

Route::get("/services",function(){
    return view('pages.services');
});

  Route::middleware([
     'auth:sanctum',
     config('jetstream.auth_session'),
     'verified',
 ])->group(function () {
     Route::get('/dashboard', function () {
         return view('dashboard');
     })->name('dashboard');
 });
