<?php

namespace App\Http\Controllers\User\BaiVietDaXem;

use App\Http\Controllers\Controller;
use App\Models\BaiVietDaXem;
use Illuminate\Http\Request;

class BaiVietDaXemController extends Controller
{
    public function get()
    {
        try {
            $data = BaiVietDaXem::where('MaNguoiDung', Auth()->guard('ns')->user()->id)->get();
            if ($data) {
                return response()->json(['message' => 'Lấy dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function delete($id)
    {
        try {
            $data = BaiVietDaXem::where('MaNguoiDung', Auth()->guard('ns')->user()->id)
                ->where('id', $id)
                ->first();
            if ($data) {
                $data->delete();
                return response()->json(['mesage' => 'Xóa dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function deleteAll()
    {
        try {
            $data = BaiVietDaXem::where('MaNguoiDung', Auth()->guard('nd')->user()->id)->get();
            if ($data) {
                foreach ($data as $value) {
                    $value->delete();
                }
                return response()->json(['mesage' => 'Xóa dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
}
