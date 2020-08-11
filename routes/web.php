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
Route::get('/tim-kiem-tin-tuc', 'TimkiemController@timkiem_tintuc')->name('timkiem.tintuc');
Route::get('/tim-kiem-tin-tuc-khoi-phuc', 'TimkiemController@timkiem_tintuc_kp')->name('timkiem.tintuc.kp');
Route::get('/tim-kiem-bao-tri-khoi-phuc', 'TimkiemController@timkiem_baotri_kp')->name('timkiem.baotri.kp');



// tin tuc
Route::get('/tin-tuc', 'PageController@blog')->name('blog');
Route::get('/tin-tuc-{id}', 'PageController@detail_blog')->name('blog.detail');

// backup
Route::group(['prefix'=>'backup'],function(){
	Route::get('/','BackupController@backup')->name('backup');
	
	Route::get('/run','BackupController@run_backup')->name('backup.run');

	Route::get('/delete','BackupController@delete_backup')->name('delete.run');

	// Route::get('/add','LoainhaController@post_add')->name('backup.add');


});



// admin ///////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix'=>'quan-ly', 'middleware'=>'Ad_login'],function(){
	Route::get('/','AdminController@home')->name('admin.dashboard');

	//nhan vien ky thuat
	Route::get('/lich-lam-viec','AdminController@work')->name('admin.lich');


	// khach hang
	Route::get('/yeu-cau-bao-tri','BaotriController@get_add')->name('khachhang.yc');


	Route::group(['prefix'=>'ban-do'],function(){
		Route::get('/','AdminController@map_baotri')->name('admin.map');
		Route::get('/map-bao-tri-{id}','AdminController@ct_map')->name('admin.ct.map');

	});


	Route::group(['prefix'=>'users'],function(){
		Route::get('/profile','UsersController@profile')->name('users.profile');

		Route::get('/','UsersController@list')->name('users.list');
		Route::get('/add','UsersController@get_add')->name('users.get.add');
		// ajax
		Route::get('/phuong-xa/{id_ward}','UsersController@ajax_ward')->name('phuongxa');

		Route::post('/add','UsersController@post_add')->name('users.post.add');

		Route::get('/edit-{id}','UsersController@get_edit')->name('users.get.edit');
		Route::post('/edit-{id}','UsersController@post_edit')->name('users.post.edit');
	});

	Route::group(['prefix'=>'bao-tri'],function(){
		Route::get('/','BaotriController@list')->name('baotri.list');
		Route::get('/add','BaotriController@get_add')->name('baotri.get.add');
		Route::post('/add','BaotriController@post_add')->name('baotri.post.add');

		Route::get('/eidt-{id}','BaotriController@get_edit')->name('baotri.get.edit');
		Route::post('/eidt-{id}','BaotriController@post_edit')->name('baotri.post.edit');

		Route::get('/delete-{id}','BaotriController@delete')->name('baotri.delete');
		Route::get('/khoi-phuc','BaotriController@list_restore')->name('baotri.kp');
		Route::get('/khoi-phuc-{id}','BaotriController@restore')->name('baotri.post.kp');


		// cap nhat trang thai
		Route::get('/success-{id}','BaotriController@success')->name('baotri.success');
		Route::get('/cancel-{id}','BaotriController@cancel')->name('baotri.cancel');

	});

	Route::group(['prefix'=>'tin-tuc'],function(){
		Route::get('/','TintucController@list')->name('tintuc.list');
		Route::get('/add','TintucController@get_add')->name('tintuc.get.add');
		Route::post('/add','TintucController@post_add')->name('tintuc.post.add');

		Route::get('/eidt-{id}','TintucController@get_edit')->name('tintuc.get.edit');
		Route::post('/eidt-{id}','TintucController@post_edit')->name('tintuc.post.edit');
		Route::get('/delete-{id}','TintucController@delete')->name('tintuc.delete');

		//khoi phuc
		Route::get('/khoi-phuc','TintucController@list_restore')->name('tintuc.kp');
		Route::get('/khoi-phuc-{id}','TintucController@restore')->name('tintuc.post.kp');



		

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
	$trangthai->trangthai = 'Hoàn thành';
	$trangthai->save();

	$trangthai = new db_trangthai;
	$trangthai->trangthai = 'Hủy';
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







