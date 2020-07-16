<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_user')->nullable();

            $table->string('ho_ten');
            $table->string('sdt');
            $table->string('cmnd');
            $table->string('email');
            $table->string('dia_chi');
            $table->date('nam_sinh');


            $table->integer('id_taikhoan')->unsigned();
            $table->foreign('id_taikhoan')
                    ->references('id')
                    ->on('db_taikhoan')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_user');
    }
}
