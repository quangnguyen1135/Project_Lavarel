<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <title>NHÀ HÀNG PHƯƠNG NAM</title>
  @yield('captcha')
  <link href="{{asset('/')}}frontend/1001049829/14/timber.scss70ea.css" rel='stylesheet' type='text/css' media='all' />
  <link href="{{asset('/')}}frontend/1001049829/14/suplo-style.scss70ea.css?v=162" rel='stylesheet' type='text/css' media='all' />
  <link href="{{asset('/')}}frontend/1001049829/14/owl.carousel70ea.css?v=162" rel='stylesheet' type='text/css' media='all' />
  <link href="{{asset('/')}}frontend/1001049829/14/owl.theme70ea.css?v=162" rel='stylesheet' type='text/css' media='all' />
  <link href="{{asset('/')}}frontend/1001049829/14/owl.transitions70ea.css?v=162" rel='stylesheet' type='text/css' media='all' />
  <link href="{{asset('/')}}frontend/1001049829/14/animate70ea.css?v=162" rel='stylesheet' type='text/css' media='all' />
  <link href="{{asset('/')}}frontend/1001049829/14/slick70ea.css?v=162" rel='stylesheet' type='text/css' media='all' />
  <link href="{{asset('/')}}frontend/1001049829/14/slick-theme70ea.css?v=162" rel='stylesheet' type='text/css' media='all' />
  <link href="{{asset('/')}}frontend/1001049829/14/cusnew.scss70ea.css?v=162" rel='stylesheet' type='text/css' media='all' />
  <link rel="stylesheet" href="{{asset('/')}}frontend/cdn.jsdelivr.net/gh/fancyapps/fancybox%403.5.7/dist/jquery.fancybox.min.css" />
</head>
<div id="NavDrawer" class="drawer drawer--right">
  <div class="drawer__header">
    <div class="drawer__close js-drawer-close">
      <button type="button" class="icon-fallback-text">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <!-- begin mobile-nav -->
  <ul class="mobile-nav">
    <li class="mobile-nav__item mobile-nav__search">
      <form action="https://nhahangphuongnam.vn/search" method="get" class="input-group search-bar" role="search">
        <input type="hidden" name="type" value="article">
        <input type="search" id="main-search-form-input" name="q" value="" placeholder="Tìm sản phẩm..." class="input-group-field" aria-label="Tìm sản phẩm...">
        <span class="input-group-btn">
          <button type="submit" class="btn icon-fallback-text">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </span>
      </form>
    </li>
    <li class="mobile-nav__item mobile-nav__item--active">
      <a href="/" class="mobile-nav__link">Trang chủ</a>
    </li>
    <li class="mobile-nav__item">
      <a href="collections/all.html" class="mobile-nav__link">Menu</a>
    </li>
    <li class="mobile-nav__item">
      <a href="pages/gioi-thieu.html" class="mobile-nav__link">Thông tin nhà hàng</a>
    </li>
    <li class="mobile-nav__item">
      <a href="pages/uu-dai-vip.html" class="mobile-nav__link">Chính sách hội viên</a>
    </li>
    <li class="mobile-nav__item">
      <a href="blogs/uu-dai08c3.html?view=khuyenmai" class="mobile-nav__link">Khuyến mại</a>
    </li>
    <li class="mobile-nav__item">
      <a href="blogs/am-thuc-phuong-nam.html" class="mobile-nav__link">Tư vấn</a>
    </li>
    <li class="mobile-nav__item">
      <a href="/Contact" class="mobile-nav__link">Liên hệ</a>
    </li>
    <li class="mobile-nav__item">
      <a href="pages/tuyen-dung.html" class="mobile-nav__link">Tuyển dụng</a>
    </li>
    <li class="mobile-nav__item">
      <a href="cart.html">Giỏ hàng</a>
    </li>
  </ul>
  <!-- //mobile-nav -->
</div>
<div class="cart-overlay"></div>
<div id="CartDrawer" class="drawer drawer--left">
  <div class="drawer__header">
    <div class="drawer__title h3">Giỏ hàng</div>
    <div class="drawer__close js-drawer-close">
      <button type="button" class="icon-fallback-text">
        <span class="icon icon-x" aria-hidden="true"></span>
        <span class="fallback-text">"Đóng"</span>
      </button>
    </div>
  </div>
  <div id="CartContainer"></div>
