@extends('Layouts.App')
@section('content')
    <div class=" py-5 bg-primary hero-header">
        <div class=" my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Hiểu nghề</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Hướng nghiệp</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Hiểu nghề</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 mb-5 bg bg-white">
        <div class="row w-100">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                {{-- <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6> --}}
                <h2 class="mt-2">Những khóa học của chúng tôi về hướng nghiệp</h2>
                <div class="uk-margin w-100">
                    <form class="uk-search uk-search-default w-50 ">
                        <a href="" uk-search-icon></a>
                        <input class="uk-search-input form-control"
                            style="background: rgba(214, 207, 207, 0.6); height: 50px;" type="search"
                            placeholder="Tìm kiếm bài viết" aria-label="Search">
                    </form>
                </div>
            </div>

        </div>
        <div class="row g-4 portfolio-container">
            @foreach ($ListBaiViet as $item)
                <div class="col-lg-3 col-md-4 col-4 portfolio-item  first wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset($item['img']) }}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{ route('HN_BaiViet', ['id' => $item['id']]) }}"><i
                                    class="fa fa-eye fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>{{ $item['CD'] }}</small>
                                <a class="h5 d-block text-white mt-1 mb-0"
                                    href="{{ route('HN_BaiViet', ['id' => $item['id']]) }}">{{ $item['BV'] }}</a>
                                <small class="text-white">
                                    <p class="Noidung">{{ $item['ND'] }}</p>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Newsletter Start -->

    <div class=" bg-primary newsletter my-5 mt-sm-n5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-lg-8 col-md-4 col-8">
                    <h3 class="text-white">Bạn có những thắc mắc trong việc chọn nghề ?</h3>
                    <small class="text-white">Đừng ngần ngại liên hệ với chúng tôi, chúng tôi sẽ cùng bạn giải quyết
                        nó</small>
                    {{-- <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Nhập email tại đây" style="height: 48px;">
                        <button type="button"
                            class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div> --}}
                </div>
                <div class=" col-lg-4 col-md-4 col-4 text-center mb-n5  d-md-block">
                    <a href="{{ route('HN_HoTro') }}">
                        <img src="{{ asset('img/LienHeTaiDay.png') }}" alt="" srcset="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- About Start -->

    <div class=" py-5">
        <div class=" px-lg-5">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title text-center position-relative mb-4 pb-2">
                        {{-- <h6 class="position-relative text-primary ps-4">About Us</h6> --}}
                        <h2 class="mt-2">Bạn cảm thấy chất lượng của chúng tôi thế nào ?</h2>
                    </div>
                </div>


            </div>
            <div class="row w-100">
                <div class="col-8 mx-auto">
                    @include('Layouts/Rating')
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
    <script>
        function limitText(elementClass, maxLength) {
            var elements = document.getElementsByClassName(elementClass);

            for (var i = 0; i < elements.length; i++) {
                var element = elements[i];
                var text = element.textContent;

                if (text.length > maxLength) {
                    var truncatedText = text.substring(0, maxLength);
                    element.textContent = truncatedText + '...';
                }
            }
        }

        window.onload = function() {
            // Gọi hàm của bạn ở đây
            limitText('Noidung', 150);
        };
    </script>
@endsection
