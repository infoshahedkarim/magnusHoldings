<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FooterController;
use App\Models\Project;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    

});

Route::get('/user', [AdminController::class, 'index']);
Route::get('/admin', [AdminController::class, 'admin'])->name('bview.adm_index')->middleware(['auth','admin']);


Route::get('/index', function () {
    return view('index');
})->name('index');


Route::get('/projectdetails', function () {
    return view('projectdetails');
})->name('projectdetails');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/abc', function () {
    return view('abc');
})->name('abc');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact-us', function () {
    return view('bview.adm_contact');
})->name('contact-us');

Route::get('/about-us', function () {
    return view('bview.adm_about');
})->name('about-us');

Route::get('/project', function () {
    return view('bview.adm_project');
})->name('project');

Route::get('/home', function () {
    return view('bview.adm_home');
})->name('home');

Route::get('/footer', function () {
    return view('bview.adm_footer');
})->name('footer');

Route::get('/footer-show', function () {
    return view('components.footer');
})->name('footer.show');

Route::post('/contact-uss', [ContactController::class, "getmsg"])->name('contact.submit');
Route::post('/contact-create', [ContactController::class, "create"])->name('contact.create');
Route::get('/contact-show', [ContactController::class, "indexx"])->name('contact.show');
Route::get('/contact-all', [ContactController::class, "show"])->name('contact.all');
Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::put('/contact/{id}/update', [ContactController::class, 'update'])->name('contact.update');

Route::post('/about-uss', [AboutController::class, "create"])->name('about.submit');
Route::get('/about-show', [AboutController::class, "index"])->name('about.show');
Route::get('/about-all', [AboutController::class, "show"])->name('about.all');
Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::put('/about/{id}/update', [AboutController::class, 'update'])->name('about.update');

Route::post('/project-store', [ProjectController::class, "store"])->name('project.store');
Route::get('/allprojects', [ProjectController::class, "allproject"])->name('project.all');
Route::get('/', [ProjectController::class, "create"])->name('project.create');
Route::get('/project-show', [ProjectController::class, "index"])->name('project.showss');
Route::get('/check-slug/{slug}', [ProjectController::class, 'checkSlug']);

Route::get('/projectdetails/{slug}', [ProjectController::class, "show"])->name('project.show');
Route::delete('/project/{id}/delete', [ProjectController::class, 'destroy'])->name('project.delete');
Route::get('/project-all', [ProjectController::class, "alls"])->name('project.alls');
Route::get('/project/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/project/{id}/update', [ProjectController::class, 'update'])->name('project.update');


Route::post('/home-store', [HomeController::class, "store"])->name('home.store');
Route::get('/home-all', [HomeController::class, "show"])->name('home.all');
Route::get('/home/{id}/edit', [HomeController::class, 'edit'])->name('home.edit');
Route::put('/home/{id}/update', [HomeController::class, 'update'])->name('home.update');


Route::post('/footer-store', [FooterController::class, "store"])->name('footer.store');
Route::get('/footer-show', [FooterController::class, "index"])->name('footer.show');
Route::get('/footer-all', [FooterController::class, "show"])->name('footer.all');
Route::get('/footer/{id}/edit', [FooterController::class, 'edit'])->name('footer.edit');
Route::put('/footer/{id}/update', [FooterController::class, 'update'])->name('footer.update');


Route::get('/table', function () {
    return view('backend.tables-basic');
})->name('backend.tables-basic');

Route::get('/buttons', function () {
    return view('backend.ui-buttons');
})->name('backend.ui-buttons');

Route::get('/form', function () {
    return view('backend.form-layouts');
})->name('backend.form-layouts');






