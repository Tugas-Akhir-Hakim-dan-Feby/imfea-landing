(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();
    
    
   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Team carousel
    $(".team-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: false,
        dots: false,
        loop: true,
        margin: 50,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Testimonial carousel

    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: true,
        dots: true,
        loop: true,
        margin: 0,
        nav : true,
        navText: false,
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


     // Fact Counter

     $(document).ready(function(){
        $('.counter-value').each(function(){
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            },{
                duration: 2000,
                easing: 'easeInQuad',
                step: function (now){
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });


     // Sticky Navbar
     $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.navbar').addClass('navbar-scrolllll');
        } else {
            $('.navbar').removeClass('navbar-scrolllll');
        }

        
        // Ubah warna teks navbar berdasarkan bagian yang aktif
        $('.navbar .navbar-nav .nav-link').each(function () {
            var targetSection = $($(this).attr('href'));
            if (targetSection.length) {
                if (
                    targetSection.offset().top <= $(window).scrollTop() &&
                    targetSection.offset().top + targetSection.outerHeight() > $(window).scrollTop()
                ) {
                    $(this).addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            }
        });

    });


})(jQuery);

function handleScroll() {
    var navbarLinks = document.querySelectorAll('.navbar .navbar-nav .nav-link');
    var aboutSection = document.getElementById('about'); // Ganti dengan id dari bagian yang ingin di-highlight

    // Hapus kelas 'active' dari semua elemen navbar
    navbarLinks.forEach(function (link) {
        link.classList.remove('active');
    });

    // Ubah warna teks navbar berdasarkan bagian yang aktif
    navbarLinks.forEach(function (link) {
        var targetSection = document.getElementById(link.getAttribute('href').substring(1));
        if (targetSection) {
            var targetSectionTop = targetSection.offsetTop;
            var targetSectionBottom = targetSectionTop + targetSection.offsetHeight;

            if (window.scrollY >= targetSectionTop && window.scrollY < targetSectionBottom) {
                link.classList.add('active');
            }
        }
    });

    // Ubah warna navbar saat scroll
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 100) {
        navbar.classList.add('navbar-scrolllll');
    } else {
        navbar.classList.remove('navbar-scrolllll');
    }
}
