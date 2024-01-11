<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuKien extends Controller
{
    function index(){
        $ListSuKien = [
            ['id' => '1','Ten'=>'Sự kiện 1', 'NgayBatDau'=>'19/08/2023', 'NgayKetThuc'=>'19/08/2023', 'NoiBat' => '1',  'TrangThai'=>'1', 'DiaDiem'=>'Trà Vinh','Meta'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
            ['id' => '2','Ten'=>'Sự kiện 2', 'NgayBatDau'=>'18/06/2023', 'NgayKetThuc'=>'18/06/2023', 'NoiBat' => '1',  'TrangThai'=>'1', 'DiaDiem'=>'Kiên Giang','Meta'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
            ['id' => '3','Ten'=>'Sự kiện 3', 'NgayBatDau'=>'21/05/2023', 'NgayKetThuc'=>'21/05/2023', 'NoiBat' => '1',  'TrangThai'=>'1', 'DiaDiem'=>'Đắc Lắc','Meta'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
            ['id' => '4','Ten'=>'Sự kiện 4', 'NgayBatDau'=>'31/12/2023', 'NgayKetThuc'=>'31/12/2023', 'NoiBat' => '1',  'TrangThai'=>'1', 'DiaDiem'=>'TP Hồ Chí Minh','Meta'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
         ];
         $ListDuAn = [
            ['id' => '1','Ten'=>'Sự kiện 1', 'NgayBatDau'=>'19/08/2023', 'NgayKetThuc'=>'19/08/2023', 'NoiBat' => '1',  'TrangThai'=>'1', 'DiaDiem'=>'Trà Vinh','Meta'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
            ['id' => '2','Ten'=>'Sự kiện 2', 'NgayBatDau'=>'18/06/2023', 'NgayKetThuc'=>'18/06/2023', 'NoiBat' => '1',  'TrangThai'=>'1', 'DiaDiem'=>'Kiên Giang','Meta'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
            ['id' => '3','Ten'=>'Sự kiện 3', 'NgayBatDau'=>'21/05/2023', 'NgayKetThuc'=>'21/05/2023', 'NoiBat' => '1',  'TrangThai'=>'1', 'DiaDiem'=>'Đắc Lắc','Meta'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
            ['id' => '4','Ten'=>'Sự kiện 4', 'NgayBatDau'=>'31/12/2023', 'NgayKetThuc'=>'31/12/2023', 'NoiBat' => '1',  'TrangThai'=>'1', 'DiaDiem'=>'TP Hồ Chí Minh','Meta'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
         ];
        return view('SuKien', compact('ListSuKien'));
     }
    function chitietDA(Request $req){
        $id = $req->route('id');
        $ListBaiViet = [
           ['id' => '1','BV'=>'SuKien 1', 'CD'=>'chủ đề 1','ND'=>'<h3>Đoạn 1</h3>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1
       
           <h3>Đoạn 2</h3>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1
           
           <h3>Đoạn 3</h3>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1
           
           <h3>Đoạn 4</h3>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1
           
           <h3>Đoạn 5</h3>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1
           
           ', 'img'=>'img/portfolio-1.jpg'],
           ['id' => '2','BV'=>'SuKien 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
           ['id' => '3','BV'=>'SuKien 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
           ['id' => '4','BV'=>'SuKien 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
        ];
        $ListBaiVietSame = [
           ['id' => '1','BV'=>'SuKien 1', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
           ['id' => '2','BV'=>'SuKien 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
           ['id' => '3','BV'=>'SuKien 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
           ['id' => '4','BV'=>'SuKien 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
        ];
        $BaiViet = null;
  
        foreach ($ListBaiViet as $baiViet) {
              if ($baiViet['id'] == $id) {
                  $BaiViet = $baiViet;
                  break;
              }
        }
        return view('ChiTietSuKien', compact('BaiViet','ListBaiVietSame'));
  
    }
    function chitietSK(Request $req){
        $id = $req->route('id');
        $ListBaiViet = [
           ['id' => '1','BV'=>'SuKien 1', 'CD'=>'chủ đề 1','ND'=>'<h3>Đoạn 1</h3>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1
       
           <h3>Đoạn 2</h3>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1
           
           <h3>Đoạn 3</h3>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1
           
           <h3>Đoạn 4</h3>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1
           
           <h3>Đoạn 5</h3>
           Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1
           
           ', 'img'=>'img/portfolio-1.jpg'],
           ['id' => '2','BV'=>'SuKien 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
           ['id' => '3','BV'=>'SuKien 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
           ['id' => '4','BV'=>'SuKien 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
        ];
        $ListBaiVietSame = [
           ['id' => '1','BV'=>'SuKien 1', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
           ['id' => '2','BV'=>'SuKien 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
           ['id' => '3','BV'=>'SuKien 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
           ['id' => '4','BV'=>'SuKien 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
        ];
        $BaiViet = null;
  
        foreach ($ListBaiViet as $baiViet) {
              if ($baiViet['id'] == $id) {
                  $BaiViet = $baiViet;
                  break;
              }
        }
        return view('ChiTietSuKien', compact('BaiViet','ListBaiVietSame'));
  
    }
}