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
                    <h1 class="text-white animated zoomIn">{{ $BaiViet['BV'] }}</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('TrangChu') }}">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('HN_HieuNghe') }}">Sự kiện & Dự
                                    án</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{ $BaiViet['BV'] }}</li>
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
                    <h1>{{ $BaiViet['BV'] }}</h1>

                    <p>{{ $BaiViet['CD'] }}</p>

                    <div class="mt-2 content">
                        {!! $BaiViet['ND'] !!}
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card text-center">
                        {{-- <h2>Danh mục</h2>
                        <div id="content-index" class="uk-list text-start ms-5"></div> --}}
                        <div class=" bg-primary newsletter my-5 mt-sm-n5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container p-lg-5">
                                <div class="row align-items-center text-start">
                                    <div class="col-lg-8 col-md-4 col-8">
                                        <h4 class="text-white">Chúng tôi cần bạn</h4>
                                        <small class="text-white">Bạn và chúng tôi hãy cùng nhau hiện thực hóa dự án
                                            này</small> <br>
                                    </div>
                                    <div class=" col-lg-4 col-md-4 col-4 text-center mb-2  d-md-block">
                                        @include('Layouts/Donate')
                                    </div>

                                </div>
                            </div>
                        </div>
                        <h2>Sự kiện tương tự</h2>
                        <div class="row w-100 mx-auto text-start">
                            @foreach ($ListBaiVietSame as $item)
                                <div class="col-lg-6 my-2 col-md-6 col-3 portfolio-item  first wow zoomIn"
                                    data-wow-delay="0.1s">
                                    <div class="position-relative rounded overflow-hidden">
                                        <img class="img-fluid w-100" src="{{ asset($item['img']) }}" alt="">
                                        <div class="portfolio-overlay">
                                            <a class="btn btn-light"
                                                href="{{ route('HN_BaiViet', ['id' => $item['id']]) }}"><i
                                                    class="fa fa-eye fa-2x text-primary"></i></a>
                                            <div class="mt-auto">
                                                <small class="text-white"><i
                                                        class="fa fa-folder me-2"></i>{{ $item['CD'] }}</small>
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
                </div>

            </div>

        </div>

    </div>
    <div class="p-5 ms-auto bg bg-white border ">

        {{-- <table class="contents" style="border-collapse: collapse;border-spacing: 0;width: 100%;">
            <tbody>
                <tr>
                    <td class="content-padding" style="padding: 0;vertical-align: top">
                        <div style="margin-bottom: 0px; line-height: 30px; font-size: 30px;">&nbsp;</div>
                        <div class="body-copy" style="margin: 0;">
                            <div
                                style="margin: 0;color: #60666d;font-size: 50px;font-family: sans-serif;line-height: 20px; text-align: left;">
                                <div class="bottom-padding" style="margin-bottom: 0px; line-height: 15px; font-size: 15px;">
                                    &nbsp;</div>
                                <div class="bottom-padding" style="margin-bottom: 0px; line-height: 7px; font-size: 7px;">
                                    &nbsp;</div>
                                <div style="width: 100%; text-align: center; float: left;">
                                    <div class="rating"
                                        style="text-align: center; margin: 0; font-size: 50px; width: 100%; margin: 0 auto; margin-top: 10px;">
                                        <div
                                            style="text-align: left; margin: 0; font-size: 20px;  text-transform: uppercase; letter-spacing: .5px;">
                                            <h4>Đánh giá bài viết</h4>
                                        </div>
                                        <div
                                            style="text-align: center; margin: 0; font-size: 20px;  text-transform: uppercase; letter-spacing: .5px;">
                                            Bạn cảm thấy bài viết của chúng tôi thế nào</div>
                                        <table
                                            style="border-collapse: collapse;border-spacing: 0;width: 25%; margin: 0 auto; font-size: 50px; direction: rtl;"
                                            dir="rtl">
                                            <tbody>
                                                <tr>
                                                    <td style="padding: 0;vertical-align: top;" width="55"
                                                        class="star-wrapper" lang="x-star-wrapper">
                                                        <div
                                                            style="display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;">
                                                            <a href="http://example.com/?rating=5" class="star"
                                                                target="_blank" lang="x-star-divbox"
                                                                style="color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;"
                                                                tabindex="1">
                                                                <div lang="x-empty-star"
                                                                    style="margin: 0;display: inline-block;">☆</div>
                                                                <div lang="x-full-star"
                                                                    style="margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;">
                                                                    ★</div>
                                                            </a>
                                                            <a href="http://example.com/?rating=5" class="star-number"
                                                                target="_blank" lang="x-star-number"
                                                                style="font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;">5</a>
                                                        </div>
                                                    </td>
                                                    <td style="padding: 0;vertical-align: top" width="55"
                                                        class="star-wrapper" lang="x-star-wrapper">
                                                        <div
                                                            style="display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;">
                                                            <a href="http://example.com/?rating=4" class="star"
                                                                target="_blank" lang="x-star-divbox"
                                                                style="color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;"
                                                                tabindex="2">
                                                                <div lang="x-empty-star"
                                                                    style="margin: 0;display: inline-block;">☆</div>
                                                                <div lang="x-full-star"
                                                                    style="margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;">
                                                                    ★</div>
                                                            </a>
                                                            <a href="http://example.com/?rating=4" class="star-number"
                                                                target="_blank" lang="x-star-number"
                                                                style="font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;">4</a>
                                                        </div>
                                                    </td>
                                                    <td style="padding: 0;vertical-align: top" width="55"
                                                        class="star-wrapper" lang="x-star-wrapper">
                                                        <div
                                                            style="display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;">
                                                            <a href="http://example.com/?rating=3" class="star"
                                                                target="_blank" lang="x-star-divbox"
                                                                style="color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;"
                                                                tabindex="3">
                                                                <div lang="x-empty-star"
                                                                    style="margin: 0;display: inline-block;">☆</div>
                                                                <div lang="x-full-star"
                                                                    style="margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;">
                                                                    ★</div>
                                                            </a>
                                                            <a href="http://example.com/?rating=3" class="star-number"
                                                                target="_blank" lang="x-star-number"
                                                                style="font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;">3</a>
                                                        </div>
                                                    </td>
                                                    <td style="padding: 0;vertical-align: top" width="55"
                                                        class="star-wrapper" lang="x-star-wrapper">
                                                        <div
                                                            style="display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;">
                                                            <a href="http://example.com/?rating=2" class="star"
                                                                target="_blank" lang="x-star-divbox"
                                                                style="color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;"
                                                                tabindex="4">
                                                                <div lang="x-empty-star"
                                                                    style="margin: 0;display: inline-block;">☆</div>
                                                                <div lang="x-full-star"
                                                                    style="margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;">
                                                                    ★</div>
                                                            </a>
                                                            <a href="http://example.com/?rating=2" class="star-number"
                                                                target="_blank" lang="x-star-number"
                                                                style="font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;">2</a>
                                                        </div>
                                                    </td>
                                                    <td style="padding: 0;vertical-align: top" width="55"
                                                        class="star-wrapper" lang="x-star-wrapper">
                                                        <div
                                                            style="display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;">
                                                            <a href="http://example.com/?rating=1" class="star"
                                                                target="_blank" lang="x-star-divbox"
                                                                style="color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;"
                                                                tabindex="5">
                                                                <div lang="x-empty-star"
                                                                    style="margin: 0;display: inline-block;">☆</div>
                                                                <div lang="x-full-star"
                                                                    style="margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;">
                                                                    ★</div>
                                                            </a>
                                                            <a href="http://example.com/?rating=1" class="star-number"
                                                                target="_blank" lang="x-star-number"
                                                                style="font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;">1</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>




                                    </div>
                                </div>
                                <div style="margin-bottom: 0px; line-height: 30px; font-size: 30px;">&nbsp;</div>
                            </div>

                        </div>
                    </td>
                </tr>
            </tbody>
        </table> --}}


        <ul class="uk-comment-list">
            <h4>Bình luận</h4>
            <li>
                <article class="uk-comment uk-visible-toggle" tabindex="-1" role="comment">
                    <header class="uk-comment-header uk-position-relative">
                        <div class="uk-grid-medium uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-comment-avatar"
                                    src="{{ asset('https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png') }}"
                                    width="80" height="80" alt="">
                            </div>
                            <div class="uk-width-expand">
                                <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                                        href="#">Author</a></h4>
                                <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset"
                                        href="#">12
                                        days ago</a></p>
                            </div>
                        </div>
                        <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted"
                                href="#">Reply</a></div>
                    </header>
                    <div class="uk-comment-body">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                            sit amet.</p>
                    </div>
                </article>
                <ul>
                    <li>
                        <article class="uk-comment uk-comment-primary uk-visible-toggle" tabindex="-1" role="comment">
                            <header class="uk-comment-header uk-position-relative">
                                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="uk-comment-avatar"
                                            src="{{ asset('https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png') }}"
                                            width="80" height="80" alt="">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                                                href="#">Author</a></h4>
                                        <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset"
                                                href="#">12 days ago</a></p>
                                    </div>
                                </div>
                                <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a
                                        class="uk-link-muted" href="#">Reply</a></div>
                            </header>
                            <div class="uk-comment-body">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="uk-comment uk-visible-toggle" tabindex="-1" role="comment">
                            <header class="uk-comment-header uk-position-relative">
                                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <img class="uk-comment-avatar"
                                            src="{{ asset('https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png') }}"
                                            width="80" height="80" alt="">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                                                href="#">Author</a></h4>
                                        <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset"
                                                href="#">12 days ago</a></p>
                                    </div>
                                </div>
                                <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a
                                        class="uk-link-muted" href="#">Reply</a></div>
                            </header>
                            <div class="uk-comment-body">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </article>
                    </li>
                </ul>
            </li>
        </ul>
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
        $(document).ready(function() {
            // Find all h3 elements inside elements with class "content"
            $('.content h3').each(function(index) {
                // Create an anchor element with a link to the corresponding h3
                var anchor = $('<a>').attr('href', '.content h3:eq(' + index + ')').text($(this).text());

                // Create an li element with the anchor and append it to the content index
                $('#content-index').append($('<li>').append(anchor));
            });
            // Add click event handler for the links in the content index
            $('#content-index a').on('click', function(e) {
                e.preventDefault(); // Prevent default behavior of anchor links
                var targetId = $(this).attr('href'); // Get the target id from the href attribute
                var targetElement = $(targetId); // Get the target element
                $('html, body').animate({
                    scrollTop: targetElement.offset().top - 100
                }, 500); // Scroll to the target element
            });
        });
    </script>
@endsection
