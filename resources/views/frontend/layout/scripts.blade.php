
<script src="{{asset('/')}}frontend/js/custom.js"></script>
<script src='../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type=' text='javascript'></script>
<script src="{{asset('/')}}frontend/1001049829/14/modernizr.min70ea.js?v=162'
" type='text/javascript'></script>
<script src="{{asset('/')}}frontend/1001049829/14/owl.carousel.min70ea.js?v=162'
" type='text/javascript'></script>
<script src="{{asset('/')}}frontend/1001049829/14/slick.min70ea.js?v=162" type='text/javascript'></script>
<script defer src="{{asset('/')}}frontend/use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
		rel="stylesheet">

<script src="{{asset('/')}}frontend/cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script src="{{asset('/')}}frontend/tuupola/jquery_lazyload%400a5e0785a90eb41a6411d67a2f2e56d55bbecbd3/lazyload.js"></script>
<script type="text/javascript" charset="utf-8">
  window.addEventListener("load", function(event) {
    lazyload();
  });
</script>

<script src="{{asset('/')}}frontend/hstatic.net/0/0/global/api.jquery.js' type=" text="javascript"></script>

<script src="{{asset('/')}}hstatic.net/0/0/global/option_selection.js' type=" text="javascript"></script>

<script src="{{asset('/')}}frontend/1001049829/14/fastclick.min70ea.js?v=162'
" type='text/javascript'></script>
<script src="{{asset('/')}}frontend/1001049829/14/script70ea.js?v=162" type='text/javascript'></script>
<script src="{{asset('/')}}frontend/1001049829/14/timber70ea.js?v=162" type='text/javascript'></script>
<script src="{{asset('/')}}frontend/cdn.jsdelivr.net/gh/fancyapps/fancybox%403.5.7/dist/jquery.fancybox.min.js"></script>
<script defer src="{{asset('/')}}frontend/stats.hstatic.net/beacon.min.js" hrv-beacon-t='1000093072'></script>
<script>
  $(document).ready(function() {
    $('#hero-slider').on('init', function(e, slick) {
      var $firstAnimatingElements = $('div.hero-slide:first-child').find('[data-animation]');
      doAnimations($firstAnimatingElements);
    });
    $('#hero-slider').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('div.hero-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
      doAnimations($animatingElements);
    });
    $('#hero-slider').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      fade: true
    });

    function doAnimations(elements) {
      var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      elements.each(function() {
        var $this = $(this);
        var $animationDelay = $this.data('delay');
        var $animationType = 'animated ' + $this.data('animation');
        $this.css({
          'animation-delay': $animationDelay,
          '-webkit-animation-delay': $animationDelay
        });
        $this.addClass($animationType).one(animationEndEvents, function() {
          $this.removeClass($animationType);
        });
      });
    }
  });
