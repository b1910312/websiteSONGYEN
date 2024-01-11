@extends('Layouts/app')
@section('content')
    <div class="bg bg-primary" style="height: 100px"></div>
    <div class="border border-white bg bg-white card">
        <div class="row w-100">
            <div class="col-lg-3 card mt-3 p-3 h-100 text-center" style="height: 100%">
                <img class="mx-auto" style="width: 200px; height: 200px;" src="{{ asset('img/LienHeTaiday.png') }}"
                    alt="">
                    <div class="uk-margin">
                        <div uk-form-custom>
                            <input type="file" aria-label="Custom controls">
                            <button class="uk-button uk-button-primary" type="button"
                                tabindex="-1">Cập nhật ảnh đại diện</button>
                        </div>
                    </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item w-100" role="presentation">
                        <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">
                            Thông tin người dùng
                        </button>
                    </li>
                    <li class="nav-item w-100" role="presentation">
                        <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">
                            Lớp học
                        </button>
                    </li>
                    <li class="nav-item w-100" role="presentation">
                        <button class="nav-link w-100" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
                            type="button" role="tab" aria-controls="messages" aria-selected="false">
                            Nhật ký tinh thần
                        </button>
                    </li>
                </ul>

            </div>
            <div class="col-lg-9  mt-3 text-center ">
                <div class="card w-100">
                    <!-- Nav tabs -->

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active p-4 pb-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3>Thông tin người dùng</h3>
                            <form class="uk-form-stacked text-start ">
                                <div class=" uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Họ tên</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="text"
                                            placeholder="Vui lòng không bỏ trống họ tên" value="Nguyễn Thanh Tín">
                                    </div>
                                </div>

                                <div class=" uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Ngày sinh</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="date" value="2001-09-04"
                                            placeholder="Vui lòng không bỏ trống họ tên">
                                    </div>
                                </div>
                                <div class=" uk-margin">
                                    <label class="uk-form-label" for="form-stacked-select">Giới tính</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" id="form-stacked-select">
                                            <option>Nam</option>
                                            <option>Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="text"
                                            placeholder="Vui lòng không bỏ trống email" value="sytinken@gmail.com">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text">Số điện thoại</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="text"
                                            placeholder="Vui lòng không bỏ trống số điện thoại" value="0984442145">
                                    </div>
                                </div>
                                <div class="uk-margin" uk-margin>
                                    <button class="uk-button uk-button-primary float-end">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h4>Danh sách các lớp học của bạn</h4>
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
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
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
            </div>
        </div>
    </div>
@endsection
<style>
    .nav-tabs .nav-link {
        text-align: left
    }
</style>
