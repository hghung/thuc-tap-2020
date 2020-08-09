<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class db_user extends Model
{
    protected $table='db_user';
    public $timestamps = false;
   
    public function diachi() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasOne('App\Models\db_diachi','id_user','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }

    public function user2() // phải viêt liền ko được cách ra hoặc _
    {
        return $this->hasOne('App\User','id_user','id'); 
        // từ sản phẩm cha ra con xài hasone
        // (tên đường dẫn, 'khoa ngoại', khóa chính)
    }
}
