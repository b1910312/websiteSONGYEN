<?php

namespace App\Http\Controllers\User\NguoiDung;

use App\Http\Controllers\Controller;
use App\Models\NguoiDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NguoiDungController extends Controller
{
    function _construct()
    {
        $this->middleware('auth:nd', ['except' => ['login', 'register']]);
    }
    function register(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email|unique:nguoidung',
            'password' => 'required|confirmed|min:8',
            'HoVaTen' => 'required',
            'NamSinh' => 'required|date',
            'SoDienThoai' => 'required|digits:10',
            'GioiTinh' => 'required|numeric',
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Đã tồn tại email này',
            'password.required' => 'Mật khẩu không được trống',
            'password.confirmed' => 'Nhập lại mật khẩu không chính xác',
            'password.min' => 'Mật khẩu ít nhất 8 ký tự',
            'HoVaTen.required' => 'Họ và tên không được để trống',
            'NamSinh.required' => 'Năm sinh không được để trống',
            'NamSinh.date' => 'Năm sinh phải có dạng Năm-Tháng-Ngày',
            'SoDienThoai.required' => 'Số điện thoại không được để trống',
            'SoDienThoai.digits' => 'Số điện thoại phải đủ 10 số',
            'GioiTinh.required' => 'Giới tính không được để trống',
            'GioiTinh.numeric' => 'Giới tính phải định dạng là 1 số',
        ]);

        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }

            $user = NguoiDung::create(array_merge(
                $validation->validated(),
                [
                    'password' => bcrypt($request->password)
                ]
            ));
            return response()->json(['message' => 'Đăng Ký Thành Công', 'data' => $user], 200);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 422);
            }
            if (!$token = Auth::guard('nd')->setTTL(43200)->attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            return $this->createNewToken($token);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    function createNewToken($token)
    {
        
        return response()->json([
            'asscess_token' => $token,
            'token_type' => 'bearer',
            // 'axpires_in' => auth('nd')->factory()->getTTL() * 60,
            'users' => auth('nd')->user(),
        ]);
    }
    public function logout()
    {
        Auth::guard('nd')->logout();
        return response()->json(['message' => 'Đăng xuất thành công'], 401);
    }
    public function profile()
    {
        try {
            $data = Auth::guard('nd')->user();
            if ($data) {
                return response()->json(['data' => $data], 200);
            } else {
                return response()->json(['error' => 'Đã có lỗi xảy ra'], 500);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }

    public function update_profile(Request $request)
    {
        $user = Auth::guard('nd')->user();
        $validation = Validator::make($request->all(), [
            'HoVaTen' => 'required',
            'NamSinh' => 'required|date',
            'SoDienThoai' => 'required|digits:10',
            'GioiTinh' => 'required|numeric',
        ], [
            'HoVaTen.required' => 'Họ và tên không được để trống',
            'NamSinh.required' => 'Năm sinh không được để trống',
            'NamSinh.date' => 'Năm sinh phải có dạng Năm-Tháng-Ngày',
            'SoDienThoai.required' => 'Số điện thoại không được để trống',
            'SoDienThoai.digits' => 'Số điện thoại phải đủ 10 số',
            'GioiTinh.required' => 'Giới tính không được để trống',
            'GioiTinh.numeric' => 'Giới tính phải định dạng là 1 số',
        ]);

        try {
            if ($validation->fails()) {
                return response()->json($validation->errors(), 400);
            }
            $data = NguoiDung::where('id', $user->id);
            $data->update([
                'HoVaTen' => $request->input('HoVaTen'),
                'NamSinh' => $request->input('NamSinh'),
                'SoDienThoai' => $request->input('SoDienThoai'),
                'GioiTinh' => $request->input('GioiTinh'),
            ]);

            return response()->json(['message' => 'Cập nhật thông tin cá nhân thành công', 'data' => $data->get()], 200);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
}
