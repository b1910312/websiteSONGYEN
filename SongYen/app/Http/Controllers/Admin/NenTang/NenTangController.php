<?php

namespace App\Http\Controllers\Admin\NenTang;

use App\Http\Controllers\Controller;
use App\Models\NenTang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class NenTangController extends Controller
{
    public function get($MaNenTang)
    {
        try {
            $data = NenTang::where('MaNenTang', $MaNenTang)->first();
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
            $data = NenTang::all();
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
            'MaNenTang' => 'required|unique:nentang',
            'MaDoiTuong' => 'required',
            'TenNenTang' => 'required',
            'URL' => 'required|active_url',
        ], [
            'MaNenTang.required' => 'Mã nền tảng không được để trống',
            'MaNenTang.unique' => 'Mã nền tảng đã tồn tại',
            'MaDoiTuong.required' => 'Mã đối tượng không được để trống',
            'TenNenTang.required' => 'Tên nền tảng không được để trống',
            'URL.required' => 'Đường dẫn không được để trống',
            'URL.active_url' => 'Đường dẫn không đúng định dạng',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 423);
            }
            NenTang::create([
                'MaNenTang' => $request->MaNenTang,
                'MaDoiTuong' => $request->MaDoiTuong,
                'TenNenTang' => $request->TenNenTang,
                'URL' => $request->URL,
            ]);
            return response()->json(['message' => 'Thêm dữ liệu thành công']);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function put(Request $request, $MaNenTang)
    {
        $validation = Validator::make($request->all(), [
            'MaNenTang' => [
                'required',
                Rule::unique('nentang')->ignore($MaNenTang, 'MaNenTang'),
            ],
            'MaDoiTuong' => 'required',
            'TenNenTang' => 'required',
            'URL' => 'required|active_url',
        ], [
            'MaNenTang.required' => 'Mã nền tảng không được để trống',
            'MaNenTang.unique' => 'Mã nền tảng đã tồn tại',
            'MaDoiTuong.required' => 'Mã đối tượng không được để trống',
            'TenNenTang.required' => 'Tên nền tảng không được để trống',
            'URL.required' => 'Đường dẫn không được để trống',
            'URL.active_url' => 'Đường dẫn không đúng định dạng',
        ]);
        try {
            $data = NenTang::where('MaNenTang', $MaNenTang)->first();
            if ($data) {
                if ($validation->fails()) {
                    return response()->json($validation->errors(), 423);
                }
                $data->update([
                    'MaNenTang' => $request->MaNenTang,
                    'MaDoiTuong' => $request->MaDoiTuong,
                    'TenNenTang' => $request->TenNenTang,
                    'URL' => $request->URL,
                ]);
                return response()->json(['message' => 'Cập nhật dữ liệu thành công'], 200);
            } else {
                return response()->json(['message' => 'Không có dữ liệu'], 400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function deleted($MaNenTang)
    {
        try {
            $data = NenTang::where('MaNenTang', $MaNenTang)->first();
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
