<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham',function(Blueprint $table){
            $table->increments('id');
            $table->string('ma_sp',11);
            $table->string('ten_sp',200);
            $table->string('image',200);
            $table->integer('loai_sp')->unsigned();
            $table->string('dvt',11);
            $table->string('ghichu',300);
            $table->timestamps();
            $table->foreign('loai_sp')->references('id')->on('loaisp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
