<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamLyHocDuong extends Controller
{
    function index(){
        return view('TamLyHocDuong.HieuNhau');
     }
     function testPage(){
        return view('TamLyHocDuong.test');
     }
     function detailTestPage(){
        return view('TamLyHocDuong.chitiet_test');
     }
     function KhoaHoc(){
        return view('TamLyHocDuong.KhoaHoc');
     }
     function HoTro(){
        return view('TamLyHocDuong.HoTro');
     }
}
