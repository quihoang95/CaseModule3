@extends('admin.layout.master')
@section('content')
    <!-- Main content -->
    <section class="content">
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card card-primary" style="width: 100%;">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Họ tên</label>
                                <input type="text" name="fullName" id="inputName" placeholder="Nhập tên đầy đủ"
                                       class="form-control">
                                @error('fullName')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ảnh</label>
                                <input type="file" accept=".png, .jpg, .jpeg" name="image" id="inputName"
                                       class="form-control">
                                @error('image')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Tên tài khoản</label>
                                <input type="text" name="user_name" id="inputName" placeholder="Nhập tên tài khoản"
                                       class="form-control">
                                @error('user_name')
                                <div style="color: #ff0000">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Điện thoại</label>
                                <input type="text" name="phoneNumber" id="inputName" placeholder="Nhập số điện thoại"
                                       class="form-control">
                                @error('phoneNumber')
                                <div style="color: #ff0000">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Địa chỉ</label>
                                <input type="text" name="address" id="inputName" placeholder="Nhập địa chỉ"
                                       class="form-control">
                                @error('address')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Nhập mật khẩu</label>
                                <input type="password" name="password" id="inputName" placeholder="Nhập mật khẩu"
                                       class="form-control">
                                @error('password')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Vai trò</label>
                                <select name="role_id" class="form-control custom-select">
                                    @foreach($roles as $key => $role)
                                        <option
                                            value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Thêm" class="btn btn-success">
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
