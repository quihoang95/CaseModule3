@include('web.layout.header')


@include('web.layout.navbar')
<div class="cart_order_step" id="main-content">
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
                                    <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="#"
                                       title="Bình sữa bé bú"
                                       style="margin-left: 12px;margin-right: 10px;border-bottom: 1px solid #fff;height: 29px">Bình
                                        sữa bé bú</a>
                                </li>
                                <li class="menu-1 has-submenu">
                                    <a class="pl-0 pr-3 font-medium font-14 border-bottom" href="#"
                                       title="Bột, bánh ăn dặm"
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
    <div class="container">
        <div class="row">
            @if(isset($cart))
                @if($cart->totalQty != 0)
                <div class="col-lg-8 col-md-7 col-sm-6 d-block">
                    <div class="order-product-list">
                        <span class="the-title width-full  float-left d-block mb-2 font-bold">Sản phẩm</span>
                        <div class="table-responsive">
                            <table class="table table-order">
                                <tbody>
                                @foreach($cart->items as $item)
                                    <tr id="cart_product_50016" class="border-top line_product line_product_cart">
                                        <td>
                                            <div class="news-item">
                                                <div class="news-image">
                                                    <a href="#">
                                                        <img class="border img-fluid"
                                                             src="{{$item['product']->getProductImage()}}">
                                                    </a>
                                                </div>
                                                <div class="news-summary">
                                                    <h4 class="item-title">
                                                        <a class="p-name font-weight-normal" href="#">
                                                            {{$item['product']->product_name}}
                                                        </a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="block-prices float-right clear text-right text-flex-end"
                                                 style="justify-content: flex-end; height: 55px; min-width:125px;">
                                                <div>
                                                    <strong class="product-price price-order padding-right-10">
                                                        {{number_format($item['product']->priceEach)}}</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-buttons clear text-center"
                                                 style=" min-width:125px; display: flex">
                                        <span>
                                            <a href="{{route('cart.minus',$item['product']->id)}}"
                                               class="btn btn-down-quantity btn-secondary" onclick="" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="4"
                                                     viewBox="0 0 16 4">
                                                    <path fill="#EE3E80" fill-rule="nonzero"
                                                          d="M14.571.571H1.43a1.429 1.429 0 0 0 0 2.858H14.57a1.429 1.429 0 0 0 0-2.858z"></path>
                                                </svg>
                                            </a>
                                        </span>
                                                <input
                                                    class="cart_quantity text-center no-radius cart_quantity btn btn-down btn-outline btn-quantity"
                                                    type="text" size="2" value="{{number_format($item['totalQty'])}}">
                                                <a class="option-quantity up "
                                                   href="{{route('cart.add',$item['product']->id)}}">
                                                    <button class="btn btn-up-quantity btn-secondary" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             viewBox="0 0 24 24">
                                                            <path fill="#EE3E80" fill-rule="nonzero"
                                                                  d="M21.857 9.857h-7.286a.429.429 0 0 1-.428-.428V2.143a2.143 2.143 0 0 0-4.286 0v7.286a.429.429 0 0 1-.428.428H2.143a2.143 2.143 0 0 0 0 4.286h7.286c.236 0 .428.192.428.428v7.286a2.143 2.143 0 0 0 4.286 0v-7.286c0-.236.192-.428.428-.428h7.286a2.143 2.143 0 0 0 0-4.286z"></path>
                                                        </svg>
                                                    </button>
                                                </a>
                                            </div>
                                            <a class="cart_quantity_delete padding-left-10 d-block pt-1 font-11 line-height-14 text-center line-height-16"
                                               href="{{route('cart.deleteProduct', $item['product']->id)}}"
                                               style="color: #4e4c4c"
                                               onclick="return confirm('Bạn chắc chắn muốn xóa không?')">
                                                <img style="margin-right:2px; font-size:12px;"
                                                     src="https://concung.com/themes/images/icon/delete.svg" width="12">
                                                Xóa
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <span class="line-4 d-block mt-2"></span>
                    <form class="padding-12-8 address_shipping_buy" action="{{route('cart.checkout')}}" method="post">
                        @csrf
                        <span class="the-title width-full  float-left d-block mb-2 font-bold">
                        Thông tin giao hàng
                    </span>
                        <div class="col-lg-9 col-md-8 col-sm-6 d-block" style="margin: 0 auto">
                            <div class="container clear">
                                <div class="form-group name-quick">
                                    <input class="form-control border-radius" type="text" name="name"
                                           placeholder="Tên người nhận">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group phone-quick">
                                    <input class="form-control border-radius" type="text" maxlength="10"
                                           name="phoneNumber" placeholder="Điện thoại">
                                    @error('phoneNumber')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group address">
                                    <input class="form-control border-radius" type="text" name="address"
                                           placeholder="Địa chỉ">
                                    @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group email">
                                    <input class="form-control border-radius" type="email" name="email"
                                           placeholder="Email">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group comment">
                                    <input class="form-control border-radius" type="text" name="comment"
                                           placeholder="Ghi chú">
                                </div>
                                <button type="submit" class="payment_sub text-white text-center mt-1 d-block mb-3"
                                        style="width: 100%;  border-radius:26px;height: 45px; font-size: 20px">
                                    ĐẶT HÀNG
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="fixed-cart">
                        <div class="border-block mb-5">
                            <div class="order-prices mb-0">
                                <div class="order-prices__item font-weight-normal text-dark">
                                    <span>Tiền hàng</span>
                                    <span class="order-prices__item--number text-dark">{{number_format($cart->totalPrice)}}đ</span>
                                </div>
                                <div class="order-prices__item font-weight-normal price_ship_add text-dark">
                                    <span>Phí vận chuyển</span>
                                    <span class="order-prices__item--number text-dark">Miễn Phí</span>
                                </div>
                                <span class="line-1 d-block pb-1 mt-2 row"></span>
                                <div class="order-prices__item my-0">
                                    <span>Thành tiền</span>
                                    <span class="order-prices__item--number last_price_all" style="font-size:26px;">{{number_format($cart->totalPrice)}}đ</span>
                                </div>
                                <small class="d-block text-body text-right">(đã bao gồm VAT)</small>

                            </div>
                        </div>
                    </div>
                </div>
                @else()
                    <img style="width: 50%;margin: auto" src="https://www.mkdiamondsnyc.com/assets/images/empty-cart.png">
                    <a href="{{route('index.home')}}" style="width: 100%; color:#fff; margin-bottom: 20px"
                       class="btn btn-primary">
                        Tiếp tục mua sắm
                    </a>
                @endif
                @else()
                <img style="width: 50%;margin: auto" src="https://www.mkdiamondsnyc.com/assets/images/empty-cart.png">
                <a href="{{route('index.home')}}" style="width: 100%; color:#fff; margin-bottom: 20px"
                   class="btn btn-primary">
                    Tiếp tục mua sắm
                </a>
            @endif

        </div>
    </div>
</div>


@include('web.layout.footer')


