<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    protected $table = 'loaisp';
    protected $fillable = ['id','tenloai','image','ghichu'];
    public $timestamps = true;
}
