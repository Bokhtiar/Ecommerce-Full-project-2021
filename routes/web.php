<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    $products = App\Models\Product::where('status',1)->get();
    $blogs = App\Models\Blog::where('status',1)->take(3)->get();
    return view('User.UserDashboard',compact('blogs','products'));
});
//logout
Route::get('logout', [App\Http\Controllers\User\UserDashboardController::class, 'logout'])->name('logout');

//header manus
Route::get('about-bjc', [App\Http\Controllers\User\UserDashboardController::class, 'about_us'])->name('about-bjc');
Route::get('product-detail/{slug}', [App\Http\Controllers\User\ProductController::class, 'product_details']);
Route::get('all-video', [App\Http\Controllers\User\VideoController::class, 'index'])->name('all-video');
Route::get('dealers', [App\Http\Controllers\User\DealersController::class, 'index'])->name('dealers');
Route::get('shops', [App\Http\Controllers\User\shopController::class, 'index'])->name('shops');
Route::post('store/valuation', [App\Http\Controllers\User\ValuationController::class, 'store'])->name('store/valuation');
Route::post('subscribe', [App\Http\Controllers\User\SubscribeController::class, 'store'])->name('subscribe');

//categories product detiasl
Route::get('categories-product/{id}', [App\Http\Controllers\User\ProductController::class, 'categories_product']);

//cart_info
Route::group([ "middleware"=>['auth','user']],function(){
Route::get('add-to-cart/{id}', [App\Http\Controllers\User\CartController::class, 'add_to_cart']);
Route::get('cart-details', [App\Http\Controllers\User\CartController::class, 'cart_details'])->name('cart-details');
Route::post('porduct-quantiy/{id}', [App\Http\Controllers\User\CartController::class, 'quantity_update']);
Route::get('cart-delete/{id}', [App\Http\Controllers\User\CartController::class, 'destroy']);
});

//cheeckout_info
Route::group(["as"=>'checkout.', "prefix"=>'checkout',  "middleware"=>['auth','user']],function(){
    Route::get('create', [App\Http\Controllers\User\CheckoutController::class, 'create'])->name('create');
    Route::post('store', [App\Http\Controllers\User\CheckoutController::class, 'store'])->name('store');
});


//forum
Route::group(["as"=>'forum.', "prefix"=>'forum'],function(){
    Route::get('create', [App\Http\Controllers\User\ForumController::class, 'create'])->name('create')->middleware('auth');
    Route::post('store', [App\Http\Controllers\User\ForumController::class, 'store'])->name('store');
    Route::get('index', [App\Http\Controllers\User\ForumController::class, 'index'])->name('index');
    Route::get('view/{slug}', [App\Http\Controllers\User\ForumController::class, 'view'])->name('view');

    Route::post('comment-store', [App\Http\Controllers\User\CommentController::class, 'store'])->name('comment-store');
});


//artist
Route::group(["as"=>'artist.', "prefix"=>'artist'],function(){
    Route::get('blog/{id}', [App\Http\Controllers\User\ArtistCategoryController::class, 'all_blog']);
    Route::get('single-blog/{slug}', [App\Http\Controllers\User\ArtistCategoryController::class, 'single_blog']);
    Route::post('artist-blog-search', [App\Http\Controllers\User\ArtistCategoryController::class, 'search']);
});



