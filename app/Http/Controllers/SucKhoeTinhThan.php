<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SucKhoeTinhThan extends Controller
{
    
    function index(){
        return view('SucKhoeTinhThan.TimHieu');
     }
     function testPage(){
        return view('SucKhoeTinhThan.test');
     }
     function detailTestPage(){
        return view('SucKhoeTinhThan.chitiet_test');
     }
     function KhoaHoc(){
        return view('SucKhoeTinhThan.KhoaHoc');
     }
     function HoTro(){
        return view('SucKhoeTinhThan.HoTro');
     }
     
     //NhatKyTinhThan
     function DanhSachNKTT(){
        return view('SucKhoeTinhThan/NhatKiTinhThan.Ds_NKTT');
     }
     function DangKy(){
        return view('SucKhoeTinhThan/NhatKiTinhThan.DangKyNKTT');
     }
     function NhatKyTinhThan(){
        return view('SucKhoeTinhThan/NhatKiTinhThan.NhatKiTinhThan');
     }
  
}