</div>
<header id="header">
  <div class="desktop-header medium--hide small--hide">
    <div class="desktop-header-center">
      <div class="">
        <div class="inner">
          <div class="grid">
            <div class="grid__item large--two-twelfths">
              <div class="hd-logo wow fadeInUp">
                <h1>
                  <a href="/">
                    Nhà hàng Phương Nam - Nhà hàng miền tây Hà Nội, lẩu mắm ngon Hà Nội<img src="{{asset('/')}}frontend/1001049829/14/logo70ea.png?v=162" alt="Nhà hàng Phương Nam - Nhà hàng miền tây Hà Nội, lẩu mắm ngon Hà Nội" />
                  </a>
                </h1>
              </div>
            </div>
            <div class="grid__item large--ten-twelfths">
              <div class="desktop-header-navbar">
                <div class="">
                  <div class="inner">
                    <ul class="no-bullets">
                      <li class="active ">
                        <a href="/">Trang chủ </a>
                      </li>
                      <li class=" ">
                        <a href="collections/all.html">Menu </a>
                      </li>
                      <li class=" ">
                        <a href="pages/gioi-thieu.html">Thông tin nhà hàng </a>
                      </li>
                      <li class=" ">
                        <a href="pages/uu-dai-vip.html">Chính sách hội viên </a>
                      </li>
                      <li class=" ">
                        <a href="blogs/uu-dai08c3.html?view=khuyenmai">Khuyến mại </a>
                      </li>
                      <li class=" ">
                        <a href="blogs/am-thuc-phuong-nam.html">Tư vấn </a>
                      </li>
                      <li class=" ">
                        <a href="/Contact">Liên hệ </a>
                      </li>
                      <li class=" ">
                        <a href="pages/tuyen-dung.html">Tuyển dụng </a>
                      </li>
                      <li class="dropdown dropdown-icon dropdown-icon-search" data-wow-duration="0.75s" data-wow-delay="1.8s">
                        <a href="javascript:void(0)"><img class="icon_menu" src="{{asset('/')}}frontend/1001049829/14/search70ea.png?v=162" alt="Search icon"></a>
                        <ul class="no-bullets">
                          <li>
                            <form action="https://nhahangphuongnam.vn/search" method="get" class="search-bar" role="search">
                              <input type="hidden" name="type" value="article">
                              <input type="search" name="q" value="" placeholder="Tìm kiếm..." class="input-group-field" aria-label="Tìm kiếm...">
                              <button type="submit" class="btn icon-fallback-text">
                                <i class="fas fa-search"></i>
                              </button>
                            </form>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-icon" data-wow-duration="0.75s" data-wow-delay="1.4s">
                        <a href="javascript:void(0)"><img class="icon_menu" src="{{asset('/')}}frontend/1001049829/14/user70ea.png?v=162" alt="User icon"></a>
                        <ul class="no-bullets">
                          <li>
                            <a href="account/login.html">Đăng nhập</a>
                          </li>
                          <li>
                            <a href="account/register.html">Đăng ký</a>
                          </li>
                        </ul>
                      </li>
                      <li class="desktop-cart-wrapper dropdown dropdown-icon" data-wow-duration="0.75s" data-wow-delay="1.6s">
                        <a href="cart.html">
                          <img class="icon_menu" src="{{asset('/')}}frontend/1001049829/14/shopping-bag70ea.png?v=162" alt="shopping bag">
                          <span class="cart-count hd-cart-count">0</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mobile-header large--hide">
    <div class="wrapper">
      <div class="inner">
        <div class="grid">
          <div class="grid__item medium--one-third small--one-half">
            <div class="hd-logo text-left">
              <a href="index.html">
                <img src="{{asset('/')}}frontend/1001049829/14/logo70ea.png?v=162" alt="Nhà hàng Phương Nam - Nhà hàng miền tây Hà Nội, lẩu mắm ngon Hà Nội" />
              </a>
            </div>
          </div>
          <div class="grid__item large--two-twelfths push--large--eight-twelfths medium--two-thirds small--one-half clearfix text-right">
            <div class="hd-btnMenu">
              <a href="javascript:void(0)" class="icon-fallback-text site-nav__link js-drawer-open-right" aria-controls="NavDrawer" aria-expanded="false">
                <span>Menu</span>
                <i class="fas fa-bars"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
@yield('banner')
<div id="PageContainer" class="">
  <main class="main-content" role="main">
    <section id="home-services" class="">
      <div class="wrapper">
        <div class="inner">
          <div class="grid-uniform md-mg-left-10">
            <div class="grid__item wow fadeInUp md-pd-left10 large--one-third medium--one-half small--one-whole" data-wow-delay="0.2s" data-wow-duration="0.75s">
              <div class="hservice-item text-center">
                <div class="hservice-img">
                  <a href="pages/dat-ban-1.html" target="">
                    <img src="{{asset('/')}}frontend/1001049829/14/hservice_icon170ea.png?v=162" alt="Đặt bàn" />
                  </a>
                </div>
                <div class="hservice-title">
                  <a href="pages/dat-ban-1.html">Đặt bàn</a>
                </div>
              </div>
            </div>
            <div class="grid__item wow fadeInUp md-pd-left10 large--one-third medium--one-half small--one-whole" data-wow-delay="0.4s" data-wow-duration="0.75s">
              <div class="hservice-item text-center">
                <div class="hservice-img">
                  <a href="pages/dat-mon.html" target="">
                    <img src="{{asset('/')}}frontend/1001049829/14/hservice_icon270ea.png?v=162" alt="Đặt ship" />
                  </a>
                </div>
                <div class="hservice-title">
                  <a href="pages/dat-mon.html">Đặt ship</a>
                </div>
              </div>
            </div>
            <div class="grid__item wow fadeInUp md-pd-left10 large--one-third medium--one-half small--one-whole" data-wow-delay="0.6s" data-wow-duration="0.75s">
              <div class="hservice-item text-center">
                <div class="hservice-img">
                  <a href="pages/dat-mon.html" target="">
                    <img src="{{asset('/')}}frontend/1001049829/14/hservice_icon370ea.png?v=162" alt="Đặt tiệc tại gia " />
                  </a>
                </div>
                <div class="hservice-title">
                  <a href="pages/dat-mon.html">Đặt tiệc tại gia </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
