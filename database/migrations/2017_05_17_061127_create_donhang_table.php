<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_kh')->unsigned();
            $table->string('ds_sp');
            $table->datetime('ngaymua');
            $table->float('thanhtien');
            $table->integer('trangthai')->unsigned();
            $table->string('ghichu',300);
            $table->timestamps();
            $table->foreign('id_kh')->references('id')->on('khachhang');
            $table->foreign('trangthai')->references('id')->on('trangthai');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
