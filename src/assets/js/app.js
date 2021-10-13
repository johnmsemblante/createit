import $ from 'jquery';
window.$ = $;
import Bootstrap from 'bootstrap';
import 'slick-carousel';

(function(window, document, $, undefined) {
    'use strict';

    var scope = {
        // Initializes all functions.
        init: function() {
            
            scope.sliders();

            scope.custom();

        },

        sliders: function() {
            if ($('[data-slick]').length) {
                $('[data-slick]').slick();
            }

            if ($('.js-testimonial-slick').length) {
                $('.js-testimonial-slick').slick({
                    autoplay: false,
                    // autoplaySpeed: 3000,
                    infinite: true,
                    arrows: true,
                    dots: true,
                    adaptiveHeight: true
                });
            }
        },       
        
        custom: function() {
            // NO-JS class
            $('html').removeClass('no-js').addClass('js');

            // Bootstrap Menu Hover
            const $dropdown = $(".dropdown");
            const $dropdownToggle = $(".dropdown-toggle");
            const $dropdownMenu = $(".dropdown-menu");
            const showClass = "show";
            
            $(window).on("load resize", function() {
                if (this.matchMedia("(min-width: 768px)").matches) {
                    $dropdown.hover(
                    function() {
                        const $this = $(this);
                        $this.addClass(showClass);
                        $this.find($dropdownToggle).attr("aria-expanded", "true");
                        $this.find($dropdownMenu).addClass(showClass);
                    },
                    function() {
                        const $this = $(this);
                        $this.removeClass(showClass);
                        $this.find($dropdownToggle).attr("aria-expanded", "false");
                        $this.find($dropdownMenu).removeClass(showClass);
                    }
                    );
                } else {
                    $dropdown.off("mouseenter mouseleave");
                }
            });

            // Back to Top
            $("#toTop").click(function () {
                //1 second of animation time
                //html works for FFX but not Chrome
                //body works for Chrome but not FFX
                //This strange selector seems to work universally
                $("html, body").animate({scrollTop: 0}, 1000);
            });
        }

    }; // END OF INIT
    
    scope.init();

})(window, document, jQuery);