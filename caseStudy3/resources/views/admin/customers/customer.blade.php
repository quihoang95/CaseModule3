@extends('admin.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header" style="width: 100%;">
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
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Email</th>
                                <th>Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @forelse($customers as $key => $customer)
                                <td>{{++$key}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->phoneNumber}}</td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->email}}</td>
                                <td></td>
{{--                                <td>--}}
{{--                                    <div>--}}
{{--                                        <!-- EDIT -->--}}
{{--                                        <a data-placement="top" href="{{route('products.edit',$product->id)}}">--}}
{{--                                            <i class="nav-icon fas fa-edit"></i>Sửa</a>--}}
{{--                                        <!-- DELETE -->--}}
{{--                                        <a class="text-danger"--}}
{{--                                           onclick="return confirm('Bạn chắc chắn muốn xoá lớp học này?')"--}}
{{--                                           data-placement="top"--}}
{{--                                           href="{{route('products.destroy', $product->id)}}">--}}
{{--                                            <i class="nav-icon far fa-trash-alt"></i>Xóa</a>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
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
