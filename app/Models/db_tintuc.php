<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class db_tintuc extends Model
{
    use SoftDeletes;
    protected $table='db_tintuc';

    public function tintucuser() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_user','id_user','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function tintucstatus() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->belongsTo('App\Models\db_trangthai','id_trangthai','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
