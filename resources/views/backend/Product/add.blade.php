@extends('backend.layout.master')

@section('content')
<div class="content-wrapper w-100">
    <section class="content-header">
        <!-- Your content header code goes here -->
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm sản phẩm mới</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.product.doAddProduct') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="code">Code</label>
                                <input type="number" name="code" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Giá</label>
                                <input type="number" name="price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="cate_id">cate_id</label>
                                <input type="number" name="cate_id" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả</label>
                                <textarea name="description" class="form-control" rows="4" required></textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
                                <a href="" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
