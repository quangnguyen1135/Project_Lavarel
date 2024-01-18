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
									<form accept-charset='UTF-8' action='https://nhahangphuongnam.vn/account'
										id='create_customer' method='post'>
										<input name='form_type' type='hidden' value='create_customer'>
										<input name='utf8' type='hidden' value='✓'>




										<label for="FirstName" class="hidden-label">Tên</label>
										<input type="text" name="customer[first_name]" id="FirstName" class="input-full"
											placeholder="Tên" autocapitalize="words" autofocus>

										<label for="LastName" class="hidden-label">Họ</label>
										<input type="text" name="customer[last_name]" id="LastName" class="input-full"
											placeholder="Họ" autocapitalize="words">

										<label for="Email" class="hidden-label">Email</label>
										<input type="email" name="customer[email]" id="Email" class="input-full"
											placeholder="Email" autocorrect="off" autocapitalize="off">

										<label for="CreatePassword" class="hidden-label">Mật khẩu</label>
										<input type="password" name="customer[password]" id="CreatePassword"
											class="input-full" placeholder="Mật khẩu">

										<p>
											<input type="submit" value="Đăng ký" class="btn btn--full">
										</p>
										<a href="../index.html">Trở về</a>


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
