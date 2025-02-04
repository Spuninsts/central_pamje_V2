<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\UserRoleController;
use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\ArticleTypeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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

    // - NOT LOGGED IN VIEW --//
    Route::get('/', [ArticleController::class, 'LoadFeaturedArticlesMain'])->name('main'); //home main page
    Route::get('/aboutus', [ArticleController::class, 'LoadAllAboutUsMain'])->name('main.aboutus');
    Route::get('/journals', [ArticleController::class, 'LoadAllArticlesMain'])->name('main.journals');
    Route::get('/journals/alphabet', [ArticleController::class, 'LoadArticleAlphabeticalMain'])->name('main.journals.alphabet');
    Route::get('/journals/category', [ArticleController::class, 'LoadArticleCategoryMain'])->name('main.journals.category');
    Route::get('/resources/editors', [ArticleController::class, 'LoadEditorMain'])->name('main.resources.editor');
    Route::get('/resources/researchers', [ArticleController::class, 'LoadResearcherMain'])->name('main.resources.researcher');
    Route::get('/resources/authors', [ArticleController::class, 'LoadAuthorMain'])->name('main.resources.author');
    Route::get('/resources/reviewers', [ArticleController::class, 'LoadReviewerMain'])->name('main.resources.reviewer');
    Route::get('/newsannouncements', [ArticleController::class, 'LoadNewsAnnouncementMain'])->name('main.news.announcement');
    Route::get('/contactus', [ArticleController::class, 'LoadContactUsMain'])->name('main.contact.us');
    //Route::get('/journals/ulist', [ArticleController::class, 'LoadAllArticlesMainU'])->name('main.journals.ulist');
    Route::get('/journals/data', [ArticleController::class, 'LoadAllArticleData'])->name('main.journals.data');
    Route::get('/page/data', [ArticleController::class, 'LoadAllPageData'])->name('main.page.data'); // displaying news specific

    //Top SEARCH FUNCTION
    Route::get('/search', [SearchController::class, 'SearchContents'])->name('main.search');

    // SEARCH
    //return view('welcome');
    //});

    /* Route::get('{any}', [UserController::class, 'Index'])->where('any','/*', '.*');
        Route::get('/', function () {
            return view('frontend/frontendmain');
        })->middleware(['auth', 'verified'])->name('dashboard');
    */

