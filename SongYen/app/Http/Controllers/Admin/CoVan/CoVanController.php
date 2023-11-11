<?php

namespace App\Http\Controllers\Admin\CoVan;

use App\Http\Controllers\Controller;
use App\Models\CoVan;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CoVanController extends Controller
{
    function getAll()
    {
        try {
            $data = CoVan::all();
            if ($data) {
                return response()->json(['data' => $data], 200);
            } else {
                return response()->json(['error' => 'Có lỗi xảy ra']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    function getOne($MaCoVan)
    {
        try {
            $data = CoVan::where('MaCoVan', $MaCoVan)->get();
            if ($data) {
                return response()->json(['data' => $data], 200);
            } else {
                return response()->json(['error' => 'Có lỗi xảy ra']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    function postCoVan(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'MaCoVan' => 'required|unique:covan',
            'MaPhongBan' => 'required|exists_in_phongban',
            'HoVaTen' => 'required',
            'HocHam' => 'required',
            'HocVi' => 'required',
            'NoiCongTac' => 'required',
            'NoiGiangDay' => 'required',
        ], [
            'MaCoVan.required' => 'Mã cố vấn không được để trống',
            'MaCoVan.unique' => 'Mã cố vấn đã tồn tại',
            'MaPhongBan.required' => 'Mã phòng ban không được để trống',
            'MaPhongBan.exists_in_phongban' => 'Mã phòng ban không có trong hệ thống',
            'HoVaTen.required' => 'Họ và tên không được để trống',
            'HocHam.required' => 'Học hàm không được để trống',
            'HocVi.required' => 'Học vị không được để trống',
            'NoiCongTac.required' => 'Nơi công tác không được để trống',
            'NoiGiangDay.required' => 'Nơi giảng dạy không được để trống',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data = CoVan::create([
                'MaCoVan' => $request->MaCoVan,
                'MaPhongBan' => $request->MaPhongBan,
                'HoVaTen' => $request->HoVaTen,
                'HocHam' => $request->HocHam,
                'HocVi' => $request->HocVi,
                'NoiCongTac' => $request->NoiCongTac,
                'NoiGiangDay' => $request->NoiGiangDay,
            ]);
            if ($data) {
                return response()->json(['message' => 'Thêm thông tin thành công', 'data' => $data]);
            } else {
                return response()->json(['error' => 'Có lỗi xảy ra']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    function updateCoVan(Request $request, $MaCoVan)
    {
        $data = CoVan::where('MaCoVan', $MaCoVan)->first();
        if (!$data) {
            return response()->json(['error' => 'Không tìm thấy bản ghi'], 404);
        }
        $validation = Validator::make($request->all(), [
            'MaCoVan' => [
                'required',
                Rule::unique('covan')->ignore($MaCoVan, 'MaCoVan'),
            ],
            'MaPhongBan' => 'required|exists_in_phongban',
            'HoVaTen' => 'required',
            'HocHam' => 'required',
            'HocVi' => 'required',
            'NoiCongTac' => 'required',
            'NoiGiangDay' => 'required',
        ], [
            'MaCoVan.required' => 'Mã cố vấn không được để trống',
            'MaCoVan.unique' => 'Mã cố vấn đã tồn tại',
            'MaPhongBan.required' => 'Mã phòng ban không được để trống',
            'MaPhongBan.exists_in_phongban' => 'Mã phòng ban không có trong hệ thống',
            'HoVaTen.required' => 'Họ và tên không được để trống',
            'HocHam.required' => 'Học hàm không được để trống',
            'HocVi.required' => 'Học vị không được để trống',
            'NoiCongTac.required' => 'Nơi công tác không được để trống',
            'NoiGiangDay.required' => 'Nơi giảng dạy không được để trống',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data->update([
                'MaCoVan' => $request->MaCoVan,
                'MaPhongBan' => $request->MaPhongBan,
                'HoVaTen' => $request->HoVaTen,
                'HocHam' => $request->HocHam,
                'HocVi' => $request->HocVi,
                'NoiCongTac' => $request->NoiCongTac,
                'NoiGiangDay' => $request->NoiGiangDay,
            ]);
            if ($data) {
                return response()->json(['message' => 'Cập nhật dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['error' => 'Có lỗi xảy ra']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    function delete($MaCoVan)
    {
        try {
            $dataDelete =  CoVan::where('MaCoVan', $MaCoVan);
            if ($dataDelete) {
                $dataDelete->delete();
                return response()->json(['message' => 'Xóa dữ liệu thành công']);
            } else {
                return response()->json(['error' => 'Có lỗi xảy ra']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
}
