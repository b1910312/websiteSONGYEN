<?php

namespace App\Http\Controllers\Admin\LopHoc;

use App\Http\Controllers\Controller;
use App\Models\LopHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class LopHocController extends Controller
{
    public function get($MaLopHoc)
    {
        try {
            $data = LopHoc::where('MaLopHoc', $MaLopHoc)->with('khoahoc')->first();
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
            $data = LopHoc::with('khoahoc')->get();
            if ($data) {
                return response()->json(['message' => 'Tải dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Dữ liệu không tồn tại']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function post(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'MaLopHoc' => 'required|unique:lophoc',
            'MaKhoaHoc' => 'required|exists_in_khoahoc',
            'NgayBatDau' => 'required|date',
            'NgayKetThuc' => 'required|date',
            'TrangThai' => 'required|numeric',
        ], [
            'MaLopHoc.required' => 'Mã lớp học không được trống',
            'MaLopHoc.unique' => 'Mã lớp học đã tồn tại',
            'MaKhoaHoc.required' => 'Mã Khóa Học không được trống',
            'MaKhoaHoc.exists_in_khoahoc' => 'Không tồn tại mã khóa học này',
            'NgayBatDau.required' => 'Ngày bắt đầu không được trống',
            'NgayBatDau.date' => 'Ngày bắt đầu phải có dạng Y-m-d',
            'NgayKetThuc.required' => 'Ngày kết thúc không được trống',
            'NgayKetThuc.date' => 'Ngày kết thúc không được trống',
            'TrangThai.required' => 'Trạng thái không được trống',
            'TrangThai.numeric' => 'Trạng thái phải là số',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data = LopHoc::create([
                'MaLopHoc' => $request->MaLopHoc,
                'MaKhoaHoc' => $request->MaKhoaHoc,
                'NgayBatDau' => $request->NgayBatDau,
                'NgayKetThuc' => $request->NgayKetThuc,
                'TrangThai' => $request->TrangThai,
            ]);
            if ($data) {
                return response()->json(['message' => 'Thêm dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Thêm dữ liệu không thành công']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function put(Request $request, $MaLopHoc)
    {
        $validation = Validator::make($request->all(), [
            'MaLopHoc' => [
                'required',
                Rule::unique('lophoc')->ignore($MaLopHoc, 'MaLopHoc'),
            ],
            'MaKhoaHoc' => 'required|exists_in_khoahoc',
            'NgayBatDau' => 'required|date',
            'NgayKetThuc' => 'required|date',
            'TrangThai' => 'required|numeric',
        ], [
            'MaLopHoc.required' => 'Mã lớp học không được trống',
            'MaLopHoc.unique' => 'Mã lớp học đã tồn tại',
            'MaKhoaHoc.required' => 'Mã Khóa Học không được trống',
            'MaKhoaHoc.exists_in_khoahoc' => 'Không tồn tại mã khóa học này',
            'NgayBatDau.required' => 'Ngày bắt đầu không được trống',
            'NgayBatDau.date' => 'Ngày bắt đầu phải có dạng Y-m-d',
            'NgayKetThuc.required' => 'Ngày kết thúc không được trống',
            'NgayKetThuc.date' => 'Ngày kết thúc không được trống',
            'TrangThai.required' => 'Trạng thái không được trống',
            'TrangThai.numeric' => 'Trạng thái phải là số',
        ]);
        try {
            $data = LopHoc::where('MaLopHoc', $MaLopHoc)->first();
            if ($data) {
                if ($validation->fails()) {
                    return response()->json($validation->errors(), 400);
                }
                $data->update([
                    'MaLopHoc' => $request->MaLopHoc,
                    'MaKhoaHoc' => $request->MaKhoaHoc,
                    'NgayBatDau' => $request->NgayBatDau,
                    'NgayKetThuc' => $request->NgayKetThuc,
                    'TrangThai' => $request->TrangThai,
                ]);
                return response()->json(['message' => 'Chỉnh sửa dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function delete($MaLopHoc)
    {
        try {
            $data = LopHoc::where('MaLopHoc', $MaLopHoc)->first();
            if ($data) {
                $data->delete();
                return response()->json(['message' => 'Xóa dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Dữ liệu không tồn tại']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
}
