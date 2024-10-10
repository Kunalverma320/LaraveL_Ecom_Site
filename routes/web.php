<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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



Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::post('user/login', [FrontendController::class, 'loginSubmit'])->name('login.submit');
Route::get('user/logout', [FrontendController::class, 'logout'])->name('user.logout');
Route::post('user/register', [FrontendController::class, 'registerSubmit'])->name('register.submit');


//cart show
Route::get('Cart', [FrontendController::class, 'Cart'])->name('Cart.Page');

//shop_checkout
Route::get('shop_checkout', [FrontendController::class, 'shop_checkout'])->name('Cartcheckout.Page');
Route::get('shop_order_complete', [FrontendController::class, 'shop_order_complete'])->name('shop_order_complete.Page');
    Route::post('user/register', [FrontendController::class, 'registerSubmit'])->name('register.submit');




Route::post('/cart/add', [FrontendController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [FrontendController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [FrontendController::class, 'update'])->name('cart.update');






//header page show count
Route::get('/cart/count', [FrontendController::class, 'getCartCount'])->name('cart.count');


Route::get('storage-link',[AdminController::class,'storageLink'])->name('storage.link');
Route::get('cache-clear', function () {
    Artisan::call('optimize:clear');
    request()->session()->flash('success', 'Successfully cache cleared.');
    return redirect()->back();
})->name('cache.clear');

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/file-manager', function () {
        return view('backend.layouts.file-manager');
    })->name('file-manager');
    // user route
    Route::resource('users', 'UsersController');
    // Banner
    Route::resource('banner', 'BannerController');
    // Brand
    Route::resource('brand', 'BrandController');
    // Profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin-profile');
    Route::post('/profile/{id}', [AdminController::class, 'profileUpdate'])->name('profile-update');
    // Category
    Route::resource('/category', 'CategoryController');
    // Product
    Route::resource('/product', 'ProductController');
    // Ajax for sub category
    Route::post('/category/{id}/child', 'CategoryController@getChildByParent');
    // POST category
    Route::resource('/post-category', 'PostCategoryController');
    // Post tag
    Route::resource('/post-tag', 'PostTagController');
    // Post
    Route::resource('/post', 'PostController');
    // Message
    Route::resource('/message', 'MessageController');
    Route::get('/message/five', [MessageController::class, 'messageFive'])->name('messages.five');

    // Order
    Route::resource('/order', 'OrderController');
    // Shipping
    Route::resource('/shipping', 'ShippingController');
    // Coupon
    Route::resource('/coupon', 'CouponController');
    // Settings
    Route::get('settings', [AdminController::class, 'settings'])->name('settings');
    Route::post('setting/update', [AdminController::class, 'settingsUpdate'])->name('settings.update');

    // Notification
    Route::get('/notification/{id}', [NotificationController::class, 'show'])->name('admin.notification');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('all.notification');
    Route::delete('/notification/{id}', [NotificationController::class, 'delete'])->name('notification.delete');
    // Password Change
    Route::get('change-password', [AdminController::class, 'changePassword'])->name('change.password.form');
    Route::post('change-password', [AdminController::class, 'changPasswordStore'])->name('change.password');
});


Route::group(['prefix' => '/user', 'middleware' => ['user']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('user');
});
