"use strict";
jQuery(document).ready(function($) {
	
	// Slideshow - Owl carousel
    $(".carousel-default").owlCarousel({
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: true,
        addClassActive: true,
        navigationText: ["&#xf104", "&#xf105"],
        singleItem: true
    });
    $(".carousel-fade-transition").owlCarousel({
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: true,
        addClassActive: false,
        navigationText: ["&#xf104", "&#xf105"],
        singleItem: true,
        transitionStyle: "fade"
    });
	$(".carousel-blocks").owlCarousel({
        slideSpeed: 300,
        autoPlay: 5000,
        navigation: false,
        navigationText: ["&#xf104", "&#xf105"],
        pagination: true,
        addClassActive: true,
        items: 4,
        itemsDesktop: [1400, 4],
        itemsDesktopSmall: [1100, 3],
        itemsTablet: [700, 3],
        itemsMobile: [500, 2]
    });
	
	// Hide and Show More on Click
	$(".showmore-open").click(function(){
		$(this).is(".showmore-close")?($(".showmore-content").slideUp(900),
		$(this).text("Expand to View More").removeClass("showmore-close")):($(".showmore-content").slideDown('slow', function(){ $(".showmore-open").text('Close');}),$(this).text("Loading").addClass("showmore-close"));
	});
	
	//product quantity
    $(".numbers-row").append('<div class="inc quantity-btn">+</div><div class="dec quantity-btn">-</div>');

    $(".quantity-btn").on("click", function () {

        var $button = $(this), oldValue = $button.parent().find(".quantity").val();

        if ($button.text() === "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
    // Do not allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
            newVal = 0;
            }
	    }

        $button.parent().find(".quantity").val(newVal);

    });
});