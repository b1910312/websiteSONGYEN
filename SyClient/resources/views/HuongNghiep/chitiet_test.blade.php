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
                    <h1 class="text-white animated zoomIn">{{ $BaiTest['BV'] }}</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('TrangChu') }}">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('HN_HieuNghe') }}">Hướng
                                    nghiệp</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('HN_HieuNghe') }}">Trắc nghiệm</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ $BaiTest['BV'] }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 ms-auto">
        <div class="card p-2 border border-white">
            <div class="row w-100 ms-auto">
                <div class="col-lg-12 col-md-12 ps-5">
                    <h2>{{ $BaiTest['BV'] }}</h2>
                    <small>
                        <p>{{ $BaiTest['CD'] }}</p>
                    </small>
                    <div class="mt-2">
                        {{ $BaiTest['ND'] }}
                    </div>
                    <br>
                    <h3 class="text-center">Nội dung trắc nghiệm</h3>
                    <div class="container">

                        <form action="{{ route('HN_KetquaTest', ['idTest' => 1, 'user' => 2, 'idPTL' => 3]) }}" method="post">
                            @csrf
                            <div class="row w-100">
                                <table class="uk-table uk-table-hover uk-table-divider">
                                    <thead>
                                        <tr class="row w-100">
                                            <th class="col-lg-8 col-md-6 col-6"></th>
                                            <th class="col-lg-4 col-md-6 col-6 text-center">Lựa chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="row w-100">
                                            <th class="col-lg-8 col-md-6 col-6">Câu hỏi</th>
                                            <th class="col-lg-4 col-md-6 col-6">
                                                <div class="row w-100 mx-auto">
                                                    <div class="col">
                                                        <small>
                                                            <p>có</p>
                                                        </small>

                                                    </div>

                                                    <div class="col">
                                                        <small>
                                                            <p>không có</p>
                                                        </small>

                                                    </div>

                                                    <div class="col">
                                                        <small>
                                                            <p>không rõ</p>
                                                        </small>

                                                    </div>


                                                </div>

                                            </th>

                                        </tr>
                                        <tr class="row w-100">
                                            <td class="col-lg-8 col-md-6 col-6">Câu hỏi 1</td>
                                            <td class="col-lg-4 col-md-6 col-6">
                                                <div class="row w-100">
                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer" value="1"
                                                            class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer" value="2"
                                                            class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer" value="3"
                                                            class="form-check-input mx-auto">
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="row w-100">
                                            <td class="col-lg-8 col-md-6 col-6">Câu hỏi 2</td>
                                            <td class="col-lg-4 col-md-6 col-6">
                                                <div class="row w-100">
                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer" value="1"
                                                            class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer" value="2"
                                                            class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="3" class="form-check-input mx-auto">
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="row w-100">
                                            <td class="col-lg-8 col-md-6 col-6">Câu hỏi 3</td>
                                            <td class="col-lg-4 col-md-6 col-6">
                                                <div class="row w-100">
                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="1" class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="2" class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="3" class="form-check-input mx-auto">
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="row w-100">
                                            <td class="col-lg-8 col-md-6 col-6">Câu hỏi 4</td>
                                            <td class="col-lg-4 col-md-6 col-6">
                                                <div class="row w-100">
                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="1" class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="2" class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="3" class="form-check-input mx-auto">
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="row w-100">
                                            <td class="col-lg-8 col-md-6 col-6">Câu hỏi 5</td>
                                            <td class="col-lg-4 col-md-6 col-6">
                                                <div class="row w-100">
                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="1" class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="2" class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="3" class="form-check-input mx-auto">
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="row w-100">
                                            <td class="col-lg-8 col-md-6 col-6">Câu hỏi 6</td>
                                            <td class="col-lg-4 col-md-6 col-6">
                                                <div class="row w-100">
                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="1" class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="2" class="form-check-input mx-auto">
                                                    </div>

                                                    <div class="form-check col-lg-4 col-md-4 col-4">
                                                        <input type="radio" id="option3" name="answer"
                                                            value="3" class="form-check-input mx-auto">
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="row w-100">
                                <button type="submit" class="btn btn-primary mx-auto w-25">
                                    Hoàn thành trắc nghiệm
                                </button>
                            </div>

                        </form>
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
