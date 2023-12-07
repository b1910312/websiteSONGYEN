<?php

namespace App\Http\Requests\KhoaHoc;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class KhoaHocRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'MaKhoaHoc' => 'required|unique:khoahoc',
            'ChuDe' => 'required|exists_in_chude',
            'TenKhoaHoc' => 'required',
            'HocPhi' => 'required|numeric',
            'LoTrinh' => 'required',
            'NguoiGiangDay' => 'required',
            'NgayBatDau' => 'required|date',
            'NgayKetThuc' => 'required|date',
            'HinhThuc' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'MaKhoaHoc.required' => 'Mã khóa học không được trống',
            'MaKhoaHoc.unique' => 'Mã khóa học đã tồn tại',
            'ChuDe.required' => 'Chủ đề không được trống',
            'ChuDe.exists_in_chude' => 'Không tồn tại chủ đề này',
            'TenKhoaHoc.required' => 'Tên khóa học không được trống',
            'HocPhi.required' => 'Học phí không được trống',
            'HocPhi.numeric' => 'Học phí phải là số',
            'LoTrinh.required' => 'Lộ trình không được trống',
            'NguoiGiangDay.required' => 'Người giảng dạy không được trống',
            'NgayBatDau.required' => 'Ngày bắt đầu không được trống',
            'NgayBatDau.date' => 'Ngày bắt đầu phải có dạng Y-m-d',
            'NgayKetThuc.required' => 'Ngày kết thúc không được trống',
            'NgayKetThuc.date' => 'Ngày kết thúc không được trống',
            'HinhThuc.required' => 'Hình thức không được trống',
        ];
    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $response = new Response($validator->errors(), 422);
        throw new ValidationException($validator, $response);
    }
}
