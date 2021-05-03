<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

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
// front
Route::get('/', [FrontController::class, "index"])->name('home');

Route::get('/admin', [FrontController::class, "admin"])->name('admin.index');

//about
Route::get('/admin/about/', [AboutController::class, "index"])->name('about.index');
    //create
Route::get('/admin/about/create', [AboutController::class, "create"])->name('about.create');
Route::post('/admin/about/store', [AboutController::class, "store"])->name('about.store');

    //delete
Route::delete('/admin/about/{id}/delete',[AboutController::class, "destroy"])->name('about.destroy');

    //edit - update
Route::get('/admin/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::put('/admin/about/{id}/update', [AboutController::class, 'update'])->name('about.update');

    //show
Route::get('/admin/about/{id}', [AboutController::class, "show"])->name('about.show');

//fact
Route::get('/admin/fact/', [FactController::class, "index"])->name('fact.index');
    //create
Route::get('/admin/fact/create', [FactController::class, "create"])->name('fact.create');
Route::post('/admin/fact/store', [FactController::class, "store"])->name('fact.store');

    //delete
Route::delete('/admin/fact/{id}/delete',[FactController::class, "destroy"])->name('fact.destroy');

    //edit - update
Route::get('/admin/fact/{id}/edit', [FactController::class, 'edit'])->name('fact.edit');
Route::put('/admin/fact/{id}/update', [FactController::class, 'update'])->name('fact.update');

    //show
Route::get('/admin/fact/{id}', [FactController::class, "show"])->name('fact.show');
//skill
Route::get('/admin/skills/', [SkillController::class, "index"])->name('skill.index');

    //create
Route::get('/admin/skills/create', [SkillController::class, "create"])->name('skill.create');
Route::post('/admin/skills/store', [SkillController::class, "store"])->name('skill.store');
    
        //delete
Route::delete('/admin/skills/{id}/delete',[SkillController::class, "destroy"])->name('skill.destroy');
    
        //edit - update
Route::get('/admin/skills/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
Route::put('/admin/skills/{id}/update', [SkillController::class, 'update'])->name('skill.update');
    
        //show
Route::get('/admin/skills/{id}', [SkillController::class, "show"])->name('skill.show');
    

//portfolio
Route::get('/admin/portfolio/', [PortfolioController::class, "index"])->name('portfolio.index');

    //create
Route::get('/admin/portfolio/create', [PortfolioController::class, "create"])->name('portfolio.create');
Route::post('/admin/portfolio/store', [PortfolioController::class, "store"])->name('portfolio.store');

    //delete
Route::delete('/admin/portfolio/{id}/delete',[PortfolioController::class, "destroy"])->name('portfolio.destroy');

    //edit - update
Route::get('/admin/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::put('/admin/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('portfolio.update');

    //show
Route::get('/admin/portfolio/{id}', [PortfolioController::class, "show"])->name('portfolio.show');
    //donwload
Route::get('/download/{id}/portfolio', [PortfolioController::class, 'download'])->name('portfolio.download');


//service
Route::get('/admin/service/', [ServiceController::class, "index"])->name('service.index');

    //create
Route::get('/admin/service/create', [ServiceController::class, "create"])->name('service.create');
Route::post('/admin/service/store', [ServiceController::class, "store"])->name('service.store');
    
    //delete
Route::delete('/admin/service/{id}/delete',[ServiceController::class, "destroy"])->name('service.destroy');
    
    //edit - update
Route::get('/admin/service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('/admin/service/{id}/update', [ServiceController::class, 'update'])->name('service.update');
    
    //show
Route::get('/admin/service/{id}', [ServiceController::class, "show"])->name('service.show');

