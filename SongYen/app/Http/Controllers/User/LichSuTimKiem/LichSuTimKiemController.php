<?php

namespace App\Http\Controllers\User\LichSuTimKiem;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\LichSuTimKiem;
use Illuminate\Http\Request;

class LichSuTimKiemController extends Controller
{
    public function get()
    {
        try {
            $data = LichSuTimKiem::where('MaNguoiDung', Auth()->guard('ns')->user()->id)->get();
            if ($data) {
                return response()->json(['message' => 'Lấy dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Không tồn tại dữ liệu']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function TimKiem(Request $request)
    {
        $query = $request->input('query');

        // Dữ liệu tìm kiếm

        // Lưu lịch sử tìm kiếm
        if (auth()->guard('nd')->check() && !empty($query)) {
            LichSuTimKiem::create([
                'MaTimKiem' => Helper::generate_unique_code('lichsutimkiem','MaTimKiem'),
                'MaNguoiDung' => auth()->guard('nd')->user()->id,
                'TuKhoaTimKiem' => $query,
            ]);
        }

        return response()->json(['keyword' => $query]);
    }
    public function delete($MaTimKiem)
    {
        try {
            $data = LichSuTimKiem::where('MaNguoiDung', Auth()->guard('ns')->user()->id)
                ->where('MaTimKiem', $MaTimKiem)
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
            $data = LichSuTimKiem::where('MaNguoiDung', Auth()->guard('nd')->user()->id)->get();
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
