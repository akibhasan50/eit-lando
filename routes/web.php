<?php

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

Route::get('/', function () {
    return view('fontend.fontMain.fontMain');
});

Route::get('/admin','AdminController@index');
//team title slogun
Route::get('/admin/team-title-show','TeamController@index')->name('slogun.index');
Route::get('/admin/teamtitle','TeamController@create')->name('slogun.create');
Route::post('/admin/team-store','TeamController@store')->name('slogun.store');
Route::get('/admin/team-edit/{id}','TeamController@edit')->name('slogun.edit');
Route::post('/admin/team-update/{id}','TeamController@update')->name('slogun.update');
Route::get('/admin/team-title-destroy/{id}','TeamController@destroy')->name('slogun.destroy');


//copyright
Route::get('/admin/copyright','CopyrightController@index')->name('copyright.index');
Route::get('/admin/team-copyright','CopyrightController@create')->name('copyright.create');
Route::post('/admin/copyright-store','CopyrightController@store')->name('copyright.store');
Route::get('/admin/copyright-edit/{id}','CopyrightController@edit')->name('copyright.edit');
Route::post('/admin/copyright-update/{id}','CopyrightController@update')->name('copyright.update');
Route::get('/admin/copyright-destroy/{id}','CopyrightController@destroy')->name('copyright.destroy');


//social links
Route::get('/admin/all-social-link','SocialController@index')->name('social.index');
Route::get('/admin/social-link','SocialController@create')->name('social.create');
Route::post('/admin/social-store','SocialController@store')->name('social.store');
Route::get('/admin/social-edit/{id}','SocialController@edit')->name('social.edit');
Route::post('/admin/social-update/{id}','SocialController@update')->name('social.update');
Route::get('/admin/social-destroy/{id}','SocialController@destroy')->name('social.destroy');
 
//team members
Route::get('/admin/all-team-members','MemberController@index')->name('team.index');
Route::get('/admin/team-members','MemberController@create')->name('team.create');
Route::post('/admin/team-members-store','MemberController@store')->name('team.store');
Route::get('/admin/team-members-edit/{id}','MemberController@edit')->name('team.edit');
Route::post('/admin/team-members-update/{id}','MemberController@update')->name('team.update');
Route::get('/admin/team-members-destroy/{id}','MemberController@destroy')->name('team.destroy');


