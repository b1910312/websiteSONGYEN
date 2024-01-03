@extends('Layouts.App')
@section('content')
    <div class=" py-5 bg-primary  hero-header">
        <div class=" my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Nhật ký tinh thần</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                </div>
            </div>
        </div>
    </div>
    <div class="border border-white bg bg-white card">
        <div class="row w-100">
            <div class="col-lg-4 card m-3 p-3 h-100 text-center" style="height: 100%">
                <h4 class="m-3 text-uppercase">Thông tin nhật ký tinh thần</h4>
                <img class="mx-auto" style="width: 200px; height: 200px;" src="{{ asset('img/LienHeTaiday.png') }}"
                    alt="">
                <table class="uk-table uk-table-justify uk-table-divider">

                    <tbody>
                        <tr class="row w-100 text-start">
                            <th class="col-3 ms-5">Họ tên</th>
                            <td class="col-7">Nguyễn Thanh Tín</td>
                        </tr>
                        <tr class="row w-100 text-start">
                            <th class="col-3 ms-5">Email</th>
                            <td class="col-7">sytinken@gmail.com</td>
                        </tr>
                        <tr class="row w-100 text-start">
                            <th class="col-3 ms-5">Số điện thoại</th>
                            <td class="col-7">0984442145</td>
                        </tr>
                        <tr class="row w-100 text-start">
                            <th class="col-3 ms-5">Ngày đăng ký</th>
                            <td class="col-7">09/08/2023</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-7 mx-auto mt-3 text-center">
                <h4>Danh sách nhật ký đã viết</h4>
                <form class="uk-search uk-search-default w-100 p-2">
                    <a href="" class="m-2" uk-search-icon></a>
                    <input class="uk-search-input form-control" style="background: rgb(220, 220, 220); height: 50px;"
                        type="search" placeholder="Tìm kiếm nhật ký" aria-label="Search">
                </form>
                <div class="table-container" style="max-height: 500px">
                    <table class="uk-table uk-table-striped">
                        <thead class="fixed-header">
                            <tr>
                                <th>Header 1</th>
                                <th>Header 2</th>
                                <th>Header 3</th>
                                <!-- Add more headers as needed -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <!-- Add more data rows as needed -->
                            </tr>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <!-- Add more data rows as needed -->
                            </tr>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <!-- Add more data rows as needed -->
                            </tr>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <!-- Add more data rows as needed -->
                            </tr>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <!-- Add more data rows as needed -->
                            </tr>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <!-- Add more data rows as needed -->
                            </tr>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <!-- Add more data rows as needed -->
                            </tr>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <!-- Add more data rows as needed -->
                            </tr>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <!-- Add more data rows as needed -->
                            </tr>
                            <!-- Add more data rows as needed -->
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
