<?php

namespace App\Http\Requests\SuKien;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class SuKienRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'MaSuKien' => 'required|unique:sukien',
            'TenSuKien' => 'required',
            'DiaDiem' => 'required',
            'NgayBatDauSuKien' => 'required|date',
            'NgayKetThucSuKien' => 'required|date',
            'TrangThai' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'MaSuKien.required' => 'Mã sự kiện không được để trống',
            'MaSuKien.unique' => 'Mã sự kiện đã tồn tại',
            'TenSuKien.required' => 'Tên sự kiện không được để trống',
            'DiaDiem.required' => 'Địa điểm không được để trống',
            'NgayBatDauSuKien.required' => 'Ngày bắt đầu sự kiện không được để trống',
            'NgayBatDauSuKien.date' => 'Ngày bắt đầu sự kiện phải thuộc dạng Y-m-d',
            'NgayKetThucSuKien.required' => 'Ngày kết thúc sự kiện không được để trống',
            'NgayKetThucSuKien.date' => 'Ngày kết thúc sự kiện phải thuộc dạng Y-m-d',
            'TrangThai.required' => 'Trạng thái không được để trống',
            'TrangThai.numeric' => 'Trạng thái phải thuộc dạng số',
        ];
    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $response = new Response($validator->errors(), 422);
        throw new ValidationException($validator, $response);
    }
}
