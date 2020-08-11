<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;

use Laravelista\Comments\Commentable;

class db_tintuc extends Model implements Viewable
{
    use InteractsWithViews, Commentable, SoftDeletes;
    protected $dates = ['deleted_at'];

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
