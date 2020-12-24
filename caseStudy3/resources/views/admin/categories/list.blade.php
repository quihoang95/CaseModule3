
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
                                    <a href="{{route('categories.create')}}" class="btn btn-success">+Thêm mới</a>
{{--                                    @endif--}}
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-group-list" class="table table-bordered table-striped data-table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Miêu tả</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($categories as $key => $category)
                                        <td>{{++$key}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <td>
                                            <div>
{{--                                            @if(\Illuminate\Support\Facades\Auth::user()->role_id == \App\Models\RoleConstants::ROLE_ADMIN)--}}
                                                <!-- EDIT -->
                                                <a data-placement="top" href="{{route('categories.edit',$category->id)}}">
                                                    <i class="nav-icon fas fa-edit"></i>Sửa</a>
                                                <!-- DELETE -->
                                                <a class="text-danger"
                                                   onclick="return confirm('Bạn chắc chắn muốn xoá lớp học này?')"
                                                   data-placement="top" href="{{route('categories.destroy', $category->id)}}">
                                                    <i class="nav-icon far fa-trash-alt"></i>Xóa</a>
{{--                                                @else--}}
{{--                                                    Chỉ Quản lí có quyền--}}
{{--                                                @endif--}}
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