Route::middleware(['auth','verified'])->group(function () {
    //Route::get('/', [ArticleController::class, 'LoadFeaturedArticlesMain'])->name('main'); //home main page
    Route::get('/dashboard', [ArticleController::class, 'LoadFeaturedArticlesMainAuth'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/peerauthor', [UserController::class, 'AuthorReviewer'])->name('author.reviewer');
});

require __DIR__.'/auth.php';

// to protect pages, middleware was created with role, so that specific pages will only exists on users.
Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    //Users
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::get('/admin/active/users', [UserController::class, 'ActiveUsers'])->name('admin.active-users');
    Route::get('/admin/new/user', [UserController::class, 'NewUser'])->name('admin.new-user');
    Route::get('/admin/edit/user', [AdminController::class, 'EditUserData'])->name('admin.user.edit'); // allows edit of data.
    Route::get('/admin/edit/members', [UserController::class, 'EditUserMembership'])->name('admin.edit.members');


    //Journals - don't get confused with the term article here.
    Route::get('/admin/active/articles', [AdminController::class, 'ActiveArticles'])->name('admin.active-articles');
    Route::get('/admin/feature/articles', [AdminController::class, 'FeatureArticles'])->name('admin.feature-articles');
    Route::get('/admin/inactive/articles', [AdminController::class, 'InactiveArticles'])->name('admin.inactive-articles');
    Route::get('/admin/new/article', [AdminController::class, 'NewArticle'])->name('admin.new-article');//loads the form page
    //Route::get('/admin/new-article/wizard', [AdminController::class, 'NewArticleWizard'])->name('admin.new-article-wizard');//loads the form page
    //Route::get('/admin/article/data', [AdminController::class, 'LoadArticleData'])->name('admin.article.data'); // loads all article data in console
    Route::get('/admin/article/edit', [AdminController::class, 'EditArticleData'])->name('admin.article.edit'); // allows edit of data.

    //Articles - these are the pages for news, announcement and additional single page articles.
    Route::get('/admin/active/banners', [AdminController::class, 'ActiveBanners'])->name('admin.active-banners');
    Route::get('/admin/active/announcements', [AdminController::class, 'ActiveAnnouncements'])->name('admin.active-announcements');
    Route::get('/admin/active/resources', [AdminController::class, 'ActiveResources'])->name('admin.active-resources');
    Route::get('/admin/active/news', [AdminController::class, 'ActiveNews'])->name('admin.active-news');

    Route::get('/admin/new/banner', [AdminController::class, 'NewBanner'])->name('admin.new-banner'); // create new banner
    Route::get('/admin/active/pages', [AdminController::class, 'ActivePages'])->name('admin.active-pages');
    Route::get('/admin/new/page', [AdminController::class, 'NewPage'])->name('admin.new-page'); //new News and Announcmeents
    Route::get('/admin/banner/edit', [AdminController::class, 'EditBannerData'])->name('admin.banner.edit'); //edit banner
    Route::get('/admin/page/edit', [AdminController::class, 'EditPageData'])->name('admin.page.edit');
    //Route::get('/admim/page/subcategories/{page_category}', [AdminController::class, 'GetPageSubcategories']);

    //Other Entities
    Route::get('/admin/active/indexes', [AdminController::class, 'ActiveEntity'])->name('admin.active-indexes');
    Route::get('/admin/active/publishers', [AdminController::class, 'ActiveEntity'])->name('admin.active-publishers');
    Route::get('/admin/active/organizations', [AdminController::class, 'ActiveOrganization'])->name('admin.active-organizations');
    Route::get('/admin/new/index', [AdminController::class, 'NewIndex'])->name('admin.new-index');
    Route::get('/admin/new/publisher', [AdminController::class, 'NewPublisher'])->name('admin.new-publisher');
    Route::get('/admin/new/organization', [AdminController::class, 'NewOrganization'])->name('admin.new-organization');
    Route::get('/admin/entity/edit', [AdminController::class, 'EditEntityData'])->name('admin.entity.edit');
    Route::get('/admin/organization/edit', [AdminController::class, 'EditOrgData'])->name('admin.organization.edit');

    //Record Creator
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::post('/admin/article/store', [AdminController::class, 'AdminArticleStore'])->name('admin.article.store'); // add journal
    Route::post('/admin/article/update', [AdminController::class, 'AdminArticleUpdate'])->name('admin.article.update'); //edit journal
    Route::post('/admin/publisher/update', [AdminController::class, 'AdminEntityUpdate'])->name('admin.publisher.update');
    Route::post('/admin/index/update', [AdminController::class, 'AdminEntityUpdate'])->name('admin.index.update');
    Route::post('/admin/banner/store', [AdminController::class, 'AdminBannerStore'])->name('admin.banner.store');
    Route::post('/admin/banner/update', [AdminController::class, 'AdminBannerUpdate'])->name('admin.banner.update');
    Route::post('/admin/page/update', [AdminController::class, 'AdminPageUpdate'])->name('admin.page.update');
    Route::post('/admin/entity/store', [AdminController::class, 'AdminEntityStore'])->name('admin.entity.store');
    Route::post('/admin/entity/update', [AdminController::class, 'AdminEntityUpdate'])->name('admin.entity.update');
    Route::post('/admin/page/store', [AdminController::class, 'AdminPageStore'])->name('admin.page.store'); // saving pages
    Route::post('/admin/organization/store', [AdminController::class, 'AdminOrganizationStore'])->name('admin.organization.store');
    Route::post('/admin/organization/update', [AdminController::class, 'AdminOrganizationUpdate'])->name('admin.organization.update');
    Route::post('/admin/user/store', [UserController::class, 'AdminUserStore'])->name('admin.user.store');
    Route::post('/admin/user/update', [UserController::class, 'AdminUserUpdate'])->name('admin.user.update');
    Route::post('/admin/members/update', [AdminController::class, 'UserMembershipUpdate'])->name('admin.members.update');

}); // end group


/* Route::middleware(['auth','role:registered'])->group(function(){
    Route::get('/registered', [PeerEditorController::class, 'ResearcherDashboard'])->name('researcher.dashboard');
}); // end group peer reviewer and editor */

/* Route::middleware(['auth','role:author'])->group(function(){
    Route::get('/author/dashboard', [UserController::class, 'AuthorDashboard'])->name('author.dashboard');
}); // end group user
 */


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login'); //admin login.
Route::get('/login', [UserController::class, 'UserLogin'])->name('login'); // user login
Route::get('/register', [UserController::class, 'UserRegister'])->name('register'); // user registration
Route::get('/logout', [AdminController::class, 'userLogout'])->name('user.logout');
