<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrangChu;
use App\Http\Controllers\SuKien;
use App\Http\Controllers\LienHe;
use App\Http\Controllers\HuongNghiep;
use App\Http\Controllers\KyNangSong;
use App\Http\Controllers\TamLyHocDuong;
use App\Http\Controllers\TamLyHocGioiTinh;
use App\Http\Controllers\SucKhoeTinhThan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [TrangChu::class, 'index'])->name('TrangChu');
Route::get('/sukien', [SuKien::class, 'index'])->name('SuKien');
Route::get('/lienhe', [LienHe::class, 'index'])->name('LienHe');

Route::group(['prefix' => 'huongnghiep'], function () {
    Route::get('/', [HuongNghiep::class, 'index'])->name('HN_HieuNghe');
    Route::get('/test', [HuongNghiep::class, 'testPage'])->name('HN_Test');
    Route::get('/chitiettest', [HuongNghiep::class, 'detailTestPage'])->name('HN_ChiTietTest');
    Route::get('/khoahoc', [HuongNghiep::class, 'KhoaHoc'])->name('HN_KhoaHoc');
    Route::get('/hotro', [HuongNghiep::class, 'HoTro'])->name('HN_HoTro');
});

Route::group(['prefix' => 'kynangsong'], function () {
    Route::get('/', [KyNangSong::class, 'index'])->name('KNS_TimHieu');
    Route::get('/test', [KyNangSong::class, 'testPage'])->name('KNS_Test');
    Route::get('/chitiettest', [KyNangSong::class, 'detailTestPage'])->name('KNS_ChiTietTest');
    Route::get('/khoahoc', [KyNangSong::class, 'KhoaHoc'])->name('KNS_KhoaHoc');
    Route::get('/hotro', [KyNangSong::class, 'HoTro'])->name('KNS_HoTro');
});

Route::group(['prefix' => 'tamlyhocduong'], function () {
    Route::get('/', [TamLyHocDuong::class, 'index'])->name('TLHD_HieuNhau');
    Route::get('/test', [TamLyHocDuong::class, 'testPage'])->name('TLHD_Test');
    Route::get('/chitiettest', [TamLyHocDuong::class, 'detailTestPage'])->name('TLHD_ChiTietTest');
    Route::get('/khoahoc', [TamLyHocDuong::class, 'KhoaHoc'])->name('TLHD_KhoaHoc');
    Route::get('/hotro', [TamLyHocDuong::class, 'HoTro'])->name('TLHD_HoTro');
});

Route::group(['prefix' => 'tamlyhocgioitinh'], function () {
    Route::get('/', [TamLyHocGioiTinh::class, 'index'])->name('TLHGT_HieuMinh');
    Route::get('/test', [TamLyHocGioiTinh::class, 'testPage'])->name('TLHGT_Test');
    Route::get('/chitiettest', [TamLyHocGioiTinh::class, 'detailTestPage'])->name('TLHGT_ChiTietTest');
    Route::get('/khoahoc', [TamLyHocGioiTinh::class, 'KhoaHoc'])->name('TLHGT_KhoaHoc');
    Route::get('/hotro', [TamLyHocGioiTinh::class, 'HoTro'])->name('TLHGT_HoTro');
});

Route::group(['prefix' => 'suckhoetinhthan'], function () {
    Route::group(['prefix' => 'nhatkitinhthan'], function () {
        Route::get('/', [SucKhoeTinhThan::class, 'DanhSachNKTT'])->name('NKTT_DanhSach');
        Route::get('/dangky', [SucKhoeTinhThan::class, 'DangKy'])->name('NKTT_DangKy');
        Route::get('/viet', [SucKhoeTinhThan::class, 'NhatKyTinhThan'])->name('NKTT_Viet');
    });    
    Route::get('/', [SucKhoeTinhThan::class, 'index'])->name('SKTT_TimHieu');
    Route::get('/test', [SucKhoeTinhThan::class, 'testPage'])->name('SKTT_Test');
    Route::get('/chitiettest', [SucKhoeTinhThan::class, 'detailTestPage'])->name('SKTT_ChiTietTest');
    Route::get('/khoahoc', [SucKhoeTinhThan::class, 'KhoaHoc'])->name('SKTT_KhoaHoc');
    Route::get('/hotro', [SucKhoeTinhThan::class, 'HoTro'])->name('SKTT_HoTro');
});
