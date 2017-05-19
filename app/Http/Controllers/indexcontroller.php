<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use sanpham;
class indexcontroller extends Controller
{
    public function index(){
    	$heo = DB::table('sanpham')->where('loai_sp',3)->get();
    	return view('frontend.master',compact('heo'));
    }
}
