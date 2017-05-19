<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\userRequest;
use User;
use level;
use DB;

class usercontroller extends Controller
{
     public function index(){
    	$data = DB::table('Users')->get();
    	return view('backend.users.listuser',compact('data'));
    }
    public function getadd(){
    	$data = DB::table('level')->get();
    	return view('backend.users.them',compact('data'));
    }
    public function postAdd(userRequest $request){
    	$data = DB::table('users')->insert([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>md5(md5($request->matkhau)),
    		'quyen'=>$request->quyen
    	]);
    	return redirect()->route('admin.users.getlist')->with(['flash_level'=>'success','flash_message'=>'Chúc mừng đã thêm thành công']);
    }
    public function getEdit($id){
    	$data = DB::table('users')->where('id',$id)->get();
    	return view('backend.users.editUser',compact('data','id'));
    }
    public function postEdit(userRequest $request,$id){
    	$data = DB::table('users')->where('id',$id)->update([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>md5(md5($request->matkhau)),
    		'quyen' => $request->quyen
    	]);
    	return redirect()->route('admin.users.getlist')->with(['flash_level'=>'success','flash_message'=>'Chúc mừng đã sửa thành công']);
    }
    public function getDelete($id){
    	$data = DB::table('users')->get();
        $data1 = DB::table('users')->where('id',$id)->delete();
        return redirect()->route('admin.users.getlist')->with(['flash_level'=>'success','flash_message'=>'Chúc mừng đã xóa thành công']);
    }
}
