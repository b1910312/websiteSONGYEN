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
     function KetquaTestPage(){
      $NoiDung = "Bài trắc nghiệm có 4 thang đo nhỏ: <br>
      - Mã ĐTG là những câu hỏi đánh giá về khả năng đặt câu hỏi - giả thuyết (Câu 1, 2, 3) <br>
      - Mã LKH là những câu hỏi đánh giá về khả năng lập kế hoạch nghiên cứu (Câu 4, 5, 6, 7) <br>
      - Mã TT là những câu hỏi đánh giá về khả năng thử nghiệm và thu thập dữ liệu (Câu 8, 9, 10) <br>
      - Mã KL là những câu hỏi đánh giá về khả năng phân tích, diễn giải và đưa ra kết luận (Câu 11,12,13,14) <br>
      - Cộng dồn điểm các câu lại với nhau để cho ra kết quả cuối cùng. <br>
      - Cộng dồn điểm của mỗi mã, thể hiện điểm và diễn giải của mỗi mã. <br> <br>
      Lưu ý: Kết quả bài test này chỉ mang tính chất tham khảo và đánh giá cơ bản về cảm nhận hạnh phúc của bạn.
      Kết quả không có giá trị thay thế chẩn đoán y khoa bởi bác sĩ/chuyên gia có chuyên môn. <br>
      Bạn nên thực hiện thêm thang đo Năng lực giao tiếp trong khoa học (CS) để đánh giá trọn vẹn nhất năng lực
      học tập các bộ môn khoa học.
      Bạn có thể tìm hiểu kỹ hơn về năng lực cá nhân hơn thông qua các bài viết trong chuyên mục Hướng nghiệp của
      Song Yến. <br>";
      $ThangDo =[
         ['tdo' => 'Khả năng 1','diem' => '25', 'Noidung' =>'Bạn có thể a'],
         ['tdo' => 'Khả năng 2','diem' => '15', 'Noidung' =>'Bạn có thể b'],
         ['tdo' => 'Khả năng 3','diem' => '20', 'Noidung' =>'Bạn có thể c'],
         ['tdo' => 'Khả năng 4','diem' => '5', 'Noidung' =>'Bạn có thể d'],
      ];
      $Diem = [
         ['diem' => '15'],
         ['diem' => '10'],
         ['diem' => '10'],
         ['diem' => '3'],
      ];
      return view('HuongNghiep.KetQuaTest', compact('NoiDung','ThangDo', 'Diem'));
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
         ['id' => '1','BV'=>'Bài 1', 'CD'=>'chủ đề 1','ND'=>'<h3>Đoạn 1</h3>
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