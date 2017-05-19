<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trangthai extends Model
{
    protected $table = 'trangthai';
    protected $fillabel = ['id','tinhtrang','ghichu'];
    public $timestamps = true;
}
