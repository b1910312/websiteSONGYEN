<?php

namespace App\Http\Controllers\Admin\DichVu;

use App\Http\Controllers\Controller;
use App\Models\DichVu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class DichVuController extends Controller
{
    public function get($MaDichVu)
    {
        try {
            $data = DichVu::where('MaDichVu', $MaDichVu)->first();
            if ($data) {
                return response()->json(['message' => 'Lấy dữ liệu thành công', 'data' => $data], 200);
            } else {
                return response()->json(['message' => 'Không có dữ liệu'], 400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function getAll()
    {
        try {
            $data = DichVu::all();
            if ($data) {
                return response()->json(['message' => 'Lấy dữ liệu thành công', 'data' => $data], 200);
            } else {
                return response()->json(['message' => 'Không có dữ liệu'], 400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function post(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'MaDichVu' => 'required|unique:DichVu',
            'TenDichVu' => 'required',
            'MoTaDichVu' => 'required',
        ], [
            'MaDichVu.required' => 'Mã nền tảng không được để trống',
            'MaDichVu.unique' => 'Mã nền tảng đã tồn tại',
            'TenDichVu.required' => 'Tên nền tảng không được để trống',
            'MoTaDichVu.required' => 'Đường dẫn không được để trống',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 423);
            }
            DichVu::create([
                'MaDichVu' => $request->MaDichVu,
                'TenDichVu' => $request->TenDichVu,
                'MoTaDichVu' => $request->MoTaDichVu,
            ]);
            return response()->json(['message' => 'Thêm dữ liệu thành công']);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function put(Request $request, $MaDichVu)
    {
        $validation = Validator::make($request->all(), [
            'MaDichVu' => [
                'required',
                Rule::unique('DichVu')->ignore($MaDichVu, 'MaDichVu'),
            ],
            'TenDichVu' => 'required',
            'MoTaDichVu' => 'required',
        ], [
            'MaDichVu.required' => 'Mã nền tảng không được để trống',
            'MaDichVu.unique' => 'Mã nền tảng đã tồn tại',
            'TenDichVu.required' => 'Tên nền tảng không được để trống',
            'MoTaDichVu.required' => 'Đường dẫn không được để trống',
        ]);
        try {
            $data = DichVu::where('MaDichVu', $MaDichVu)->first();
            if ($data) {
                if ($validation->fails()) {
                    return response()->json($validation->errors(), 423);
                }
                $data->update([
                    'MaDichVu' => $request->MaDichVu,
                    'TenDichVu' => $request->TenDichVu,
                    'MoTaDichVu' => $request->MoTaDichVu,
                ]);
                return response()->json(['message' => 'Cập nhật dữ liệu thành công'], 200);
            } else {
                return response()->json(['message' => 'Không có dữ liệu'], 400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function deleted($MaDichVu)
    {
        try {
            $data = DichVu::where('MaDichVu', $MaDichVu)->first();
            if ($data) {
                $data->delete();
                return response()->json(['message' => 'Xóa dữ liệu thành công'], 200);
            } else {
                return response()->json(['message' => 'Không có dữ liệu'], 400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
}
