<?php

namespace App\Http\Controllers\Admin\BaiViet;

use App\Http\Controllers\Controller;
use App\Models\BaiViet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BaiVietController extends Controller
{
    public function getAll()
    {
        try {
            $data = BaiViet::all();
            if ($data) {
                return response()->json(['data' => $data], 200);
            } else {
                return response()->json(['error' => 'Có lỗi xảy ra'], 500);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function getOne($MaBaiViet)
    {
        try {
            $data = BaiViet::where('MaBaiViet', $MaBaiViet)->first();
            if ($data) {
                return response()->json(['data' => $data], 200);
            } else {
                return response()->json(['error' => 'Có lỗi xảy ra'], 500);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function postBaiViet(Request $request)
    {
        $validation =  Validator::make($request->all(), [
            'MaBaiViet' => 'required|unique:baiviet',
            'Sabo' => 'required',
            'Meta' => 'required',
            'NoiDung' => 'required',
            'ChuDe' => 'required|numeric',
        ], [
            'MaBaiViet.required' => 'Mã bài viết không được để trống',
            'MaBaiViet.unique' => 'Mã bài viết đã tồn tại',
            'Sabo.required' => 'Sabo không được để trống',
            'Meta.required' => 'Meta không được để trống',
            'NoiDung.required' => 'Nội dung không được để trống',
            'ChuDe.required' => 'Chủ để không được để trống',
            'ChuDe.numeric' => 'Chủ để phải là 1 số',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data = BaiViet::create([
                'MaBaiViet' => $request->MaBaiViet,
                'Sabo' => $request->Sabo,
                'Meta' => $request->Meta,
                'NoiDung' => $request->NoiDung,
                'ChuDe' => $request->ChuDe,
            ]);
            if ($data) {
                return response()->json(['message' => 'Thêm bài viết thành công', 'data' => $data], 200);
            } else {
                return response()->json(['error' => 'Có lỗi xảy ra'], 500);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function updateBaiViet(Request $request, $MaBaiViet)
    {

        $validation =  Validator::make($request->all(), [
            'MaBaiViet' => [
                'required',
                Rule::unique('baiviet')->ignore($MaBaiViet, 'MaBaiViet'),
            ],
            'Sabo' => 'required',
            'Meta' => 'required',
            'NoiDung' => 'required',
            'ChuDe' => 'required|numeric',
        ], [
            'MaBaiViet.required' => 'Mã bài viết không được để trống',
            'MaBaiViet.unique' => 'Mã bài viết đã tồn tại',
            'Sabo.required' => 'Sabo không được để trống',
            'Meta.required' => 'Meta không được để trống',
            'NoiDung.required' => 'Nội dung không được để trống',
            'ChuDe.required' => 'Chủ để không được để trống',
            'ChuDe.numeric' => 'Chủ để phải là 1 số',
        ]);
        try {
            $data = BaiViet::where('MaBaiViet', $MaBaiViet)->first();
            if (!$data) {
                return response()->json(['error' => 'Không tìm thấy bản ghi'], 404);
            }
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data->update([
                'MaBaiViet' => $request->MaBaiViet,
                'Sabo' => $request->Sabo,
                'Meta' => $request->Meta,
                'NoiDung' => $request->NoiDung,
                'ChuDe' => $request->ChuDe,
            ]);
            if ($data) {
                return response()->json(['message' => 'Cập nhật dữ liệu thành công', 'data' => $data], 200);
            } else {
                return response()->json(['error' => 'Có lỗi xảy ra'], 500);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function delete($MaBaiViet)
    {
        try {
            $dataDelete = BaiViet::where('MaBaiViet', $MaBaiViet)->first();
            if (!$dataDelete) {
                return response()->json(['error' => 'Không tìm thấy bản ghi'], 404);
            }
            $dataDelete->delete();
            return response()->json(['message' => 'Xóa dữ liệu thành công'], 200);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
}
