<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeerEditorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\UserRoleController;
use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\ArticleTypeController;


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

    /* Route::get('/', function () {
        return view('welcome');
    });

Route::get('/', [UserController::class, 'Index']);
*/
//Route::get('/', function () {
    //dd(view('welcome'));
    //dd(view('frontend.g_main'));
    //return view('frontend.frontendmain');
    Route::get('/', [ArticleController::class, 'LoadFeaturedArticlesMain'])->name('main');
    Route::get('/journals', [ArticleController::class, 'LoadAllArticlesMain'])->name('main.journals');
    Route::get('/journals/ulist', [ArticleController::class, 'LoadAllArticlesMainU'])->name('main.journals.ulist');
    Route::get('/journals/p', [ArticleController::class, 'LoadAllArticlesMainP'])->name('main.journals.p');
    Route::get('/journals/data', [ArticleController::class, 'LoadAllArticleData'])->name('main.journals.data');

    //return view('welcome');
//});

/* Route::get('{any}', [UserController::class, 'Index'])->where('any','/*', '.*'); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// to protect pages, middleware was created with role, so that specific pages will only exists on users.
Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    //Users
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::get('/admin/active-users', [AdminController::class, 'ActiveUsers'])->name('admin.active-users');

    //Journals - don't get confused with the term article here.
    Route::get('/admin/active-articles', [AdminController::class, 'ActiveArticles'])->name('admin.active-articles');
    Route::get('/admin/new-article', [AdminController::class, 'NewArticle'])->name('admin.new-article');//loads the form page
    Route::get('/admin/new-article-wizard', [AdminController::class, 'NewArticleWizard'])->name('admin.new-article-wizard');//loads the form page
    // Route::get('/admin/article/data', [AdminController::class, 'LoadArticleData'])->name('admin.article.data'); // loads all article data in console
    Route::get('/admin/article/edit', [AdminController::class, 'EditArticleData'])->name('admin.article.edit'); // allows edit of data.

    //Articles - these are the pages for news, announcement and additional single page articles.
    Route::get('/admin/active-banners', [AdminController::class, 'ActiveBanners'])->name('admin.active-banners');
    Route::get('/admin/new-banner', [AdminController::class, 'NewBanner'])->name('admin.new-banner');
    Route::get('/admin/active-pages', [AdminController::class, 'ActivePages'])->name('admin.active-pages');
    Route::get('/admin/new-page', [AdminController::class, 'NewPage'])->name('admin.new-page');

    //Other Entities
    Route::get('/admin/active-index', [AdminController::class, 'ActiveIndexes'])->name('admin.active-indexes');
    Route::get('/admin/new-index', [AdminController::class, 'NewIndex'])->name('admin.new-index');
    Route::get('/admin/active-publishers', [AdminController::class, 'ActivePublishers'])->name('admin.active-publishers');
    Route::get('/admin/new-publisher', [AdminController::class, 'NewPublisher'])->name('admin.new-publisher');
    Route::get('/admin/active-organizations', [AdminController::class, 'ActiveOrganizations'])->name('admin.active-organizations');
    Route::get('/admin/new-organization', [AdminController::class, 'NewOrganization'])->name('admin.new-organization');

    //Record Creator
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::post('/admin/article/store', [AdminController::class, 'AdminArticleStore'])->name('admin.article.store');
    Route::post('/admin/article/update', [AdminController::class, 'AdminArticleUpdate'])->name('admin.article.update');
    Route::post('/admin/banner/store', [AdminController::class, 'AdminBannerStore'])->name('admin.banner.store');
    Route::post('/admin/page/store', [AdminController::class, 'AdminPageStore'])->name('admin.page.store');

}); // end group


/* Route::middleware(['auth','role:researcher'])->group(function(){
    Route::get('/researcher/dashboard', [PeerEditorController::class, 'ResearcherDashboard'])->name('researcher.dashboard');
}); // end group peer reviewer and editor */

/* Route::middleware(['auth','role:author'])->group(function(){
    Route::get('/author/dashboard', [UserController::class, 'AuthorDashboard'])->name('author.dashboard');
}); // end group user
 */

/* Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login'); */
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
//Route::get('/login', [AdminController::class, 'TempLogin'])->name('login');
