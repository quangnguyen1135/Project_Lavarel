@extends('frontend.layout.master')
@section('captcha')
{!! htmlScriptTagJsApi() !!}
@stop
@section('content')
<div id="PageContainer" class="">
		<main class="main-content" role="main">
			<section id="page-wrapper">
				<div class="wrapper">
					<div class="inner">

						<div class="grid">

							<div class="grid__item large--one-third push--large--one-third text-center">

								<h1>Tạo tài khoản</h1>

								<div class="form-vertical">

                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
									<form accept-charset='UTF-8'  action="{{route('registerPost')}} " method="post"
										id='create_customer'>
                                        @csrf
										<input name='form_type' type='hidden' value='create_customer'>
										<input name='utf8' type='hidden' value='✓'>

										<label for="FirstName" class="hidden-label">Fullname</label>
										<input type="text" name="name" id="FirstName" class="input-full"
											placeholder="Họ Và Tên" autocapitalize="words" autofocus>

                                            <label for="Email" class="hidden-label">Email</label>
										<input type="email" name="email" id="Email" class="input-full"
											placeholder="Email" autocorrect="off" autocapitalize="off">


										<label for="CreatePassword" class="hidden-label">Số điện thoại</label>
										<input type="number" name="phone" id="CreatePassword"
											class="input-full" placeholder="Số điện thoại">

										<label for="LastName" class="hidden-label">Địa chỉ</label>
										<input type="text" name="address" id="diachi" class="input-full"
											placeholder="Địa chỉ" autocapitalize="words">

										<label for="LastName" class="hidden-label">Tỉnh/tp</label>
										<input type="text" name="province" id="province" class="input-full"
											placeholder="Tỉnh/Tp" autocapitalize="words">



										<label for="CreatePassword" class="hidden-label">Mật khẩu</label>
										<input type="password" name="password" id="CreatePassword"
											class="input-full" placeholder="Mật khẩu">
                                            <label for="CreatePassword" class="hidden-label">Xác thực lại Mật khẩu</label>
										<input type="password" name="password_confirmation" id="CreatePassword"
											class="input-full" placeholder="Xác thực lại Mật khẩu">

										<p>
											<input type="submit" value="Đăng ký" class="btn btn--full">
										</p>
                                        <a href="/login">Bạn đã có tài khoản</a> <br>
										<a href="/">Trở về trang chủ</a>


										<input id='0cd1b37d9d5145c6a9cd368670ad5163' name='g-recaptcha-response'
											type='hidden'>
										<script
											src='../../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script>
										<script>grecaptcha.ready(function () { grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', { action: 'submit' }).then(function (token) { document.getElementById('0cd1b37d9d5145c6a9cd368670ad5163').value = token; }); });</script>
									</form>
								</div>

							</div>

						</div>

					</div>
				</div>
			</section>

		</main>
	</div>
    @stop
