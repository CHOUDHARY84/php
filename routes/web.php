<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Stdcontroller;
use App\Http\Controllers\Employmentcontroller;
use App\Http\Controllers\Registercontroller;

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
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});


Route::get('advanced-form-elements', function () {
    return view('advanced-form-elements');
});

Route::get('alerts', function () {
    return view('alerts');
});

Route::get('basic-form-elements', function () {
    return view('basic-form-elements');
});

Route::get('blank', function () {
    return view('blank');
});

Route::get('blog-dashboard', function () {
    return view('blog-dashboard');
});

Route::get('blog-details', function () {
    return view('blog-details');
});

Route::get('blog-grid', function () {
    return view('blog-grid');
});

Route::get('blog-list', function () {
    return view('blog-list');
});

Route::get('blog-post', function () {
    return view('blog-post');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('c3', function () {
    return view('c3');
});

Route::get('chartjs', function () {
    return view('chartjs');
});

Route::get('chat', function () {
    return view('chat');
});

Route::get('collapse', function () {
    return view('collapse');
});

Route::get('colors', function () {
    return view('colors');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('dialogs', function () {
    return view('dialogs');
});

Route::get('ec-dashboard', function () {
    return view('ec-dashboard');
});

Route::get('ec-product-detail', function () {
    return view('ec-product-detail');
});

Route::get('ec-product-List', function () {
    return view('ec-product-List');
});

Route::get('ec-product', function () {
    return view('ec-product');
});

Route::get('editable-table', function () {
    return view('editable-table');
});

Route::get('events', function () {
    return view('events');
});
Route::get('file-dashboard', function () {
    return view('file-dashboard');
});

Route::get('file-documents', function () {
    return view('file-documents');
});

Route::get('file-images', function () {
    return view('file-images');
});

Route::get('file-media', function () {
    return view('file-media');
});

Route::get('flot', function () {
    return view('flot');
});

Route::get('footable', function () {
    return view('footable');
});

Route::get('forgot-password', function () {
    return view('forgot-password');
});

Route::get('form-editors', function () {
    return view('form-editors');
});

Route::get('form-examples', function () {
    return view('form-examples');
});

Route::get('form-summernote', function () {
    return view('form-summernote');
});

Route::get('form-upload', function () {
    return view('form-upload');
});

Route::get('form-validation', function () {
    return view('form-validation');
});

Route::get('form-wizard', function () {
    return view('form-wizard');
});

Route::get('google', function () {
    return view('google');
});

Route::get('icons-themify', function () {
    return view('icons-themify');
});

Route::get('icons-weather', function () {
    return view('icons-weather');
});

Route::get('icons', function () {
    return view('icons');
});

Route::get('image-gallery', function () {
    return view('image-gallery');
});

Route::get('404', function () {
    return view('404');
});

Route::get('500', function () {
    return view('500');
});

Route::get('invoices-list', function () {
    return view('invoices-list');
});

Route::get('invoices', function () {
    return view('invoices');
});

Route::get('jquery-datatable', function () {
    return view('jquery-datatable');
});

Route::get('jquery-knob', function () {
    return view('jquery-knob');
});

Route::get('jvectormap', function () {
    return view('jvectormap');
});

Route::get('list-group', function () {
    return view('list-group');
});

Route::get('locked', function () {
    return view('locked');
});

Route::get('mail-compose', function () {
    return view('mail-compose');
});

Route::get('mail-inbox', function () {
    return view('mail-inbox');
});

Route::get('mail-single', function () {
    return view('mail-single');
});

Route::get('media-object', function () {
    return view('media-object');
});

Route::get('modals', function () {
    return view('modals');
});

Route::get('morris', function () {
    return view('morris');
});

Route::get('normal-tables', function () {
    return view('normal-tables');
});

Route::get('notifications', function () {
    return view('notifications');
});

Route::get('page-offline', function () {
    return view('page-offline');
});

Route::get('pricing', function () {
    return view('pricing');
});

Route::get('profile-edit', function () {
    return view('profile-edit');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('progressbars', function () {
    return view('progressbars');
});

Route::get('project-list', function () {
    return view('project-list');
});

Route::get('range-sliders', function () {
    return view('range-sliders');
});

Route::get('search-results', function () {
    return view('search-results');
});

Route::get('sign-in', function () {
    return view('sign-in');
});

Route::get('sign-up', function () {
    return view('sign-up');
});

Route::get('sortable-nestable', function () {
    return view('sortable-nestable');
});

Route::get('sparkline', function () {
    return view('sparkline');
});

Route::get('table-color', function () {
    return view('table-color');
});

Route::get('tabs', function () {
    return view('tabs');
});

Route::get('taskboard', function () {
    return view('taskboard');
});

Route::get('ticket-detail', function () {
    return view('ticket-detail');
});

Route::get('ticket-list', function () {
    return view('ticket-list');
});

Route::get('timeline', function () {
    return view('timeline');
});

Route::get('ui_kit', function () {
    return view('ui_kit');
});

Route::get('waves', function () {
    return view('waves');
});

Route::get('widgets-app', function () {
    return view('widgets-app');
});

Route::get('widgets-data', function () {
    return view('widgets-data');
});

Route::get('yandex', function () {
    return view('yandex');
});

Route::post('stdinsert',[Stdcontroller::class,'studentinsert']);

Route::get('show',[Stdcontroller::class,'showdata']);

