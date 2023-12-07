<?php

namespace App\Http\Controllers\Admin\LoTrinh;

use App\Http\Controllers\Controller;
use App\Models\LoTrinh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class LoTrinhController extends Controller
{
    public function get($MaLoTrinh)
    {
        try {
            $data = LoTrinh::where('MaLoTrinh', $MaLoTrinh)->first();
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
            $data = LoTrinh::all();
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
            'MaLoTrinh' => 'required|unique:lotrinh',
            'TenLoTrinh' => 'required',
            'NoiDungLoTrinh' => 'required',
            'MoTaLoTrinh' => 'required',
        ], [
            'MaLoTrinh.required' => 'Mã lộ trình không được để trống',
            'MaLoTrinh.unique' => 'Mã lộ trình đã tồn tại',
            'TenLoTrinh.required' => 'Tên lộ trình không được để trống',
            'NoiDungLoTrinh.required' => 'Mô nội dung trình không được để trống',
            'MoTaLoTrinh.required' => 'Mô tả lộ trình không được để trống',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data = LoTrinh::create([
                'MaKhoaHoc' => $request->MaKhoaHoc,
                'TenGiaiDoan' => $request->TenGiaiDoan,
                'NoiDungGiaiDoan' => $request->NoiDungGiaiDoan,
                'MoTaGiaiDoan' => $request->MoTaGiaiDoan,
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
    public function put(Request $request, $MaLoTrinh)
    {
        $validation = Validator::make($request->all(), [
            'MaLoTrinh' => [
                'required',
                Rule::unique('lotrinh')->ignore($MaLoTrinh, 'MaLoTrinh'),
            ],
            'TenLoTrinh' => 'required',
            'NoiDungLoTrinh' => 'required',
            'MoTaLoTrinh' => 'required',
        ], [
            'MaLoTrinh.required' => 'Mã lộ trình không được để trống',
            'MaLoTrinh.unique' => 'Mã lộ trình đã tồn tại',
            'TenLoTrinh.required' => 'Tên lộ trình không được để trống',
            'NoiDungLoTrinh.required' => 'Mô nội dung trình không được để trống',
            'MoTaLoTrinh.required' => 'Mô tả lộ trình không được để trống',
        ]);
        try {
            $data = LoTrinh::where('MaLoTrinh', $MaLoTrinh)->first();
            if ($data) {
                if ($validation->fails()) {
                    return response()->json($validation->errors(), 400);
                }
                $data->update([
                    'MaKhoaHoc' => $request->MaKhoaHoc,
                    'TenGiaiDoan' => $request->TenGiaiDoan,
                    'NoiDungGiaiDoan' => $request->NoiDungGiaiDoan,
                    'MoTaGiaiDoan' => $request->MoTaGiaiDoan,
                ]);
                return response()->json(['message' => 'Chỉnh sửa dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function delete($MaLoTrinh)
    {
        try {
            $data = LoTrinh::where('MaLoTrinh', $MaLoTrinh)->first();
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
