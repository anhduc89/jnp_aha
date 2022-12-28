$( document ).ready(function() {

    // function for init owl-carousel
    function portfolioCarousel($activeTab, $productPortfolioContainer) {
        var classFilter = '.owl-carousel'+ ($activeTab.attr("data-filter")?$activeTab.attr("data-filter"):'.all');
        var $activeCarousel = $productPortfolioContainer.children(classFilter);

        $productPortfolioContainer.children('.portfolio-list').hide();
        $productPortfolioContainer.find('.lds-hourglass').show();
        $activeCarousel.show();

        if (!$activeCarousel.data('owlcarousel-init')) {
            $activeCarousel.on('initialized.owl.carousel', function(event) {
                // fake loading
                setTimeout(function() {
                    $productPortfolioContainer.find('.lds-hourglass').hide();
                }, 200);
            });

            // init slider
            $activeCarousel.owlCarousel({
                loop:false,
                margin:10,
                nav:true,
                dotsContainer: '.portfolio-dots',
                responsive:{
                    0:{
                        items:1,
                        nav:false,
                        margin:0,
                    },
                    600:{
                        items:2,
                    },
                    1000:{
                        items:3
                    }
                }
            });
            $activeCarousel.data('owlcarousel-init', true);
        } else {
            // fake loading
            setTimeout(function() {
                $productPortfolioContainer.children('.productPortfolioContainer').hide();
                $productPortfolioContainer.find('.lds-hourglass').hide();
                $activeCarousel.show();
            }, 200);
        }
    }

    // // protfolio filters
    // var $productFilterList = $('.section.portfolio-section .filters');
    // var $productPortfolioContainer = $(".section.portfolio-section .portfolio-container");
    // var $activeTab = $productFilterList.find('a.active');
    // portfolioCarousel($activeTab, $productPortfolioContainer);
    
    // $productFilterList.find('a').on('click', function(e) {
    //     e.preventDefault();
    //     $productFilterList.find('.active').removeClass("active");
    //     $(this).addClass("active");

    //     portfolioCarousel($(this), $productPortfolioContainer);
    // });

    
    // for scroll to section at header
    $('.header .mouse-icon').on('click', function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top - 50
        }, 500);
    });

    // slider for customers section
    $('.blog-section .customers').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        dotsContainer: '.blog-dots',
        responsive:{
            0:{
                items:1,
                nav:false,
                margin:0,
            },
            600:{
                items:2,
            },
            1000:{
                items:3
            }
        }
    });

    // navigation: languages dropdown
    $(document).click(function(){
        if ($(window).width() >= 768) {
            $('.nav-item.languages').removeClass('active');
            $(".navbar .navbar-nav .language-list").slideUp();
        }
    });

    $('.nav-item.languages').on('click', function(event) {
        event.stopPropagation();

        if (!$(this).hasClass('active')) {
            $(this).children('.language-list').slideDown();
            $(this).addClass('active');
        } else {
            $(this).children('.language-list').slideUp();
            $(this).removeClass('active');
        }
    });

    // mobile for add backgroud when menu showing
    $('#navbarSupportedContent').on('hidden.bs.collapse', function () {
        $('body').removeClass('navbar-show');
    });
    
    $('#navbarSupportedContent').on('show.bs.collapse', function () {
        $('body').addClass('navbar-show');
    });

});