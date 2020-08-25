/*
 Theme Name: Insut
 Theme URI: 
 Author: Mosharof
 Author URI: 
 Description: Insut - Insurance HTML5 Responsive Template
 Version: 1.0
 License:
 License URI:
 */
 
/*=======================================================================
 [Table of contents]
 =========================================================================
 1. Hero Slider
 2. Progress Bar
 3. Fun Fact Count
 4. Quote Service Slider 
 5. Form Slider Range
 6. Vido Popup
 7. Testimonial Slider
 8. Back To Top
 9. Select 2
 10. Hero Slider 02
 11. Testimonial Slider 02
 12. Testimonial Slider 03
 13. Accordian Custom Class
 14. Service Relative Slider
 15. Case Suffle
 16. Case Relative Slider
 17. Testimonial Slider 04
 */

(function ($) {
    'use strict';

   
    /*--------------------------------------------------------
     / 2. Progress Bar
     /----------------------------------------------------------*/
    if($(".progress-bar").length > 0)
    {
        $('.progress-bar').appear();
        $('.progress-bar').on('appear', loadSkills);
    }
    var coun = true;
    function loadSkills()
    {
        $(".progress-bar").each(function () {
            var datacount = $(this).attr("data-parcent");
            $(".skill", this).animate({'width': datacount + '%'}, 2000);
            if (coun)
            {
                $(this).find('.prc').each(function () {
                    var $this = $(this);
                    $({Counter: 0}).animate({Counter: datacount}, {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.ceil(this.Counter) + '%');
                        }
                    });
                });

            }
        });
        coun = false;
    }

    /*--------------------------------------------------------
    / 3. Fun Fact Count
    /----------------------------------------------------------*/
     var skl = true;
    $('.timer').appear();
    $('.timer').on('appear', function () {
        if (skl)
        {
            $('.timer').each(function () {
                var $this = $(this);
                jQuery({Counter: 0}).animate({Counter: $this.attr('data-counter')}, {
                    duration: 3000,
                    easing: 'swing',
                    step: function () {
                        var num = Math.ceil(this.Counter).toString();
                        $this.html(num);
                    }
                });
            });
            skl = false;
        }
    });

  

    /*--------------------------------------------------------
    / 5. Form Slider Range
    /----------------------------------------------------------*/
    if ($('#slider-range').length > 0) {
        $('#slider-range').slider({
            range: "min",
            min: 1,
            max: 8000,
            value: 5890,
            slide: function (event, ui) {
                $("#amount").html("$" + ThousandSeparate(ui.value));
                $("#amount_hide").html("$" + ThousandSeparate(ui.value));
            }
        });
        $("#amount").html("$" + ThousandSeparate($("#slider-range").slider("value")) );
        $("#amount_hide").html("$" + ThousandSeparate($("#slider-range").slider("value")) );
        function ThousandSeparate(val) {
            while (/(\d+)(\d{3})/.test(val.toString())){
              val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
            }
            return val;
        }
    }
    
     
    /*--------------------------------------------------------
    / 6. Vido Popup
    /----------------------------------------------------------*/
    $('.popup-video').lightcase({
        transition: 'elastic',
        showSequenceInfo: false,
        slideshow: false,
        swipe: true,
        showTitle: false,
        controls: true
    });

   

    /*--------------------------------------------------------
    / 8. Back To Top
    /----------------------------------------------------------*/
    $("body, html").on("click", "#backtotop", function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 800);
    });
    
    /*--------------------------------------------------------
    / 9. Select 2 
    /----------------------------------------------------------*/
    $(document).ready(function() {
        $('.select-agent select').select2({
            width: 'resolve'
        });
        $('.quote-form select').select2({
            width: 'resolve'
        });
    });

    


   

    /*--------------------------------------------------------
    / 13. Accordian Custom 
    /----------------------------------------------------------*/
     $('#accordion')
        .on('show.bs.collapse', function (e) {
        $(e.target).parent('.sf').addClass('active');
    })
       .on('hide.bs.collapse', function (e) {
       $(e.target).parent('.sf').removeClass('active');
    });
    /*--------------------------------------------------------
    / 14. Service Relative Slider
    /----------------------------------------------------------*/
    if($(".relative-slider").length > 0){
       $('.relative-slider').owlCarousel({
            loop: true,
            margin: 30,
            responsiveClass: true,
            dots: false,
            smartSpeed: 700,
            center: false,
            nav: true,
            navText: ['<i class="icofont-arrow-left"></i>', '<i class="icofont-arrow-right"></i>'],
            items: 3,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    }
   
    /*--------------------------------------------------------
    / 16. Case Relative Slider
    /----------------------------------------------------------*/
    if($(".case-relative-slider").length > 0){
       $('.case-relative-slider').owlCarousel({
            loop: true,
            margin: 30,
            responsiveClass: true,
            dots: false,
            smartSpeed: 700,
            center: false,
            nav: true,
            navText: ['<i class="icofont-arrow-left"></i>', '<i class="icofont-arrow-right"></i>'],
            items: 3,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    }


        /*---------------------------------
           17 COMMENTS
        ----------------------------------*/
        var comment_form = $('textarea#comment');
        if (comment_form.length) {
            $('textarea#comment').html($('textarea#comment').html().trim());
        }

   

})(jQuery);