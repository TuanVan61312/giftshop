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
    return view('welcome');
});

route::get('blade', function(){
    return view('viewEngine');
});

route::get('bookworm', function(){
    return view('BookWorm');
});

route::get('oddnumber', 'NumberController@oddnumber');

route::group(['prefix' => 'book'], function(){

    route::get('', [
        'uses' => 'BookSessionController@index',
        'as' => 'book.index'
    ]);
});


//Route::group(['prefix' => 'classroom'], function(){
//    Route::get('', [
//        'uses' => 'ClassroomController@index',
//        'as' => 'classroom.index'
//    ]);
//    Route::get('create',[
//        'uses' => 'ClassroomController@create',
//        'as' => 'classroom.create'
//    ]);
//    Route::post('create', [
//        'uses' => 'ClassroomController@store',
//        'as' => 'classroom.store'
//    ]);
//    Route::get('update/{id}', [
//        'uses' => 'ClassroomController@edit',
//        'as' => 'classroom.edit'
//    ]);
//    Route::post('update/{id}', [
//        'uses' => 'ClassroomController@update',
//        'as' => 'classroom.update'
//    ]);
//    Route::get('delete/{id}', [
//        'uses' => 'ClassroomController@confirm',
//        'as' => 'classroom.confirm'
//    ]);
//    Route::post('delete/{id}', [
//        'uses' => 'ClassroomController@destroy',
//        'as' => 'classroom.destroy'
//    ]);
//});
//
//Route::group(['prefix' => 'student'], function(){
//    Route::get('', [
//        'uses' => 'StudentSessionController@index',
//        'as' => 'student.index'
//    ]);
//    Route::get('create', [
//        'uses' => 'StudentSessionController@create',
//        'as' => 'student.create'
//    ]);
//    Route::post('create', [
//       'uses' => 'StudentSessionController@store',
//       'as' => 'student.store'
//    ]);
//    Route::get('update/{id}', [
//        'uses' => 'StudentSessionController@edit',
//        'as' => 'student.edit'
//    ]);
//    Route::post('update/{id}', [
//        'uses' => 'StudentSessionController@update',
//        'as' => 'student.update'
//    ]);
//    Route::get('delete/{id}', [
//        'uses' => 'StudentSessionController@confirm',
//        'as' => 'student.confirm'
//    ]);
//    Route::post('delete/{id}', [
//        'uses' => 'StudentSessionController@destroy',
//        'as' => 'student.destroy'
//    ]);
//});
//
//Route::group(['prefix' => 'teacher'], function(){
//    Route::get('', [
//        'uses' => 'TeacherSessionController@index',
//        'as' => 'teacher.index'
//    ]);
//    Route::get('create', [
//        'uses' => 'TeacherSessionController@create',
//        'as' => 'teacher.create'
//    ]);
//    Route::post('create', [
//        'uses' => 'TeacherSessionController@store',
//        'as' => 'teacher.store'
//    ]);
//    Route::get('update/{id}', [
//        'uses' => 'TeacherSessionController@edit',
//        'as' => 'teacher.edit'
//    ]);
//    Route::post('update/{id}', [
//        'uses' => 'TeacherSessionController@update',
//        'as' => 'teacher.update'
//    ]);
//    Route::get('delete/{id}', [
//        'uses' => 'TeacherSessionController@confirm',
//        'as' => 'teacher.confirm'
//    ]);
//    Route::post('delete/{id}', [
//        'uses' => 'TeacherSessionController@destroy',
//        'as' => 'teacher.destroy'
//    ]);
//});


