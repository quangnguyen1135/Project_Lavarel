@extends('backend.layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sản phẩm {{$product->code}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item active">cập nhật sản phẩm </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Cập nhật sản phẩm</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                            <form action="{{ route('admin.product.doEdit') }}" method="post">
                                    @csrf
                                <input type="hidden" name='id' value="{{$product->id}}">
                                <div class="form-group">
                                    <label for="inputName">Mã sản phẩm</label>
                                    <input type="text" id="code" name="code" class="form-control"
                                        value="{{$product->code}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Tên sản phẩm</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{$product->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Giá</label>
                                    <input type="text" id="price" name="price" class="form-control"
                                        value="{{$product->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputClientCompany">Cate</label>
                                    <input type="text" id="price" name="price" class="form-control"
                                        value="{{$product->cate_id}}">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Mô tả</label>
                                    <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="submit" value="Cập nhật" class="btn btn-success float-right">
                                    </div>
                                </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

            </div>
        </section>
    </div>
@stop
