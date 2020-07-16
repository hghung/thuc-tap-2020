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
// fhvhfhfgh

Route::get('/','PageController@home');
Route::get('/dang-nhap','LoginController@login')->name('get.login');
Route::post('/dang-nhap','LoginController@post_login')->name('post.login');
Route::get('/dang-xuat','LoginController@logout')->name('get.logout');






// Taikhoan ///////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix'=>'tai-khoan','middleware'=>'Page_login'],function(){

});


// admin ///////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix'=>'admin', 'middleware'=>'Ad_login'],function(){
	Route::get('/','AdminController@home')->name('admin.dashboard');
	Route::get('/ban-do','AdminController@map_baotri')->name('admin.map');
	Route::get('/lich-bao-tri','AdminController@lich_baotri')->name('admin.lich');



	Route::get('/master','AdminController@master')->name('admin.layout');

	Route::get('/thong-ke','ChartController@chart')->name('admin.chart');



	Route::group(['prefix'=>'users'],function(){
		Route::get('/','UsersController@list')->name('users.list');
		Route::get('/add','UsersController@get_add')->name('users.get.add');


	});

	Route::group(['prefix'=>'bao-tri'],function(){
		Route::get('/','BaotriController@list')->name('baotri.list');
		// Route::post('/add','LoainhaController@post_add')->name('loainha.post.add');
		Route::get('/add','BaotriController@get_add')->name('baotri.get.add');


	});


	

});


////////////////////////////////////////////////////////////////
use App\User;
use App\Models\db_user;
use App\Models\db_vaitro;
use Carbon\Carbon; // lấy ngày hiên tại
// /////////////////////////////////////////////////
Route::get('/thuctap',function(){
	// add vai tro
	$vaitro = new db_vaitro;
	$vaitro->vt_ten = 'Admin';
	$vaitro->save();

	$vaitro = new db_vaitro;
	$vaitro->vt_ten = 'Nhan vien';
	$vaitro->save();

	$vaitro = new db_vaitro;
	$vaitro->vt_ten = 'Khach hang';
	$vaitro->save();
	// add tai khoan
	$taikhoan = new User;
	$taikhoan->username='admin';
	$taikhoan->password=bcrypt('admin');
	$taikhoan->trang_thai='1';
	$taikhoan->id_vaitro='1';
	$taikhoan->save();
	// add thong tin
	$user = new db_user;
	$user->ho_ten='Admin';
	$user->email = 'admin@gmail.com';
	$user->sdt = '0762999994';
	$user->nam_sinh = '1998-01-01';
	$user->cmnd = '331821579';
	$user->dia_chi = 'Vĩnh Long';
	$user->id_taikhoan = $taikhoan->id;
	$user->save();
	$user->ma_user = "ADMIN-000".$user->id;
	$user->save();



});

////////////////////////s
Route::get('foo', function () {
    return view('admin.book.test');
});






