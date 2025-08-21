<?php
// use App\Http\Controllers\ShowHome;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome; // ✅ Correct namespace for Livewire component
use App\Livewire\ShowServicePage;
use App\Livewire\ShowService;
use App\Livewire\ShowTeamPage;
use App\Livewire\ShowBlog;
use App\Livewire\BlogDetail;
use App\Livewire\ShowFaqPage;
use App\Livewire\ShowPage;
use App\Livewire\ShowContactPage;

Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('servicesPage');
Route::get('/service/{id}', ShowService::class)->name('servicePage');
Route::get('/team', ShowTeamPage::class)->name('teamPage');
Route::get('/blog', ShowBlog::class)->name('blog');
Route::get('/blog/{id}', BlogDetail::class)->name('blogDetail');
Route::get('/faqs', ShowFaqPage::class)->name('faqs');
// Route::get('/page/{id}', ShowPage::class)->name('page');
Route::get('/page/{slug}', ShowPage::class)->name('page');

Route::get('/contact', ShowContactPage::class)->name('contact');