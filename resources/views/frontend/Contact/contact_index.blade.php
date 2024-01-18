@extends('frontend.layout.master')
@section('captcha')
{!! htmlScriptTagJsApi() !!}
@stop
@section('content')
<!-- contact section -->
<div id="PageContainer" class="">
  <main class="main-content" role="main">
    <div id="page-wrapper">
      <div class="wrapper">
        <div class="inner">
          <div class="grid">
            <div class="grid__item large--one-whole">
              <div class="page-contact-wrapper">
                <div class="page-head">
                  <h1>Liên hệ</h1>
                </div>
                <div class="page-body">
                  <div class="page-body-inner">
                    <div class="grid">
                      <div class="grid__item large--one-half medium--one-half small--one-whole">
                        <div class="home_register_left ">
                          <div class="title_btn_contact">
                            <a href="#">
                              Liên hệ
                            </a>
                          </div>
                          <div class="hotline_btn_contact">
                            <a href="tel:1800 - 2028">
                              1800 - 2028
                            </a>
                          </div>
                          <div class="open_times">
                            <span class="icon_open"><img src="../../theme.hstatic.net/1000093072/1001049829/14/open_times70ea.png?v=162" alt="open times icon"></span>
                            <span class="content_open">Trưa: 11h30 - 14h00
                              <br /><br />
                              Tối: 17h30 - 21h00</span>
                          </div>
                          <hr />
                          <div class="list_restaurant_place">
                            <span class="icon_place"><img src="../../theme.hstatic.net/1000093072/1001049829/14/place70ea.png?v=162" alt="place icon"></span>
                            <span class="content_place">CS1: Số 2, ngõ 69 Chùa Láng.
                              <br /> CS2: Số 13 Mai Hắc Đế.
                              <br />CS3: Số 35 Dịch Vọng Hậu.
                              <br />CS4: Tòa Golden Palm 21 Lê Văn Lương.
                              <br />CS5: T167 TTTM AEON MALL Hà Đông</span>
                          </div>
                          <div class="ft-social">
                            <a href="https://www.facebook.com/NhaHangPhuongNamMonNgonMienNam"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="grid__item large--one-half medium--one-half small--one-whole">
                        <div class="form-vertical clearfix">
                          <form accept-charset='UTF-8' action="{{ route('Contact.post') }}" class='contact-form' method='post'>
                          @csrf
                            <input name='form_type' type='hidden' value='contact'>
                            <input name='utf8' type='hidden' value='✓'>
                            <label for="ContactFormName" class="hidden-label">Họ tên của bạn</label>
                            <input type="text" id="ContactFormName" class="input-full" name="fullname" placeholder="Họ tên của bạn" autocapitalize="words" value="">
                            <label for="ContactFormEmail" class="hidden-label">Địa chỉ
                              email của bạn</label>
                            <input type="email" id="ContactFormEmail" class="input-full" name="email" placeholder="Địa chỉ email của bạn" autocorrect="off" autocapitalize="off" value="">
                            <label for="ContactFormPhone" class="hidden-label">Số điện
                              thoại của bạn</label>
                            <input type="tel" id="ContactFormPhone" class="input-full" name="phone" placeholder="Số điện thoại của bạn" pattern="[0-9\-]*" value="">
                            <label for="ContactFormMessage" class="hidden-label">Nội
                              dung</label>
                            <textarea rows="10" id="ContactFormMessage" class="input-full" name="message" placeholder="Nội dung"></textarea>
                            <input type="submit" class="btn right btnContactSubmit" value="Gửi">
                            <input id='b5b8e50b925a4c9682a46281bafd665f' name='g-recaptcha-response' type='hidden'>
                            <div>
                              {!! htmlFormSnippet() !!}
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="grid">
                      <div class="grid__item large--one-whole medium--one-whole small--one-whole">
                        <div class="contact-map">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5120670251613!2d105.86084421536768!3d21.01218739371877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf776b69417%3A0x10c4f7db43776bb5!2sHanoi+Creative+City!5e0!3m2!1sen!2s!4v1536115056046" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
<!-- end contact section -->
@stop
