<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class db_vaitro extends Model
{
    protected $table='db_vaitro';
    public $timestamps = false;

    // public function bangtin2() // phải viêt liền ko được cách ra hoặc _
    // {
    //     return $this->belongsTo('App\Models\bangtin','id_bangtin','id'); 
    //     // từ sản phẩm cha ra con xài hasone
    //     // (tên đường dẫn, 'khoa ngoại', khóa chính)
    // }
}
