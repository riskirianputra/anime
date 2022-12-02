<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnimedetailController;
use App\Http\Controllers\DaftaranimeController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AbjadController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\EpisodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


Route::group(['middleware' => 'auth'], function () {
	
		Route::prefix('gallery')->group(function () {
            Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
            Route::post('/store', [GalleryController::class, 'store'])->name('gallery.store');
            Route::get('/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete');
        });
		

	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');

	Route::get('posts/{id}','PostController@index')->name('posts.index');
	
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
	
	
	
});

Route::get('/', function () {
    return view('anime-page.index');
})->name('');

    Route::resource('user', UserController::class);
	Route::resource('posts', PostController::class);	
	
	Route::resource('roles', RolesController::class) ;
    Route::resource('permissions', PermissionsController::class);

	
	Route::put('post/{id}/publish', [PostController::class, 'publish'])->name('post.publish');
	Route::put('post/{id}/unpublish', [PostController::class, 'unpublish'])->name('post.unpublish');
	
	Route::resource('anime-detail', AnimedetailController::class);
	Route::resource('kategori', CategoryController::class);

	Route::resource('daftar-anime',DaftaranimeController::class);
	Route::resource('index-anime',IndexController::class);

	Route::resource('anime',AnimeController::class);

	Route::resource('genre' ,GenreController::class);
	Route::resource('abjad' ,AbjadController::class);
	Route::resource('type' ,TypeController::class);
	Route::resource('episode' ,EpisodeController::class);


	
	Route::get('/Anime-genre/{genre}', [DaftaranimeController::class, 'anime_genre'])->name('anime.genre');
	Route::get('/Anime-abjad/{abjad}', [DaftaranimeController::class, 'anime_abjad'])->name('anime.abjad');	
	Route::get('/Anime-episode/{episode}', [AnimedetailController::class, 'anime_episode'])->name('anime.episode');	
	Route::get('/Anime/{anime}', [DaftaranimeController::class, 'show'])->name('anime.detail');
	Route::get('/Anime/{episode}', [DaftaranimeController::class, 'show'])->name('anime.detail');

