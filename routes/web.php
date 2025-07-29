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
Route::get('/', ShowHome::class)->name('home'); // ✅ This is valid in Livewire v3
Route::get('/services', ShowServicePage::class)->name('servicesPage'); // ✅ This is valid in Livewire v3
Route::get('/service/{id}', ShowService::class)->name('servicePage'); // ✅ This is valid in Livewire v3
Route::get('/team', ShowTeamPage::class)->name('teamPage'); // ✅ This is valid in Livewire v3
Route::get('/blog', ShowBlog::class)->name('blog'); // ✅ This is valid in Livewire v3