@extends('Layouts.App')
@section('content')
    <div class=" py-5 bg-primary hero-header mb-5 ">
        <div class=" my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">All in one SEO tool need to grow your business rapidly</h1>
                    <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum
                        stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero
                        ipsum clita lorem</p>
                    <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free
                        Quote</a>
                    <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact
                        Us</a>
                </div>
                <div class="col-lg-6 mx-auto text-center text-lg-start">
                    <img class="img-fluid " src="{{ asset('img/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div>
        <ul class="uk-subnav uk-subnav-pill w-100 row " uk-switcher="animation: uk-animation-fade">
            <li class="col-4"><a class="btn uk-flex uk-flex-center">
                    <h3 class="text-center">Giới thiệu</h3>
                </a></li>
            <li class="col-4"><a class="btn uk-flex uk-flex-center">
                    <h3 class="text-center">Cơ cấu nhân sự</h3>
                </a></li>
            <li class="col-4"><a class="btn uk-flex uk-flex-center">
                    <h3 class="text-center">Dịch vụ</h3>
                </a></li>
        </ul>

        <ul class="uk-switcher uk-margin">
            <li>
                <div class="card container mx-auto col-10 p-5 m-2 bg-white text-center">
                    <h2 class="mb-5">Về chúng tôi</h2>
                    <div class="uk-child-width-1-2@s" uk-grid>
                        <div class="ms-5 row w-100">
                            <ul class="uk-tab-left uk-subnav col-2 "
                                uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                                <li class="uk-active my-1"><a href="#">
                                        <h5>Giới thiệu</h5>
                                    </a></li>
                                <li class="my-1"><a href="#">
                                        <h5>Tầm nhìn</h5>
                                    </a></li>
                                <li class="my-1"><a href="#">
                                        <h5>Sứ mệnh</h5>
                                    </a></li>
                                <li class="my-1"><a href="#">
                                        <h5>Mục tiêu</h5>
                                    </a></li>
                            </ul>

                            <!-- Left Tab Content -->
                            <ul class="uk-switcher  col-10 text-start" style="font-size: larger">
                                <li>Được mệnh danh là những thế hệ vàng, thế hệ của công nghệ, thế hệ của sự bứt phá,….
                                    Nhưng ít người
                                    biết đến chúng tôi cũng là thế hệ của những áp lực, những thiếu thốn về món ăn tinh thần
                                    đúng nghĩa,
                                    những lo âu hiện sinh rằng tôi là ai. Người ta hay bảo “hãy sống là chính mình”, “học để
                                    thành
                                    người”,… nhưng lại quên mất cách định nghĩa chính mình và “người” là như thế nào. Vì
                                    thế, chúng tôi
                                    được ra đời để đồng hành cùng bạn tìm ra những câu trả lời cho riêng mình.</li>

                                <li>Song Yến tin rằng đời sống tinh thần của mọi người sẽ trở nên hạnh phúc hơn khi nhà
                                    trường,
                                    phụ huynh và học sinh xem tâm lý là một yếu tố quan trọng trong việc giáo dục và phát
                                    triển
                                    thế hệ tương lai.</li>

                                <li>Song Yến muốn lan tỏa những kiến thức tâm lý đến với các bạn học sinh, phụ huynh và nhà
                                    trường, giúp cho quá trình phát triển của học sinh được diễn ra tốt nhất và hiệu quả
                                    nhất,
                                    góp phần giảm bớt những định kiến, hủ tục lỗi thời, tăng giá trị phát triển bền vững.
                                </li>

                                <li>Song Yến muốn lan tỏa những kiến thức tâm lý đến với các bạn học sinh, phụ huynh và nhà
                                    trường, giúp cho quá trình phát triển của học sinh được diễn ra tốt nhất và hiệu quả
                                    nhất,
                                    góp phần giảm bớt những định kiến, hủ tục lỗi thời, tăng giá trị phát triển bền vững.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Service Start -->
                <div class="container-xxl py-5">
                    <div class="container px-lg-5">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp"
                            data-wow-delay="0.1s">
                            {{-- <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6> --}}
                            <h2 class="mt-2">Chúng tôi đang làm những gì?</h2>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon flex-shrink-0">
                                        <i class="fa-brands fa-facebook fa-2x"></i>
                                    </div>
                                    <h5 class="mb-3">Facebook Fanpage</h5>
                                    <p>Song Yến thành lập Fanpage từ ngày 04-10-2021 trên nền tảng Facebook nhằm tận dụng
                                        tính phổ biến
                                        và tiện lợi của nền tảng mạng xã hội từ đó tiếp cận được nhiều hơn với các cá nhân
                                        cần được hỗ
                                        trợ về tâm lý.</p>
                                    {{-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon flex-shrink-0">
                                        <i class="fa-solid fa-hand-sparkles fa-2x"></i>
                                    </div>
                                    <h5 class="mb-3">Tổ chức sự kiện</h5>
                                    <p>Song Yến luôn chủ động hợp tác với các đối tác tiềm năng trong lĩnh vực Tâm lý để tổ
                                        chức các
                                        chương trình, sự kiện xoay quanh các chủ để liên quan đến Tâm lý và Sức khỏe tinh
                                        thần</p>
                                    {{-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon flex-shrink-0">
                                        <i class="fa-solid fa-hand-holding-hand fa-2x"></i>
                                    </div>
                                    <h5 class="mb-3">Cầu nối tư vấn tâm lý</h5>
                                    <p>Song Yến luôn chủ động hợp tác với các đối tác tiềm năng trong lĩnh vực Tâm lý để tổ
                                        chức các
                                        chương trình, sự kiện xoay quanh các chủ để liên quan đến Tâm lý và Sức khỏe tinh
                                        thần</p>
                                    {{-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-2 khoangtrang"></div>
                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon flex-shrink-0">
                                        <i class="fa-brands fa-youtube fa-2x"></i>
                                    </div>
                                    <h5 class="mb-3">Youtube Channel</h5>
                                    <p><a href="https://www.youtube.com/@SongYenOfficial" class="text-warning">Song Yến
                                            Official</a>
                                        đánh dấu sự xuất hiện của Song Yến trên nền tảng Youtube với mục đích đem đến cho
                                        các bạn những
                                        nội dung hữu ích</p>
                                    {{-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon flex-shrink-0">
                                        <i class="fa-brands fa-tiktok fa-2x"></i>
                                    </div>
                                    <h5 class="mb-3">Tiktok Channel </h5>
                                    <p><a href="https://www.tiktok.com/@cardgames.quetson" class="text-warning">Quét sơn</a>
                                        đánh dấu sự
                                        xuất hiện của Song Yến trên nền tảng TikTok</p>
                                    {{-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-2 khoangtrang"></div>

                        </div>
                    </div>
                </div>
                <!-- Service End -->
                <!-- Newsletter Start -->
                <div class=" bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container px-lg-5">
                        <div class="row align-items-center" style="height: 250px;">
                            <div class="col-12 col-md-6">
                                <h3 class="text-white">Liệu chúng tôi có thể đồng hành cùng bạn?</h3>
                                <small class="text-white">Nếu được xin bạn hãy để lại email của bạn tại đây, chúng tôi sẽ
                                    liên hệ với
                                    bạn ngay!.</small>
                                <div class="position-relative w-100 mt-3">
                                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                        placeholder="Nhập email tại đây" style="height: 48px;">
                                    <button type="button"
                                        class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                            class="fa fa-paper-plane text-primary fs-4"></i></button>
                                </div>
                            </div>
                            <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                                <img class="img-fluid mt-5" style="height: 250px;" src="img/newsletter.png">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Newsletter End -->


                <!-- Portfolio Start -->
                <div class="container-xxl py-5">
                    <div class="container px-lg-5">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp"
                            data-wow-delay="0.1s">
                            {{-- <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6> --}}
                            <h2 class="mt-2">Và đây là điều chúng tôi đã làm được</h2>
                        </div>
                        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="col-12 text-center">
                                <ul class="list-inline mb-5" id="portfolio-flters">
                                    <li class="btn px-3 pe-4 active" id="All" data-filter="*">All</li>
                                    <li class="btn px-3 pe-4" id="Design" data-filter=".first">Design</li>
                                    <li class="btn px-3 pe-4" data-filter=".second">Development</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row g-4 portfolio-container">
                            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                                <div class="position-relative rounded overflow-hidden">
                                    <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-light" href="img/portfolio-1.jpg" data-lightbox="portfolio"><i
                                                class="fa fa-plus fa-2x text-primary"></i></a>
                                        <div class="mt-auto">
                                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                            <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                                <div class="position-relative rounded overflow-hidden">
                                    <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-light" href="img/portfolio-2.jpg" data-lightbox="portfolio"><i
                                                class="fa fa-plus fa-2x text-primary"></i></a>
                                        <div class="mt-auto">
                                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                            <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                                <div class="position-relative rounded overflow-hidden">
                                    <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-light" href="img/portfolio-3.jpg" data-lightbox="portfolio"><i
                                                class="fa fa-plus fa-2x text-primary"></i></a>
                                        <div class="mt-auto">
                                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                            <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                                <div class="position-relative rounded overflow-hidden">
                                    <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-light" href="img/portfolio-4.jpg" data-lightbox="portfolio"><i
                                                class="fa fa-plus fa-2x text-primary"></i></a>
                                        <div class="mt-auto">
                                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                            <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                                <div class="position-relative rounded overflow-hidden">
                                    <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-light" href="img/portfolio-5.jpg" data-lightbox="portfolio"><i
                                                class="fa fa-plus fa-2x text-primary"></i></a>
                                        <div class="mt-auto">
                                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                            <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                                <div class="position-relative rounded overflow-hidden">
                                    <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-light" href="img/portfolio-6.jpg" data-lightbox="portfolio"><i
                                                class="fa fa-plus fa-2x text-primary"></i></a>
                                        <div class="mt-auto">
                                            <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                            <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio End -->

                <!-- Testimonial Start -->
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    {{-- <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6> --}}
                    <h2 class="mt-2">Chúng tôi cũng những đối tác rất tuyệt vời</h2>
                </div>
                <div class="bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="py-5 px-lg-5">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item bg-transparent border rounded text-white p-4">

                                <div class="align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle mx-auto"
                                        src="img/testimonial-1.jpg" style="width: 250px; height: 250px;">
                                    <div class="ps-3 text-center mt-3 mx-auto">
                                        <h4 class="text-white mb-1">Client Name</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Testimonial End -->
                <!-- Service Start -->
                <div class="container-xxl py-5">
                    <div class="container px-lg-5">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp"
                            data-wow-delay="0.1s">
                            {{-- <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6> --}}
                            <h2 class="mt-2">Những điều mà tôi và bạn cùng quan tâm </h2>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon flex-shrink-0">
                                        <i class="fa-brands fa-facebook fa-2x"></i>
                                    </div>
                                    <h5 class="mb-3">Facebook Fanpage</h5>
                                    <p>Song Yến thành lập Fanpage từ ngày 04-10-2021 trên nền tảng Facebook nhằm tận dụng
                                        tính phổ biến
                                        và tiện lợi của nền tảng mạng xã hội từ đó tiếp cận được nhiều hơn với các cá nhân
                                        cần được hỗ
                                        trợ về tâm lý.</p>
                                    {{-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon flex-shrink-0">
                                        <i class="fa-solid fa-hand-sparkles fa-2x"></i>
                                    </div>
                                    <h5 class="mb-3">Tổ chức sự kiện</h5>
                                    <p>Song Yến luôn chủ động hợp tác với các đối tác tiềm năng trong lĩnh vực Tâm lý để tổ
                                        chức các
                                        chương trình, sự kiện xoay quanh các chủ để liên quan đến Tâm lý và Sức khỏe tinh
                                        thần</p>
                                    {{-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon flex-shrink-0">
                                        <i class="fa-solid fa-hand-holding-hand fa-2x"></i>
                                    </div>
                                    <h5 class="mb-3">Cầu nối tư vấn tâm lý</h5>
                                    <p>Song Yến luôn chủ động hợp tác với các đối tác tiềm năng trong lĩnh vực Tâm lý để tổ
                                        chức các
                                        chương trình, sự kiện xoay quanh các chủ để liên quan đến Tâm lý và Sức khỏe tinh
                                        thần</p>
                                    {{-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-2 khoangtrang"></div>
                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon flex-shrink-0">
                                        <i class="fa-brands fa-youtube fa-2x"></i>
                                    </div>
                                    <h5 class="mb-3">Youtube Channel</h5>
                                    <p><a href="https://www.youtube.com/@SongYenOfficial" class="text-warning">Song Yến
                                            Official</a>
                                        đánh dấu sự xuất hiện của Song Yến trên nền tảng Youtube với mục đích đem đến cho
                                        các bạn những
                                        nội dung hữu ích</p>
                                    {{-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon flex-shrink-0">
                                        <i class="fa-brands fa-tiktok fa-2x"></i>
                                    </div>
                                    <h5 class="mb-3">Tiktok Channel </h5>
                                    <p><a href="https://www.tiktok.com/@cardgames.quetson" class="text-warning">Quét
                                            sơn</a>
                                        đánh dấu sự
                                        xuất hiện của Song Yến trên nền tảng TikTok</p>
                                    {{-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> --}}
                                </div>
                            </div>
                            <div class="col-lg-2 khoangtrang"></div>

                        </div>
                    </div>
                </div>
                <!-- Service End -->
            </li>
            <li>
                <div id="tree"></div>
                <!-- Team Start -->
                <div class="container-xxl py-5">
                    <div class="container px-lg-5">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp"
                            data-wow-delay="0.1s">
                            <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
                            <h2 class="mt-2">Meet Our Team Members</h2>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                            style="width: 75px;">
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                        <img class="img-fluid rounded w-100" src="img/team-1.jpg" alt="">
                                    </div>
                                    <div class="px-4 py-3">
                                        <h5 class="fw-bold m-0">Jhon Doe</h5>
                                        <small>CEO</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                            style="width: 75px;">
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                        <img class="img-fluid rounded w-100" src="img/team-2.jpg" alt="">
                                    </div>
                                    <div class="px-4 py-3">
                                        <h5 class="fw-bold m-0">Emma William</h5>
                                        <small>Manager</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="team-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                            style="width: 75px;">
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                        <img class="img-fluid rounded w-100" src="img/team-3.jpg" alt="">
                                    </div>
                                    <div class="px-4 py-3">
                                        <h5 class="fw-bold m-0">Noah Michael</h5>
                                        <small>Designer</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                            style="width: 75px;">
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                        <img class="img-fluid rounded w-100" src="img/team-2.jpg" alt="">
                                    </div>
                                    <div class="px-4 py-3">
                                        <h5 class="fw-bold m-0">Emma William</h5>
                                        <small>Manager</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="team-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                                            style="width: 75px;">
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                        <img class="img-fluid rounded w-100" src="img/team-3.jpg" alt="">
                                    </div>
                                    <div class="px-4 py-3">
                                        <h5 class="fw-bold m-0">Noah Michael</h5>
                                        <small>Designer</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team End -->
            </li>
            <li>
                <div class="mb-5" id="DichVuTree"></div>
                <!-- Testimonial Start -->
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp mt-5" data-wow-delay="0.1s">
                    {{-- <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6> --}}
                    <h2 class="mt-2">Meet Our Team Members</h2>
                </div>
                <div class=" bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class=" py-5 px-lg-5">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                                <i class="fa fa-quote-left fa-2x mb-3"></i>
                                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                    labore diam</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                                        style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h6 class="text-white mb-1">Client Name</h6>
                                        <small>Profession</small>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                                <i class="fa fa-quote-left fa-2x mb-3"></i>
                                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                    labore diam</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg"
                                        style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h6 class="text-white mb-1">Client Name</h6>
                                        <small>Profession</small>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                                <i class="fa fa-quote-left fa-2x mb-3"></i>
                                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                    labore diam</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg"
                                        style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h6 class="text-white mb-1">Client Name</h6>
                                        <small>Profession</small>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                                <i class="fa fa-quote-left fa-2x mb-3"></i>
                                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                    labore diam</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg"
                                        style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h6 class="text-white mb-1">Client Name</h6>
                                        <small>Profession</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial End -->

            </li>
        </ul>



    </div>
@endsection
<style>
    li.uk-active>a>h5 {
        color: blue;
    }

    .uk-subnav>li>a>h3 {
        color: black;
        /* Màu chữ mặc định */
    }

    .uk-subnav>.uk-active>a>h3 {
        color: white !important;
        /* Màu chữ khi phần tử được chọn (active) */
    }
</style>

<script>
    window.addEventListener('load', function() {
        // Chọn hai nút cần click
        var button1 = document.getElementById('All');
        var button2 = document.getElementById('Design');

        // Kiểm tra xem nút có tồn tại không trước khi thực hiện click
        if (button1 && button2) {
            // Thực hiện click trên hai nút
            button2.click();
            button1.click();
        } else {
            console.error('Không thể tìm thấy một hoặc cả hai nút.');
        }
        OrgChart.templates.ana.field_0 =
            '<text width="230" style="font-size: 18px;" fill="#ffffff" x="125" y="95" text-anchor="middle" class="field_0">{val}</text>';
        var chart = new OrgChart(document.getElementById("tree"), {
            mouseScrool: OrgChart.action.ctrlZoom,
            nodeMouseClick: OrgChart.action.expandCollapse,

            enableSearch: false,
            keyNavigation: true,

            nodeBinding: {
                field_0: "name",
                field_1: "donvi",

            },
            editForm: false,
            nodes: [{
                    id: 1,
                    name: "Ban Cố Vấn"
                },
                {
                    id: 2,
                    pid: 1,
                    tags: ['partner'],
                    name: "Ban cố vấn chuyên môn"
                },
                {
                    id: 3,
                    pid: 1,
                    tags: ['partner'],
                    name: "Ban cố vấn chiến lược"
                },

                {
                    id: 4,
                    pid: 1,
                    name: "Giám đốc"
                },
                {
                    id: 5,
                    pid: 4,
                    donvi: "Phòng",
                    name: "Hành chính - Kế toán"
                },
                {
                    id: 6,
                    pid: 4,
                    donvi: "Phòng",
                    name: "Truyền thông Sự kiện"
                },
                {
                    id: 7,
                    pid: 4,
                    donvi: "Phòng",
                    name: "Công nghệ thông tin"
                },
                {
                    id: 8,
                    pid: 4,
                    donvi: "Phòng",
                    name: "Chuyên môn"
                },
                {
                    id: 9,
                    pid: 4,
                    donvi: "Phòng",
                    name: "Kinh doanh"
                },

                {
                    id: 10,
                    pid: 5,
                    name: "Nhân viên"
                },
                {
                    id: 11,
                    pid: 10,
                    name: "CTV/ Thực tập sinh"
                },
                {
                    id: 12,
                    pid: 6,
                    name: "Nhân viên"
                },
                {
                    id: 13,
                    pid: 12,
                    name: "CTV/ Thực tập sinh"
                },
                {
                    id: 14,
                    pid: 7,
                    name: "Nhân viên"
                },
                {
                    id: 15,
                    pid: 14,
                    name: "CTV/ Thực tập sinh"
                },
                {
                    id: 16,
                    pid: 8,
                    name: "Nhân viên"
                },
                {
                    id: 17,
                    pid: 16,
                    name: "CTV/ Thực tập sinh"
                },
                {
                    id: 18,
                    pid: 9,
                    name: "Nhân viên"
                },
                {
                    id: 19,
                    pid: 18,
                    name: "CTV/ Thực tập sinh"
                },
            ],
        });
        var chart = new OrgChart(document.getElementById("DichVuTree"), {
            mouseScrool: OrgChart.action.ctrlZoom,
            nodeMouseClick: OrgChart.action.expandCollapse,

            enableSearch: false,
            keyNavigation: true,

            nodeBinding: {
                field_0: "name",
            },
            editForm: false,
            nodes: [{
                    id: 100,
                    name: "Dịch vụ của chúng tôi"
                },
                {
                    id: 200,
                    pid: 100,
                    name: "Hướng nghiệp"
                },
                {
                    id: 300,
                    pid: 100,
                    name: "Tâm lý học"
                },

                {
                    id: 400,
                    pid: 100,
                    name: "Kỹ năng sống"
                },
                {
                    id: 500,
                    pid: 300,
                    name: "Sức khỏe tinh thần"
                }, {
                    id: 600,
                    pid: 300,
                    name: "Tâm lý học đường"
                }, {
                    id: 700,
                    pid: 300,
                    name: "Tâm lý học giới tính"
                },

                {
                    id: 800,
                    pid: 200,
                    name: "Tổ chức sự kiện"
                },
                {
                    id: 900,
                    pid: 800,
                    name: "Khóa học"
                },
                {
                    id: 1000,
                    pid: 900,
                    name: "Tư vấn"
                },
                {
                    id: 1100,
                    pid: 400,
                    name: "Tổ chức sự kiện"
                },
                {
                    id: 1200,
                    pid: 1100,
                    name: "Khóa học"
                },
                {
                    id: 1300,
                    pid: 1200,
                    name: "Tư vấn"
                },
                {
                    id: 1400,
                    pid: 500,
                    name: "Tổ chức sự kiện"
                },
                {
                    id: 1500,
                    pid: 1400,
                    name: "Khóa học"
                },
                {
                    id: 1600,
                    pid: 1500,
                    name: "Tư vấn"
                },
                {
                    id: 1700,
                    pid: 600,
                    name: "Tổ chức sự kiện"
                },
                {
                    id: 1800,
                    pid: 1700,
                    name: "Khóa học"
                },
                {
                    id: 1900,
                    pid: 1800,
                    name: "Tư vấn"
                },
                {
                    id: 2000,
                    pid: 700,
                    name: "Tổ chức sự kiện"
                },
                {
                    id: 2100,
                    pid: 2000,
                    name: "Khóa học"
                },
                {
                    id: 2200,
                    pid: 2100,
                    name: "Tư vấn"
                },
            ],
        });
    });
</script>
<script src="{{ asset('js/orgchart.js') }}"></script>