</script>
<script>
		new WOW().init();
	</script>
	<script>
		function Utils() { }
		Utils.prototype = {
			constructor: Utils,
			isElementInView: function (element, fullyInView, pageTop) {
				var pageBottom = pageTop + $(window).height();
				var elementTop = $(element).offset().top;
				var elementBottom = elementTop + $(element).height();
				if (fullyInView === true) {
					return ((pageTop < elementTop) && (pageBottom > elementBottom));
				} else {
					return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
				}
			}
		};
		var Utils = new Utils();
		var isElementInView = Utils.isElementInView($('#home-statistics'), false, 0);
		var counter = true;
		$(window).scroll(function () {
			if (Utils.isElementInView($('#home-statistics'), false, $(window).scrollTop())) {
				if (counter) {
					$('.hau-statistic-number > span').each(function () {
						var $this = $(this),
							countTo = $this.attr('data-count');
						$({
							countNum: $this.text()
						}).animate({
							countNum: countTo
						}, {
							duration: 3000,
							easing: 'linear',
							step: function () {
								$this.text(Math.floor(this.countNum));
							},
							complete: function () {
								$this.text(this.countNum);
							}
						});
					});
					counter = false;
				}
			} else { }
		});
	</script>
	<!-- Tabs -->
	<script>
		function openHcTab(evt, cityName) {
			var i, hc_tabcontent, hc_tablinks;
			hc_tabcontent = document.getElementsByClassName("hc-tabcontent");
			for (i = 0; i < hc_tabcontent.length; i++) {
				hc_tabcontent[i].style.display = "none";
			}
			hc_tablinks = document.getElementsByClassName("hc-tablinks");
			for (i = 0; i < hc_tablinks.length; i++) {
				hc_tablinks[i].className = hc_tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpenHcTab").click();
	</script>
	<script>
		$(".hc-search-wrapper > a").click(function () {
			$(".search-bar-header").toggle();
		});
	</script>
	<!-- Owl carousel init -->
	<script>
		$(document).ready(function () {
			$("#owl-htesti-slider").owlCarousel({
				items: 3,
				itemsDesktop: [1000, 3],
				itemsDesktopSmall: [900, 3],
				itemsTablet: [768, 2],
				itemsMobile: [480, 1],
				navigation: false,
				pagination: true,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-home-articles-slider").owlCarousel({
				items: 3,
				itemsDesktop: [1000, 3],
				itemsDesktopSmall: [900, 3],
				itemsTablet: [768, 2],
				itemsMobile: [480, 1],
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-brands-slider").owlCarousel({
				items: 6,
				itemsDesktop: [1000, 6],
				itemsDesktopSmall: [900, 5],
				itemsTablet: [768, 4],
				itemsMobile: [480, 2],
				navigation: false,
				pagination: false,
				slideSpeed: 1000,
				autoPlay: 3000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-customize-variants-products-slider").owlCarousel({
				items: 5,
				itemsDesktop: [1000, 5],
				itemsDesktopSmall: [900, 5],
				itemsTablet: [768, 4],
				itemsMobile: [480, 3],
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				autoPlay: 3000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-rpa-slider").owlCarousel({
				items: 5,
				itemsDesktop: [1000, 5],
				itemsDesktopSmall: [900, 5],
				itemsTablet: [768, 4],
				itemsMobile: [480, 3],
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-blog-single-slider1").owlCarousel({
				items: 2,
				itemsDesktop: [1000, 2],
				itemsDesktopSmall: [900, 2],
				itemsTablet: [600, 1],
				itemsMobile: false,
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-blog-single-slider2").owlCarousel({
				items: 2,
				itemsDesktop: [1000, 2],
				itemsDesktopSmall: [900, 2],
				itemsTablet: [600, 1],
				itemsMobile: false,
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-blog-single-slider3").owlCarousel({
				items: 2,
				itemsDesktop: [1000, 2],
				itemsDesktopSmall: [900, 2],
				itemsTablet: [600, 1],
				itemsMobile: false,
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-blog-single-slider4").owlCarousel({
				items: 2,
				itemsDesktop: [1000, 2],
				itemsDesktopSmall: [900, 2],
				itemsTablet: [600, 1],
				itemsMobile: false,
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-blog-single-slider5").owlCarousel({
				items: 2,
				itemsDesktop: [1000, 2],
				itemsDesktopSmall: [900, 2],
				itemsTablet: [600, 1],
				itemsMobile: false,
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-blog-single-slider6").owlCarousel({
				items: 2,
				itemsDesktop: [1000, 2],
				itemsDesktopSmall: [900, 2],
				itemsTablet: [600, 1],
				itemsMobile: false,
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-blog-single-slider7").owlCarousel({
				items: 2,
				itemsDesktop: [1000, 2],
				itemsDesktopSmall: [900, 2],
				itemsTablet: [600, 1],
				itemsMobile: false,
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-blog-single-slider8").owlCarousel({
				items: 2,
				itemsDesktop: [1000, 2],
				itemsDesktopSmall: [900, 2],
				itemsTablet: [600, 1],
				itemsMobile: false,
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-blog-single-slider9").owlCarousel({
				items: 2,
				itemsDesktop: [1000, 2],
				itemsDesktopSmall: [900, 2],
				itemsTablet: [600, 1],
				itemsMobile: false,
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
			$("#owl-blog-single-slider10").owlCarousel({
				items: 2,
				itemsDesktop: [1000, 2],
				itemsDesktopSmall: [900, 2],
				itemsTablet: [600, 1],
				itemsMobile: false,
				navigation: true,
				pagination: false,
				slideSpeed: 1000,
				paginationSpeed: 1000,
				navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
			});
		});
	</script>
	<!-- Back to top -->
	<script>
		jQuery(document).ready(function () {
			var offset = 220;
			var duration = 500;
			jQuery(window).scroll(function () {
				if (jQuery(this).scrollTop() > offset) {
					jQuery('#back-to-top').fadeIn(duration);
				} else {
					jQuery('#back-to-top').fadeOut(duration);
				}
			});
			jQuery('#back-to-top').click(function (event) {
				event.preventDefault();
				jQuery('html, body').animate({
					scrollTop: 0
				}, duration);
				return false;
			});
			window.onscroll = changePos;
			function changePos() {
				var header = $("#header");
				var headerheight = $("#header").height();
				if (window.pageYOffset > headerheight) {
					header.addClass('scrolldown');
				} else {
					header.removeClass('scrolldown');
				}
			}
		});
	</script>
	<!-- popup loaded -->
	<script>
		$(document).ready(function () {
			var date = new Date();
			var minutes = 60;
			date.setTime(date.getTime() + (minutes * 60 * 1000));
			if (getCookie('popupNewLetterStatus') != 'closed') {
				$('#popup-btn').trigger('click');
				setCookie('popupNewLetterStatus', 'closed', date);
			};
		})
	</script>
  <script src="{{asset('/')}}frontend/sp.zalo.me/plugins/sdk.js"></script>
	<div class="block-welcome">
		<div>
			<a href="tel:18002028">
				<p class="welcome-msg">
					<span class="header-hotline"><img
							src="{{asset('/')}}frontend/1001049829/14/hotline70ea.png?v=162"> 18002028</span>
				</p>
			</a>
		</div>
	</div>
  <div class="icon_fixed">
		<ul class="no-bullets">
			<li class="backtop">
				<a id="back-to-top" href="javascript:void(0)">
					<i class="fas fa-angle-up"></i>
				</a>
			</li>
		</ul>
	</div>
