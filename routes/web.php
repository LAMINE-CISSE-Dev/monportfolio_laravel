<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorAppController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangageController;
use App\Http\Controllers\ParcoursController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SkillsController;
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
// LES ROUTES DU FONT OFFICHE
Route::get('/', function () {
    return view('frontoffice.layout.app');
});
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/projet', [ProjetController::class, 'projet'])->name('projet');
Route::get('/parcours', [ParcoursController::class, 'parcours'])->name('parcour');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/test_view', [ContactMailController::class, 'test_view'])->name('test');

Route::post('/post_message', [ContactFormController::class, 'post_message'])->name('post_message');
Route::get('/resume', [ResumeController::class, 'resume'])->name('resume');
Route::get('/doctorApp', [DoctorAppController::class, 'doctorApp'])->name('doctorApp');




// LES ROUTES DU FONT OFFICHE

Route::get('/dashboard/admin/laminecisse', [DashboardController::class, 'dashboard'])->name('dashboard');

// La partie produits
Route::get('/produits', [ProductController::class, 'index'])->name('produits');
Route::get('/product', [ProductController::class, 'create'])->name('create');
Route::post('/produits', [ProductController::class, 'store'])->name('products.store');
Route::get('/show/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// La partie Experience
Route::get('/eproduits', [ExperienceController::class, 'index'])->name('eproduits');
Route::get('/eproduct', [ExperienceController::class, 'create'])->name('ecreate');
Route::post('/eproduits', [ExperienceController::class, 'store'])->name('eproducts.estore');
Route::get('/eshow/{id}', [ExperienceController::class, 'show'])->name('eproducts.eshow');
Route::get('/eedit/{id}', [ExperienceController::class, 'edit'])->name('eproducts.eedit');
Route::put('/eupdate/{id}', [ExperienceController::class, 'update'])->name('eproducts.eupdate');
Route::delete('/edestroy/{id}', [ExperienceController::class, 'destroy'])->name('eproducts.edestroy');

// La partie Education
Route::get('/edproduits', [EducationController::class, 'index'])->name('edproduits');
Route::get('/edproduct', [EducationController::class, 'create'])->name('edcreate');
Route::post('/edproduits', [EducationController::class, 'store'])->name('edproducts.edstore');
Route::get('/edshow/{id}', [EducationController::class, 'show'])->name('edproducts.edshow');
Route::get('/ededit/{id}', [EducationController::class, 'edit'])->name('edproducts.ededit');
Route::put('/edupdate/{id}', [EducationController::class, 'update'])->name('edproducts.edupdate');
Route::delete('/eddestroy/{id}', [EducationController::class, 'destroy'])->name('edproducts.eddestroy');

// La partie Skills
Route::get('/sproduits', [SkillsController::class, 'index'])->name('sproduits');
Route::get('/sproduct', [SkillsController::class, 'create'])->name('screate');
Route::post('/sproduits', [SkillsController::class, 'store'])->name('sproducts.sstore');
Route::get('/sshow/{id}', [SkillsController::class, 'show'])->name('sproducts.sshow');
Route::get('/sedit/{id}', [SkillsController::class, 'edit'])->name('sproducts.sedit');
Route::put('/supdate/{id}', [SkillsController::class, 'update'])->name('sproducts.supdate');
Route::delete('/sdestroy/{id}', [SkillsController::class, 'destroy'])->name('sproducts.sdestroy');

// La partie Langage
Route::get('/lproduits', [LangageController::class, 'index'])->name('lproduits');
Route::get('/lproduct', [LangageController::class, 'create'])->name('lcreate');
Route::post('/lproduits', [LangageController::class, 'store'])->name('lproducts.lstore');
Route::get('/lshow/{id}', [LangageController::class, 'show'])->name('lproducts.lshow');
Route::get('/ledit/{id}', [LangageController::class, 'edit'])->name('lproducts.ledit');
Route::put('/lupdate/{id}', [LangageController::class, 'update'])->name('lproducts.lupdate');
Route::delete('/ldestroy/{id}', [LangageController::class, 'destroy'])->name('lproducts.ldestroy');