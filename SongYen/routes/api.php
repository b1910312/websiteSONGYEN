<?php

use App\Http\Controllers\Admin\BaiViet\BaiVietController;
use App\Http\Controllers\Admin\ChuDe\ChuDeController;
use App\Http\Controllers\Admin\CoVan\CoVanController;
use App\Http\Controllers\Admin\DoanhNghiep\DoanhNghiepController;
use App\Http\Controllers\Admin\DoanhNghiep\DuAn\DuAnController;
use App\Http\Controllers\Admin\DoanhNghiep\SuKien\SuKienController;
use App\Http\Controllers\Admin\HinhAnh\HinhAnhController;
use App\Http\Controllers\Admin\HocVien\HocVienController;
use App\Http\Controllers\Admin\KhoaHoc\KhoaHocController;
use App\Http\Controllers\Admin\LopHoc\LopHocController;
use App\Http\Controllers\Admin\LoTrinh\LoTrinhController;
use App\Http\Controllers\Admin\NenTang\NenTangController;
use App\Http\Controllers\Admin\NhanSu\NhanSuController;
use App\Http\Controllers\Admin\PhongBan\PhongBanController;
use App\Http\Controllers\User\BaiVietDaXem\BaiVietDaXemController;
use App\Http\Controllers\User\LichSuTimKiem\LichSuTimKiemController;
use App\Http\Controllers\User\NguoiDung\NguoiDungController;
use App\Models\BaiVietDaXem;
use App\Models\LichSuTimKiem;
use App\Models\NguoiDung;
use App\Models\NhanSu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/getTTDoanhNghiep', [DoanhNghiepController::class, 'get']);

Route::post('/register', [NhanSuController::class, 'register']);

Route::post('/login', [NhanSuController::class, 'login']);

