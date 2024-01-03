@extends('Layouts/app')
@section('content')
    <div class=" py-5 bg-primary hero-header">
        <div class=" my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
            </div>
        </div>
    </div>
    <div class="card border border-white">
        <div class="row w-100 mt-2">
            <h2 class="text-center">Kết quả trắc nghiệm</h2>
            <p class="px-5" style="font-size: large">{!! $NoiDung !!}<br>
            </p>
        </div>
        <div class="row mx-5">
            <h3 class="text-center">Điểm số của bạn là <p class="text-success">50/75</p>
            </h3>
            <h5>Điểm số các thang đo nhỏ</h5>
            <div class="table-responsive">
                <table class="table table-bordered border-dark">
                    <tbody>
                        @foreach ($ThangDo as $key => $item)
                            <tr class="row">
                                <th class=" p-3 col-5">{{ $item['tdo'] }}:
                                    @if (isset($Diem[$key]))
                                         {{ $Diem[$key]['diem'] }}
                                    @endif/{{ $item['diem'] }}
                                </th>
                                <td class=" p-3 col-7">{{ $item['Noidung'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
