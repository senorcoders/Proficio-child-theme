jQuery(document).ready(function() {
    jQuery('#navbarExample > ul').addClass('navbar-nav ml-auto');
    jQuery('#navbarExample > ul > li').addClass('nav-item');
    jQuery('#navbarExample > ul > li > a').addClass('nav-link');

    $ = jQuery;


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







});
