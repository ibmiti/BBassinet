<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BabyArticlesController;
use App\Http\Controllers\KidsArticlesController;
use App\Http\Controllers\HealthArticlesController;
use App\Http\Controllers\GuideArticlesController;
use App\Models\BabyArticles;
use App\Models\KidsArticles;
use App\Models\GuideArticles;
use App\Models\HealthArticles;

/*
|--------------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|----------------------------------------------------------------
| Home | Welcome Route
|----------------------------------------------------------------
| will potentialy add more routes 
*/
Route::get('/', function () {
    $articles = [];
    $babyArticles = BabyArticles::take(1)->latest()->get();
    $kidArticles  = KidsArticles::take(1)->latest()->get();
    $guideArticles = GuideArticles::take(1)->latest()->get();
    $healthArticles = HealthArticles::take(1)->latest()->get();

    $articles[] = $babyArticles;
    $articles[] = $kidArticles;
    $articles[] = $guideArticles;
    $articles[] = $healthArticles;
    return view('home', ['articles' => $articles]);
}); 

/*
|-----------------------------------------------------------------
|  User related Routes to their resources
|-----------------------------------------------------------------
*/
Route::get('/admin', [LoginController::class, 'show']);
Route::post('/admin', [LoginController::class, 'login'])->name('login');

/*
|-----------------------------------------------------------------
| About related routes
|-----------------------------------------------------------------
*/
Route::get('/about', [ArticlesController::class, 'about']);

/*
|------------------------------------------------------------------
| Article related routes
|------------------------------------------------------------------
| this set of routes may be removed in time
| update: 1/15/2021 - these routes are not currently in use
| update: 1/18/2021 - these routes may become used by all the other resources
*/
Route::get('/articles', [ArticlesController::class, 'index']); 
Route::get('/editArticle', [ArticlesController::class, 'edit']);
// Route::get('/articles/{article}', [ArticlesController::class, 'show']);
// Route::get('/articles/{article}/edit' , [ArticlesController::class, 'edit']);
// Route::get('/articles/{article}/update', [ArticlesController::class, 'update']); 
// Route::get('/articles/{article}/delete', [ArticlesController::class, 'delete']);

Route::get('/create_normal_article', [ArticlesController::class, 'create'])->name('create_normal_article');
Route::post('/create_normal_article', [ArticlesController::class, 'store'])->name('store_normal_article');

//| Return to the select articles view
Route::get('/viewSelectArticlePage', [ArticlesController::class, 'viewSelectArticlePage'])->name('viewSelectArticlePage');
Route::get('/viewEditArticlePage', [ArticlesController::class, 'viewEditArticlePage'])->name('viewEditArticlePage');

/*
|------------------------------------------------------------------
| Baby Article related routes
|------------------------------------------------------------------
| will need to change some of these routes
*/
Route::get('/babies', [BabyArticlesController::class,'index'])->name('babies');
Route::get('/createBabyArticle', [BabyArticlesController::class, 'create']);
Route::post('/storeBabyArticle', [BabyArticlesController::class, 'store'])->name('storeBabyArticle');
Route::get('/editBabyArticle/{babyArticleId}/edit', [BabyArticlesController::class, 'edit'])->name('editBaby');

// Route::get('/editBabyArticle/{babyArticleId}/edit', [BabyArticlesController::class, 'editBabyArticle']);
Route::post('/updateBabyArticle', [BabyArticlesController::class, 'update'])->name('updateBabyArticle');
Route::get('/deleteBabyArticle/{babyArticleId}/delete', [BabyArticlesController::class, 'destroy'])->name('deleteBabyArticle');
Route::get('/babyArticle/{babyArticleId}', [BabyArticlesController::class,'show']);

/*
|-----------------------------------------------------------------
| Kids Article related routes
|-----------------------------------------------------------------
| will need to change some of these routes
*/
Route::get('/kids', [KidsArticlesController::class, 'index'])->name('kids');
Route::get('/createKidArticle', [KidsArticlesController::class, 'create'])->name('createKidArticle ');
Route::post('/storeKidArticle', [KidsArticlesController::class, 'store'])->name('storeKidArticle');
Route::get('/kidArticle/{kidArticleId}', [KidsArticlesController::class,'show']);
Route::get('/editKidsArticle/{kidArticleId}/edit', [KidsArticlesController::class, 'edit']);
Route::post('/updatekidsArticle', [KidsArticlesController::class, 'update'])->name('updatekidsArticle');
Route::get('/deleteKidsArticle/{kidId}/delete', [KidsArticlesController::class, 'destroy'])->name('deleteKidsArticle');

/*
|------------------------------------------------------------------
| Guide Article related routes v2
|------------------------------------------------------------------
| These will be the set of new routes going to the | new   GuideArticlesController
*/
Route::get('/guides', [GuideArticlesController::class, 'index'])->name('guides');
Route::get('/createGuideArticle', [GuideArticlesController::class, 'create'])->name('createGuideArticle');
Route::post('/storeGuideArticle', [GuideArticlesController::class, 'store'])->name('storeGuideArticle');
Route::get('/guideArticle/{guideArticleId}', [GuideArticlesController::class, 'show']);
Route::get('/editGuideArticle/{guideArticleId}/edit', [GuideArticlesController::class, 'edit']);
Route::post('/updateGuideArticle', [GuideArticlesController::class, 'update'])->name('updateGuideArticle');
Route::get('/deleteGuideArticle/{guideArticleId}/delete', [GuideArticlesController::class, 'destroy'])->name('deleteGuideArticle');

/*
|------------------------------------------------------------------
| Health Article related routes 
|------------------------------------------------------------------
| refactor the name within this set to 'create_guide' and 'GuideArticlesController'
| update: 
| TODO - utilize all of these links on other related pages
*/
Route::get('/health', [HealthArticlesController::class, 'index'])->name('health');
Route::get('/createHealthArticle', [HealthArticlesController::class, 'create'])->name('createHealthArticle');
Route::post('/storeHealthArticle', [HealthArticlesController::class, 'store'])->name('storeHealthArticle');
Route::get('/healthArticle/{healthArticleId}', [HealthArticlesController::class, 'show']);
Route::get('/editHealthArticle/{healthArticleId}/edit', [HealthArticlesController::class, 'edit']);
Route::post('/updateHealthArticle', [HealthArticlesController::class, 'update'])->name('updateHealthArticle');
Route::get('/deleteHealthArticle/{healthArticleId}/delete', [HealthArticlesController::class, 'destroy'])->name('deleteHealthArticle');

/*
|--------------------------------------------------------------------------
| Contact related routes
|--------------------------------------------------------------------------
*/
Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'store_and_send'])->name('contact.store_and_send');

/*
|------------------------------------------------------------------
| Routes needing exploration
|------------------------------------------------------------------
|  this route(s) may not be needed
*/



