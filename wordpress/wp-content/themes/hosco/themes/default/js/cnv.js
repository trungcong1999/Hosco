$(document).ready(function () {
	$(".item_post_featured_banner a").click(function (a) {
		if ($(this).attr("href")) {
			var b = $(this).attr("href");
			if ($(b).length) {
				a.preventDefault();
				$("html, body").animate({
					scrollTop: $(b).offset().top
				}, 800, function () {})
			}
		}
	})
});
$(document).ready(function () {
	$(".four_post_bottom_banner .item p").matchHeight();
	$(".group_post_new .item_post").matchHeight();
	$(".group_post_new .title").matchHeight();
	$(".group_ebook .ct .title").matchHeight();
	$(".talk-cnv-cas").slick({
		slidesToShow: 5,
		autoplay: !0,
		autoplaySpeed: 1500,
		arrows: !1,
		responsive: [{
			breakpoint: 1199,
			settings: {
				slidesToShow: 7
			}
		}, {
			breakpoint: 420,
			settings: {
				slidesToShow: 3
			}
		}]
	});
	$(".solution_app_mobile").slick({
		slidesToShow: 3,
		autoplay: true,
		autoplaySpeed: 1500,
		arrows: !1,
		responsive: [{
			breakpoint: 1199,
			settings: {
				slidesToShow: 3
			}
		}, {
			breakpoint: 567,
			settings: {
				slidesToShow: 1
			}
		}]
	});
	$(".four_post_bottom_banner_mobile").slick({
		slidesToShow: 3,
		autoplay: true,
		autoplaySpeed: 1500,
		arrows: !1,
		responsive: [{
			breakpoint: 1199,
			settings: {
				slidesToShow: 3
			}
		}, {
			breakpoint: 567,
			settings: {
				slidesToShow: 1
			}
		}]
	});
	$(".nav-cas-mobile").slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		focusOnSelect: true,
		autoplay: false,
		autoplaySpeed: 500,
		speed: 500,
		arrows: true,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: false
			}
		}, {
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 2
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}, {
			breakpoint: 320,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	});
	$(".customers_partner_mobile").slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		focusOnSelect: true,
		autoplay: true,
		autoplaySpeed: 1000,
		speed: 1000,
		arrows: false,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: false
			}
		}, {
			breakpoint: 600,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 2
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		}, {
			breakpoint: 320,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		}]
	});
	$(".case_study").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 6000,
		arrows: true,
		nextArrow: '<img src="https://'+window.location.hostname+'/wordpress/wp-content/themes/hosco/themes/default/images/template_new/arrow_right_circle.png" class="next" alt="Next">',
		prevArrow: '<img src="https://'+window.location.hostname+'/wordpress/wp-content/themes/hosco/themes/default/images/template_new/arrow_left_circle.png" class="prev" alt="Prev">',
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			}
		}, {
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}, {
			breakpoint: 320,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	})
});