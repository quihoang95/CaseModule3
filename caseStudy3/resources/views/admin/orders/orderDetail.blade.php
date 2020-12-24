@extends('admin.layout.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card card-primary" style="width: 50%">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin khách hàng</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    @foreach($orders as $order)
                                        <p>Tên: {{$order->customer->name}}</p>
                                        <p>Số điện thoại: {{$order->customer->phoneNumber}}</p>
                                        <p>Địa chỉ: {{$order->customer->address}}</p>
                                        <p>Email: {{$order->customer->email}}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>ID Đơn hàng</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Số lượng sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($order->products  as $product)
                                            <td>{{$product->pivot->orders_id}}</td>
                                            <td>{{$product->product_name}}</td>
                                            <td> <img style="width: 100px; height: 100px" src="{{$product->getProductImage()}}" alt=""></td>
                                            <td>{{$product->pivot->quantity}}</td>
                                            <td>{{number_format($product->pivot->priceEach)}}</td>
                                            <td></td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">Không có dữ liệu</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        <!-- /.container-fluid -->

@endsection
