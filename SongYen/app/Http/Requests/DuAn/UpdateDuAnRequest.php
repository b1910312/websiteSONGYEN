<?php

namespace App\Http\Requests\DuAn;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UpdateDuAnRequest extends FormRequest
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
            'MaDuAn' => [
                'required',
                Rule::unique('duan')->ignore($this->MaDuAn, 'MaDuAn'),
            ],
            'TenDuAn' => 'required',
            'MucKeuGoiDauTuDuoi' => 'required|numeric',
            'MucKeuGoiDauTuTren' => 'required|numeric',
            'SoTienKeuGoiThanhCong' => 'required|numeric',
            'NgayKeuGoi' => 'required|date',
            'NgayKetThucKeuGoi' => 'required|date',
            'ThoiGianThucHienDuAn' => 'required',
            'NgayBatDauDuAn' => 'required|date',
            'NgayKetThucDuAn' => 'required|date',
            'TrangThai' => 'required|numeric',
        ];
    }
    public function messages(): array
    {
        return [
            'MaDuAn.required' => 'Mã dự án không được để trống',
            'MaDuAn.unique' => 'Mã dự án đã tồn tại',
            'TenDuAn.required' => 'Tên dự án không được để trống',
            'MucKeuGoiDauTuDuoi.required' => 'Mức kêu gọi đầu tư dưới không được để trống',
            'MucKeuGoiDauTuDuoi.numeric' => 'Mức kêu gọi đầu tư dưới phải là số',
            'MucKeuGoiDauTuTren.required' => 'Mức kêu gọi đầu tư trên không được để trống',
            'MucKeuGoiDauTuTren.numeric' => 'Mức kêu gọi đầu tư trên phải là số',
            'SoTienKeuGoiThanhCong.required' => 'Số tiền kêu gọi thành công không được để trống',
            'SoTienKeuGoiThanhCong.numeric' => 'Số tiền kêu gọi thành công phải là số',
            'NgayKeuGoi.required' => 'Ngày bắt đầu kêu gọi không được để trống',
            'NgayKeuGoi.date' => 'Ngày bắt đầu kêu gọi phải thuộc định dạng Y-m-d',
            'NgayKetThucKeuGoi.required' => 'Ngày kết thúc kêu gọi không được để trống',
            'NgayKetThucKeuGoi.date' => 'Ngày kết thúc kêu gọi phải thuộc định dạng Y-m-d',
            'ThoiGianThucHienDuAn.required' => 'Thời gian thực hiện dự án không được để trống',
            'ThoiGianThucHienDuAn.date' => 'Thời gian thực hiện dự án phải thuộc định dạng Y-m-d',
            'NgayBatDauDuAn.required' => 'Ngày bắt đầu dự án không được để trống',
            'NgayBatDauDuAn.date' => 'Ngày bắt đầu dự án phải thuộc dạng Y-m-d',
            'NgayKetThucDuAn.required' => 'Ngày kết thúc dự án không được để trống',
            'NgayKetThucDuAn.date' => 'Ngày kết thúc dự án phải thuộc dạng Y-m-d',
            'TrangThai.required' => 'Trạng thái không được để trống',
            'TrangThai.numeric' => 'trạng thái phải là số',
        ];
    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $response = new Response($validator->errors(), 422);
        throw new ValidationException($validator, $response);
    }
}
