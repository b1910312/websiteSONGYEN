@extends('Layouts.App')
@section('content')
    <div class=" py-5 bg-primary hero-header">
        <div class=" my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Liên Hệ</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Trang chủ</a></li>
                            {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Hướng nghiệp</a></li> --}}
                            <li class="breadcrumb-item text-white active" aria-current="page">Liên hệ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Start -->
    <div class="bg bg-white">
        <div class="container-xxl py-5 bg bg-white">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            {{-- <h6 class="position-relative d-inline text-primary ps-4">Contact Us</h6> --}}
                            <h2 class="mt-2">Liên hệ ngay với chúng tôi</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Họ và tên</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="phone" class="form-control" id="phone" placeholder="phone">
                                            <label for="phone">SĐT</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="chude" placeholder="chude">
                                            <label for="chude">Chủ đề</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection