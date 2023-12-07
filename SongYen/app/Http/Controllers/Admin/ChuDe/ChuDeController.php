<?php

namespace App\Http\Controllers\Admin\ChuDe;

use App\Http\Controllers\Controller;
use App\Models\ChuDe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ChuDeController extends Controller
{
    public function get($MaChuDe)
    {
        try {
            $data = ChuDe::where('MaChuDe', $MaChuDe)->first();
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
            $data = ChuDe::all();
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
            'MaChuDe' => 'required|unique:chude',
            'TenChuDe' => 'required',
            'MoTaChuDe' => 'required',
        ], [
            'MaChuDe.required' => 'Mã chủ đề không được để trống',
            'MaChuDe.unique' => 'Mã chủ đề đã tồn tại',
            'TenChuDe.required' => 'Tên chủ đề không được để trống',
            'MoTaChuDe.required' => 'Mô Tả chủ đề không được để trống',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data = ChuDe::create([
                'MaChuDe' => $request->MaChuDe,
                'TenChuDe' => $request->TenChuDe,
                'MoTaChuDe' => $request->MoTaChuDe,
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
    public function put(Request $request, $MaChuDe)
    {
        $validation = Validator::make($request->all(), [
            'MaChuDe' => [
                'required',
                Rule::unique('chude')->ignore($MaChuDe, 'MaChuDe'),
            ],
            'TenChuDe' => 'required',
            'MoTaChuDe' => 'required',
        ], [
            'MaChuDe.required' => 'Mã chủ đề không được để trống',
            'MaChuDe.unique' => 'Mã chủ đề đã tồn tại',
            'TenChuDe.required' => 'Tên chủ đề không được để trống',
            'MoTaChuDe.required' => 'Mô Tả chủ đề không được để trống',
        ]);
        try {
            $data = ChuDe::where('MaChuDe', $MaChuDe)->first();
            if ($data) {
                if ($validation->fails()) {
                    return response()->json($validation->errors(), 400);
                }
                $data->update([
                    'MaChuDe' => $request->MaChuDe,
                    'TenChuDe' => $request->TenChuDe,
                    'MoTaChuDe' => $request->MoTaChuDe,
                ]);
                return response()->json(['message' => 'Chỉnh sửa dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function delete($MaChuDe)
    {
        try {
            $data = ChuDe::where('MaChuDe', $MaChuDe)->first();
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
