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

// Route::get('/', function () {
//     return view('frontend.master');
// });
Route::get('/',['as'=>'index','uses'=>'indexcontroller@index']);
Route::group(['prefix' => 'admin'],function(){
	Route::group(['prefix'=>'users'],function(){
		Route::get('getlist', ['as'=>'admin.users.getlist','uses'=>'usercontroller@index']);
		Route::get('getedit/{id}',['as'=>'admin.users.getedit','uses'=>'usercontroller@getEdit']);
		Route::post('postedit/{id}',['as'=>'admin.users.postedit','uses'=>'usercontroller@postEdit']);
		Route::get('getdelete/{id}',['as'=>'admin.users.getdelete','uses'=>'usercontroller@getDelete']);
		Route::get('getadd',['as'=>'admin.users.getadd','uses'=>'usercontroller@getadd']);
		Route::post('postadd',['as'=>'admin.users.postadd','uses'=>'usercontroller@postAdd']);
	});
	Route::group(['prefix' => 'khachhang'],function(){
		Route::get('getlist', ['as'=>'admin.khachhang.getlist','uses'=>'khachhangcontroller@index']);
		Route::get('getedit/{id}',['as'=>'admin.khachhang.getedit','uses'=>'khachhangcontroller@getEdit']);
		Route::post('postedit/{id}',['as'=>'admin.khachhang.postedit','uses'=>'khachhangcontroller@postEdit']);
		Route::get('getdelete/{id}',['as'=>'admin.khachhang.getdelete','uses'=>'khachhangcontroller@getDelete']);
		Route::get('getadd',['as'=>'admin.khachhang.getadd','uses'=>'khachhangcontroller@getadd']);
		Route::post('postadd',['as'=>'admin.khachhang.postadd','uses'=>'khachhangcontroller@postAdd']);
	});
	Route::group(['prefix' => 'donhang'],function(){
		Route::get('getlist', ['as'=>'admin.donhang.getlist','uses'=>'donhangcontroller@index']);
		Route::get('getedit/{id}',['as'=>'admin.donhang.getedit','uses'=>'donhangcontroller@getEdit']);
		Route::post('postedit/{id}',['as'=>'admin.donhang.postedit','uses'=>'donhangcontroller@postEdit']);
		Route::get('getdelete/{id}',['as'=>'admin.donhang.getdelete','uses'=>'donhangcontroller@getDelete']);
		Route::get('getadd',['as'=>'admin.donhang.getadd','uses'=>'donhangcontroller@getadd']);
		Route::post('postadd',['as'=>'admin.donhang.postadd','uses'=>'donhangcontroller@postAdd']);
	});
	Route::group(['prefix' => 'sanpham'],function(){
		Route::get('getlist', ['as'=>'admin.sanpham.getlist','uses'=>'sanphamcontroller@index']);
		Route::get('getedit/{id}',['as'=>'admin.sanpham.getedit','uses'=>'sanphamcontroller@getEdit']);
		Route::post('postedit/{id}',['as'=>'admin.sanpham.postedit','uses'=>'sanphamcontroller@postEdit']);
		Route::get('getdelete/{id}',['as'=>'admin.sanpham.getdelete','uses'=>'sanphamcontroller@getDelete']);
		Route::get('getadd',['as'=>'admin.sanpham.getadd','uses'=>'sanphamcontroller@getadd']);
		Route::post('postadd',['as'=>'admin.sanpham.postadd','uses'=>'sanphamcontroller@postAdd']);
	});
	Route::group(['prefix' => 'baiviet'],function(){
		Route::get('getlist', ['as'=>'admin.baiviet.getlist','uses'=>'baivietcontroller@index']);
		Route::get('getedit/{id}',['as'=>'admin.baiviet.getedit','uses'=>'baivietcontroller@getEdit']);
		Route::post('postedit/{id}',['as'=>'admin.baiviet.postedit','uses'=>'baivietcontroller@postEdit']);
		Route::get('getdelete/{id}',['as'=>'admin.baiviet.getdelete','uses'=>'baivietcontroller@getDelete']);
		Route::get('getadd',['as'=>'admin.baiviet.getadd','uses'=>'baivietcontroller@getadd']);
		Route::post('postadd',['as'=>'admin.baiviet.postadd','uses'=>'baivietcontroller@postAdd']);
	});
});