Route::middleware('ns')->group(function () {
    Route::controller(NhanSuController::class)->group(function () {
        Route::get('/getNhanSu/{id}', 'getNhanSu');
        Route::get('/getAllNhanSu', 'getAllNhanSu');
        Route::post('/postTTNhanSu/{id}', 'postTTNhanSu');
        Route::put('/putTTNhanSu/{id}', 'putTTNhanSu');
        Route::get('/logout', 'logout');
    });
    Route::controller(PhongBanController::class)->group(function () {
        Route::get('/getAllPhongBan', 'get_AllPhongBan');
        Route::get('/getPhongBan/{maPhongBan}', 'get_PhongBan');
        Route::post('/postPhongBan', 'post_PhongBan');
        Route::put('/editPhongBan', 'edit_PhongBan');
    });
    Route::controller(CoVanController::class)->group(function () {
        Route::get('/getAllCoVan', 'getAll');
        Route::get('/getCoVan/{MaCoVan}', 'getOne');
        Route::post('/postCoVan', 'postCoVan');
        Route::put('/updateCoVan/{MaCoVan}', 'updateCoVan');
        Route::delete('/deleteCoVan/{MaCoVan}', 'delete');
    });
    Route::controller(BaiVietController::class)->group(function () {
        Route::get('/getAllBaiViet', 'getAll');
        Route::get('/getBaiViet/{MaBaiViet}', 'getOne');
        Route::post('/postBaiViet', 'postBaiViet');
        Route::put('/updateBaiViet/{MaBaiViet}', 'updateBaiViet');
        Route::delete('deleteBaiViet/{MaBaiViet}', 'delete');
    });
    Route::controller(DoanhNghiepController::class)->group(function () {
        Route::get('/getDoanhNghiep', 'get');
        Route::post('/postDoanhNghiep', 'post');
        Route::put('/updateDoanhNghiep', 'update');
        Route::delete('/deleteDoanhNghiep', 'deleted');
        // Hình thức
        Route::get('/getHinhThuc/{MaHinhThuc}', 'getHinhThuc');
        Route::get('/getAllHinhThuc', 'getAllHinhThuc');
        Route::post('/postHinhThuc', 'postHinhThuc');
        Route::put('/updateHinhThuc/{MaHinhThuc}', 'updateHinhThuc');
        Route::delete('/deleteHinhThuc/{MaHinhThuc}', 'deleteHinhThuc');
        // Lĩnh Vực
        Route::get('/getLinhVuc/{MaLinhVuc}', 'getLinhVuc');
        Route::get('/getAllLinhVuc', 'getAllLinhVuc');
        Route::post('/postLinhVuc', 'postLinhVuc');
        Route::put('/updateLinhVuc/{MaLinhVuc}', 'updateLinhVuc');
        Route::delete('/deleteLinhVuc/{MaLinhVuc}', 'deleteLinhVuc');
    });
    Route::controller(DuAnController::class)->group(function () {
        Route::get('/getDuAn/{MaDuAn}', 'get');
        Route::get('/getAllDuAn', 'getAll');
        Route::post('/postDuAn', 'store');
        Route::put('/updateDuAn/{MaDuAn}', 'put');
        Route::delete('/deleteDuAn/{MaDuAn}', 'delete');
    });
    Route::controller(SuKienController::class)->group(function () {
        Route::get('/getSuKien/{MaSuKien}', 'get');
        Route::get('/getAllSuKien', 'getAll');
        Route::post('/postSuKien', 'store');
        Route::put('/updateSuKien/{MaSuKien}', 'put');
        Route::delete('/deleteSuKien/{MaSuKien}', 'delete');
    });
    Route::controller(NenTangController::class)->group(function () {
        Route::get('/getNenTang/{MaNenTang}', 'get');
        Route::get('/getAllNenTang', 'getAll');
        Route::post('/postNenTang', 'post');
        Route::put('/updateNenTang/{MaNenTang}', 'put');
        Route::delete('/deleteNenTang/{MaNenTang}', 'delete');
    });
    Route::controller(DichVuController::class)->group(function () {
        Route::get('/getDichVu/{MaDichVu}', 'get');
        Route::get('/getAllDichVu', 'getAll');
        Route::post('/postDichVu', 'post');
        Route::put('/updateDichVu/{MaDichVu}', 'put');
        Route::delete('/deleteDichVu/{MaDichVu}', 'delete');
    });
    Route::controller(ChuDeController::class)->group(function () {
        Route::get('/getChuDe/{MaChuDe}', 'get');
        Route::get('/getAllChuDe', 'getAll');
        Route::post('/postChuDe', 'post');
        Route::put('updateChuDe/{MaChuDe}', 'put');
        Route::delete('deleteChuDe/{MaChuDe}', 'delete');
    });
    Route::controller(KhoaHocController::class)->group(function () {
        Route::get('/getKhoaHoc/{MaKhoaHoc}', 'get');
        Route::get('/getAllKhoaHoc', 'getAll');
        Route::post('/postKhoaHoc', 'post');
        Route::put('updateKhoaHoc/{MaKhoaHoc}', 'put');
        Route::delete('deleteKhoaHoc/{MaKhoaHoc}', 'delete');
    });
    Route::controller(LopHocController::class)->group(function () {
        Route::get('/getLopHoc/{MaLopHoc}', 'get');
        Route::get('/getAllLopHoc', 'getAll');
        Route::post('/postLopHoc', 'post');
        Route::put('updateLopHoc/{MaLopHoc}', 'put');
        Route::delete('deleteLopHoc/{MaLopHoc}', 'delete');
    });
    Route::controller(LoTrinhController::class)->group(function () {
        Route::get('/getLoTrinh/{MaLoTrinh}', 'get');
        Route::get('/getAllLoTrinh', 'getAll');
        Route::post('/postLoTrinh', 'post');
        Route::put('updateLoTrinh/{MaLoTrinh}', 'put');
        Route::delete('deleteLoTrinh/{MaLoTrinh}', 'delete');
    });
    Route::controller(HocVienController::class)->group(function () {
        Route::get('/getHocVien/{MaHocVien}', 'get');
        Route::get('/getAllHocVien', 'getAll');
        Route::delete('deleteHocVien/{MaHocVien}', 'delete');
    });
    Route::controller(HinhAnhController::class)->group(function () {
        Route::get('/getHinhAnh/{MaHinhAnh}', 'get');
        Route::get('/getAllHinhAnh', 'getAll');
        Route::post('/postHinhAnh', 'post');
        Route::put('/updateHinhAnh', 'put');
        Route::delete('/deleteHinhAnh', 'delete');
    });
});

Route::post('/nguoidung/register', [NguoiDungController::class, 'register']);
Route::post('/nguoidung/login', [NguoiDungController::class, 'login']);

Route::get('/TimKiem', [LichSuTimKiemController::class, 'TimKiem']);

Route::middleware('nd')->group(function () {
    Route::controller(NguoiDungController::class)->prefix('nguoidung')->group(function () {
        Route::get('/profile', 'profile');
        Route::put('/update_profile', 'update_profile');
        Route::get('/logout', 'logout');
    });
    Route::controller(LichSuTimKiemController::class)->group(function () {
        Route::get('/getTimKiem', 'get');
        // Route::post('/postTimKiem', 'post');
        Route::delete('/deleteTimKiem/{MaTimKiem}', 'delete');
        Route::delete('/deleteAllTimKiem', 'deleteAll');
    });
    Route::controller(BaiVietDaXemController::class)->group(function () {
        Route::get('/getBaiVietDaXem', 'get');
        // Route::post('/postBaiVietDaXem', 'post');
        Route::delete('/deleteBaiVietDaXem', 'delete');
        Route::delete('/deleteAllBaiVietDaXem', 'deleteAll');
    });
});
