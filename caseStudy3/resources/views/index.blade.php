<!doctype html>
<html lang="en">
<head>
    <title>Fone's kid shop</title>
    <base href="{{asset('/')}}">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Shortcut icon -->
    <link rel="shortcut icon" type="image/x-icon"
          href="index_resource/images/39ad568e-b446-4e30-8a91-a295f13a6dd3_200x200.png"/>
    <!-- GG Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/6d402694d7.js" crossorigin="anonymous"></script>
    <!-- Toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
          integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />


    <!-- CSS -->
    <link rel="stylesheet" href="index.css">
</head>
<body id="index" class="blue-skin pr-0">
@include('web.layout.header')


@include('web.layout.navbar')

<div class="main-top mb-2">
    <div class="container">
        <div class="main-top-grid row">
            <div class="left-nav col-lg-3">
                <div class="main-menu">
                    <ul class="menu-main">
                        <li class="menu-1 has-submenu">
                            <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="{{route('index.home')}}" title="Thời trang bé gái"
                               style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Tất cả sản phẩm</a>
                        </li>
                        <li class="menu-1 has-submenu">
                            <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="{{route('index.category',1)}}" title="Thời trang bé gái"
                               style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Thời
                                trang bé gái</a>
                        </li>
                        <li class="menu-1 has-submenu">
                            <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="{{route('index.category',2)}}" title="Thời trang bé trai"
                               style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Thời
                                trang bé trai</a>
                        </li>
                        <li class="menu-1 has-submenu">
                            <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="{{route('index.category',3)}}" title="Sữa bột công thức"
                               style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Sữa
                                bột công thức</a>
                        </li>
                        <li class="menu-1 has-submenu">
                            <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="{{route('index.category',4)}}" title="Bĩm tả"
                               style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Bĩm
                                tả</a>
                        </li>
                        <li class="menu-1 has-submenu">
                            <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="{{route('index.category',5)}}" title="Bình sữa bé bú"
                               style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Bình
                                sữa bé bú</a>
                        </li>
                        <li class="menu-1 has-submenu">
                            <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="{{route('index.category',6)}}" title="Bột, bánh ăn dặm"
                               style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Bột,
                                bánh ăn dặm</a>
                        </li>
                        <li class="menu-1 has-submenu">
                            <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="{{route('index.category',7)}}" title="Bánh kẹo dinh dưỡng"
                               style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Bánh
                                kẹo dinh dưỡng</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-banner col-lg-6">
                <div class="main-carousel slider-indexhome slick-initialized slick-slider slick-dotted">
                    {{--                    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block"></button>--}}
                    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slides" data-slide-to="0" class="active"></li>
                            <li data-target="#slides" data-slide-to="1"></li>
                            <li data-target="#slides" data-slide-to="2"></li>
                            <li data-target="#slides" data-slide-to="3"></li>
                            <li data-target="#slides" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img src="index_resource/images/slider1.png" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="index_resource/images/slider2.png" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="index_resource/images/slider3.png" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="index_resource/images/slider4.jpeg" style="width: 100%">
                            </div>
                            <div class="carousel-item">
                                <img src="index_resource/images/slider5.jpeg" style="width: 100%">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right-news col-lg-3">
                <ul class="news-list list-unstyled p-3">
                    <li>
                        <div class="car">
                            <div class="card-image mb-2">
                                <a href="#" title="TÃ SỮA - ĐUA TOP RINH QUÀ ĐỈNH">
                                    <img class="border-img img-full" src="index_resource/images/474_cover.png"
                                         alt="TÃ SỮA - ĐUA TOP RINH QUÀ ĐỈNH">
                                </a>
                            </div>
                            <div class="card-summary">
                                <h5 class="item-title">
                                    <a href="#" title="TÃ SỮA – ĐUA TOP RINH QUÀ ĐỈNH">TÃ SỮA – ĐUA TOP RINH QUÀ
                                        ĐỈNH</a>
                                </h5>
                                <div class="news-text text-home-new">
                                    Quà tặng cực đỉnh, tổng trị giá hơn 1,3 tỷ đồng khi mua tã sữa từ 4-25/12/2010.
                                    Nhanh tay mua ngay ba mẹ ơi! Click xem ngay!
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h5 class="item-title mb-0">
                            <a href="#" title="NHẬN NGÀN QUÀ HOT TỪ FRISO">NHẬN NGÀN QUÀ HOT TỪ FRISO</a>
                        </h5>
                    </li>
                    <li>
                        <h5 class="item-title mb-0">
                            <a href="#" title="MUA SIMILAC MOM- TRÚNG QUÀ CỰC ĐỈNH ">MUA SIMILAC MOM-...</a>
                        </h5>
                    </li>
                    <li>
                        <h5 class="item-title mb-0">
                            <a href="#" title="MIỄN DỊCH KHOẺ - BÉ NHẬN QUÀ SANG">MIỄN DỊCH KHOẺ - BÉ...</a>
                        </h5>
                    </li>
                    <li><a class="float-right text-primary pt-2" href="#" title="Tin khuyến mãi">
                            <small>Xem thêm</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="main-content">
    <div class="container"></div>
    @include('web.layout.footer')
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Toastr -->
<link rel="stylesheet" href="plugins/toastr/toastr.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "500",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
@if(\Illuminate\Support\Facades\Session::has('error'))
    <script>
        toastr["error"]("{!! Session::get('error') !!}", "Error")
    </script>
@endif
@if(\Illuminate\Support\Facades\Session::has('success'))
    <script>
        toastr["success"]("{!! Session::get('success') !!}", "Success")
    </script>
@endif
@if(\Illuminate\Support\Facades\Session::has('info'))
    <script>
        toastr["info"]("{!! Session::get('info') !!}", "Info")
    </script>
@endif
</body>
</html>
