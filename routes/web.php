<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\bookingform;
use App\Model\book;

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
     Route::resource('trainform', \App\Http\Controllers\trainform::class);

     Route::resource(
        'user',
        \App\Http\Controllers\UserController::class
     );
 });

 Route::get("/book",function(){
    return view('testimonials');
 });

 Route::post("/book",function(){
form::book([
    'name' => request ("name"),
    'email'=>request("email"),
    'card'=>request("card"),
    'departure'=>request("departure"),
    'destination'=>request("destination"),
    'time_slot'=>request("time_slot"),
    'class'=>request("class"),
    'price'=>request("price"),
]);
return view('/book');
 });