<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KyNangSong extends Controller
{
    function index(){
        return view('KyNangSong.TimHieu');
     }
     function testPage(){
        return view('KyNangSong.test');
     }
     function detailTestPage(){
        return view('KyNangSong.chitiet_test');
     }
     function KhoaHoc(){
        return view('KyNangSong.KhoaHoc');
     }
     function HoTro(){
        return view('KyNangSong.HoTro');
     }
}
