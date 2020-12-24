<!-- <NAVBAR> -->
<div class="search-bar">

    <div class="container">
        <div class="search-bar-control">
            <h1 class="logo">
                <a href="{{route('index')}}" title="Fone">
                    <img src="index_resource/images/logoFone2.png" alt="Fone" class="img-fluid" width="100%">
                    <span class="d-none">Chuỗi hệ thống siêu thị cho bé</span>
                </a>
            </h1>
            <form action="{{route('index.search')}}" class="search-box top-search" method="get">
                <input type="text" id="#" class="form-control form-control-lg text-search" placeholder="Tìm kiếm nhanh"
                       autocomplete="off" onkeyup="" name="search">
                <button class="btn" type="submit" name="submit_search" value="Tìm kiếm"></button>
            </form>
            <div class="mr-3 position-relative">
                <a class="mx-3 cart-icon" href="{{route('cart.show')}}">
                    <span class="cart-count text-center">{{session('cart') ? session('cart')->totalQty:0}}</span>
                    <img src="https://concung.com/themes/desktop4.1/image/cart.svg" alt="" width="21">
                </a>
                <div id="cart-notice" class="popover-block px-3 py-3">
                    <ul class="checked-list mb-2 ml-3">
                        <li class="pl-0">
                            <h5 class="text-blue font-14">
                                Sản phẩm đã được thêm vào
                                <br>
                                giỏ hàng thành công!
                            </h5>
                        </li>
                    </ul>
                    <p class="mb-2 ml-4 pl-3 font-12" style="color: #333">Chọn thêm sản phẩm khác hoặc</p>
                    <a class="btn btn-primary btn-block btn-rounded" href="#">
                        <strong>XEM GIỎ HÀNG VÀ HOÀN TẤT</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </NAVBAR> -->
