@extends('admin.layout.master')
@section('content')
    <!-- Main content -->
    <section class="content">
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card card-primary" style="width: 100%">
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
                                <label for="inputName">Tên hàng</label>
                                <input type="text" name="product_name" id="inputName" placeholder="Nhập tên đầy đủ"
                                       class="form-control">
                                @error('product_name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Miêu tả</label>
                                <textarea type="text" name="description" id="ckeditor"
                                          class="form-control ckeditor"></textarea>
                                @error('description')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Tồn</label>
                                <input type="text" name="stock" id="inputName" placeholder="Nhập tên đầy đủ"
                                       class="form-control">
                                @error('stock')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ảnh 1</label>
                                <input type="file" accept=".png, .jpg, .jpeg" name="image" id="inputName"
                                       class="form-control">
                                @error('image')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ảnh2</label>
                                <input type="file" accept=".png, .jpg, .jpeg" name="image1" id="inputName"
                                       class="form-control">
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ảnh 3</label>
                                <input type="file" accept=".png, .jpg, .jpeg" name="image2" id="inputName"
                                       class="form-control">
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Giá</label>
                                <input type="text" name="priceEach" id="inputName" placeholder="Nhập giá"
                                       class="form-control">
                                @error('priceEach')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category_id" id="">
                                    @foreach($category as $categories)
                                        <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                    @endforeach
                                </select>
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

