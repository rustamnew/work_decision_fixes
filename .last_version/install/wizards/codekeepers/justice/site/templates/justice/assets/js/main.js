/*
::
:: Theme Name: Decision - Lawyer & Attorney HTML Template
:: Email: Nourramadan144@gmail.com
:: Author URI: https://themeforest.net/user/ar-coder
:: Author: ar-coder
:: Version: 1.0
:: 
*/

(function () {
    'use strict';

    // :: Loading
    $(window).on('load', function () {
        $('.loading').fadeOut();
    });

    // :: Height Header Section
    $('.header, .header .table-cell').height($(window).height() + $('header.navs').height() + 100);
    $('.header-2, .header-2 .table-cell').height($(window).height() + $('header.navs').height() + 40);

    // :: Add Class Active For ('.nav-bar')
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > $('header.navs').height() + 30) {
            $('header.navs, .nav-bar').addClass('active');
        } else {
            $('header.navs, .nav-bar').removeClass('active');
        }
    });

    // :: Varables Navbar
    var headerBar = $('.nav-bar'),
        $navbarMenu = $('#open-nav-bar-menu'),
        $menuLink = $('.open-nav-bar'),
        $menuTriggerLink = $('.has-menu > a');

    // :: Add Class Active For $menuLink And $navbarMenu
    $menuLink.on('click', function (e) {
        e.preventDefault();
        $menuLink.toggleClass('active');
        $navbarMenu.toggleClass('active');
    });

    // :: Add Class Active For $menuTriggerLink
    $menuTriggerLink.on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.toggleClass('active').next('ul').toggleClass('active');
    });


    /////
    $(document).click(function (e){ 
        let button = $("#open-nav-bar");
        if (!button.is(e.target) && button.has(e.target).length === 0) {
            $menuLink.removeClass('active');
            $navbarMenu.removeClass('active');
        }
    });
    /////

    // :: Scroll Smooth To Go Section
    $('.move-section').on('click', function (e) {
        e.preventDefault();
        var anchorLink = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchorLink.attr('href')).offset().top + 1
        }, 1000);
    });

    // :: Add Class Active To Search Box
    $('.open-search-box').on('click', function () {
        $('.search-box').fadeIn();
    });
    $('.search-box, .close-search').on('click', function () {
        $('.search-box').fadeOut();
    });
    $('.search-box form').on('click', function (e) {
        e.stopPropagation();
    });

    // :: Open And Close Menu
    $('.open-menu').on('click', function () {
        $('.menu-box').fadeIn().addClass('active');
    });
    $('.menu-box').on('click', function () {
        $(this).fadeOut().removeClass('active');
    });
    $('.exit-menu-box').on('click', function () {
        $('.menu-box').fadeOut().removeClass('active');
    });
    $('.menu-box .inner-menu').on('click', function (e) {
        e.stopPropagation();
    });

    // :: OWL Carousel Js Header Hero
    $('.header-owl').owlCarousel({
        loop: true,
        nav: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            991: {
                items: 1
            }
        }
    });

    // :: Animation Header
    $('.header-owl').on('translate.owl.carousel', function () {
        $('.header-owl .banner').removeClass('animated fadeOut').css('opacity', '0');
        $('.header .banner .headline-top').removeClass('animated fadeInUp').css('opacity', '0');
        $('.header .banner .handline').removeClass('animated fadeInUp').css('opacity', '0');
        $('.header .banner .about-website').removeClass('animated fadeInDown').css('opacity', '0');
        $('.header-hero.header-1 .head-info .buttons').removeClass('animated fadeInDown').css('opacity', '0');
    });
    $('.header-owl').on('translated.owl.carousel', function () {
        $('.header-owl .banner').removeClass('animated fadeIn').css('opacity', '1');
        $('.header .banner .headline-top').addClass('animated fadeInUp').css('opacity', '1');
        $('.header .banner .handline').addClass('animated fadeInUp').css('opacity', '1');
        $('.header .banner .about-website').addClass('animated fadeInDown').css('opacity', '1');
        $('.header .banner .btn-1').addClass('animated fadeInDown').css('opacity', '1');
    });

    // :: Owl Carousel Plugin
    $('.history-line').owlCarousel({
        loop: true,
        margin: 0,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            991: {
                items: 5
            }
        }
    });

    // :: OWL Carousel Js Case Study
    $('.owl-case-study').owlCarousel({
        loop: true,
        margin: 30,
        smartSpeed: 1000,
        autoplay: 2000,
        nav: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });

    // :: OWL Carousel Js Advisors
    $('.owl-advisors').owlCarousel({
        loop: false,
        margin: 30,
        smartSpeed: 1000,
        autoplay: 2000,
        nav: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });

    // :: OWL Carousel Js Partners
    $('.owl-partners').owlCarousel({
        loop: false,
        margin: 30,
        smartSpeed: 1000,
        
        
        
        mouseDrag: true,
        touchDrag: true,
        
        responsive: {
            0: {
                items: 2
            },
            320: {
                items: 3
            },
            991: {
                items: 6
            }
        }
    });

    // :: NiceSelect Plugin
    $('select').niceSelect();

    // :: OWL Carousel Js Sponsors Carousel
    $('.sponsors-box').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        margin: 30,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 2
            },
            575: {
                items: 3
            },
            768: {
                items: 4
            },
            991: {
                items: 6
            }
        }
    });

    // :: OWL Carousel Js Statistic
    $('.statistic-owl').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 1500,
        margin: 0,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 1
            },
            991: {
                items: 1
            }
        }
    });

    // :: OWL Carousel Js Testimonial
    $('.owl-testimonial').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        center: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        URLhashListener: true,
        startPosition: 'URLHash',
        mouseDrag: true,
        touchDrag: true,
        navText: ['<i class="flaticon-left-arrow"></i>', '<i class="flaticon-right-arrow"></i>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            991: {
                items: 1
            }
        }
    });

    // :: OWL Carousel Js Testimonials Carousel
    $('.owl-testimonial-1').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        margin: 10,
        center: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            991: {
                items: 1
            }
        }
    });
    $('.owl-testimonial-3').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        margin: 10,
        center: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });

    // :: Add Class Active On Go To Header
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 400) {
            $('.scroll-up').addClass('active');
        } else {
            $('.scroll-up').removeClass('active');
        }
    });
    
    // :: Skills Data Value
    $(window).on('scroll', function () {
        $('.skills .skill-box .skill-line .line').each(function () {
            var toQuestionsAndSkills =
                $(this).offset().top + $(this).outerHeight();
            var goToBottom =
                $(window).scrollTop() + $(window).height();
            var widthValue = $(this).attr('data-value');
            if (goToBottom > toQuestionsAndSkills) {
                $(this).css({
                    width: widthValue,
                    transition: 'all 2s ease'
                });
            }
        });
    });

    // :: Counter Up Js
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    
    // :: Add Dark Mode
    $('.dark-mode-decision').on('click', function () {
        $('body').toggleClass('active-dark-mode-decision');
    });

    $(document).ready(function() {
        /*=============================================
        =            ajax contact form active            =
        =============================================*/
    
        // Get the form.
        var form = $('#contact-form');
    
        // Get the messages div.
        var formMessages = $('.form-message');
    
        // Set up an event listener for the contact form.
        $(form).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();
    
            // Serialize the form data.
            var formData = $(form).serialize();

            console.log(formData)
    
            // Submit the form using AJAX.
            $.ajax({
                method: 'POST',
                dataType: "html",
                url: $(form).attr('action'),
                data: formData
            })
            .done(function(response) {
                console.log('done')
                console.log(response)
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');
    
                // Set the message text.
                $(formMessages).text(response);
    
                // Clear the form.
                //$('#contact-form input,#contact-form textarea').val('');
            })
            .fail(function(data) {
                console.log('fail')
                console.log(data)
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');
    
                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });
        });
    
        /*=====  End of ajax contact form active  ======*/
    });
    
}());

