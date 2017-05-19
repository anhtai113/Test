<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baiviet extends Model
{
    protected $table = 'baiviet';
    protected $fillable = ['id','id_user','tieude','noidung','image','ghichu'];
    public $timestamps = true;
}
