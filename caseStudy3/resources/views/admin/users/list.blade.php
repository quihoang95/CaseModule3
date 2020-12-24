
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
                                    <a href="{{route('users.create')}}" class="btn btn-success">+Thêm mới</a>
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
                                    <th>Họ và tên</th>
                                    <th>Ảnh</th>
                                    <th>Tên tài khoản</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Vai trò</th>
                                    <th>Trạng thái</th>
                                    <th>Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    @forelse($users as $key => $user)
                                        <td>{{++$key}}</td>
                                        <td>{{$user->fullName}}</td>
                                        <td><img src="@if($user->getNameImage() =='/storage/images/')
                                                https://st.quantrimang.com/photos/image/072015/22/avatar.jpg
                                                @else
                                                {{$user->getNameImage()}}
                                                @endif"
                                                 class="img-border-radius avatar-40 img-fluid"
                                                style="width: 100px;height: 100px"></td>
                                        <td>{{$user->user_name}}</td>
                                        <td>{{$user->phoneNumber}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{$user->role->name}}</td>
                                        <td>
                                            <input class="start-user" data-id="{{$user->id}}" type="checkbox"
                                                    name="active"
                                                    {{$user->status == \App\Models\StatusConstant::ACTIVATE ? 'checked': ''}} data-bootstrap-switch
                                                    data-off-color="danger" data-on-color="success">
                                        </td>
                                        <td>
                                            <div>
{{--                                            @if(\Illuminate\Support\Facades\Auth::user()->role_id == \App\Models\RoleConstants::ROLE_ADMIN)--}}
                                                <!-- EDIT -->
                                                <a data-placement="top" href="{{route('users.edit',$user->id)}}">
                                                    <i class="nav-icon fas fa-edit"></i>Sửa</a>
                                                <!-- DELETE -->
                                                <a class="text-danger"
                                                   onclick="return confirm('Bạn chắc chắn muốn xoá lớp học này?')"
                                                   data-placement="top" href="{{route('users.destroy',$user->id)}}">
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
        <script>
            $(document).ready(function () {
                $('#table').DataTable();
            });
        </script>
@endsection
