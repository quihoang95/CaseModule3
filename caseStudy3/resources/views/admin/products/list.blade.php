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
                                <div class="col-12 col-md-6" style="text-align: right">
{{--                                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)--}}
                                        <a href="{{route('products.create')}}" class="btn btn-success">+Thêm mới</a>
{{--                                    @endif--}}
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên hàng</th>
                                    <th>Miêu tả</th>
                                    <th>Tồn</th>
                                    <th>Ảnh 1</th>
                                    <th>Giá</th>
                                    <th>Thể loại</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($products as $key => $product)
                                        <td>{{++$key}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{!!$product->description!!}</td>
                                        <td>{{$product->stock}}</td>
                                        <td><img src="@if($product->getProductImage() =='/storage/products/')
                                                https://st.quantrimang.com/photos/image/072015/22/avatar.jpg
                                                @else
                                            {{$product->getProductImage()}}
                                            @endif"
                                                 class="img-border-radius avatar-40 img-fluid"
                                                 style="width: 300px;height: 110px"></td>
                                        <td>{{number_format($product->priceEach)}}</td>
                                        <td>{{$product->category->name}}</td>

                                        <td>
                                            <div>
                                                <!-- EDIT -->
                                                <a data-placement="top" href="{{route('products.edit',$product->id)}}">
                                                    <i class="nav-icon fas fa-edit"></i>Sửa</a>
                                                <!-- DELETE -->
                                                <a class="text-danger"
                                                   onclick="return confirm('Bạn chắc chắn muốn xoá lớp học này?')"
                                                   data-placement="top"
                                                   href="{{route('products.destroy', $product->id)}}">
                                                    <i class="nav-icon far fa-trash-alt"></i>Xóa</a>
                                            </div>
                                        </td>
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
