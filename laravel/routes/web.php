<?php

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

//一个 get 传参   站点 / hello    网页输出 内容  hello,php
Route::get('hello',function(){
    return "hello,php";
});
//一个控制器某个方法
Route::get('/user',"UserController@index");
Route::get('/index',"MyController@index");

Route::get('Admin/index','Admin\AdminController@index');
Route::post('Admin/login','Admin\AdminController@login');

Route::get('Ping/index','Ping\PingController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('add', 'HomeController@add');
Route::get('delete', 'HomeController@delete');
Route::get('edit', 'HomeController@edit');
Route::post('addsave','HomeController@addsave');
Route::post('editsave','HomeController@editsave');

Route::get('Type/index','Type\TypeController@index');
Route::get('Type/add','Type\TypeController@add');
Route::get('Type/edit','Type\TypeController@edit');
Route::get('Type/delete','Type\TypeController@delete');
Route::post('Type/editSave','Type\TypeController@editSave');
Route::post('Type/addSave','Type\TypeController@addSave');

Route::get('Tv/index','Tv\TvController@index');
Route::get('Tv/add','Tv\TvController@add');
Route::get('Tv/edit','Tv\TvController@edit');
Route::get('Tv/delete','Tv\TvController@delete');
Route::post('Tv/addSave','Tv\TvController@addSave');
Route::post('Tv/editSave','Tv\TvController@editSave');


Route::get('Collection/index','Collection\CollectionController@index');
Route::get('Collection/add','Collection\CollectionController@add');
Route::get('Collection/edit','Collection\CollectionController@edit');
Route::get('Collection/delete','Collection\CollectionController@delete');
Route::post('Collection/addSave','Collection\CollectionController@addSave');
Route::post('Collection/editSave','Collection\CollectionController@editSave');

//Actor
Route::group(['prefix'=>'actor'],function(){
    Route::any("index","area\ActorController@index");
    Route::any("add","area\ActorController@add");
    Route::any("addSave","area\ActorController@addSave");
    Route::any("delete","area\ActorController@delete");
    Route::any("edit","area\ActorController@edit");
    Route::any("editSave","area\ActorController@editSave");
});
//area
Route::group(['prefix'=>'area'],function (){
    Route::any("index","area\AreaController@index");
    Route::any("add","area\AreaController@add");
    Route::any("addSave","area\AreaController@addSave");
    Route::any("delete","area\AreaController@delete");
    Route::any("edit","area\AreaController@edit");
    Route::any("editSave","area\AreaController@editSave");
});
//authors
Route::group(['prefix'=>'authors'],function (){
    Route::any("index","area\AuthorsController@index");
    Route::any("add","area\AuthorsController@add");
    Route::any("addSave","area\AuthorsController@addSave");
    Route::any("delete","area\AuthorsController@delete");
    Route::any("edit","area\AuthorsController@edit");
    Route::any("editSave","area\AuthorsController@editSave");
});
//comment
Route::group(['prefix'=>'comment'],function (){
    Route::any("index","area\CommentController@index");
    Route::any("add","area\CommentController@add");
    Route::any("addSave","area\CommentController@addSave");
    Route::any("delete","area\CommentController@delete");
    Route::any("edit","area\CommentController@edit");
    Route::any("editSave","area\CommentController@editSave");
});
//director
Route::group(['prefix'=>'director'],function (){
    Route::any("index","area\DirectorController@index");
    Route::any("add","area\DirectorController@add");
    Route::any("addSave","area\DirectorController@addSave");
    Route::any("delete","area\DirectorController@delete");
    Route::any("edit","area\DirectorController@edit");
    Route::any("editSave","area\DirectorController@editSave");
});
//film
Route::group(['prefix'=>'film'],function (){
    Route::any("index","area\FilmController@index");
    Route::any("add","area\FilmController@add");
    Route::any("addSave","area\FilmController@addSave");
    Route::any("delete","area\FilmController@delete");
    Route::any("edit","area\FilmController@edit");
    Route::any("editSave","area\FilmController@editSave");
});
//novel
Route::group(['prefix'=>'novel'],function (){
    Route::any("index","area\NovelController@index");
    Route::any("add","area\NovelController@add");
    Route::any("addSave","area\NovelController@addSave");
    Route::any("delete","area\NovelController@delete");
    Route::any("edit","area\NovelController@edit");
    Route::any("editSave","area\NovelController@editSave");
});
//novel_chapter
Route::group(['prefix'=>'chapter'],function (){
    Route::any("index","area\ChapterController@index");
    Route::any("add","area\ChapterController@add");
    Route::any("addSave","area\ChapterController@addSave");
    Route::any("delete","area\ChapterController@delete");
    Route::any("edit","area\ChapterController@edit");
    Route::any("editSave","area\ChapterController@editSave");
});


