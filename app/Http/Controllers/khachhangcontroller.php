<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\khachhangrequest;
use DB;
use khachhang;
class khachhangcontroller extends Controller
{
    public function index(){
    	$data = DB::table('khachhang')->get();
    	return view('backend.khachhang.listkhachhang',compact('data'));
    }
    public function getadd(){
    	return view('backend.khachhang.them');
    }
    public function postAdd(khachhangrequest $request){
    	$data = DB::table('khachhang')->insert([
    		'ten_kh' =>$request->name,
    		'email' =>$request->email,
    		'sdt' =>$request->sdt,
    		'diachi'=>$request->diachi,
    		'username' =>$request->tdn,
    		'password' =>md5(md5($request->matkhau))
 
    	]);
    	return redirect()->route('admin.khachhang.getlist')->with(['flash_level'=>'success','flash_message'=>'chúc mừng bạn đã thêm thành công']);

    }
    public function getEdit($id){
    	$data = DB::table('khachhang')->where('id',$id)->get();
    	return view('backend.khachhang.editkhachhang',compact('data'));
    	
    }
    public function postEdit(khachhangrequest $request, $id){
    	$data = DB::table('khachhang')->where('id',$id)->update([
    		'ten_kh' => $request->name,
    		'email' =>$request->email,
    		'sdt' =>$request->sdt,
    		'diachi' =>$request->diachi,
    		'username' =>$request->tdn,
    		'password' =>md5(md5($request->matkhau))
    	]);
    	return redirect()->route('admin.khachhang.getlist')->with(['flash_level'=>'success','flash_message'=>'chúc mừng bạn sửa thành công']);
    }
   public function getDelete($id){
   		$data = DB::table('khachhang')->where('id',$id)->delete();
   		return redirect()->route('admin.khachhang.getlist',compact('data'));
   }
}
