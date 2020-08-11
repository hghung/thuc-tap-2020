<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbTintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_tintuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieude');
            $table->text('noidung');
            $table->string('hinhanh');


            $table->integer('id_trangthai')->unsigned();
            $table->foreign('id_trangthai')
                    ->references('id')
                    ->on('db_trangthai')
                    ->onDelete('cascade');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
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
        Schema::dropIfExists('db_tintuc');
    }
}
