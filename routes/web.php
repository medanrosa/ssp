<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\trainform;
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

Route::get("/", [HomeController::class, "index"]);

Route::get("/about", function () {
    return view('pages.about');
});

Route::get("/contact", function () {
    return view('pages.contact');
});

Route::get("/testimonials", function () {
    return view('pages.testimonials');
});

Route::get('/services', [PlanController::class, 'index']);

Route::get("/payment", function () {
    return view('pages.payment');
});

Route::get("mybooking", [trainform::class, 'myBookings']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('trainform', trainform::class);

    Route::resource('user', UserController::class);
});

Route::get("/book", function () {
    return view('testimonials');
});

Route::post("/book", [trainform::class, 'store']);

Route::middleware("auth")->group(function () {
    Route::get('plans', [PlanController::class, 'index']);
    Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
    Route::get('/subscription/success', [UserController::class, 'sub_type'])->name('subscription.success');
    Route::get('/analytics', [UserController::class, 'analytics'])->name('analytics');

    Route::get('/ticketgen', function () {
        return view('ticketgen');
    })->name('ticketgen');

    Route::resource('trainform', trainform::class);
    Route::get('ticketgen/{id}', [trainform::class, 'showTicket'])->name('ticketgen');

    Route::get('/mybookings', [trainform::class, 'myBookings'])->name('mybookings');
});