// :: Setup mouseenter On Case Study
$(document).ready(function () {
    $('.case-study-item').on('mouseenter', function (e) {
        x = e.pageX - $(this).offset().left,
            y = e.pageY - $(this).offset().top;
        $(this).find('span').css({
            top: y,
            left: x
        });
    });
    $('.case-study-item').on('mouseout', function (e) {
        x = e.pageX - $(this).offset().left,
            y = e.pageY - $(this).offset().top;
        $(this).find('span').css({
            top: y,
            left: x
        });
    });
});




//custom sidebar sections

$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;
        
		var links = this.el.find('.link');
		
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});


//product detail info 

let productInfo = document.querySelector('.product-detail-text-additional')
let productSpecs = document.querySelector('.product-detail-text-specs')

let buttonInfo = document.querySelector('.product-detail-text-additional-button')
let buttonSpecs = document.querySelector('.product-detail-text-specs-button')

if (buttonSpecs) {
    buttonSpecs.addEventListener('click', (e) => {
        e.preventDefault()
        productInfo.classList.remove('active')
        productSpecs.classList.add('active')
    })
}
if (buttonInfo) {
    buttonInfo.addEventListener('click', (e) => {
        e.preventDefault()
        productSpecs.classList.remove('active')
        productInfo.classList.add('active')
    })
}

//открытие формы
let summonButtons = document.querySelectorAll('.summonFormButton')
let formWrap = document.querySelector('#summonedFormWrap')
summonButtons.forEach((item) => {
    item.addEventListener('click', (e) => {
        e.preventDefault()
        formWrap.classList.add('active')
    })
})



//Закрытие формы
let closeFancybox = (e) => {
    e.preventDefault()
    formWrap.classList.remove('active')
}

formWrap.addEventListener('click', (e) => {
    if(e.target.id === 'summonedFormWrap') {
        closeFancybox(e)
    }
})