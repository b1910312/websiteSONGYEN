<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamLyHocGioiTinh extends Controller
{
    function index(){
        return view('TamLyHocGioiTinh.HieuMinh');
     }
     function testPage(){
        return view('TamLyHocGioiTinh.test');
     }
     function detailTestPage(){
        return view('TamLyHocGioiTinh.chitiet_test');
     }
     function KhoaHoc(){
        return view('TamLyHocGioiTinh.KhoaHoc');
     }
     function HoTro(){
        return view('TamLyHocGioiTinh.HoTro');
     }
}
