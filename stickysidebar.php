	// ---------------- Footer Section Left sidebar fix ---------------
	var side_bar_footer = $('.footer-wrapper .left-side-bar.wht'); //yeah sidebar get kya hwa he
	var footersection = $('.footer-wrapper');
	var section5OffsetTop = footersection.offset().top;
	if (scrollPosition >= section4OffsetTop) {
		 side_bar_case.removeClass('wh-fixed');
	  side_bar_faq.addClass('wh-fixed');
	} else {
	  side_bar_faq.removeClass('wh-fixed');
	}
