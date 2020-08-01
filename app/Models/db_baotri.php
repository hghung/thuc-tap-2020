<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class db_baotri extends Model
{   
    use SoftDeletes;
    protected $table='db_baotri';

    public function baotrikh() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_user','id_khachhang','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function baotrinv() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_user','id_nhanvien','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
