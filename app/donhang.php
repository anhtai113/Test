<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    protected $table = 'donhang';
    protected $fillable = ['id','id_kh','ds_sp','ngaymua','thanhtien','trangthai','ghichu'];
    public $timestamps = true;
}
