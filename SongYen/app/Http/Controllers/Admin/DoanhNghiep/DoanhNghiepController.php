<?php

namespace App\Http\Controllers\Admin\DoanhNghiep;

use App\Http\Controllers\Controller;
use App\Models\HinhThucHoatDong;
use App\Models\LinhVucHoatDong;
use App\Models\TTDoanhNghiep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\TryCatch;

class DoanhNghiepController extends Controller
{

    // Doanh Nghiep
    public function get()
    {
        try {
            $data = TTDoanhNghiep::first();
            if ($data) {
                return response()->json(['data' => $data], 200);
            } else {
                return response()->json(['error' => 'Có lỗi xảy ra'], 500);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function post(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'TenDoanhNghiep' => 'required',
            'MaSoThue' => 'required',
            'SoDienThoai' => 'required|digits:10',
            'TamNhin' => 'required',
            'SuMenh' => 'required',
            'MucTieu' => 'required',
        ], [
            'TenDoanhNghiep.required' => 'Tên doanh nghiệp không được để trống',
            'MaSoThue.required' => 'Mã số thuế không được để trống',
            'SoDienThoai.required' => 'Số điện thoại không được để trống',
            'SoDienThoai.digis' => 'Số điện thoại phải đủ 10 số',
            'TamNhin.required' => 'Tầm nhìn không được để trống',
            'SuMenh.required' => 'Sứ mệnh không được để trống',
            'MucTieu.required' => 'Mực tiêu không được để trống',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data = TTDoanhNghiep::create([
                'TenDoanhNghiep' => $request->TenDoanhNghiep,
                'MaSoThue' => $request->MaSoThue,
                'SoDienThoai' => $request->SoDienThoai,
                'TamNhin' => $request->TamNhin,
                'SuMenh' => $request->SuMenh,
                'MucTieu' => $request->MucTieu,
            ]);
            return response()->json(['message' => 'Thêm dữ liệu thành công', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function update(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'TenDoanhNghiep' => 'required',
            'MaSoThue' => 'required',
            'SoDienThoai' => 'required|digits:10',
            'TamNhin' => 'required',
            'SuMenh' => 'required',
            'MucTieu' => 'required',
        ], [
            'TenDoanhNghiep.required' => 'Tên doanh nghiệp không được để trống',
            'MaSoThue.required' => 'Mã số thuế không được để trống',
            'SoDienThoai.required' => 'Số điện thoại không được để trống',
            'SoDienThoai.digis' => 'Số điện thoại phải đủ 10 số',
            'TamNhin.required' => 'Tầm nhìn không được để trống',
            'SuMenh.required' => 'Sứ mệnh không được để trống',
            'MucTieu.required' => 'Mực tiêu không được để trống',
        ]);
        try {
            $data = TTDoanhNghiep::first();
            if (!$data) {
                return response()->json(['error' => 'Không tìm thấy bản ghi'], 404);
            }
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data->update([
                'TenDoanhNghiep' => $request->TenDoanhNghiep,
                'MaSoThue' => $request->MaSoThue,
                'SoDienThoai' => $request->SoDienThoai,
                'TamNhin' => $request->TamNhin,
                'SuMenh' => $request->SuMenh,
                'MucTieu' => $request->MucTieu,
            ]);
            return response()->json(['message' => 'Cập nhật dữ liệu thành công', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function delete()
    {
        try {
            $data = TTDoanhNghiep::first();
            $data->delete();
            return response()->json(['message' => 'Xóa dữ liệu thành công']);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }

    // Hình thức và lĩnh vực hoạt động
    public function getAllHinhThuc()
    {
        try {
            $data = HinhThucHoatDong::all();
            $dataCount = HinhThucHoatDong::count();
            return response()->json(['message' => 'Lấy dữ liệu thành công', 'data' => $data, 'dataCount' => $dataCount]);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function getHinhThuc($MaHinhThuc)
    {
        try {
            $data = HinhThucHoatDong::where('MaHinhThuc', $MaHinhThuc)->first();
            if ($data) {
                return response()->json(['message' => 'Lấy dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Không có dữ liệu nào']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function postHinhThuc(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'MaHinhThuc' => 'required|unique:hthd',
            'TenHinhThuc' => 'required',
            'MoTaHinhThuc' => 'required',
        ], [
            'MaHinhThuc.required' => 'Mã hình thức hoạt động không được trống',
            'MaHinhThuc.unique' => 'Mã hình thức hoạt động đã tồn tại',
            'TenHinhThuc.required' => 'Tên hình thức hoạt động không được trống',
            'MoTaHinhThuc.required' => 'Mô tả hình thức không được trống',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data = HinhThucHoatDong::create([
                'MaHinhThuc' => $request->MaHinhThuc,
                'TenHinhThuc' => $request->TenHinhThuc,
                'MoTaHinhThuc' => $request->MoTaHinhThuc,
            ]);
            if ($data) {
                return response()->json(['message' => 'Thêm dữ liệu thành công', 'data' => $data], 200);
            } else {
                return response()->json(['message' => 'Thêm dữ liệu không thành công'], 400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function updateHinhThuc(Request $request, $MaHinhThuc)
    {
        $validation = Validator::make($request->all(), [
            'MaHinhThuc' => [
                'required',
                Rule::unique('hthd')->ignore($MaHinhThuc, 'MaHinhThuc'),
            ],
            'TenHinhThuc' => 'required',
            'MoTaHinhThuc' => 'required',
        ], [
            'MaHinhThuc.required' => 'Mã hình thức hoạt động không được trống',
            'MaHinhThuc.unique' => 'Mã hình thức hoạt động đã tồn tại',
            'TenHinhThuc.required' => 'Tên hình thức hoạt động không được trống',
            'MoTaHinhThuc.required' => 'Mô tả hình thức không được trống',
        ]);
        try {
            $data = HinhThucHoatDong::where('MaHinhThuc', $MaHinhThuc)->first();
            if (!$data) {
                return response()->json(['message' => 'Không có dữ liệu']);
            }
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data->update([
                'MaHinhThuc' => $request->MaHinhThuc,
                'TenHinhThuc' => $request->TenHinhThuc,
                'MoTaHinhThuc' => $request->MoTaHinhThuc,
            ]);
            return response()->json(['message' => 'Cập nhật dữ liệu thành công', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function deleteHinhThuc($MaHinhThuc)
    {
        try {
            $data = HinhThucHoatDong::where('MaHinhThuc', $MaHinhThuc)->first();
            if ($data) {
                $data->delete();
                return response()->json(['message' => 'Xóa dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Xóa dữ liệu không thành công']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }

    public function getAllLinhVuc()
    {
        try {
            $data = LinhVucHoatDong::all();
            $dataCount = LinhVucHoatDong::count();
            return response()->json(['message' => 'Lấy dữ liệu thành công', 'data' => $data, 'dataCount' => $dataCount]);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function getLinhVuc($MaLinhVuc)
    {
        try {
            $data = LinhVucHoatDong::where('MaLinhVuc', $MaLinhVuc)->first();
            if ($data) {
                return response()->json(['message' => 'Lấy dữ liệu thành công', 'data' => $data]);
            } else {
                return response()->json(['message' => 'Không có dữ liệu nào']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function postLinhVuc(Request $request, $MaLinhVuc)
    {
        $validation = Validator::make($request->all(), [
            'MaLinhVuc' => 'required|unique:hthd',
            'TenLinhVuc' => 'required',
            'MoTaLinhVuc' => 'required',
        ], [
            'MaLinhVuc.required' => 'Mã lĩnh vực hoạt động không được trống',
            'MaLinhVuc.unique' => 'Mã lĩnh vực hoạt động đã tồn tại',
            'TenLinhVuc.required' => 'Tên lĩnh vực hoạt động không được trống',
            'MoTaLinhVuc.required' => 'Mô tả lĩnh vực không được trống',
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data = LinhVucHoatDong::create([
                'MaLinhVuc' => $request->MaLinhVuc,
                'TenLinhVuc' => $request->TenLinhVuc,
                'MoTaLinhVuc' => $request->MoTaLinhVuc,
            ]);
            if ($data) {
                return response()->json(['message' => 'Thêm dữ liệu thành công', 'data' => $data], 200);
            } else {
                return response()->json(['message' => 'Thêm dữ liệu không thành công'], 400);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function updateLinhVuc(Request $request, $MaLinhVuc)
    {
        $validation = Validator::make($request->all(), [
            'MaLinhVuc' => [
                'required',
                Rule::unique('lvhd')->ignore($MaLinhVuc, 'MaLinhVuc'),
            ],
            'TenLinhVuc' => 'required',
            'MoTaLinhVuc' => 'required',
        ], [
            'MaLinhVuc.required' => 'Mã lĩnh vực hoạt động không được trống',
            'MaLinhVuc.unique' => 'Mã lĩnh vực hoạt động đã tồn tại',
            'TenLinhVuc.required' => 'Tên lĩnh vực hoạt động không được trống',
            'MoTaLinhVuc.required' => 'Mô tả lĩnh vực không được trống',
        ]);
        try {
            $data = LinhVucHoatDong::where('MaLinhVuc', $MaLinhVuc)->first();
            if (!$data) {
                return response()->json(['message' => 'Không có dữ liệu']);
            }
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data->update([
                'MaLinhVuc' => $request->MaLinhVuc,
                'TenLinhVuc' => $request->TenLinhVuc,
                'MoTaLinhVuc' => $request->MoTaLinhVuc,
            ]);
            return response()->json(['message' => 'Cập nhật dữ liệu thành công', 'data' => $data]);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    public function deleteLinhVuc($MaLinhVuc)
    {
        try {
            $data = LinhVucHoatDong::where('MaLinhVuc', $MaLinhVuc)->first();
            if ($data) {
                $data->delete();
                return response()->json(['message' => 'Xóa dữ liệu thành công']);
            } else {
                return response()->json(['message' => 'Xóa dữ liệu không thành công']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
}
