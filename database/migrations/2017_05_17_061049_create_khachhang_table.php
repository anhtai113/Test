<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang',function(Blueprint $table){
            $table->increments('id');
            $table->string('ten_kh',100);
            $table->string('email',100);
            $table->string('sdt',11);
            $table->string('diachi',200);
            $table->string('username',100);
            $table->string('password',32);
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
        Schema::dropIfExists('khachhang');
    }
}
