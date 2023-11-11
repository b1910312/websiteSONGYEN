<?php

namespace App\Http\Controllers\Admin\DoanhNghiep\DuAn;

use App\Http\Controllers\Controller;
use App\Http\Requests\DuAn\DuAnRequest;
use App\Http\Requests\DuAn\UpdateDuAnRequest;
use App\Models\DuAn;
use Illuminate\Http\Request;


class DuAnController extends Controller
{

    public function get($MaDuAn)
    {
        try {
            $data = DuAn::where('MaDuAn', $MaDuAn)->first();
            if ($data) {
                return response()->json(['message' => 'Tải dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function getAll()
    {
        try {
            $data = DuAn::all();
            if ($data) {
                return response()->json(['message' => 'Tải dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }

    public function store(DuAnRequest $request)
    {
        try {
            $data = DuAn::create([
                'MaDuAn' => $request->MaDuAn,
                'TenDuAn' => $request->TenDuAn,
                'MucKieuGoiDauTuDuoi' => $request->MucKieuGoiDauTuDuoi,
                'MucKieuGoiDauTuTren' => $request->MucKieuGoiDauTuTren,
                'SoTienKieuGoiThanhCong' => $request->SoTienKieuGoiThanhCong,
                'NgayKeuGoi' => $request->NgayKeuGoi,
                'NgayKetThucKeuGoi' => $request->NgayKetThucKeuGoi,
                'ThoiGianThucHienDuAn' => $request->ThoiGianThucHienDuAn,
                'NgayBatDauDuAn' => $request->NgayBatDauDuAn,
                'NgayKetThucDuAn' => $request->NgayKetThucDuAn,
                'TrangThai' => $request->TrangThai,
            ]);
            return response()->json(['message' => 'Thêm dữ liệu thành công', 'data' => $data], 200);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }

    public function put(UpdateDuAnRequest $request, $MaDuAn)
    {
        try {
            $data = DuAn::where('MaDuAn', $MaDuAn)->first();
            if ($data) {
                $data->update([
                    'MaDuAn' => $request->MaDuAn,
                    'TenDuAn' => $request->TenDuAn,
                    'MucKieuGoiDauTuDuoi' => $request->MucKieuGoiDauTuDuoi,
                    'MucKieuGoiDauTuTren' => $request->MucKieuGoiDauTuTren,
                    'SoTienKieuGoiThanhCong' => $request->SoTienKieuGoiThanhCong,
                    'NgayKeuGoi' => $request->NgayKeuGoi,
                    'NgayKetThucKeuGoi' => $request->NgayKetThucKeuGoi,
                    'ThoiGianThucHienDuAn' => $request->ThoiGianThucHienDuAn,
                    'NgayBatDauDuAn' => $request->NgayBatDauDuAn,
                    'NgayKetThucDuAn' => $request->NgayKetThucDuAn,
                    'TrangThai' => $request->TrangThai,
                ]);
                return response()->json(['message' => 'Cập nhật thành công']);
            } else {
                return response()->json(['message' => 'Không tồn tại dự án']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }

    public function delete($MaDuAn)
    {
        try {
            $data = DuAn::where('MaDuAn', $MaDuAn)->first();
            if ($data) {
                $data->delete();
                return response()->json(['message' => 'Xóa dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Không tồn tại dự án']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
}
