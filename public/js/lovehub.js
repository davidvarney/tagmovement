/*!
 * LoveHub - Multipurpose Non-Profit Theme
 * Copyright 1994-2015 ForBetterWeb.com
 * To use this theme you must have a license purchased at WrapBootstrap (https://wrapbootstrap.com)
 */

// jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 64)
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top',
    offset: 65
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Countdown
$('#clock').countdown('2016/03/12 08:00:00').on('update.countdown', function(event) {
    var $this = $(this).html(event.strftime(''
    + '<div><span>%-w</span>week%!w</div>'
    + '<div><span>%-d</span>day%!d</div>'
    + '<div><span>%H</span>hr</div>'
    + '<div><span>%M</span>min</div>'
    + '<div><span>%S</span>sec</div>'));
});

// Registration Form Masks
jQuery("#zip").mask("00000");
jQuery("#phone").mask("(000) 000-0000");
jQuery("#birthdate").mask("00/00/0000");
jQuery("#height_feet").mask("0");
jQuery("#height_inches").mask("00");
jQuery("#weight").mask("000");
jQuery("#coach_phone").mask("(000) 000-0000");
jQuery("#guardian_1_phone").mask("(000) 000-0000");
jQuery("#guardian_2_phone").mask("(000) 000-0000");

// Contact Form Masks
jQuery("#contact_phone").mask("(000) 000-0000");
