<?php

namespace App\Http\Controllers\Admin\HocVien;

use App\Http\Controllers\Controller;
use App\Models\HocVien;
use Illuminate\Http\Request;

class HocVienController extends Controller
{
    public function get($MaHocVien)
    {
        try {
            $data = HocVien::where('MaHocVien', $MaHocVien)->with('khoahoc')->first();
            if ($data) {
                return response()->json(['message' => 'Tải dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Dữ liệu không tồn tại']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function getAll()
    {
        try {
            $data = HocVien::with('khoahoc')->get();
            if ($data) {
                return response()->json(['message' => 'Tải dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Dữ liệu không tồn tại']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function delete($MaHocVien)
    {
        try {
            $data = HocVien::where('id', $MaHocVien)->first();
            if ($data) {
                $khoahoc = $data->khoahoc->TenKhoaHoc;
                $hocvien = $data->HoVaTen;
                $data->delete();
                return response()->json(['message' => 'Đã xóa học viên ' . $hocvien . ' khỏi khóa học ' . $khoahoc]);
            } else {
                return response()->json(['message' => 'Dữ liệu không tồn tại']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
}
