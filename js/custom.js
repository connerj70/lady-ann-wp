jQuery(document).ready(function($) {
    $.validator.messages.required = "Oops! This field is required."
    jQuery("#primaryPostForm").validate();

    /* Load More Post AJAX */
    var timesLoaded = 0;

    $('.load').on("click", function() {

    	var that = $(this);
    	var page = $(this).data('page');
    	var newPage = page + 1;
    	var ajaxUrl = $(this).data('url');

    	that.addClass('loading').find('.load-text').slideUp(320);

    	$.ajax({
    		url : ajaxUrl,
    		type: 'post',
    		data: {
    			page: page,
    			action: 'load_more'
    		},
    		error: function(err) {
    			console.log(err);
    		},
    		success: function(response) {
    			that.data('page', newPage);
    			$('.site-main').append(response);
    			that.removeClass('loading').find(".load-text").slideDown(320);
    		}
    	});

    }); 

    $(".bottom-banner-close").on('click', function() {
        $(".bottom-banner").css("display", "none");
    });

    $(".banner-btn").on('click', function() {
        $(".bottom-banner").css("display", "none");
    });

    
        $(window).scroll(function() {
               if($(window).scrollTop() + $(window).height() == $(document).height() && timesLoaded < 4 && window.location.pathname == '/' && window.location.search == "") {
                timesLoaded += 1;
                if(timesLoaded === 4) {
                    $(".load").css("display", "flex");
                } 
                var that = $(this);
                var page = $(this).data('page');
                var newPage = page + 1;
                var ajaxUrl = $(this).data('url');

                // that.addClass('loading').find('.load-text').slideUp(320);

                $.ajax({
                    url : ajaxUrl,
                    type: 'post',
                    data: {
                        page: page,
                        action: 'load_more'
                    },
                    error: function(err) {
                        console.log(err);
                    },
                    success: function(response) {
                        that.data('page', newPage);
                        $('.site-main').append(response);
                        that.removeClass('loading').find(".load-text").slideDown(320);

                        jQuery( document.body ).trigger( 'post-load' );


                    }
                });
               }
        }.bind($(".load")));

        jQuery( document.body ).on( 'post-load', function () {
                // New content has been added to the page.
                // console.log("POST LOAD TRIGGERED")
        } );


        $(".search-icon").on("click", function() {
            if($('.secondary-nav-search').hasClass('secondary-nav-search-visible')) {
                $(".secondary-nav-search").removeClass('secondary-nav-search-visible');
            } else {
                $('.secondary-nav-search').addClass('secondary-nav-search-visible')
                $(".secondary-nav-search").focus();
                $(".search-icon").addClass("search-icon-hidden");
                $(".search-times").removeClass("search-times-hidden");
                $(".search-times").addClass("search-times");
            }
        });

        $(".search-times").on("click", function() {
            $(".secondary-nav-search").removeClass("secondary-nav-search-visible");
            $(".search-times").addClass('search-times-hidden');
            $(".search-icon").removeClass("search-icon-hidden");
        });

        // $(".addtoany_share_save_container").prepend("SHARE: ");

        $(".code-block-1").append("<span class='close-ad'>X</span>");
        $(".close-ad").on("click", function() {
            $(".code-block-1").css("display", "none");
        });

        var carouselTracker = 1;

        $(".carousel-left-arrow").on("click", function() {
            carouselTracker = carouselTracker - 1;
            if(carouselTracker < 1) {
                carouselTracker = 3;
            }

            if(carouselTracker == 1) {
                $(".carousel-left-inner-container-1").css("display", "block");
                $(".carousel-right-inner-container-1").css("display", "block");
            } else if(carouselTracker != 1) {
                $(".carousel-left-inner-container-1").css("display", "none");
                $(".carousel-right-inner-container-1").css("display", "none");
            }
            if(carouselTracker == 2) {
                // $(".carousel-left-inner-container-1").addClass(".carousel-hidden");
                // $(".carousel-right-inner-container-1").toggleClass(".carousel-hidden");
                $(".carousel-left-inner-container-2").css("display", "block");
                $(".carousel-right-inner-container-2").css("display", "block");
            } else if(carouselTracker != 2) {
                $(".carousel-left-inner-container-2").css("display", "none");
                $(".carousel-right-inner-container-2").css("display", "none");
            }

             if(carouselTracker == 3) {
                // $(".carousel-left-inner-container-1").addClass(".carousel-hidden");
                // $(".carousel-right-inner-container-1").toggleClass(".carousel-hidden");
                $(".carousel-left-inner-container-3").css("display", "block");
                $(".carousel-right-inner-container-3").css("display", "block");
            } else if(carouselTracker != 3) {
                $(".carousel-left-inner-container-3").css("display", "none");
                $(".carousel-right-inner-container-3").css("display", "none");
            }
        })

        $(".carousel-right-arrow").on("click", function() {
             carouselTracker = carouselTracker + 1;
            if(carouselTracker > 3) {
                carouselTracker = 1;
            }
             if(carouselTracker == 1) {
                $(".carousel-left-inner-container-1").css("display", "block");
                $(".carousel-right-inner-container-1").css("display", "block");
            } else if(carouselTracker != 1) {
                $(".carousel-left-inner-container-1").css("display", "none");
                $(".carousel-right-inner-container-1").css("display", "none");
            }
            if(carouselTracker == 2) {
                // $(".carousel-left-inner-container-1").addClass(".carousel-hidden");
                // $(".carousel-right-inner-container-1").toggleClass(".carousel-hidden");
                $(".carousel-left-inner-container-2").css("display", "block");
                $(".carousel-right-inner-container-2").css("display", "block");
            } else if(carouselTracker != 2) {
                $(".carousel-left-inner-container-2").css("display", "none");
                $(".carousel-right-inner-container-2").css("display", "none");
            }
             if(carouselTracker == 3) {
                // $(".carousel-left-inner-container-1").addClass(".carousel-hidden");
                // $(".carousel-right-inner-container-1").toggleClass(".carousel-hidden");
                $(".carousel-left-inner-container-3").css("display", "block");
                $(".carousel-right-inner-container-3").css("display", "block");
            } else if(carouselTracker != 3) {
                $(".carousel-left-inner-container-3").css("display", "none");
                $(".carousel-right-inner-container-3").css("display", "none");
            }
        })

        var open1 = false;
        var open2 = false;
        var open3 = false;
        var open4 = false;
        var open5 = false;
        var open6 = false;

        $(".policy-box-1").on("click", function() {
            
            $(".expandable-content-1").toggle(".expandable-closed");
            if(open1 === false) {
                $(".expandable-arrow-1").css("transform", "rotate(90deg)");
                open1 = true;
            } else {
                $(".expandable-arrow-1").css("transform", "rotate(0deg)");
                open1 = false;
            }
            
        });

        $(".policy-box-2").on("click", function() {
            $(".expandable-content-2").toggle(".expandable-closed");
             if(open2 === false) {
                $(".expandable-arrow-2").css("transform", "rotate(90deg)");
                open2 = true;
            } else {
                $(".expandable-arrow-2").css("transform", "rotate(0deg)");
                open2 = false;
            }
        });

        $(".policy-box-3").on("click", function() {
            $(".expandable-content-3").toggle(".expandable-closed");
             if(open3 === false) {
                $(".expandable-arrow-3").css("transform", "rotate(90deg)");
                open3 = true;
            } else {
                $(".expandable-arrow-3").css("transform", "rotate(0deg)");
                open3 = false;
            }
        });

        $(".policy-box-4").on("click", function() {
            $(".expandable-content-4").toggle(".expandable-closed");
             if(open4 === false) {
                $(".expandable-arrow-4").css("transform", "rotate(90deg)");
                open4 = true;
            } else {
                $(".expandable-arrow-4").css("transform", "rotate(0deg)");
                open4 = false;
            }
        });

        $(".policy-box-5").on("click", function() {
            $(".expandable-content-5").toggle(".expandable-closed");
             if(open5 === false) {
                $(".expandable-arrow-5").css("transform", "rotate(90deg)");
                open5 = true;
            } else {
                $(".expandable-arrow-5").css("transform", "rotate(0deg)");
                open5 = false;
            }
        });

        $(".policy-box-6").on("click", function() {
            $(".expandable-content-6").toggle(".expandable-closed");
             if(open6 === false) {
                $(".expandable-arrow-6").css("transform", "rotate(90deg)");
                open6 = true;
            } else {
                $(".expandable-arrow-6").css("transform", "rotate(0deg)");
                open6 = false;
            }
        });

        $(".policy-privacy").on('click', function() {
            $(".policy-expand-container-2").removeClass('policy-expand-container-hidden');
            $(".policy-privacy").addClass("policy-pink-bottom");
            $(".policy-terms").removeClass("policy-pink-bottom");
            $(".policy-cookie").removeClass("policy-pink-bottom");
            $(".policy-expand-container-1").addClass("policy-expand-container-hidden");
            $(".policy-expand-container-3").addClass("policy-expand-container-hidden");

        });

        $(".policy-cookie").on('click', function() {
            $(".policy-privacy").removeClass("policy-pink-bottom");
            $(".policy-terms").removeClass("policy-pink-bottom");
            $(".policy-cookie").addClass("policy-pink-bottom");
            $(".policy-expand-container-3").removeClass('policy-expand-container-hidden');
            $(".policy-expand-container-1").addClass("policy-expand-container-hidden");
            $(".policy-expand-container-2").addClass("policy-expand-container-hidden");

        });

        $(".policy-terms").on('click', function() {
            $(".policy-privacy").removeClass("policy-pink-bottom");
            $(".policy-terms").addClass("policy-pink-bottom");
            $(".policy-cookie").removeClass("policy-pink-bottom");
            $(".policy-expand-container-1").removeClass('policy-expand-container-hidden');
            $(".policy-expand-container-2").addClass("policy-expand-container-hidden");
            $(".policy-expand-container-3").addClass("policy-expand-container-hidden");

        });

        $(".menu-toggle").on('click', function() {
            $('.secondary-nav-container').toggle('small-nav-opacity');
            $('.site-content').toggle("small-nav-opacity");
            $('.site-footer').toggle("small-nav-opacity");
            $('.nav-menu').append()
        });

    /* scroll functions */
    // var lastScroll = 0;
    // $(window).scroll(function() {
    //     var scroll = $(window).scrollTop();

    //     if(Math.abs(scroll - lastScroll) > $(window).height() * 0.1) {
    //         lastScroll = scroll;
    //         $('.page-limit').each(function(index) {

    //             if(isVisible($(this))) {
    //                 history.replaceState( null, null, $(this).attr("data-page") );
    //                 return (false);
    //             }

    //         });
    //     }
    // });

    // function isVisible(el) {
    //     var scrollPos = $(window).scrollTop();
    //     var windowHeight = $(window).height();
    //     var elTop = $(el).offset().top;
    //     var elHeight = $(el).height();
    //     var elBottom = elTop + elHeight;

    //     return ((elBottom - elHeight * 0.25 > scrollPos) && (elTop < (scrollPos + 0.5*windowHeight)));
    // }

    // $('.search-icon').on('click', function() {
    //     $(".secondary-nav-search").toggle('search-hidden');
    // });
});












