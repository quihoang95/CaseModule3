
@extends('admin.layout.master')
@section('content')
    <!-- Main content -->
    <section class="content">
        <form action="{{route('users.edit',$user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card card-primary" style="width: 100%;">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Họ tên</label>
                                <input required value="{{$user->fullName}}" type="text" name="fullName" id="inputName" placeholder="Nhập tên lớp" class="form-control">
                                <div style="color: red"></div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ảnh</label>
                                <input type="file" accept=".png, .jpg, .jpeg" name="image" id="inputName"
                                       class="form-control">
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Tên tài khoản</label>
                                <input required value="{{$user->user_name}}" type="text" name="user_name" id="inputName" placeholder="Nhập tên tài khoản" class="form-control">
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Password</label>
                                <input required value="{{$user->password}}" type="password" name="password" id="inputName" placeholder="Nhập email" class="form-control">
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Số điện thoại</label>
                                <input required value="{{$user->phoneNumber}}" type="number" name="phoneNumber" id="inputName" placeholder="Nhập số điện thoại" class="form-control">
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Địa chỉ</label>
                                <input required value="{{$user->address}}" type="text" name="address" id="inputName" placeholder="Nhập số điện thoại" class="form-control">
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Vai trò</label>
                                <select name="role_id" class="form-control custom-select">
                                        @foreach($roles as $key => $role)
                                        <option
                                                @if($role->id == $user -> role_id)
                                                selected
                                                @endif
                                                value="{{$role->id}}">{{$role->name}}
                                            </option>
                                    @endforeach
                                </select>
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cập nhật" class="btn btn-success">
                                <a href="{{route('users.index')}}" class="btn btn-secondary">Trở về</a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </form>
    </section>

@endsection
