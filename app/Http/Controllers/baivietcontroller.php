<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\baivietrequest;
use DB;
use baiviet;
use User;
class baivietcontroller extends Controller
{
    public function index(){
    	$data = DB::table('baiviet')->get();
    	return view('backend.baiviet.listbaiviet',compact('data'));
    }
    public function getadd(){
    	$data = DB::table('users')->get();
    	return view('backend.baiviet.them',compact('data'));
    }
    public function postAdd(baivietrequest $request){
    	$filename =  $request->file('anh')->getClientOriginalName();
    	echo $filename;
    	$request->file('anh')->move(base_path().'/public/image/baiviet',$filename);
    	$data = DB::table('baiviet')->insert([
    		'id_user' => $request->name,
    		'tieude' =>$request->tieude,
    		'noidung' =>$request->noidung,
    		'image' =>$filename,
    		'ghichu'=>$request->ghichu


    	]);
    	return redirect()->route('admin.baiviet.getlist',compact('data'));
    }
    public function getEdit($id){
    	$data2 = DB::table('users')->get();
    	$data = DB::table('baiviet')->where('id',$id)->get();
    	return view('backend.baiviet.editbaiviet',compact('data','data2'));
    }
    public function postEdit(baivietrequest $request,$id){
    	$filename = $request->file('anh')->getClientOriginalName();
    	$request->file('anh')->move(base_path().'/public/image/baiviet',$filename);
    	$data = DB::table('baiviet')->where('id',$id)->update([
    		'id_user' => $request->name,
    		'tieude' => $request->tieude,
    		'noidung' => $request->noidung,
    		'image' => $filename,
    		'ghichu' => $request->ghichu

    	]);
    	return redirect()->route('admin.baiviet.getlist',compact('data'));

    }
    public function getDelete($id){
    	$data = DB::table('baiviet')->where('id',$id)->delete();
    	return redirect()->route('admin.baiviet.getlist',compact('data'));
    }
}