//Route::group(['prefix' => 'classroomrepos'], function(){
//    Route::get('', [
//        'uses' => 'ClassroomControllerWithRepos@index',
//        'as' => 'classroom.index'
//    ]);
//    Route::get('show/{id}', [
//        'uses' => 'ClassroomControllerWithRepos@show',
//        'as' => 'classroom.show'
//    ]);
//    Route::get('create', [
//        'uses' => 'ClassroomControllerWithRepos@create',
//        'as' => 'classroom.create'
//    ]);
//    Route::post('create', [
//        'uses' => 'ClassroomControllerWithRepos@store',
//        'as' => 'classroom.store'
//    ]);
//    Route::get('update/{id}', [
//        'uses' => 'ClassroomControllerWithRepos@edit',
//        'as' => 'classroom.edit'
//    ]);
//    Route::post('update/{id}', [
//        'uses' => 'ClassroomControllerWithRepos@update',
//        'as' => 'classroom.update'
//    ]);
//    Route::get('delete/{id}', [
//        'uses' => 'ClassroomControllerWithRepos@confirm',
//        'as' => 'classroom.confirm'
//    ]);
//    Route::post('delete/{id}', [
//        'uses' => 'ClassroomControllerWithRepos@destroy',
//        'as' => 'classroom.destroy'
//    ]);
//});
//
//Route::group(['prefix' => 'teacherrepos'], function(){
//    Route::get('', [
//       'uses' => 'TeacherControllerWithRepos@index',
//       'as' => 'teacher.index'
//    ]);
//    Route::get('show/{id}' ,[
//        'uses' => 'TeacherControllerWithRepos@show',
//        'as' => 'teacher.show'
//    ]);
//    Route::get('create', [
//        'uses' => 'TeacherControllerWithRepos@create',
//        'as' => 'teacher.create'
//    ]);
//    Route::post('create', [
//        'uses' => 'TeacherControllerWithRepos@store',
//        'as' => 'teacher.store'
//    ]);
//    Route::get('update/{id}', [
//        'uses' => 'TeacherControllerWithRepos@edit',
//        'as' => 'teacher.edit'
//    ]);
//    Route::post('update/{id}', [
//        'uses' => 'TeacherControllerWithRepos@update',
//        'as' => 'teacher.update'
//    ]);
//    Route::get('delete/{id}', [
//        'uses' => 'TeacherControllerWithRepos@confirm',
//        'as' => 'teacher.confirm'
//    ]);
//    Route::post('delete/{id}', [
//        'uses' => 'TeacherControllerWithRepos@destroy',
//        'as' => 'teacher.destroy'
//    ]);
//});
//
//Route::group(['prefix' => 'studentrepos'], function(){
//    Route::get('', [
//        'uses' => 'StudentControllerWithRepos@index',
//        'as'=> 'student.index'
//    ]);
//    Route::get('show/{id}', [
//        'uses' => 'StudentControllerWithRepos@show',
//        'as' => 'student.show'
//    ]);
//    Route::get('create', [
//        'uses' => 'StudentControllerWithRepos@create',
//        'as' => 'student.create'
//    ]);
//    Route::post('create', [
//        'uses' => 'StudentControllerWithRepos@store',
//        'as' => 'student.store'
//    ]);
//    Route::get('update/{id}', [
//        'uses' => 'StudentControllerWithRepos@edit',
//        'as' => 'student.edit'
//    ]);
//    Route::post('update/{id}', [
//        'uses' => 'StudentControllerWithRepos@update',
//        'as' => 'student.update'
//    ]);
//    Route::get('delete/{id}', [
//       'uses' => 'StudentControllerWithRepos@confirm',
//       'as' => 'student.confirm'
//    ]);
//    Route::post('delete/{id}', [
//        'uses' => 'StudentControllerWithRepos@destroy',
//        'as' => 'student.destroy'
//    ]);
//});

//gifshop

Route::get('/', function () {
    return view('welcome');
});

//Admin
Route::group(['prefix' => 'Admin'], function () {
    Route::get('', [
        'uses' => 'AdminController@index',
        'as' => 'admin.index'
    ]);

    Route::get('show/{Ad_id}',[
        'uses' => 'AdminController@show',
        'as' => 'admin.show'
    ]);

    Route::get('update/{Ad_id}',[
        'uses' => 'AdminController@edit',
        'as' => 'admin.edit'
    ]);

    Route::post('update/{Ad_id}',[
        'uses' => 'AdminController@update',
        'as' => 'admin.update'
    ]);
    //delete
//    Route::get('delete/{Ad_id}', [
//        'uses' => 'AdminController@confirm',
//        'as' => 'admin.confirm'
//    ]);
//
//    Route::post('delete/{Ad_id}',[
//        'uses' => 'AdminController@destroy',
//        'as' => 'admin.destroy'
//    ]);
});

//Customer

//Category
Route::group(['prefix' => 'Category'], function () {
    Route::get('', [
        'uses' => 'CategoryController@index',
        'as' => 'category.index'
    ]);

    Route::get('show/{Cate_id}',[
        'uses' => 'CategoryController@show',
        'as' => 'category.show'
    ]);

    Route::get('create',[
        'uses' => 'CategoryController@create',
        'as' => 'category.create'
    ]);

    Route::post('create',[
        'uses' => 'CategoryController@store',
        'as' => 'category.store'
    ]);

    Route::get('update/{Cate_id}',[
        'uses' => 'CategoryController@edit',
        'as' => 'category.edit'
    ]);

    Route::post('update/{Cate_id}',[
        'uses' => 'CategoryController@update',
        'as' => 'category.update'
    ]);

    Route::get('delete/{Cate_id}', [
        'uses' => 'CategoryController@confirm',
        'as' => 'category.confirm'
    ]);

    Route::post('delete/{Cate_id}',[
        'uses' => 'CategoryController@destroy',
        'as' => 'category.destroy'
    ]);
});


