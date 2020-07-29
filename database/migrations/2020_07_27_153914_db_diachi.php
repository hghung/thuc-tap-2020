<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbDiachi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_diachi', function (Blueprint $table) {
            $table->increments('id');
            $table->double('lat');
            $table->double('lng');
            $table->string('dia_chi');

            $table->integer('id_quanhuyen')->unsigned();
            $table->foreign('id_quanhuyen')
                    ->references('id')
                    ->on('district')
                    ->onDelete('cascade');

            $table->integer('id_phuongxa')->unsigned();
            $table->foreign('id_phuongxa')
                    ->references('id')
                    ->on('ward')
                    ->onDelete('cascade');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                    ->references('id')
                    ->on('db_user')
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
        Schema::dropIfExists('db_diachi');
    }
}
