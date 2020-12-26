@extends('admin.layout.master')
@section('content')
    <!-- Main content -->
    <section class="content">
        <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
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
                                <label for="inputName">Tên sản phẩm</label>
                                <input required value="{{$product->product_name}}" type="text" name="product_name" id="inputName"
                                       placeholder="Nhập tên sản phẩm" class="form-control">
                                <div style="color: red"></div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Miêu tả</label>
                                <textarea required type="text" name="description" id="ckeditor"
                                          class="form-control ckeditor" >{{$product->description}}</textarea>
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Tồn</label>
                                <input required value="{{$product->stock}}" type="text" name="stock" id="inputName"
                                       placeholder="Nhập số lượng tồn" class="form-control">
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ảnh 1</label>
                                <input type="file" accept=".png, .jpg, .jpeg" name="image" id="inputName"
                                       class="form-control" value="{{$product->image}}">
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ảnh2</label>
                                <input type="file" accept=".png, .jpg, .jpeg" name="image1" id="inputName"
                                       class="form-control" value="{{$product->image1}}">
                                @error('name')
                                <div>{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Ảnh 3</label>
                                <input type="file" accept=".png, .jpg, .jpeg" name="image2" id="inputName"
                                       class="form-control" value="{{$product->image2}}">
                                @error('name')
                                <div>{{$message}}></div>
                                @enderror
                            </div>
                            <div class="form-group" style="color:#000;">
                                <label for="inputName">Giá</label>
                                <input value="{{$product->priceEach}}" type="text" name="priceEach"
                                       id="inputName" placeholder="Nhập giá" class="form-control">
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Loại hàng</label>
                                <select name="category_id" id="">
                                    @foreach($category as $categories)
                                        <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                    @endforeach
                                </select>
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cập nhật" class="btn btn-success">
                                <a href="{{route('products.index')}}" class="btn btn-secondary">Trở về</a>
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
