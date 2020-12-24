@include('web.layout.header')


@include('web.layout.navbar')

<div class="main-top">
    <div class="container">
        <div class="main-top-grid row">
            <div class="left-nav col-lg-3">
                <div class="inner-menu">
                    <a class="show-menu" href="#">
                        <i class="icons icon-menu mr-2"></i>
                        DANH MỤC SẢN PHẨM
                    </a>
                    <div class="main-menu">
                        <ul class="menu-main">
                            <li class="menu-1 has-submenu">
                                <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="#"
                                   title="Thời trang bé gái"
                                   style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Thời
                                    trang bé gái</a>
                            </li>
                            <li class="menu-1 has-submenu">
                                <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="#"
                                   title="Thời trang bé trai"
                                   style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Thời
                                    trang bé trai</a>
                            </li>
                            <li class="menu-1 has-submenu">
                                <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="#"
                                   title="Sữa bột công thức"
                                   style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Sữa
                                    bột công thức</a>
                            </li>
                            <li class="menu-1 has-submenu">
                                <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="#" title="Bĩm tả"
                                   style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Bĩm
                                    tả</a>
                            </li>
                            <li class="menu-1 has-submenu">
                                <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="#" title="Bình sữa bé bú"
                                   style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Bình
                                    sữa bé bú</a>
                            </li>
                            <li class="menu-1 has-submenu">
                                <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="#" title="Bột, bánh ăn dặm"
                                   style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Bột,
                                    bánh ăn dặm</a>
                            </li>
                            <li class="menu-1 has-submenu">
                                <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="#"
                                   title="Bánh kẹo dinh dưỡng"
                                   style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Bánh
                                    kẹo dinh dưỡng</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content">
    <div class="container">
        <section class="section">
            <div class="product-detail">
                <div class="row">
                    <div class="col-lg-10 col-md-8 col-lg-80">
                        <div class="row">
                            <div class="col-lg-5 col-lg-50">
                                {{--IMAGE--}}
                                <div class="mySlides">
                                    <div></div>
                                    <img src="{{$product->getProductImage()}}" style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <img src="{{$product->getProductImage1()}}" style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <img src="{{$product->getProductImage2()}}" style="width:100%">
                                </div>

                                <!-- Next and previous buttons -->
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                <!-- Thumbnail images -->
                                <div class="row">
                                    <div class="column">
                                        <img class="demo cursor" src="{{$product->getProductImage()}}" style="width:100%" onclick="currentSlide(1)" >
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="{{$product->getProductImage1()}}" style="width:100%" onclick="currentSlide(2)" >
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="{{$product->getProductImage2()}}" style="width:100%" onclick="currentSlide(3)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-lg-50 px-lg-1">
                                <div>
                                    <label class="text-label bg-blue mr-1">FREE SHIP</label>
                                </div>
                                <h3 class=" product-name font-weight-normal mb-unset">{{$product->product_name}}</h3>
                                <div class="block-prices block-prices-change mb-1">
                                    <div>
                                        <strong
                                            class="product-price font-30 mr-2 order-price">{{number_format($product->priceEach)}}</strong>
                                    </div>
                                </div>
                                <div class="mb-3 text-center d-block">
                                    <a href="{{route('cart.add',$product->id)}}" class="btn text-white btn-lg btn-rounded btn bg-blue two-line mr-2 pull-left buy_cart_submit" style="width:265px;     line-height: 32px; background-color: var(--azul);">
                                        <svg style="margin-top:-11px;" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24">
                                            <g fill="#FFF" fill-rule="nonzero">
                                                <path d="M8.954 18a2.954 2.954 0 1 0 0 5.908 2.954 2.954 0 0 0 0-5.908zm0 4.822a1.868 1.868 0 1 1 0-3.736 1.868 1.868 0 0 1 0 3.736zM24.458 5.03a38.176 38.176 0 0 0-3.783 0H5.127L4.74 2.867C4.496 1.533 3.43.491 2.073.256L.643.008A.547.547 0 0 0 .01.444a.538.538 0 0 0 .443.623l1.429.247a2.17 2.17 0 0 1 1.774 1.74l1.938 10.728c.229 1.283 1.365 2.22 2.693 2.218h11.497c1.207.004 2.274-.772 2.622-1.907l2.573-8.369a.553.553 0 0 0-.082-.478c-.104-.134-.17-.201-.438-.215zm-2.9 8.802c-.213.696-.874 1.171-1.623 1.168H8.34c-.823.002-1.572-.585-1.711-1.373L5.24 6H24l-2.442 7.832zM19.356 18a2.954 2.954 0 1 0 0 5.908 2.954 2.954 0 0 0 0-5.908zm0 4.822a1.868 1.868 0 1 1 0-3.736 1.868 1.868 0 0 1 0 3.736z"></path>
                                            </g>
                                        </svg>
                                        <strong style="font-size:20px;">CHỌN MUA</strong>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>
                    <div class="col-lg-2 col-md-4 col-lg-20">
                        <div class="border-block box-shadow-none">
                            <ul class="checked-list mr-2 mb-0">
                                <li>100% chính hãng</li>
                                <li>15 ngày đổi hàng</li>
                                <li>Thanh toán khi nhận hàng (COD)</li>
                            </ul>
                        </div>
                        <div class="border-block box-shadow-none booking-product text-center">
                            <svg class="svg svg-call mr-1 flex-0" xmnls="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24">
                                <path fill="#888888" fill-rule="nonzero" d="M18.231 15.883c.953.948 1.906 1.897 2.854 2.85.794.798.789 1.776-.01 2.584-.538.544-1.112 1.063-1.621 1.632-.744.833-1.672 1.103-2.74 1.043-1.552-.085-2.979-.599-4.356-1.267-3.06-1.487-5.674-3.548-7.865-6.153-1.621-1.926-2.959-4.027-3.837-6.392C.227 9.037-.077 7.865.017 6.622c.06-.763.345-1.417.909-1.951.608-.579 1.182-1.183 1.781-1.771.778-.769 1.757-.769 2.54-.005.484.474.958.958 1.437 1.437.464.469.928.928 1.392 1.397.819.823.819 1.781.005 2.6-.584.588-1.162 1.177-1.756 1.751-.155.155-.17.28-.09.47.394.937.958 1.77 1.592 2.549 1.277 1.567 2.72 2.959 4.441 4.042.37.23.778.399 1.163.609.194.11.329.074.489-.09.584-.599 1.177-1.188 1.771-1.777.779-.773 1.757-.773 2.54 0zm-.646-4.27a6.282 6.282 0 0 0-1.707-3.371 6.056 6.056 0 0 0-3.49-1.779l.248-1.818a7.805 7.805 0 0 1 4.508 2.298 8.142 8.142 0 0 1 2.21 4.361l-1.769.309zm2.674-7.715a13.854 13.854 0 0 1 3.741 7.4l-1.802.315a11.916 11.916 0 0 0-3.228-6.388c-1.797-1.838-4.073-3.006-6.583-3.366L12.641 0c2.906.416 5.538 1.763 7.618 3.898z"></path>
                            </svg>
                            Hotline đặt hàng
                            <br>
                            <strong class="text-primary">1800 0000</strong>
                            <br>
                            <small>(Miễn phí, 8h30 – 21h cả T7, CN)</small>
                        </div>
                    </div>
                    </div>
                </div>
        </section>
    </div>
    @include('web.layout.footer')
</div>
