<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
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

Route::get('/clear-all', function () {
    Artisan::call('route:cache');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

Route::get('/admin/login', [UserController::class, 'login']);
Route::post('admin/post-login', [UserController::class, 'postLogin']);


Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/contact-us', [DashboardController::class, 'contactUs']);
    Route::get('/request-quote', [DashboardController::class, 'requestQuote']);
    Route::get('/newsletter', [DashboardController::class, 'newsletter']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::resource('blog-categories', BlogCategoryController::class);
    Route::resource('blogs', BlogController::class);
});



Route::get('/', [HomeController::class, 'getIndex']);
Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/leadership', function () {
    return view('leadership');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/auto-clave', function () {
    return view('products.auto_clave');
});
Route::get('/bacteriological-incubator', function () {
    return view('products.bacteriological_incubator');
});
Route::get('/bod-incubator', function () {
    return view('products.bod_incubator');
});
Route::get('/cold-chamber', function () {
    return view('products.cold_chamber');
});
Route::get('/deep-freezer', function () {
    return view('products.deep_freezer');
});
Route::get('/dual-chamber', function () {
    return view('products.dual_chamber');
});
Route::get('/eco-smart-walk-in-stability-chamber', function () {
    return view('products.eco_smart_walk_in_stability_chamber');
});
Route::get('/hot-air-oven', function () {
    return view('products.hot_air_oven');
});
Route::get('/muffle-furnace', function () {
    return view('products.muffle_furnace');
});
Route::get('/multi-channel-scanner', function () {
    return view('products.multi_channel_scanner');
});
Route::get('/nabl-lab', function () {
    return view('products.nabl_lab');
});
Route::get('/photostability-chamber', function () {
    return view('products.photostability_chamber');
});
Route::get('/portable-calibration', function () {
    return view('products.portable_calibration');
});
Route::get('/portable-dehumidifiers', function () {
    return view('products.portable_dehumidifiers');
});
Route::get('/stability-chamber', function () {
    return view('products.stability_chamber');
});
Route::get('/humidity-chamber', function () {
    return view('products.humidity_chamber');
});
Route::get('/ultra-low-freezer', function () {
    return view('products.ultra_low_freezer');
});
Route::get('/vaccum-oven', function () {
    return view('products.vaccum_oven');
});
Route::get('/walk-in-stability-chamber', function () {
    return view('products.walk_in_stability_chamber');
});
Route::get('/bod-incubator', function () {
    return view('products.bod_incubator');
});
Route::get('/accreditation', function () {
    return view('accreditation');
});
Route::get('/salient-feature', function () {
    return view('features.salient_feature');
});
Route::get('/software-feature', function () {
    return view('features.software_feature');
});
Route::get('/equipment-feature', function () {
    return view('features.equipment_feature');
});
Route::get('/installation-documentation', function () {
    return view('features.installation_documentation');
});
Route::get('/amc', function () {
    return view('amc');
});
Route::get('/blogs',[HomeController::class, 'getBlogs']);

Route::get('/blog',function () {
     return view('blog');
 });
 
Route::get('/events', function () {
    return view('events');
});
Route::get('/partners', function () {
    return view('partners');
});

Route::get('/contact', [HomeController::class, 'getContactUs']);
Route::post('save/contact-us', [HomeController::class, 'saveContactUs']);
Route::post('save/requirement-quote', [HomeController::class, 'requirementQuote']);
Route::post('newsletter', [HomeController::class, 'newLetter']);

Route::any('testHtmlDoc', [DocumentController::class, 'testHtmlDoc']);
Route::any('test-email', [HomeController::class, 'testEmail']);

Route::get('/blogs/{slug}', [App\Http\Controllers\HomeController::class, 'blogDetail'])->name('blog.show');
Route::get('/blog-detail', function () {
    return view('blog.blog_detail');
});
Route::get('/the-ultimate-guide-to-choosing-the-best-bod-incubator-for-your-lab', function () {
    return view('blog.the_ultimate_guide_to_choosing_the_best_bod_incubator_for_your_lab');
});
Route::get('/the-future-of-stability-testing-trends-to-watch-out-for', function () {
    return view('blog.the_future_of_stability_testing_trends_to_watch_out_for');
});
Route::get('/from-batch-to-batch-consistency-the-role-of-stability-chambers-in-quality-control', function () {
    return view('blog.from_batch_to_batch_consistency_the_role_of_stability_chambers_in_quality_control');
});
Route::get('/stay-compliant-with-kesar-control-systems-stability-chambers', function () {
    return view('blog.stay_compliant_with_kesar_control_systems_stability_chambers');
});
Route::get('/stability-testing-made-simple-a-guide-for-busy-pharmaceutical-labs', function () {
    return view('blog.stability_testing_made_simple_a_guide_for_busy_pharmaceutical_labs');
});
Route::get('/ways-stability-chambers-can-reduce-costs', function () {
    return view('blog.ways_stability_chambers_can_reduce-costs');
});
Route::get('/how-to-choose-the-perfect-stability-chamber', function () {
    return view('blog.how_to_choose_the_perfect_stability_chamber');
});
Route::get('/benefits-of-using-kesar-controls-bod-incubators', function () {
    return view('blog.benefits_of_using_kesar_controls_bod_incubators');
});

Route::get('/{slug}', [HomeController::class, 'getIndexPage']);
Route::get('/{slug}/{subslug}', [HomeController::class, 'getIndexPage']);