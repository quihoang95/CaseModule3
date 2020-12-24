
@extends('admin.layout.master')
@section('content')
    <!-- Main content -->
    <section class="content">
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
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
                                <input type="submit" value="Sửa" class="btn btn-success">
                                <a href="{{route('slides.index')}}" class="btn btn-secondary">Trở về</a>
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
