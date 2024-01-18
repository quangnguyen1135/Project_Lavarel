@extends('backend.layout.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">KHO SẢN PHẨM</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          id
                      </th>
                      <th style="width: 10%">
                          code
                      </th>
                      <th style="width: 30%">
                          Tên sản phẩm
                      </th>
                      <th style="width: 10%">
                            Gía
                      </th>
                      <th>
                        Mô tả
                      </th>
                  </tr>
              </thead>
              <tbody>
                @php($i=1)
                @foreach ($products as $product)
                <tr>
                      <td>{{$i}}</td>
                      <td>{{$product->code}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->price}}</td>
                      <td>{{$product->description}}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{route('admin.product.edit')}}/{{$product->id}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('admin.product.delete', ['id' => $product->id]) }}" onclick="return confirm('Are you sure you want to delete this product?')">
    <i class="fas fa-trash"></i> Delete
</a>

                      </td>
                  </tr>
                  @php($i++)
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <div class="d-flex">
                {!! $products->links() !!}
            </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @stop
