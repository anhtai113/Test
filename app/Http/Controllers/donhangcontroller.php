<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\donhangrequest;
use DB;
use donhang;
use khachhang;
use trangthai;
use sanpham;
class donhangcontroller extends Controller
{
    public function index(){
    	$data = DB::table('donhang')
    	->join('sanpham','sanpham.id','donhang.ds_sp')
    	->join('khachhang','khachhang.id','donhang.id_kh')
    	->select('donhang.id','donhang.ngaymua','donhang.thanhtien','donhang.trangthai','donhang.ghichu','khachhang.ten_kh','sanpham.ma_sp')
    	->get();
    	return view('backend.donhang.listdonhang',compact('data'));
    }
    public function getadd(){
    		$data1 = DB::table('khachhang')->get();
    		$data2 = DB::table('sanpham')->get();
    		$data3 = DB::table('trangthai')->get();
    	return view('backend.donhang.them',compact('data1','data2','data3'));
    	
    	
    }
    public function postAdd(donhangrequest $request){
    	$data = DB::table('donhang')->insert([
            'id_kh' =>$request->idkh,
            'ds_sp' =>$request->dssp,
            'ngaymua' =>$request->ngaymua,
            'thanhtien' =>$request->ttien,
            'trangthai' =>$request->trangthai,
            'ghichu' =>$request->ghichu

        ]);
        return redirect()->route('admin.donhang.getlist',compact('data'));
    }
    public function getEdit($id){

        $data = DB::table('donhang')->where('id',$id)->get();
        $data2 = DB::table('khachhang')->get();
        $data3 = DB::table('sanpham')->get();
        $data4 = DB::table('trangthai')->get();
        return view('backend.donhang.editdonhang',compact('data','data2','data3','data4'));
    }
    public function postEdit(donhangrequest $request,$id){
        $data = DB::table('donhang')->where('id',$id)->update([
            'id_kh' =>$request->idkh,
            'ds_sp' =>$request->dssp,
            'ngaymua' =>$request->ngaymua,
            'thanhtien' =>$request->ttien,
            'trangthai' =>$request->trangthai,
            'ghichu' =>$request->ghichu

        ]);
        return redirect()->route('admin.donhang.getlist',compact('data'));
    }
    public function getDelete($id){
        $data = DB::table('donhang')->where('id',$id)->delete();
        return redirect()->route('admin.donhang.getlist',compact('data'));
    }
}
