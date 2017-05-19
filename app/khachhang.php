<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table='khachhang';
    protected $fillable = ['id','ten_kh','email','sdt','diachi','username','password'];
    public $timestamps = true;
}
