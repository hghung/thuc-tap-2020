<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbBaotri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_baotri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieude');
            $table->text('noidung');
            $table->date('ngay');
            $table->time('gio');

            $table->integer('id_trangthai')->unsigned();
            $table->foreign('id_trangthai')
                    ->references('id')
                    ->on('db_trangthai')
                    ->onDelete('cascade');

            $table->integer('id_khachhang')->unsigned();
            $table->foreign('id_khachhang')
                    ->references('id')
                    ->on('db_user')
                    ->onDelete('cascade');
            
            $table->integer('id_nhanvien')->unsigned()->nullable();
            $table->foreign('id_nhanvien')
                    ->references('id')
                    ->on('db_user')
                    ->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_baotri');
    }
}
