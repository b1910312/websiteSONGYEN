<?php

namespace App\Http\Controllers\Admin\DoanhNghiep\SuKien;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuKien\SuKienRequest;
use App\Http\Requests\SuKien\UpdateSuKienRequest;
use App\Models\SuKien;
use Illuminate\Http\Request;

class SuKienController extends Controller
{
    public function get($MaSuKien)
    {
        try {
            $data = SuKien::where('MaSuKien', $MaSuKien)->first();
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
            $data = SuKien::all();
            if ($data) {
                return response()->json(['message' => 'Tải dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }

    public function store(SuKienRequest $request)
    {
        try {
            $data = SuKien::create([
                'MaSuKien' => $request->MaSuKien,
                'TenSuKien' => $request->TenSuKien,
                'DiaDiem' => $request->DiaDiem,
                'NgayBatDauSuKien' => $request->NgayBatDauSuKien,
                'NgayKetThucSuKien' => $request->NgayKetThucSuKien,
                'TrangThai' => $request->TrangThai,
            ]);
            return response()->json(['message' => 'Thêm dữ liệu thành công', 'data' => $data], 200);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }

    public function put(UpdateSuKienRequest $request, $MaSuKien)
    {
        try {
            $data = SuKien::where('MaSuKien', $MaSuKien)->first();
            if ($data) {
                $data->update([
                    'MaSuKien' => $request->MaSuKien,
                    'TenSuKien' => $request->TenSuKien,
                    'DiaDiem' => $request->DiaDiem,
                    'NgayBatDauSuKien' => $request->NgayBatDauSuKien,
                    'NgayKetThucSuKien' => $request->NgayKetThucSuKien,
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

    public function delete($MaSuKien)
    {
        try {
            $data = SuKien::where('MaSuKien', $MaSuKien)->first();
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
