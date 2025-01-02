<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(UserController::class,)->group(function(){
    Route::get("/",  'showUsers')->name('home');
    Route::get("/user/{id}",  'singleUser')->name('view.user');

    Route::post("/add",  'addUser')->name('addUser');
    Route::get("/add",  'addNew')->name('userAdd');

    Route::post("/edit/{id}",  'updateUser')->name('update.user');
    Route::get("/edit/{id}",  'updatePage')->name('update.page');

    Route::get("/delete/{id}",  'deleteUser')->name('delete.user');

    Route::get('/union', 'unionData')->name('union');
    Route::get('/when', 'whenData')->name('when');
    Route::get('/chunk', 'chunkData')->name('chunk');

    Route::get('/raw', 'showData');

});

Route::view("new", '/AddNewUser');
