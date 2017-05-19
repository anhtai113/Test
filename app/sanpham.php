<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table= 'sanpham';
    protected $fillable = ['id','ma_sp','ten_sp','image','loai_sp','dvt','giamua','giaban','ghichu'];
    public $timestamps = true;
}
