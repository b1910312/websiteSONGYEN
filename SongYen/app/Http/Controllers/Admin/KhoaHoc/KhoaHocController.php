<?php

namespace App\Http\Controllers\Admin\KhoaHoc;

use App\Http\Controllers\Controller;
use App\Http\Requests\KhoaHoc\KhoaHocRequest;
use App\Http\Requests\KhoaHoc\UpdateKhoaHocRequest;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KhoaHocController extends Controller
{
    public function get($MaKhoaHoc)
    {
        try {
            $data = KhoaHoc::where('MaKhoaHoc', $MaKhoaHoc)->with('chude')->first();
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
            $data = KhoaHoc::with('chude')->get();
            if ($data) {
                return response()->json(['message' => 'Tải dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Dữ liệu không tồn tại']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function post(KhoaHocRequest $request)
    {
        try {
            $data = KhoaHoc::create([
                'MaKhoaHoc' => $request->MaKhoaHoc,
                'ChuDe' => $request->ChuDe,
                'TenKhoaHoc' => $request->TenKhoaHoc,
                'HocPhi' => $request->HocPhi,
                'LoTrinh' => $request->LoTrinh,
                'NguoiGiangDay' => $request->NguoiGiangDay,
                'NgayBatDau' => $request->NgayBatDau,
                'NgayKetThuc' => $request->NgayKetThuc,
                'HinhThuc' => $request->HinhThuc,
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
    public function put(UpdateKhoaHocRequest $request, $MaKhoaHoc)
    {
        try {
            $data = KhoaHoc::where('MaKhoaHoc', $MaKhoaHoc)->first();
            if ($data) {

                $data->update([
                    'MaKhoaHoc' => $request->MaKhoaHoc,
                    'TenKhoaHoc' => $request->TenKhoaHoc,
                    'MoTaKhoaHoc' => $request->MoTaKhoaHoc,
                ]);
                return response()->json(['message' => 'Chỉnh sửa dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function delete($MaKhoaHoc)
    {
        try {
            $data = KhoaHoc::where('MaKhoaHoc', $MaKhoaHoc)->first();
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
