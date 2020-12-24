@extends('admin.layout.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12 col-md-6"></div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>ID Đơn hàng</th>
                                    <th>Khách hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($orders as $key => $order)
                                        <td>{{++$key}}</td>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->customer->name}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td><a href="{{route('orders.order_detail',$order->id)}}" class="btn btn-primary">Chi tiết</a></td>
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
