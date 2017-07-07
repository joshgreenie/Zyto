////////////////////////////////////////
//        Mean Menu                   //
////////////////////////////////////////


// you can change the settings in \firetoss_seed\js\jquery.meanmenu.js

(function ($) {
    $(document).ready(function () {


        $('header nav').meanmenu();



////////////////////////////////////////
//        Accordian                   //
////////////////////////////////////////


        $(".accordion").accordion({
            active: false,
            heightStyle: "content",
            collapsible: true
        });

////////////////////////////////////////
//        Tabs                        //
////////////////////////////////////////


        $("#tabs").tabs({
        });

        $("#tabs1").tabs();

        $("#acc-tabs").tabs();

////////////////////////////////////////
//        Owl Carousel                //
////////////////////////////////////////


        $('.news-events').owlCarousel({
            dots: true,
            autoplay: false,
            singleItem: true,
        });


        $('.testimonials-slider').owlCarousel({
            dots: true,
            autoplay: false,
            singleItem: true,
            nav: true,
            navText: ["<span class='owl-nav-prev'></span>", "<span class='owl-nav-next'></span>"]

        });

        $('.logo-slider').owlCarousel({
            dots: true,
            autoplay: false,
            items: 5,
            nav: true,
            navText: ["<span class='owl-nav-prev'></span>", "<span class='owl-nav-next'></span>"]
        });



////////////////////////////////////////
//        9 Dot Dashboard             //
////////////////////////////////////////


        $("i.fa-th").click(function () {

            $('div.menu-dashboard-container').addClass("active");
            // $('div.menu-dashboard-container').css('visibility', 'visible');

        });


        $(document).click(function (e) {
            var target = e.target;
            if (!$(target).is('i.fa-th') && !$(target).parents().is('i.fa-th')) {
                $('div.menu-dashboard-container').removeClass("active");
            }
        });



    });

})(jQuery);

////////////////////////////////////////
//        Scroll Reveal               //
////////////////////////////////////////

// https://github.com/jlmakes/scrollreveal
//
// // Changing the defaults
//     window.sr = ScrollReveal({ reset: true });
//
// // Customizing a reveal set
// sr.reveal('.foo', { duration: 200 });
//
// // Basic usage and variations
// window.sr = ScrollReveal();
// sr.reveal('.foo');
// sr.reveal('.bar');
//
// // Is the same as...
// window.sr = ScrollReveal().reveal('.foo, .bar');





