<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PsbController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\GalleriesController;

/*{{  }}
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|`
*/

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('home');

Route::get('/about-us', [FrontEndController::class, 'about'])->name('about');
Route::get('/visi-misi', [FrontEndController::class, 'visiMisi'])->name('visiMisi');
Route::get('/news', [FrontEndController::class, 'indexNews'])->name('news');
Route::get('/prestasi', [FrontEndController::class, 'indexPrestasi'])->name('prestasi');
Route::get('/psb', [FrontEndController::class, 'indexPsb'])->name('psb');
Route::get('/event', [FrontEndController::class, 'event'])->name('event');
Route::get('/detailNews/{slug}', [\App\Http\Controllers\FrontEndController::class, 'detailNews'])->name('detailNews');
Route::get('/detailPrestasi/{slug}', [\App\Http\Controllers\FrontEndController::class, 'detailPrestasi'])->name('detailPrestasi');
Route::get('/detailEvent/{slug}', [\App\Http\Controllers\FrontEndController::class, 'detailEvent'])->name('detailEvent');

Auth::routes();

// Route::get('/', function (){
//     return view ('pages.admin.parent');
// });

Route::middleware(['auth'])->name('dashboard.')
    ->prefix('dashboard')->group(function () {

        Route::middleware(['admin'])->group(function () {
            //Route yang ada didalam middleware admin maka
            // yang bisa mengakses hanya admin
            Route::resource('/admin', UserController::class);
            Route::resource('/gallery', GalleriesController::class);
            Route::resource('/news', NewsController::class)->only([
                'index', 'show', 'edit', 'update', 'create', 'destroy', 'store'
            ]);
            Route::resource('/event', EventController::class)->only([
                'index', 'show', 'edit', 'update', 'create', 'destroy', 'store'
            ]);
            Route::resource('/psb', PsbController::class)->only([
                'index', 'show', 'edit', 'update', 'create', 'destroy', 'store'
            ]);
            Route::resource('/prestasi', PrestasiController::class)->only([
                'index', 'show', 'edit', 'update', 'create', 'destroy', 'store'
            ]);
        });
    });

    Route::get('/storage-link', function() {
        Artisan::call('storage:link');
        return 'success';
        return 'storage link succses';
    });
    Route::get('/config-cache', function() {
        Artisan::call('config:cache');
        return 'config cache succses';
    });
    Route::get('/config-clear', function() {
        Artisan::call('config:clear');
        return 'config clear succses';
    });
    Route::get('/view-cache', function() {
        Artisan::call('view:cache');
        return 'view cache succses';
    });
    Route::get('/view-clear', function() {
        Artisan::call('view:clear');
        return 'view clear succses';
    });
    Route::get('/route-clear', function() {
        Artisan::call('route:clear');
        return 'route clear succses';
    });
    
