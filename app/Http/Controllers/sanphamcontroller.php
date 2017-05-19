<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\sanphamrequest;
use DB;
use sanpham;
use loaisp;
class sanphamcontroller extends Controller
{
    public function index(){
    	$data = DB::table('sanpham')->get();
    	return view('backend.sanpham.listsanpham',compact('data'));
    }
    public function getadd(){
    	$data = DB::table('loaisp')->get();
    	return view('backend.sanpham.them',compact('data'));
    }
    public function postAdd(sanphamrequest $request){
    	$filename = $request->file('anh')->getClientOriginalName();
        echo $filename;
    	$request->file('anh')->move(base_path().'/public/image/sanpham',$filename);

    	$data = DB::table('sanpham')->insert([
    		'ma_sp' => $request->masp,
    		'ten_sp' => $request->tensp,
    		'image' => $filename,
    		'loai_sp' => $request->loaisp,
    		'dvt' => $request->dvt,
            'giaban' => $request->giaban,
            'giamua' => $request->giamua,
    		'ghichu' => $request->ghichu
    	]);
    	return redirect()->route('admin.sanpham.getlist',compact('data'));
    }
    public function getEdit($id){
        $data = DB::table('sanpham')->where('id',$id)->get();
        $data2 = DB::table('loaisp')->get();
       return view('backend.sanpham.editsanpham',compact('data','data2'));
    }
    public function postEdit(sanphamrequest $request, $id){
        $filename = $request->file('anh')->getClientOriginalName();
        $request->file('anh')->move(base_path().'/public/image/sanpham',$filename);
        $data = DB::table('sanpham')->where('id',$id)->update([
            'ma_sp' =>$request->masp,
            'ten_sp' =>$request->tensp,
            'image'=>$filename,
            'loai_sp'=>$request->loaisp,
            'dvt'=>$request->dvt,
            'giamua'=>$request->giamua,
            'giaban'=>$request->giaban,
            'ghichu' =>$request->ghichu

        ]);
        return redirect()->route('admin.sanpham.getlist',compact('data'));
    }
    public function getDelete($id){
        $data = DB::table('sanpham')->where('id',$id)->delete();
        return redirect()->route('admin.sanpham.getlist',compact('data'));
    }
}
