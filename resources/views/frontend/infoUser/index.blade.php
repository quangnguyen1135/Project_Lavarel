@extends('frontend.layout.master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thông tin cá nhân</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Họ và tên:</label>
                            <div class="col-md-6">
                                <p class="form-control-static">{{ $user->name }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                            <div class="col-md-6">
                                <p class="form-control-static">{{ $user->email }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Địa chỉ:</label>
                            <div class="col-md-6">
                                <p class="form-control-static">{{ $user->address }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Số điện thoại:</label>
                            <div class="col-md-6">
                                <p class="form-control-static">{{ $user->phone }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">Tỉnh thành:</label>
                            <div class="col-md-6">
                                <p class="form-control-static">{{ $user->province }}</p>
                            </div>
                        </div>
                        
                        <!-- Thêm các trường thông tin khác của người dùng tại đây nếu cần -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
