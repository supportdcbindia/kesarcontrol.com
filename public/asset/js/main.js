// $(window).scroll(function() {
//   if ($(window).scrollTop() > 50) {
//       $('header .top-fixed').addClass('navbar-scrolled');
//   } else {
//       $('header .top-fixed').removeClass('navbar-scrolled');
//   }
// });

(function ($) {
    "use strict";

    jQuery(document).ready(function () {
        go_top();
        sticky_header();
        // client_slider();
        slider_one();
        slider_two();
        slider_three();
        slider_four();
        slider_five();
        testimonials_slider();
        Product_slider_one();
        Product_slider_two();
        Product_slider_three();
        Product_slider_four();
        Product_slider_five();
        Product_slider_similar();
        blog_slider_one();
        blog_slider_two();
        blog_slider_previous();
        product_detail_slider();

        footer_fixed();
        jQuery(window).resize(function () {
            footer_fixed();
        });
        niceselect();
        odometer();
        nav();
        fancy();
        product_redirect();
        about_redirect();
        // amc_redirect();
        // lazy();
        googleTranslateElementInit();
        // finder()
    });

    document.addEventListener("DOMContentLoaded", initializeIsotope);

    function go_top() {
        $(window).on("scroll", function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 300) $(".go-top").addClass("active");
            if (scrolled < 300) $(".go-top").removeClass("active");
        });

        $(".go-top").on("click", function () {
            $("html, body").animate(
                {
                    scrollTop: "0",
                },
                500
            );
        });
    }

    jQuery(window).on("scroll", function () {
        // > Window on scroll header color fill
        // color_fill_header();
    });

    function color_fill_header() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            $("header .top-fixed").addClass("navbar-scrolled");
        } else {
            $("header .top-fixed").removeClass("navbar-scrolled");
        }
    }

    // function sticky_header(){
    //   if(jQuery('.top-fixed').length){
    //     var sticky = new Waypoint.Sticky({
    //       element: jQuery('.top-fixed')  [1]
    //     });
    //   }
    // }
    function sticky_header() {
        var sticky = new Waypoint.Sticky({
            element: $("header .top-fixed")[0],
            stuckClass: "stuck",
            // offset: -200
        });
    }

    function client_slider() {
        var slider = $(".client-slider").bxSlider({
            mode: "horizontal",
            // auto: true,
            autoHover: true,
            speed: 20000,
            autoWidth: true,
            // minSlides: 6,
            // maxSlides: 6,
            slideWidth: "auto",
            pager: false,
            controls: false,
            ticker: true,
            tickerHover: true,
            infiniteLoop: true,
            //    slideMargin: 130,

            moveSlides: 6,
            responsive: true,
            // slideWidth: 10000,
        });

        // Clone the slider for infinite looping
        $(".client-slider").clone().appendTo(".slider-container");
    }

    function slider_one() {
        var swiper = new Swiper(".slider-one", {
            effect: "fade",
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            slidesPerView: 1,
            spaceBetween: 10,
            on: {
                init: function () {
                    if (this.el.classList.contains("slider-one")) {
                        $("[data-a]").addClass("visibility");
                        $("[data-a]")
                            .addClass("aos-init")
                            .addClass("aos-animate");
                    }
                },
                slideChangeTransitionStart: function () {
                    if (this.el.classList.contains("slider-one")) {
                        $("[data-a]").removeClass("visibility");
                        $("[data-a]")
                            .removeClass("aos-init")
                            .removeClass("aos-animate");
                    }
                },
                slideChangeTransitionEnd: function () {
                    if (this.el.classList.contains("slider-one")) {
                        $("[data-a]").addClass("visibility");
                        $("[data-a]")
                            .addClass("aos-init")
                            .addClass("aos-animate");
                    }
                },
            },
        });
    }

    function slider_two() {
        var swiper = new Swiper(".slider-two", {
            effect: "fade",
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 10,
            on: {
                init: function () {
                    if (this.el.classList.contains("slider-two")) {
                        $("[data-b]").addClass("visibility");
                        $("[data-b]")
                            .addClass("aos-init")
                            .addClass("aos-animate");
                    }
                },
                slideChangeTransitionStart: function () {
                    if (this.el.classList.contains("slider-two")) {
                        $("[data-b]").removeClass("visibility");
                        $("[data-b]")
                            .removeClass("aos-init")
                            .removeClass("aos-animate");
                    }
                },
                slideChangeTransitionEnd: function () {
                    if (this.el.classList.contains("slider-two")) {
                        $("[data-b]").addClass("visibility");
                        $("[data-b]")
                            .addClass("aos-init")
                            .addClass("aos-animate");
                    }
                },
            },
        });
    }

    function slider_three() {
        var swiper = new Swiper(".slider-three", {
            effect: "fade",
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 10,
            on: {
                init: function () {
                    if (this.el.classList.contains("slider-three")) {
                        $("[data-c]").addClass("visibility");
                        $("[data-c]")
                            .addClass("aos-init")
                            .addClass("aos-animate");
                    }
                },
                slideChangeTransitionStart: function () {
                    if (this.el.classList.contains("slider-three")) {
                        $("[data-c]").removeClass("visibility");
                        $("[data-c]")
                            .removeClass("aos-init")
                            .removeClass("aos-animate");
                    }
                },
                slideChangeTransitionEnd: function () {
                    if (this.el.classList.contains("slider-three")) {
                        $("[data-c]").addClass("visibility");
                        $("[data-c]")
                            .addClass("aos-init")
                            .addClass("aos-animate");
                    }
                },
            },
        });
    }

    function slider_four() {
        var swiper = new Swiper(".slider-four", {
            // effect: "fade",
            // loop: true,
            // autoplay: {
            //   delay: 5000,
            //   disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next.btn-four",
                prevEl: ".swiper-button-prev.btn-four",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 1,
            spaceBetween: 10,
            on: {
                init: function () {
                    if (this.el.classList.contains("slider-four")) {
                        $("[data-d]").addClass("visibility");
                        $("[data-d]")
                            .addClass("aos-init")
                            .addClass("aos-animate");
                    }
                },
                slideChangeTransitionStart: function () {
                    if (this.el.classList.contains("slider-four")) {
                        $("[data-d]").removeClass("visibility");
                        $("[data-d]")
                            .removeClass("aos-init")
                            .removeClass("aos-animate");
                    }
                },
                slideChangeTransitionEnd: function () {
                    if (this.el.classList.contains("slider-four")) {
                        $("[data-d]").addClass("visibility");
                        $("[data-d]")
                            .addClass("aos-init")
                            .addClass("aos-animate");
                    }
                },
            },
        });
    }

    function slider_five() {
        var swiper = new Swiper(".slider-five", {
            // effect: "fade",
            // loop: true,
            // autoplay: {
            //   delay: 5000,
            //   disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next.btn-five",
                prevEl: ".swiper-button-prev.btn-five",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    }

    function testimonials_slider() {
        var swiper = new Swiper(".testimonials-slider", {
            // effect: "fade",
            // loop: true,
            // autoplay: {
            //   delay: 5000,
            //   disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next.product-six-btn",
                prevEl: ".swiper-button-prev.product-six-btn",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 4,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    }

    function Product_slider_one() {
        var swiper = new Swiper(".product-slider-one", {
            // effect: "fade",
            // loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next.product-one-btn",
                prevEl: ".swiper-button-prev.product-one-btn",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    }

    function Product_slider_two() {
        var swiper = new Swiper(".product-slider-two", {
            // effect: "fade",
            // loop: true,
            // autoplay: {
            //   delay: 5000,
            //   disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next.product-two-btn",
                prevEl: ".swiper-button-prev.product-two-btn",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    }

    function Product_slider_three() {
        var swiper = new Swiper(".product-slider-three", {
            // effect: "fade",
            // loop: true,
            // autoplay: {
            //   delay: 5000,
            //   disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next.product-three-btn",
                prevEl: ".swiper-button-prev.product-three-btn",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    }

    function Product_slider_four() {
        var swiper = new Swiper(".product-slider-four", {
            // effect: "fade",
            // loop: true,
            // autoplay: {
            //   delay: 5000,
            //   disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next.product-four-btn",
                prevEl: ".swiper-button-prev.product-four-btn",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    }

    function Product_slider_five() {
        var swiper = new Swiper(".product-slider-five", {
            // effect: "fade",
            // loop: true,
            // autoplay: {
            //   delay: 5000,
            //   disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next.product-five-btn",
                prevEl: ".swiper-button-prev.product-five-btn",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    }

    function Product_slider_similar() {
        var swiper = new Swiper(".product-slider-similar", {
            // effect: "fade",
            // loop: true,
            // autoplay: {
            //   delay: 5000,
            //   disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next.product-similar-btn",
                prevEl: ".swiper-button-prev.product-similar-btn",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    }

    function blog_slider_one() {
        var swiper = new Swiper(".blog-slider-one", {
            // effect: "fade",
            // loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next.blog-one-btn",
                prevEl: ".swiper-button-prev.blog-one-btn",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1536: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    }

    function blog_slider_two() {
        var swiper = new Swiper(".blog-slider-two", {
            // effect: "fade",
            // loop: true,
            // autoplay: {
            //   delay: 5000,
            //   disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next.blog-two-btn",
                prevEl: ".swiper-button-prev.blog-two-btn",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1536: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    }

    function blog_slider_previous() {
        var swiper = new Swiper(".blog-slider-previous", {
            // effect: "fade",
            // loop: true,
            // autoplay: {
            //   delay: 5000,
            //   disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".swiper-button-next.blog-previous-btn",
                prevEl: ".swiper-button-prev.blog-previous-btn",
            },
            // pagination: {
            // 	el: '.swiper-pagination',
            // 	clickable: true,
            // },
            slidesPerView: 3,
            spaceBetween: 30,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1536: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    }

    function product_detail_slider() {
        var swiper = new Swiper(".product-detail-slider", {
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                1536: {
                    slidesPerView: 1,
                    spaceBetween: 50,
                },
            },
        });
    }

    //  function footer_fixed() {
    // 	jQuery('footer').css('display', 'block');
    // 	jQuery('footer').css('height', 'auto');
    // 	var footerHeight = jQuery('footer').outerHeight();
    // 	jQuery('body').css('padding-bottom', footerHeight);
    // 	jQuery('footer').css('height', footerHeight);
    //  }
    function footer_fixed() {
        if (window.innerWidth >= 991) {
            jQuery("footer").css("display", "block");
            jQuery("footer").css("height", "auto");
            var footerHeight = jQuery("footer").outerHeight();
            jQuery("body").css("padding-bottom", footerHeight);
            jQuery("footer").css("height", footerHeight);
        } else {
            jQuery("body").css("padding-bottom", "0");
        }
    }

    function niceselect() {
        $("select").niceSelect();
    }

    function odometer() {
        $(".count-one").appear(function (e) {
            var odo = $(".count-one");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    }

    // function client_slider() {
    // var swiper = new Swiper(".client-slider", {
    //   // slidesPerView: 6,
    //   spaceBetween: 70,
    //   loop: true,
    //   // autoplay: true,
    //   autoplay: {
    //       delay: 1,
    //       disableOnInteraction: false,
    //       pauseOnMouseEnter: true
    //     },
    //     allowTouchMove: false,

    //     slidesPerView: 'auto',
    //     speed: 5000,
    //     // lazy: true,

    //   breakpoints: {
    //   320: {
    //       // slidesPerView: 2,
    //       // pagination: {
    //       //     el: ".swiper-pagination",
    //       //     clickable: true,
    //       // },
    //   },
    //   480: {
    //       // slidesPerView: 3,
    //       // pagination: {
    //       //     el: ".swiper-pagination",
    //       //     clickable: true,
    //       // },
    //   },
    //   780: {
    //       // slidesPerView: 4,
    //       navigation: {
    //           nextEl: ".swiper-button-next",
    //           prevEl: ".swiper-button-prev",
    //       },
    //   },
    //   1200: {
    //       // slidesPerView: 2,
    //       navigation: {
    //           nextEl: ".swiper-button-next",
    //           prevEl: ".swiper-button-prev",
    //       },
    //   },
    // },
    // });

    // }

    document
        .querySelector(".navbar-toggler")
        .addEventListener("click", function () {
            const elements = document.querySelectorAll(".header");
            elements.forEach(function (element) {
                element.classList.toggle("mob-nav");
            });
        });

    if ($(".newsSwiper").length > 0) {
        var swiper = new Swiper(".newsSwiper", {
            slidesPerView: 2,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
                1536: {
                    slidesPerView: 4,
                },
                1700: {
                    slidesPerView: 4,
                },
            },
        });
    }

    function nav() {
        (function ($bs) {
            function myFunction(x) {
                if (x.matches) {
                    const CLASS_NAME = "has-child-dropdown-show";
                    $bs.Dropdown.prototype.toggle = (function (_orginal) {
                        return function () {
                            document
                                .querySelectorAll("." + CLASS_NAME)
                                .forEach(function (e) {
                                    e.classList.remove(CLASS_NAME);
                                });
                            let dd = this._element
                                .closest(".dropdown")
                                .parentNode.closest(".dropdown");
                            for (
                                ;
                                dd && dd !== document;
                                dd = dd.parentNode.closest(".dropdown")
                            ) {
                                dd.classList.add(CLASS_NAME);
                            }
                            return _orginal.call(this);
                        };
                    })($bs.Dropdown.prototype.toggle);

                    document
                        .querySelectorAll(".dropdown")
                        .forEach(function (dd) {
                            dd.addEventListener(
                                "hide.bs.dropdown",
                                function (e) {
                                    if (this.classList.contains(CLASS_NAME)) {
                                        this.classList.remove(CLASS_NAME);
                                        e.preventDefault();
                                    }
                                    e.stopPropagation();
                                }
                            );
                        });
                } else {
                    document
                        .querySelectorAll(
                            ".dropdown-hover, .dropdown-hover-all .dropdown"
                        )
                        .forEach(function (dd) {
                            dd.addEventListener("mouseenter", function (e) {
                                let toggle = e.target.querySelector(
                                    ':scope>[data-bs-toggle="dropdown"]'
                                );
                                if (!toggle.classList.contains("show")) {
                                    $bs.Dropdown.getOrCreateInstance(
                                        toggle
                                    ).toggle();
                                    dd.classList.add(CLASS_NAME);
                                    $bs.Dropdown.clearMenus();
                                }
                            });
                            dd.addEventListener("mouseleave", function (e) {
                                let toggle = e.target.querySelector(
                                    ':scope>[data-bs-toggle="dropdown"]'
                                );
                                if (toggle.classList.contains("show")) {
                                    $bs.Dropdown.getOrCreateInstance(
                                        toggle
                                    ).toggle();
                                }
                            });
                        });
                }
            }

            var x = window.matchMedia("(max-width: 1199.98px)");
            myFunction(x);
            x.addListener(myFunction);
        })(bootstrap);

        jQuery(function ($) {
            $("header ul a")
                .click(function (e) {
                    var link = $(this);

                    var item = link.parent("li");

                    if (item.hasClass("active")) {
                        item.removeClass("active")
                            .children("a")
                            .removeClass("active");
                    } else {
                        item.addClass("active")
                            .children("a")
                            .addClass("active");
                    }

                    if (item.children("ul").length > 0) {
                        var href = link.attr("href");
                        link.attr("href", "#");
                        setTimeout(function () {
                            link.attr("href", href);
                        }, 300);
                        e.preventDefault();
                    }
                })
                .each(function () {
                    var link = $(this);
                    if (link.get(0).href === location.href) {
                        link.addClass("active")
                            .parents("li")
                            .addClass("active");
                        return false;
                    }
                });
        });
    }

    function fancy() {
        Fancybox.bind("[data-fancybox]", {});
    }

    function product_redirect() {
        $(".productredirect").click(function () {
            window.location.href = "products";
        });
    }

    function about_redirect() {
        $(".aboutredirect").click(function () {
            window.location.href = "about-us";
        });
    }

    function amc_redirect() {
        $(".amcredirect").click(function () {
            window.location.href = "amc";
        });
    }

    function lazy() {
        $(".lazy").Lazy({
            scrollDirection: "vertical",
            effect: "fadeIn",
            visibleOnly: true,
            onError: function (element) {
                console.log("error loading " + element.data("src"));
            },
        });
    }

    // function initializeIsotope() {
    //     var grid = document.querySelector('.all-products');
    //     var iso = new Isotope(grid, {
    //         itemSelector: '.ms',
    //         layoutMode: 'masonry',
    // 		// layoutMode: 'fitRows',
    // 		transitionDuration: '1s',
    // 		originLeft: true
    //         // percentPosition: true
    //     });

    //     var filterButtons = document.querySelectorAll('.filter-button');
    //     filterButtons.forEach(function(button) {
    //         button.addEventListener('click', function() {
    //             var filterValue = button.getAttribute('data-filter');
    //             iso.arrange({
    //                 filter: filterValue
    //             });
    //         });
    //     });
    // }

    function initializeIsotope() {
        var container = document.querySelector(".all-products");

        if (container) {
            var mixer = mixitup(container, {
                selectors: {
                    target: ".ms",
                },
                animation: {
                    duration: 1000,
                },
                load: {
                    filter: "all",
                },
            });

            var filterButtons = document.querySelectorAll(".filter-button");
            filterButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    var filterValue = button.getAttribute("data-filter");
                    mixer.filter(filterValue);
                });
            });
        }
    }

    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {
                pageLanguage: "en",
                includedLanguages: "en,es,ru,pt",
            },
            "google_translate_element"
        );
    }

    function applyUniformHeight(attribute) {
        const selector = `*[${attribute}=true]`;
        const elements = document.querySelectorAll(selector);

        if (elements.length === 0) return;

        // Reset all heights before recalculating
        elements.forEach((el) => (el.style.height = ""));

        let maxHeight = 0;
        elements.forEach((el) => {
            maxHeight = Math.max(maxHeight, el.offsetHeight);
        });

        elements.forEach((el) => {
            el.style.height = maxHeight + "px";
        });
    }

    function runUniformHeights() {
        const maxWidthQuery = window.matchMedia(
            "(min-width: 992px) and (max-width: 1199.98px)"
        );

        if (maxWidthQuery.matches) {
            applyUniformHeight("data-uniform");
        }
        applyUniformHeight("data-uniform-one");
        applyUniformHeight("data-uniform-two");
        applyUniformHeight("data-uniform-three");
    }

    // Run on DOM ready
    document.addEventListener("DOMContentLoaded", function () {
        runUniformHeights();

        // Re-run when a new tab is shown
        document
            .querySelectorAll('button[data-bs-toggle="tab"]')
            .forEach((tab) => {
                tab.addEventListener("shown.bs.tab", function () {
                    runUniformHeights();
                });
            });
    });
})(window.jQuery);
