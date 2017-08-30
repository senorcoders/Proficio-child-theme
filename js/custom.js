jQuery(document).ready(function() {
    AOS.init();

    var t;

    var start = $('#proficio-video-caroussel').find('.active').attr('data-interval');
    t = setTimeout("$('#proficio-video-caroussel').carousel({interval: 1000});", start - 1000);

    $('#proficio-video-caroussel').on('slid.bs.carousel', function() {
        clearTimeout(t);
        var duration = $(this).find('.active').attr('data-interval');

        $('#proficio-video-caroussel').carousel('pause');
        t = setTimeout("$('#proficio-video-caroussel').carousel();", duration - 1000);
    })

    $('.carousel-control.right').on('click', function() {
        clearTimeout(t);
    });

    $('.carousel-control.left').on('click', function() {
        clearTimeout(t);
    });


    jQuery('#navbarExample > ul').addClass('navbar-nav ml-auto');
    jQuery('#navbarExample > ul > li').addClass('nav-item');
    jQuery('#navbarExample > ul > li > a').addClass('nav-link');

    $ = jQuery;

      if ($(".webinar-video").length > 0) {
        //alert("Hola");
        //$("#video-webinar-modal").modal('show');
        $("#show-modal").trigger('click');
    }
    var c = new Image();

    c.onload = function() {
        $("#mega-menu-item-178:hover > a:before").css("background-image", "url(/wp-content/uploads/2017/05/fully-managed.png)");
    }

    c.src = "/wp-content/uploads/2017/05/fully-managed.png";


    jQuery('#FirstName').attr('placeholder', 'First Name');
    jQuery('#LastName').attr('placeholder', 'Last Name');
    jQuery('#Email').attr('placeholder', 'Email');
    jQuery('#Company').attr('placeholder', 'Company');



    $('.carot-down > a').click(function() {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 500);
        return false;
    });


    function preload(arrayOfImages) {

        $ = jQuery;

        $(arrayOfImages).each(function() {
            $('<img/>')[0].src = this;
            // Alternatively you could use:
            // (new Image()).src = this;
        });
    }

    // Usage:

    preload([
        '/wp-content/uploads/2017/05/fully-managed.png',
        '/wp-content/uploads/2017/05/fully-managed_roll-1.png',
        '/wp-content/uploads/2017/05/co-managed.png',
        '/wp-content/uploads/2017/05/co-managed_roll.png',
        '/wp-content/uploads/2017/05/custom.png',
        '/wp-content/uploads/2017/05/custom_roll.png',
        '/wp-content/uploads/2017/05/triangle-vector.png'
    ]);


    jQuery('.thanks-body .quote-title').html('Thank you...');
    jQuery('.thanks-body .quote-content').html('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu risus eget sapien mollis finibus a nec erat. Maecenas et lorem eu nulla molestie venenatis.');



    jQuery('.resourcesBgBox > div').each(function() {
        var itemUrl = jQuery(this).find('a').attr('href');
        console.log(itemUrl);

        jQuery(this).on('click', function() {
            window.location.href = itemUrl;

        });


    });

    jQuery('.rsvp-thank #rsvp-proficio-form').html('<p>Thank you for requesting an invitation to our exclusive Whitelist Party. <br>We will be in touch shortly as we finalize our guest list. If approved you will receive a confirmation email by July 14.</p>');
    jQuery('.rsvp-thank #webinar-proficio-form').html('<p>Thank You For Registering, We Will Send You the Webinar Login Information Shortly</p>');
    jQuery('.rsvp-thank #free-year-form').html('<p>Thank You For Registering, We Will Send You the First Year Free Login Information Shortly</p>');






});


$ = jQuery;

function sticky_relocate() {
    var form = $('.page-id-857 #mktoForm_1055');
    var window_top = $(window).scrollTop();
    var div_top = $('.page-id-857 > .full-padding').offset().top;
    var div_bottom = $('.quote-static').offset().top;
    var form_height = $('.page-id-857 #mktoForm_1055').height();

    if (window_top > div_top) {
        form.addClass('stick');
    } else {
        form.removeClass('stick');
    }

    if (window_top > (div_bottom - form_height) - 100) {
        form.addClass('bottom');
    } else {
        form.removeClass('bottom');
    }
}



$(function() {
    if ($(".page-id-857").length > 0) {
        if ($(window).width() > 1024) {
            $(window).scroll(sticky_relocate);
            sticky_relocate();
        }
    }




});