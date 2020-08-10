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

Route::get('/','PageController@home')->name('home1');
Route::get('/test-{id}','AdminController@test_map');

Route::get('/dang-nhap','LoginController@login')->name('get.login');
Route::post('/dang-nhap','LoginController@post_login')->name('post.login');
Route::get('/dang-xuat','LoginController@logout')->name('get.logout');

// tìm kiếm ajax
Route::get('/tim-kiem-bao-tri', 'TimkiemController@timkiem_baotri')->name('timkiem.baotri');
Route::get('/tim-kiem-user', 'TimkiemController@timkiem_user')->name('timkiem.user');





// Taikhoan ///////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix'=>'tai-khoan','middleware'=>'Page_login'],function(){

});


// admin ///////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix'=>'admin', 'middleware'=>'Ad_login'],function(){
	Route::get('/','AdminController@home')->name('admin.dashboard');


	Route::get('/lich-bao-tri','AdminController@work')->name('admin.lich');



	Route::get('/master','AdminController@master')->name('admin.layout');

	Route::get('/thong-ke','ChartController@chart')->name('admin.chart');

	Route::group(['prefix'=>'ban-do'],function(){
		Route::get('/','AdminController@map_baotri')->name('admin.map');
		Route::get('/map-bao-tri-{id}','AdminController@ct_map')->name('admin.ct.map');


		



	});


	Route::group(['prefix'=>'users'],function(){
		Route::get('/profile','UsersController@profile')->name('users.profile');
		Route::get('/cap-nhat','UsersController@edit')->name('users.get.edit');



		Route::get('/','UsersController@list')->name('users.list');
		Route::get('/add','UsersController@get_add')->name('users.get.add');
		// ajax
		Route::get('/phuong-xa/{id_ward}','UsersController@ajax_ward')->name('phuongxa');

		Route::post('/add','UsersController@post_add')->name('users.post.add');



	});

	Route::group(['prefix'=>'bao-tri'],function(){
		Route::get('/','BaotriController@list')->name('baotri.list');
		Route::get('/add','BaotriController@get_add')->name('baotri.get.add');
		Route::post('/add','BaotriController@post_add')->name('baotri.post.add');

		Route::get('/eidt-{id}','BaotriController@get_edit')->name('baotri.get.edit');




	});


	

});


////////////////////////////////////////////////////////////////
use App\User;
use App\Models\db_user;
use App\Models\db_vaitro;
use App\Models\db_trangthai;

use Carbon\Carbon; // lấy ngày hiên tại
// /////////////////////////////////////////////////
Route::get('/thuctap',function(){
	// add vai tro
	$vaitro = new db_vaitro;
	$vaitro->vt_ten = 'Admin';
	$vaitro->save();

	$vaitro = new db_vaitro;
	$vaitro->vt_ten = 'Nhân viên';
	$vaitro->save();

	$vaitro = new db_vaitro;
	$vaitro->vt_ten = 'Nhân viên bảo trì';
	$vaitro->save();

	$vaitro = new db_vaitro;
	$vaitro->vt_ten = 'Khách hàng';
	$vaitro->save();

	//trangthai
	$trangthai = new db_trangthai;
	$trangthai->trangthai = 'Chưa duyệt';
	$trangthai->save();

	$trangthai = new db_trangthai;
	$trangthai->trangthai = 'Đã duyệt';
	$trangthai->save();

	$trangthai = new db_trangthai;
	$trangthai->trangthai = 'Đang chuẩn bị';
	$trangthai->save();

	$trangthai = new db_trangthai;
	$trangthai->trangthai = 'Đã sẵn sàn';
	$trangthai->save();

	$trangthai = new db_trangthai;
	$trangthai->trangthai = 'Đang đến';
	$trangthai->save();

	$trangthai = new db_trangthai;
	$trangthai->trangthai = 'Hoàn thành';
	$trangthai->save();

	$trangthai = new db_trangthai;
	$trangthai->trangthai = 'Hoãn lại';
	$trangthai->save();

	
	// add thong tin
	$user = new db_user;
	$user->ho_ten='Gia Hung';
	$user->email = 'admin@gmail.com';
	$user->sdt = '0762999994';
	$user->nam_sinh = '1998-01-01';
	$user->cmnd = '331821579';
	
	$user->save();
	$user->ma_user = "ADMIN-000".$user->id;
	$user->save();
	// add tai khoan
	$taikhoan = new User;
	$taikhoan->username='admin';
	$taikhoan->password=bcrypt('admin');
	$taikhoan->trang_thai='1';
	$taikhoan->id_vaitro='1';
	$taikhoan->id_user = $user->id;
	$taikhoan->save();



});

////////////////////////s
Route::get('/update-{id}','UsersController@update_mk');







