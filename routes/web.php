<?php

use Illuminate\Support\Facades\Route;

Route::get('hello', '\App\Http\Controllers\HelloController@index');
Route::get('office', '\App\Http\Controllers\HelloController@office');
Route::get('plan', '\App\Http\Controllers\HelloController@plan');
Route::get('service', '\App\Http\Controllers\HelloController@service');

Route::get('kanri01', '\App\Http\Controllers\HelloController@kanri01');
Route::get('kanri02', '\App\Http\Controllers\HelloController@kanri02');

Route::get('member', '\App\Http\Controllers\MemberController@index');

Route::get('login', '\App\Http\Controllers\MemberController@login');
Route::post('login', '\App\Http\Controllers\MemberController@checkMailPswd');

Route::get('logout', '\App\Http\Controllers\MemberController@logout');

Route::get('book', '\App\Http\Controllers\OrderController@book');
Route::post('book', '\App\Http\Controllers\OrderController@order');

Route::get('add', '\App\Http\Controllers\MemberController@add');
Route::post('add', '\App\Http\Controllers\MemberController@create');
