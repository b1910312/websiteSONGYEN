<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuongNghiep extends Controller
{
    function index(){
        return view('HuongNghiep.HieuNghe');
     }
     function testPage(){
        return view('HuongNghiep.test');
     }
     function detailTestPage(){
        return view('HuongNghiep.chitiet_test');
     }
     function KhoaHoc(){
        return view('HuongNghiep.KhoaHoc');
     }
     function HoTro(){
        return view('HuongNghiep.HoTro');
     }
}
