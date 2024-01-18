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
								<div class="note form-success" id="ResetSuccess" style="display:none;">
									Chúng tôi đã gửi một email với đường dẫn để giúp bạn cập nhật mật khẩu.
								</div>
								<div id="CustomerLoginForm" class="form-vertical">
                                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

									<form accept-charset='UTF-8' action="{{ route('authenticate') }}" id='customer_login' method='post'>
                                        @csrf
										<input name='form_type' type='hidden' value='customer_login'>
										<input name='utf8' type='hidden' value='✓'>
										<h1>Đăng nhập</h1>
										<label for="CustomerEmail" name="email" class="hidden-label">Email</label>
										<input type="email" name="email" id="CustomerEmail" class="input-full"
											placeholder="Email" autocorrect="off" autocapitalize="off" autofocus>
										<label for="CustomerPassword" class="hidden-label">Mật khẩu</label>
										<input type="password" value="" name="password" id="CustomerPassword"
											class="input-full" placeholder="Mật khẩu">
										<p>
											<input type="submit" class="btn btn--full" value="Đăng nhập">
										</p>
										<p><a href="../index.html">Trở về</a></p>
										<p><a href="register.html" id="customer_register_link">Đăng kí</a></p>
										<p><a href="#recover" id="RecoverPassword">Quên mật khẩu?</a></p>
										<input id='12f4107d9d2f45e4a974d0c6267c5aeb' name='g-recaptcha-response'
											type='hidden'>
										<script
											src='../../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script>
										<script>grecaptcha.ready(function () { grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', { action: 'submit' }).then(function (token) { document.getElementById('12f4107d9d2f45e4a974d0c6267c5aeb').value = token; }); });</script>
									</form>
								</div>
								<div id="RecoverPasswordForm" style="display: none;">
									<h2>Cài đặt lại mật khẩu</h2>
									<p>Mật khẩu mới sẽ được gửi về email của bạn.</p>
									<div class="form-vertical">
										<form accept-charset='UTF-8'
											action='https://nhahangphuongnam.vn/account/recover' method='post'>
											<input name='form_type' type='hidden' value='recover_customer_password'>
											<input name='utf8' type='hidden' value='✓'>
											<label for="RecoverEmail" class="hidden-label">Email</label>
											<input type="email" value="" name="email" id="RecoverEmail"
												class="input-full" placeholder="Email" autocorrect="off"
												autocapitalize="off">
											<p>
												<input type="submit" class="btn btn--full" value="Gửi">
											</p>
<button type="button" id="HideRecoverPasswordLink" class="text-link">Bỏ
												qua</button>
											<input id='10e754eddfb54c65bf4129fb0afdb335' name='g-recaptcha-response'
												type='hidden'>
											<script
												src='../../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script>
											<script>grecaptcha.ready(function () { grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', { action: 'submit' }).then(function (token) { document.getElementById('10e754eddfb54c65bf4129fb0afdb335').value = token; }); });</script>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
@stop
