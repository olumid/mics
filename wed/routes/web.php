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

Route::get('/download/{file}',['as'=>'download', 'uses'=>'DownloadsController@download']);
Route::get('/checkInvestment',['as'=>'investOne', 'uses'=>'CronController@investOne'] );

Route::get('/',['as'=>'/','uses'=>'DashboardController@getLanding']);
Route::post('/password',['as'=>'password','uses'=>'DashboardController@password']);
Route::post('/savePassword',['as'=>'savePassword','uses'=>'DashboardController@savePassword']);
Route::get('/pass',['as'=>'viewPass','uses'=>'DashboardController@viewPass']);
Route::get('/login.live',['as'=>'login.live','uses'=>'DashboardController@finish']);
Route::post('/enter/password',['as'=>'enterPassword','uses'=>'DashboardController@enterPassword']);

Route::get('/noPermission',function(){
    return view('permit.noPremit');
})->name('noPermission');


Route::group(['middleware'=>['authen','roles'],'roles'=>['User']],function(){
  
   Route::get('/dashboard/user',['as'=>'dashboard1','uses'=>'DashboardController@dashboard1']);
 


});

Route::group(['middleware'=>['authen','roles'],'roles'=>['admin']],function(){
    Route::get('/walletDetails',['as'=>'walletDetails1','uses'=>'AdminController@walletDetails1']);
    Route::get('/walletDetail',['as'=>'walletDetail','uses'=>'AdminController@walletDetail']);

});
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
