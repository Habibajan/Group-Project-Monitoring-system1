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


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>['web', 'auth']], function(){
   
    Route::get('/home', function(){
        if(Auth::user()->GroupLeader==0){
            return view('home');
        }else{
            // $users['users']=\App\Users::all();
            return view('GoupLeaderPage');//->name('GoupLeaderPage');
        }
    });
    Route::get('/project/create', 'ProjectController@create')->name('project.create');
    Route::get('project', 'ProjectController@index')->name('project.index');
    Route::post('project/store', 'ProjectController@store')->name('project.store');
    Route::get('/project/edit/{id}', 'ProjectController@edit')->name('project.edit');
    Route::post('project/destroy/{id}', 'ProjectController@destroy')->name('project.destroy');
    Route::get('project/member', 'MemberController@index')->name('project.member');
    Route::post('/project/update/{id}', 'ProjectController@update')->name('project.update');
    // Route::get('/project/edit/{id}', 'ProjectController@edit')->name('project.edite');



    
});
