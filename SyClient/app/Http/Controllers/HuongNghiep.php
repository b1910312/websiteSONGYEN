<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuongNghiep extends Controller
{
    function index(){
         $ListBaiViet = [
            ['id' => '1','BV'=>'Bài 1', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
            ['id' => '2','BV'=>'Bài 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
            ['id' => '3','BV'=>'Bài 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
            ['id' => '4','BV'=>'Bài 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
         ];
        return view('HuongNghiep.HieuNghe', compact('ListBaiViet'));
     }
     function testPage(){
      $ListBaiTest = [
         ['id' => '1','BV'=>'Bài trắc nghiệm 1', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
         ['id' => '2','BV'=>'Bài trắc nghiệm 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
         ['id' => '3','BV'=>'Bài trắc nghiệm 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
         ['id' => '4','BV'=>'Bài trắc nghiệm 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg'],
         ['id' => '5','BV'=>'Bài trắc nghiệm 5', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg'],
         ['id' => '6','BV'=>'Bài trắc nghiệm 6', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg'],
         ['id' => '7','BV'=>'Bài trắc nghiệm 7', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg'],
         ['id' => '8','BV'=>'Bài trắc nghiệm 8', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']

      ];
        return view('HuongNghiep.test', compact('ListBaiTest'));
     }
     function detailTestPage(Request $req){
      $id = $req->route('id');
      $ListBaiTest = [
         ['id' => '1','BV'=>'Bài Trắc nghiệm 1', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
         ['id' => '2','BV'=>'Bài Trắc nghiệm 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
         ['id' => '3','BV'=>'Bài Trắc nghiệm 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
         ['id' => '4','BV'=>'Bài Trắc nghiệm 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
      ];
      $ListBaiTestSame = [
         ['id' => '1','BV'=>'Bài Trắc nghiệm 1', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
         ['id' => '2','BV'=>'Bài Trắc nghiệm 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
         ['id' => '3','BV'=>'Bài Trắc nghiệm 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
         ['id' => '4','BV'=>'Bài Trắc nghiệm 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
      ];
      $BaiTest = null;

      foreach ($ListBaiTest as $Test) {
            if ($Test['id'] == $id) {
                $BaiTest = $Test;
                break;
            }
      }
        return view('HuongNghiep.chitiet_test', compact('BaiTest','ListBaiTestSame'));
     }
     function KhoaHoc(){
      $ListKhoaHoc = [
         ['id' => '1','BV'=>'Khóa học 1', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
         ['id' => '2','BV'=>'Khóa học 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
         ['id' => '3','BV'=>'Khóa học 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
         ['id' => '4','BV'=>'Khóa học 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg'],
         ['id' => '5','BV'=>'Khóa học 5', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg'],
         ['id' => '6','BV'=>'Khóa học 6', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg'],
         ['id' => '7','BV'=>'Khóa học 7', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg'],
         ['id' => '8','BV'=>'Khóa học 8', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']

      ];
        return view('HuongNghiep.KhoaHoc', compact('ListKhoaHoc'));
     }
     function detailKhoaHoc(Request $req) {
      
      $id = $req->route('id');
      $ListKhoaHoc = [
         ['id' => '1','BV'=>'Khóa học 1', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
         ['id' => '2','BV'=>'Khóa học 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
         ['id' => '3','BV'=>'Khóa học 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
         ['id' => '4','BV'=>'Khóa học 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
      ];
      $ListKhoaHocSame = [
         ['id' => '1','BV'=>'Khóa học 1', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
         ['id' => '2','BV'=>'Khóa học 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
         ['id' => '3','BV'=>'Khóa học 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
         ['id' => '4','BV'=>'Khóa học 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
      ];
      $KhoaHoc = null;

      foreach ($ListKhoaHoc as $khoaHoc) {
            if ($khoaHoc['id'] == $id) {
                $KhoaHoc = $khoaHoc;
                break;
            }
      }
      return view('HuongNghiep.chitiet_khoahoc', compact('KhoaHoc','ListKhoaHocSame'));
     }
     function HoTro(){
        return view('HuongNghiep.HoTro');
     }
     function detailHieuNghe(Request $req) {
      
      $id = $req->route('id');
      $ListBaiViet = [
         ['id' => '1','BV'=>'Bài 1', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
         ['id' => '2','BV'=>'Bài 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
         ['id' => '3','BV'=>'Bài 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
         ['id' => '4','BV'=>'Bài 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
      ];
      $ListBaiVietSame = [
         ['id' => '1','BV'=>'Bài 1', 'CD'=>'chủ đề 1','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 1', 'img'=>'img/portfolio-1.jpg'],
         ['id' => '2','BV'=>'Bài 2', 'CD'=>'chủ đề 2','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 2', 'img'=>'img/portfolio-2.jpg'],
         ['id' => '3','BV'=>'Bài 3', 'CD'=>'chủ đề 3','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 3', 'img'=>'img/portfolio-3.jpg'],
         ['id' => '4','BV'=>'Bài 4', 'CD'=>'chủ đề 4','ND'=>'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 4', 'img'=>'img/portfolio-4.jpg']
      ];
      $BaiViet = null;

      foreach ($ListBaiViet as $baiViet) {
            if ($baiViet['id'] == $id) {
                $BaiViet = $baiViet;
                break;
            }
      }
      return view('HuongNghiep.chitiet_baiviet', compact('BaiViet','ListBaiVietSame'));
     }
}
