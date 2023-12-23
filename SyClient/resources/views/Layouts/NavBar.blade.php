   <!-- Navbar & Hero Start -->
   <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
       <a href="" class="navbar-brand p-0">
           <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Master</span></h1>
           <!-- <img src="img/logo.png" alt="Logo"> -->
       </a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
           <span class="fa fa-bars"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
           <div class="navbar-nav ms-auto py-0">
               <a href="{{ route('TrangChu') }}" class="nav-item nav-link">Trang chủ</a>
               <a href="{{ route('SuKien') }}" class="nav-item nav-link">Sự kiện</a>
               <div class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tâm lý học</a>
                   <div class="dropdown-menu m-0">
                       <div class="d-flex">

                           <a class="dropdown-item dropdown-toggle" onclick="toggleSmallMenu('#SKTT')"
                               id="SKTT">Sức
                               khoẻ tin thần</a>
                           <div class="smallmenu bg bg-white p-2" id="smallmenuSKTT"
                               style="display: none; position: absolute; margin-left: 180px; border-radius: 15px; top: 0px   ">
                               <a href="{{ route('SKTT_TimHieu') }}" class="dropdown-item">Thấu Hiểu</a>
                               <a href="{{ route('SKTT_Test') }}" class="dropdown-item">Trắc nghiệm</a>
                               <a href="{{ route('SKTT_KhoaHoc') }}" class="dropdown-item">Khóa học</a>
                               <a href="{{ route('SKTT_HoTro') }}" class="dropdown-item">Hỗ trợ</a>
                               <a class="dropdown-item dropdown-toggle" id="NKTT">Nhật ký tinh
                                   thần</a>
                               <div class="smallmenu ms-4 m-1" id="smallmenuNKTT" style="display: none">
                                   <a href="{{ route('NKTT_DangKy') }}" class="dropdown-item">Đăng ký</a>
                                   <a href="{{ route('NKTT_DanhSach') }}" class="dropdown-item">Viết nhật ký</a>
                               </div>
                           </div>

                       </div>
                       <div class="d-flex">
                           <a class="dropdown-item dropdown-toggle" onclick="toggleSmallMenu('#TLHD')"
                               id="TLHD">Tâm lý học đường</a>
                           <div class="smallmenu bg bg-white p-2" id="smallmenuTLHD"
                               style="display: none; position: absolute; margin-left: 180px; border-radius: 15px; top: 0px  ">
                               <a href="{{ route('TLHD_HieuNhau') }}" class="dropdown-item">Hiểu Nhau</a>
                               <a href="{{ route('TLHD_Test') }}" class="dropdown-item">Trắc nghiệm</a>
                               <a href="{{ route('TLHD_KhoaHoc') }}" class="dropdown-item">Khóa học</a>
                               <a href="{{ route('TLHD_HoTro') }}" class="dropdown-item">Hỗ trợ</a>
                           </div>
                       </div>
                       <div class="d-flex">
                           <a class="dropdown-item dropdown-toggle" onclick="toggleSmallMenu('#TLHGT')"
                               id="TLHGT">Tâm lý
                               học giới tính</a>
                           <div class="smallmenu bg bg-white p-2" id="smallmenuTLHGT"
                               style="display: none; position: absolute; margin-left: 180px; border-radius: 15px; top: 0px  ">
                               <a href="{{ route('TLHGT_HieuMinh') }}" class="dropdown-item">Hiểu Mình</a>
                               <a href="{{ route('TLHGT_Test') }}" class="dropdown-item">Trắc nghiệm</a>
                               <a href="{{ route('TLHGT_KhoaHoc') }}" class="dropdown-item">Khóa học</a>
                               <a href="{{ route('TLHGT_HoTro') }}" class="dropdown-item">Hỗ trợ</a>
                           </div>
                       </div>

                   </div>
               </div>
               <div class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kỹ năng sống</a>
                   <div class="dropdown-menu m-0">
                       <a href="{{ route('KNS_TimHieu') }}" class="dropdown-item">Tìm hiểu</a>
                       <a href="{{ route('KNS_Test') }}" class="dropdown-item">Trắc nghiệm</a>
                       <a href="{{ route('KNS_KhoaHoc') }}" class="dropdown-item">Khóa học</a>
                       <a href="{{ route('KNS_HoTro') }}" class="dropdown-item">Hỗ trợ</a>
                   </div>
               </div>
               <div class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Hướng nghiệp</a>
                   <div class="dropdown-menu m-0">
                       <a href="{{ route('HN_HieuNghe') }}" class="dropdown-item">Hiểu nghề</a>
                       <a href="{{ route('HN_Test') }}" class="dropdown-item">Trắc nghiệm</a>
                       <a href="{{ route('HN_KhoaHoc') }}" class="dropdown-item">Khóa học</a>
                       <a href="{{ route('HN_HoTro') }}" class="dropdown-item">hỗ trợ</a>
                   </div>
               </div>

               <a href="{{ route('LienHe') }}" class="nav-item nav-link">Liên hệ</a>
           </div>
           {{-- <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal"
               data-bs-target="#searchModal"><i class="fa fa-search"></i></button> --}}
           
           <div class="nav-item dropdown">
            <a class="nav-link navbar-brand ms-3" data-bs-toggle="dropdown"> 
                 <h5 class="m-0">  <i class="fa fa-circle-user fa-2x"></i></h5>
                </a>
            <div class="dropdown-menu m-0">
                <a class="dropdown-item" href="#">Đăng nhập</a>
                <a class="dropdown-item" href="#">Đăng ký</a>
            </div>
        </div>
       </div>
   </nav>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script>
       function toggleSmallMenu(selector) {
           // Ẩn tất cả các smallmenu trước khi hiển thị/cất đi smallmenu cần thiết

           var smallmenuSelector = '#smallmenu' + selector.substring(1); // Tạo selector cho smallmenu tương ứng

           if ($(smallmenuSelector).css('display') === 'none') {
               $('.smallmenu').hide();

               // Nếu smallmenu đang ẩn, hiển thị nó
               $(smallmenuSelector).show();
           } else {
               // Nếu smallmenu đang hiển thị, ẩn nó
               $('.smallmenu').hide();
           }
       }

       $('#NKTT').click(function(e) {
           if ($('#smallmenuNKTT').css('display') == 'none') {
               $('#smallmenuNKTT').show();
           } else {
               $('#smallmenuNKTT').hide();
           }

       });
   </script>
