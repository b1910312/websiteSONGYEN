<?php

namespace App\Http\Controllers\Admin\NhanSu;

use App\Http\Controllers\Controller;
use App\Models\NhanSu;
use App\Models\TTNhanSu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Contracts\Service\Attribute\Required;
use Tymon\JWTAuth\Facades\JWTAuth;

class NhanSuController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:ns', ['except' => ['login', 'register']]);
    }
    function getAllNhanSu()
    {
        try {
            $nhansu = NhanSu::with('TTNhanSu.PhongBan')->get();
            return response()->json(['message' => 'Successfully', 'data' => $nhansu]);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }
    function getNhanSu($id)
    {
        try {
            $nhansu = NhanSu::with('TTNhanSu')->where('id', $id)->get();
            return response()->json(['message' => 'Successfully', 'data' => $nhansu]);
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }

    function postTTNhanSu(Request $request, $id)
    {
        $nhansu = NhanSu::where('id', $id);
        $validation = Validator::make($request->all(), [
            'HoVaTen' => 'required',
            'NamSinh' => 'required|date',
            'GioiTinh' => 'required|numeric',
            'ChucVu' => 'required|numeric',
            'PhongBan' => 'required|numeric|exists_in_phongban',
            'email' => 'required|email',
            'SoDienThoai' => 'required|digits:10',
            'CCCD' => 'required|digits:12',
        ], [
            'HoVaTen.required' => 'Họ và tên không được trống',
            'NamSinh.required' => 'Năm sinh không được trống',
            'NamSinh.date' => 'Năm sinh phải là ngày tháng năm',
            'GioiTinh.required' => 'Giới tính không được để trống',
            'GioiTinh.numeric' => 'Giới tính phải là số',
            'ChucVu.required' => 'Chức vụ không được để trống',
            'ChucVu.numeric' => 'Chức vụ phải là số',
            'PhongBan.required' => 'Phòng ban không được để trống',
            'PhongBan.numeric' => 'Phòng ban phải là số',
            'PhongBan.exists_in_phongban' => 'Số phòng ban này không có trong dữ liệu',
            'email.required' => 'email không được để trống',
            'email.email' => 'email không đúng định dạng',
            'SoDienThoai.required' => 'Số điện thoại không được để trống',
            'SoDienThoai.digits' => 'Số điện thoại phải đủ 10 số',
            'CCCD.required' => 'CCCD không được để trống',
            'CCCD.digits' => 'CCCD phải đủ 12 số',
        ]);
        try {
            if ($nhansu->exists() && !TTNhanSu::where('idNhanSu', $id)->exists()) {
                if ($validation->fails()) {
                    return response()->json($validation->errors(), 422);
                }
                $data = [
                    'idNhanSu' => $id,
                    'HoVaTen' => $request->HoVaTen,
                    'NamSinh' => $request->NamSinh,
                    'GioiTinh' => $request->GioiTinh,
                    'ChucVu' => $request->ChucVu,
                    'PhongBan' => $request->PhongBan,
                    'email' => $request->email,
                    'SoDienThoai' => $request->SoDienThoai,
                    'CCCD' => $request->CCCD,
                ];
                TTNhanSu::create($data);
                return response()->json(['message' => 'Thêm thông tin nhân sự thành công', 'data' => $data], 200);
            } else {
                return response()->json(['message' => 'Không có nhân sự này'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }

    function putTTNhanSu(Request $request, $id)
    {
        $nhansu = NhanSu::where('id', $id);
        $validation = Validator::make($request->all(), [
            'HoVaTen' => 'required',
            'NamSinh' => 'required|date',
            'GioiTinh' => 'required|numeric',
            'ChucVu' => 'required|numeric',
            'PhongBan' => 'required|exists_in_phongban',
            'email' => 'required|email',
            'SoDienThoai' => 'required|digits:10',
            'CCCD' => 'required|digits:12',
        ], [
            'HoVaTen.required' => 'Họ và tên không được trống',
            'NamSinh.required' => 'Năm sinh không được trống',
            'NamSinh.date' => 'Năm sinh phải là ngày tháng năm',
            'GioiTinh.required' => 'Giới tính không được để trống',
            'GioiTinh.numeric' => 'Giới tính phải là số',
            'ChucVu.required' => 'Chức vụ không được để trống',
            'ChucVu.numeric' => 'Chức vụ phải là số',
            'PhongBan.required' => 'Phòng ban không được để trống',
            'PhongBan.exists_in_phongban' => 'Số phòng ban này không có trong dữ liệu',
            'email.required' => 'email không được để trống',
            'email.email' => 'email không đúng định dạng',
            'SoDienThoai.required' => 'Số điện thoại không được để trống',
            'SoDienThoai.digits' => 'Số điện thoại phải đủ 10 số',
            'CCCD.required' => 'CCCD không được để trống',
            'CCCD.digits' => 'CCCD phải đủ 12 số',
        ]);

        try {
            if ($nhansu->exists()) {
                if ($validation->fails()) {
                    return response()->json($validation->errors(), 422);
                }
                $data = [
                    'idNhanSu' => $id,
                    'HoVaTen' => $request->HoVaTen,
                    'NamSinh' => $request->NamSinh,
                    'GioiTinh' => $request->GioiTinh,
                    'ChucVu' => $request->ChucVu,
                    'PhongBan' => $request->PhongBan,
                    'email' => $request->email,
                    'SoDienThoai' => $request->SoDienThoai,
                    'CCCD' => $request->CCCD,
                ];
                TTNhanSu::where('idNhanSu', $id)->update($data);
                return response()->json(['message' => 'Cập Nhật thông tin nhân sự thành công', 'data' => $data], 200);
            } else {
                return response()->json(['message' => 'Không có nhân sự này'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['error', $th->getMessage()]);
        }
    }

    // authtication
    function register(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email|unique:nhansu',
            'password' => 'required|confirmed|min:8',
        ]);
        if ($validation->fails()) {
            return response()->json($validation->errors(), 400);
        }

        $user = NhanSu::create(array_merge(
            $validation->validated(),
            [
                'password' => bcrypt($request->password)
            ]
        ));

        return response()->json(['message' => 'Đăng Ký Thành Công', 'data' => $user], 200);
    }
    function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        if ($validation->fails()) {
            return response()->json($validation->errors(), 422);
        }
       
        if (!$token = Auth::guard('ns')->setTTL(43200)->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->createNewToken($token);
    }

    function createNewToken($token)
    {
        return response()->json([
            'asscess_token' => $token,
            'token_type' => 'bearer',
            // 'axpires_in' => auth('ns')->factory()->getTTL(),
            'users' => auth('ns')->user(),
        ]);
    }
    public function logout()
    {
        Auth::guard('ns')->logout();
        return response()->json(['message' => 'Đăng xuất thành công'], 401);
    }
}
