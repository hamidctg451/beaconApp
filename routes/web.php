<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;



Route::get('/', function () {
    return view('welcome');
});


//***********************************************************************************************************//


Route::get('/master', function () {
    return view('layouts/master');
});

Route::get('/contacts', function () {
    return view('layouts/contacts');
});

Route::get('/footer', function () {
    return view('layouts/footer');
});

Route::get('/header', function () {
    return view('layouts/header');
});

Route::get('/create', function () {
    return view('create');
});


//***********************************************************************************************************//

Route::get('/edit', function () {
    return view('edit');
});

Route::post('/edit', [FirstController::class , 'edit']);

//Route:: post('edit', 'FirstController@edit')->name('edit');


Route::get('/form', function () {
    return view('form');
});

Route::post('/form', [FirstController::class , 'create']);
//Route::get ('/form', [FirstController::class, 'create']);


Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

//************************************************************************************************//


	Route::get('/delete', function () {
	    return view('pages/delete');
	});

	Route::get('/read', function () {
	    return view('pages/read');
	});

	//Route::get('/read', [FirstController::class , 'read']);
	Route::get('/update', function () {
	    return view('pages/update');
	});


//**************************************************************************************************//


	Route::get('/contact', function () {
	    return view('partials/contact');
	});

	Route::get('/nav', function () {
	    return view('partials/nav');
	});
	Route::get('/registration', function () {
	    return view('partials/registration');
	});
	//Route::get('/registration', [FirstController::class , 'registration']);


///////////////////////////////////////////////////////////////////////////





