
@include('web.layout.header')


@include('web.layout.navbar')

<div class="main-top mb-2">
    <div class="container">
        <div class="main-top-grid row">
            <div class="left-nav col-3">
                <div class="main-menu">
                    <ul class="menu-main">
                        <li class="menu-1 has-submenu">
                            <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="{{route('index.home')}}" title="Tất cả sản phẩm"
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
            <div class="main-banner col-9 ">
               <section class="section product-main">
                    <div class="hot-deal row product-list-cat">
                        <script>var lazyload=1</script>
                        @foreach($products as $key =>$product)
                        <div class="col-sm-4 col-lg-4">
                            <div class="product-item">
                                <div class="product-img product-brand">
                                    <a class="thumb-img box-shadow-none" href="{{route('index.detail',$product->id)}}">
                                        <img class="img-fluid lazyloaded" src="{{$product->getProductImage()}}" alt="">
                                    </a>
                                </div>
                                <h4 class="item-title font-weight-normal" style="margin-bottom: 2px">
                                    <a href="#">{{$product->product_name}}</a>
                                </h4>
                                <div class="block-prices d-block">
                                    <strong class="product-price">{{number_format($product->priceEach)}}đ</strong>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
               </section>
            </div>
        </div>
    </div>

</div>
<div class="main-content">
    <div class="container"></div>
    @include('web.layout.footer')
</div>



