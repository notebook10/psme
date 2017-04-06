// /**
//  * Created by Samuel on 3/27/2017.
//  */
$(document).ready(function () {
    $('.about-right.carousel-control').click(function(){ $('#carousel').carousel('next')});
    $('.about-left.carousel-control').click(function(){ $('#carousel').carousel('prev')});
    $('#carousel').carousel();

    $("#gallery").unitegallery({
        lightbox_type: "compact",
        tile_enable_image_effect:true,
        tile_enable_overlay:false,
        // tiles_type: "justified",
        theme_appearance_order: "shuffle",
        theme_auto_open:null,
        tiles_max_columns: 6,
    });

    $(document).on("scroll", onScroll);
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");

        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });

    // for awards video
    var options = {
        id: 196232693,
        loop: true
    };

    var player = new Vimeo.Player('psme-award-video', options);

    player.setVolume(0);

    player.on('play', function() {
        console.log('played the video!');
    });
    // for awards video
});

$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse for-navbar");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse for-navbar");
    }
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#myNavbar a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#myNavbar ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}