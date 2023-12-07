<?php

namespace App\Http\Controllers\Admin\HinhAnh;

use App\Http\Controllers\Controller;
use App\Models\HinhAnh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HinhAnhController extends Controller
{
    public function get($MaHinhAnh)
    {
        try {
            $data = HinhAnh::where('MaHinhAnh', $MaHinhAnh)->get();
            if ($data) {
                return response()->json(['message' => 'Lấy dữ liệu thành công', 'data' => $data]);
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
            $data = HinhAnh::all();
            if ($data) {
                return response()->json(['message' => 'Lấy dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function post(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'MaHinhAnh' => 'required|unique:hinhanh',
            'TenHinhAnh' => 'required',
            'URL' => 'required|active_url',
            'Thumbnail' => 'required|numeric',
        ], [
            'MaHinhAnh.required' => 'Mã Hình ảnh không được trống',
            'MaHinhAnh.unique' => 'Mã hình ảnh đã tồn tại',
            'TenHinhAnh.required' => 'Tên hình ảnh không được trống',
            'URL.required' => 'Đường dẫn không được trống',
            'URL.active_url' => 'Đường dẫn không đúng định dạng',
            'Thumbnail.required' => 'Thumbnail không được trống',
            'Thumbnail.numeric' => 'Thumbnail phải là số',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 423);
            }
            HinhAnh::create([
                'MaHinhAnh' => $request->MaHinhAnh,
                'TenHinhAnh' => $request->TenHinhAnh,
                'URL' => $request->URL,
                'Thumbnail' => $request->Thumbnail,
            ]);
            return response()->json(['message' => 'Thêm ảnh thành công']);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function put(Request $request, $MaHinhAnh)
    {
        $validation = Validator::make($request->all(), [
            'MaHinhAnh' => 'required|unique:hinhanh',
            'TenHinhAnh' => 'required',
            'URL' => 'required|active_url',
            'Thumbnail' => 'required|numeric',
        ], [
            'MaHinhAnh.required' => 'Mã Hình ảnh không được trống',
            'MaHinhAnh.unique' => 'Mã hình ảnh đã tồn tại',
            'TenHinhAnh.required' => 'Tên hình ảnh không được trống',
            'URL.required' => 'Đường dẫn không được trống',
            'URL.active_url' => 'Đường dẫn không đúng định dạng',
            'Thumbnail.required' => 'Thumbnail không được trống',
            'Thumbnail.numeric' => 'Thumbnail phải là số',
        ]);
        try {
            $data = HinhAnh::where('MaHinhAnh', $MaHinhAnh)->first();
            if ($data) {
                if ($validation->fails()) {
                    return response()->json($validation->errors(), 423);
                }
                $data->update([
                    'MaHinhAnh' => $request->MaHinhAnh,
                    'TenHinhAnh' => $request->TenHinhAnh,
                    'URL' => $request->URL,
                    'Thumbnail' => $request->Thumbnail,
                ]);
                return response()->json(['message' => 'Thêm ảnh thành công']);
            } else {
                return response()->json(['message' => 'Hình ảnh không tồn tại']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function delete($MaHinhAnh)
    {
        try {
            $data = HinhAnh::where('MaHinhAnh', $MaHinhAnh)->first();
            if ($data) {
                $data->delete();
                return response()->json(['message' => 'Xóa dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Hình ảnh không tồn tại']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
}
