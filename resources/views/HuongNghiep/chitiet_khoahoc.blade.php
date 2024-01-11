@extends('Layouts.App')
@section('content')
    <style type="text/css">
        /* Star hover using lang hack in its own style wrapper, otherwise Gmail will strip it out */
        * [lang~="x-star-wrapper"]:hover *[lang~="x-star-number"] {
            color: #119da2 !important;
            border-color: #119da2 !important;
        }

        * [lang~="x-star-wrapper"]:hover *[lang~="x-full-star"],
        * [lang~="x-star-wrapper"]:hover~*[lang~="x-star-wrapper"] *[lang~="x-full-star"] {
            display: block !important;
            width: auto !important;
            overflow: visible !important;
            float: none !important;
            margin-top: -1px !important;
        }

        * [lang~="x-star-wrapper"]:hover *[lang~="x-empty-star"],
        * [lang~="x-star-wrapper"]:hover~*[lang~="x-star-wrapper"] *[lang~="x-empty-star"] {
            display: block !important;
            width: 0 !important;
            overflow: hidden !important;
            float: left !important;
            height: 0 !important;
        }
    </style>


    <style type="text/css">
        /* Normal email CSS */
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        td {
            vertical-align: top;
        }

        img {
            border: 0;
            -ms-interpolation-mode: bicubic;
            max-width: 100% !important;
            height: auto;
        }

        a {
            text-decoration: none;
            color: #119da2;
        }

        a:hover {
            text-decoration: underline;
        }

        *[class=main-wrapper],
        *[class=main-content] {
            min-width: 0 !important;
            width: 600px !important;
            margin: 0 auto !important;
        }

        *[class=rating] {
            unicode-bidi: bidi-override;
            direction: rtl;
        }

        *[class=rating]>*[class=star] {
            display: inline-block;
            position: relative;
            text-decoration: none;
        }

        @media (max-width: 621px) {
            table {
                min-width: 0 !important;
                width: 100% !important;
            }

            *[class=body-copy] {
                padding: 0 10px !important;
            }

            *[class=main-wrapper],
            *[class=main-content] {
                min-width: 0 !important;
                width: 320px !important;
                margin: 0 auto !important;
            }

            *[class=ms-sixhundred-table] {
                width: 100% !important;
                display: block !important;
                float: left !important;
                clear: both !important;
            }

            *[class=content-padding] {
                padding-left: 10px !important;
                padding-right: 10px !important;
            }

            *[class=bottom-padding] {
                margin-bottom: 15px !important;
                font-size: 0 !important;
                line-height: 0 !important;
            }

            *[class=top-padding] {
                display: none !important;
            }

            *[class=hide-mobile] {
                display: none !important;
            }


            /* Prevent hover effects so double click issue doesn't happen on mobile devices */
            * [lang~="x-star-wrapper"]:hover *[lang~="x-star-number"] {
                color: #AEAEAE !important;
                border-color: #FFFFFF !important;
            }

            * [lang~="x-star-wrapper"] {
                pointer-events: none !important;
            }

            * [lang~="x-star-divbox"] {
                pointer-events: auto !important;
            }

            *[class=rating] *[class="star-wrapper"] a div:nth-child(2),
            *[class=rating] *[class="star-wrapper"]:hover a div:nth-child(2),
            *[class=rating] *[class="star-wrapper"]~*[class="star-wrapper"] a div:nth-child(2) {
                display: none !important;
                width: 0 !important;
                height: 0 !important;
                overflow: hidden !important;
                float: left !important;
            }

            *[class=rating] *[class="star-wrapper"] a div:nth-child(1),
            *[class=rating] *[class="star-wrapper"]:hover a div:nth-child(1),
            *[class=rating] *[class="star-wrapper"]~*[class="star-wrapper"] a div:nth-child(1) {
                display: block !important;
                width: auto !important;
                overflow: visible !important;
                float: none !important;
            }
        }
    </style>
    <div class=" py-5 bg-primary hero-header">
        <div class=" my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">{{ $KhoaHoc['BV'] }}</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('TrangChu') }}">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('HN_HieuNghe') }}">Hướng
                                    nghiệp</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('HN_HieuNghe') }}">Khóa học</a></li>        
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ $KhoaHoc['BV'] }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="card p-2 border border-white">
            <div class="row w-100 ms-auto">
                <div class="col-lg-8 col-md-12 ps-5">
                    <h2>{{ $KhoaHoc['BV'] }}</h2>
                    <small>
                        <p>{{ $KhoaHoc['CD'] }}</p>
                    </small>
                    <div class="mt-2">
                        {{ $KhoaHoc['ND'] }}
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-2">
                    <div class="card text-center">
                        <h2>Khóa học tương tự</h2>
                        <div class="row w-100 mx-auto text-start">
                            @foreach ($ListKhoaHocSame as $item)
                                <div class="col-lg-6 my-2 col-md-6 col-3 portfolio-item  first wow zoomIn"
                                    data-wow-delay="0.1s">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img class="img-fluid w-100" src="{{ asset($item['img']) }}" alt="">
                                        <div class="portfolio-overlay">
                                            <a class="btn btn-light"
                                                href="{{ route('HN_KhoaHoc', ['id' => $item['id']]) }}"><i
                                                    class="fa fa-eye fa-2x text-primary"></i></a>
                                            <div class="mt-auto">
                                                <small class="text-white"><i
                                                        class="fa fa-folder me-2"></i>{{ $item['CD'] }}</small>
                                                <a class="h5 d-block text-white mt-1 mb-0"
                                                    href="{{ route('HN_KhoaHoc', ['id' => $item['id']]) }}">{{ $item['BV'] }}</a>
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
                </div>

            </div>

        </div>

    </div>
    
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
            limitText('Noidung', 60);
        };
    </script>
@endsection
