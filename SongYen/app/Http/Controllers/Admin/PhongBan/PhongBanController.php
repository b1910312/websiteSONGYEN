<?php

namespace App\Http\Controllers\Admin\PhongBan;

use App\Http\Controllers\Controller;
use App\Models\PhongBan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PhongBanController extends Controller
{
    function get_PhongBan($maPhongBan)
    {
        try {
            $data = PhongBan::where('MaPhongBan', $maPhongBan);
            if ($data->exists()) {
                return response()->json(['message' => 'Successfully', 'data' => $data->get()], 200);
            } else {
                return response()->json(['message' => 'Không có dữ liệu'], 404);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    function get_AllPhongBan()
    {
        try {
            $data = PhongBan::all();
            if ($data->count()) {
                return response()->json(['message' => 'Successfully', 'data' => $data], 200);
            } else {
                return response()->json(['message' => 'Không có dữ liệu'], 404);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    function post_PhongBan(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'MaPhongBan' => 'required|unique:phongban',
            'TenPhongBan'  => 'required',
        ], [
            'MaPhongBan.required' => 'Mã Phòng Ban không được trống',
            'MaPhongBan.unique' => 'Mã Phòng Ban đã tồn tại',
            'TenPhongBan' => 'Tên Phòng Ban không được để trống'
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data = [
                'MaPhongBan' => $request->MaPhongBan,
                'TenPhongBan' => $request->TenPhongBan
            ];
            if ($data) {
                PhongBan::create($data);
                return response()->json(['message' => 'Successfully'], 200);
            } else {
                return response()->json(['error' => 'Error Data'], 500);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    function edit_PhongBan(Request $request, $maPhongBan)
    {
    }
}