//footer
Route::group(["as"=>'footer.', "prefix"=>'footer'],function(){
    Route::get('about-us', [App\Http\Controllers\User\FooterController::class, 'about'])->name('about');
    Route::get('service', [App\Http\Controllers\User\FooterController::class, 'service'])->name('service');
    Route::get('quote', [App\Http\Controllers\User\FooterController::class, 'quote'])->name('quote');
    Route::get('client-say', [App\Http\Controllers\User\FooterController::class, 'client_say'])->name('client-say');
    Route::get('why-chose-us', [App\Http\Controllers\User\FooterController::class, 'why_chose_us'])->name('why-chose-us');

});


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
//user area
Route::group(["as"=>'user.', "prefix"=>'user',  "middleware"=>['auth','user']],function(){
    Route::get('dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'create'])->name('dashboard');
});


Route::get('blogs', [App\Http\Controllers\User\BlogController::class, 'index'])->name('blogs');
Route::get('single-blog/{slug}', [App\Http\Controllers\User\BlogController::class, 'show']);
Route::get('blog-category/{slug}', [App\Http\Controllers\User\BlogController::class, 'blog_category']);
Route::post('blog-search', [App\Http\Controllers\User\BlogController::class, 'search']);



//admin area
Route::group(["as"=>'admin.', "prefix"=>'admin', "middleware"=>['auth','admin']],function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('profile-update', [App\Http\Controllers\Admin\SettingsController::class, 'update_profile'])->name('profile-update');
    Route::post('update-profile-store/{id}', [App\Http\Controllers\Admin\SettingsController::class, 'update_profile_store']);
    Route::get('reset-pass', [App\Http\Controllers\Admin\SettingsController::class, 'reset_pass'])->name('reset-pass');
    Route::post('change-password', [App\Http\Controllers\Admin\SettingsController::class, 'change_password']);
    Route::get('logout', [App\Http\Controllers\Admin\SettingsController::class, 'logout'])->name('logout');


    Route::group(["as"=>'category.', "prefix"=>'category'],function(){
        Route::get('all-category', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('all-category');
        Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('add-category');
        Route::post('update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
        Route::get('active/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'active']);
        Route::get('inactive/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'inactive']);
        Route::get('delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);
    });

    Route::group(["as"=>'subcategory.', "prefix"=>'subcategory'],function(){
        Route::get('all-subcategory', [App\Http\Controllers\Admin\SubCategoryController::class, 'create'])->name('all-subcategory');
        Route::post('add-subcategory', [App\Http\Controllers\Admin\SubCategoryController::class, 'store'])->name('add-subcategory');
        Route::post('update/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'update']);
        Route::get('active/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'active']);
        Route::get('inactive/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'inactive']);
        Route::get('delete/{id}', [App\Http\Controllers\Admin\SubCategoryController::class, 'delete']);
    });


    Route::group(["as"=>'artistCategory.', "prefix"=>'artistCategory'],function(){
        Route::get('all-artistCategory', [App\Http\Controllers\Admin\ArtistCategoryController::class, 'create'])->name('all-artistCategory');
        Route::post('add-artistCategory', [App\Http\Controllers\Admin\ArtistCategoryController::class, 'store'])->name('add-artistCategory');
        Route::post('update/{id}', [App\Http\Controllers\Admin\ArtistCategoryController::class, 'update']);
        Route::get('active/{id}', [App\Http\Controllers\Admin\ArtistCategoryController::class, 'active']);
        Route::get('inactive/{id}', [App\Http\Controllers\Admin\ArtistCategoryController::class, 'inactive']);
        Route::get('delete/{id}', [App\Http\Controllers\Admin\ArtistCategoryController::class, 'delete']);
    });


    Route::group(["as"=>'dealer.', "prefix"=>'dealer'],function(){
        Route::get('all-dealer', [App\Http\Controllers\Admin\DealerController::class, 'create'])->name('all-dealer');
        Route::post('add-dealer', [App\Http\Controllers\Admin\DealerController::class, 'store'])->name('add-dealer');
        Route::post('update-dealer/{id}', [App\Http\Controllers\Admin\DealerController::class, 'update']);
        Route::get('active/{id}', [App\Http\Controllers\Admin\DealerController::class, 'active']);
        Route::get('inactive/{id}', [App\Http\Controllers\Admin\DealerController::class, 'inactive']);
        Route::get('delete/{id}', [App\Http\Controllers\Admin\DealerController::class, 'delete']);
    });


    Route::group(["as"=>'artist.', "prefix"=>'artist'],function(){
        Route::get('all-artist', [App\Http\Controllers\Admin\ArtistController::class, 'create'])->name('all-artist');
        Route::post('add-artist', [App\Http\Controllers\Admin\ArtistController::class, 'store'])->name('add-artist');
        Route::post('update/{id}', [App\Http\Controllers\Admin\ArtistController::class, 'update']);
        Route::get('active/{id}', [App\Http\Controllers\Admin\ArtistController::class, 'active']);
        Route::get('inactive/{id}', [App\Http\Controllers\Admin\ArtistController::class, 'inactive']);
        Route::get('delete/{id}', [App\Http\Controllers\Admin\ArtistController::class, 'delete']);
    });


    Route::group(["as"=>'blogCategory.', "prefix"=>'blogCategory'],function(){
        Route::get('all-blogcategory', [App\Http\Controllers\Admin\BlogCategoryController::class, 'create'])->name('all-blogcategory');
        Route::post('add-blogcategory', [App\Http\Controllers\Admin\BlogCategoryController::class, 'store'])->name('add-blogcategory');
        Route::get('active/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'active']);
        Route::get('inactive/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'inactive']);
        Route::post('update/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'delete']);
    });

    Route::group(["as"=>'blog.', "prefix"=>'blog'],function(){
        Route::get('all-blog', [App\Http\Controllers\Admin\blogController::class, 'create'])->name('all-blog');
        Route::post('add-blog', [App\Http\Controllers\Admin\blogController::class, 'store'])->name('add-blog');
        Route::post('update-blog/{id}', [App\Http\Controllers\Admin\blogController::class, 'update']);
        Route::get('inactive/{id}', [App\Http\Controllers\Admin\blogController::class, 'inactive']);
        Route::post('update/{id}', [App\Http\Controllers\Admin\blogController::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\Admin\blogController::class, 'delete']);
    });

    Route::group(["as"=>'video.', "prefix"=>'video'],function(){
        Route::get('videos', [App\Http\Controllers\Admin\VideoController::class, 'create'])->name('videos');
        Route::post('store', [App\Http\Controllers\Admin\VideoController::class, 'store'])->name('store');
        Route::post('update/{id}', [App\Http\Controllers\Admin\VideoController::class, 'update']);
        Route::get('active/{id}', [App\Http\Controllers\Admin\VideoController::class, 'active']);
        Route::get('inactive/{id}', [App\Http\Controllers\Admin\VideoController::class, 'inactive']);
        Route::get('delete/{id}', [App\Http\Controllers\Admin\VideoController::class, 'delete']);
    });


    Route::group(["as"=>'product.', "prefix"=>'product'],function(){
        Route::get('products', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('products');
        Route::post('store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('store');
        Route::post('update/{id}', [App\Http\Controllers\Admin\ProductController::class, 'update']);
        Route::get('active/{id}', [App\Http\Controllers\Admin\ProductController::class, 'active']);
        Route::get('inactive/{id}', [App\Http\Controllers\Admin\ProductController::class, 'inactive']);
        Route::get('delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'delete']);
    });

    //order
    Route::group(["as"=>'order.', "prefix"=>'order'],function(){
        Route::get('orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders');
        Route::get('complete/{id}', [App\Http\Controllers\Admin\OrderController::class, 'complete']);
        Route::get('incomplete/{id}', [App\Http\Controllers\Admin\OrderController::class, 'incomplete']);
        Route::get('view/{id}', [App\Http\Controllers\Admin\OrderController::class, 'view']);
        Route::post('porduct-quantiy/{id}', [App\Http\Controllers\Admin\OrderController::class, 'update']);
        Route::get('cart-delete/{id}', [App\Http\Controllers\Admin\OrderController::class, 'destroy']);
        Route::get('delete/{id}', [App\Http\Controllers\Admin\OrderController::class, 'delete']);
    });
    //quote
    Route::group(["as"=>'quote.', "prefix"=>'quote'],function(){
        Route::get('quotes', [App\Http\Controllers\Admin\QuoteController::class, 'index'])->name('quotes');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\QuoteController::class, 'destroy']);
    });

    Route::get('subscribe', [App\Http\Controllers\Admin\SubscribeController::class, 'index'])->name('subscribe');

});



