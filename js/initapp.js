$(document).ready(function() {
    resizeImg();

    $btnMore = "<a href=\"#\" class=\"btn-more\">Показать описание полностью.</a>";
    $('.sliders .description').each(function() {
        $($btnMore).insertAfter(this);
    })
    
    executeThumbs('.thumbs-all');
    $('.sliders').slick({
        infinite: true,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    addBtnsMore();
    $(window).paroller();

    $('.big-image a').click(function(event) {
        event.preventDefault();
        return false;
    })

    $('.galery-menu > .btn').click(function() {
        if($(this).hasClass('btn-s')) {
            return;
        };
        $('.galery-menu').children().removeClass('btn-s');
        $(this).addClass('btn-s');
        $('.thumbs-active').removeClass('thumbs-active');
    
        if($(this).hasClass('galery-all')) {
            $('.big-image').css('display', 'block');
            $('.re').css('display', 'none');
            $('.thumbs-all').addClass('thumbs-active');
            $('.thumbs-active figure')[10].click();
        }
    
        changeThumb(this, 'wood');
        changeThumb(this, 'stone');
        changeThumb(this, 'outside');
        changeThumb(this, 'inter');
        changeThumb(this, 'sys');
        changeThumb(this, 'work');
        changeRe(this);
        
    });

    window.onresize = function fixheight() {
        $('.big-image > figure').css("min-height", "0");
    }
    
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        if(scrolled >= 600) {
            $('nav').addClass('navbar-fixed');
            $('nav').css('left', 0 - $(this).scrollLeft());
        } else {
            $('nav').removeClass('navbar-fixed');
        }
    });
    
    $(window).resize(function() {
        resizeImg();
    })
    
    $("li a, a.btn, a.photos").click(function() {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 800);
        return false;
    });
    
    $("#accept").click(function() {
        $("#checkb").prop('checked', true);
    });
    
    $("#decl").click(function() {
        $("#checkb").prop('checked', false);
    });

    $('.photos').click(function() {
        $('.' + $(this).attr('change')).click();
    })
});

function addBtnsMore() {
    $btnMore = "<a href=\"#\" class=\"btn-more\">Показать описание полностью.</a>";
    $('.slick-initialized .description').each(function() {
        $h = $(this).css("height");
        if($h > 400) {
            $(this).css("height", "300px");
            $($btnMore).insertAfter(this);
        }
    })
}

function executeThumbs(selector) {
    $(selector).slick({
        infinite: false,
        dots: false,
        slidesToShow: 10,
        slidesToScroll: 10,
        responsive: [
            {
                breakpoint: 1560,
                settings: {
                    dots: false
                }
            },
            {
                breakpoint: 1640,
                settings: {
                    slidesToShow: 8,
                    slidesToScroll: 8
                }
            },
            {
                breakpoint: 1300,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 6,
                    dots: false
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    dots: false
                }
            }
        ]
    });
    initPhotoSwipeFromDOM(selector);
}

function changeThumb(sel, name) {
    if($(sel).hasClass('galery-' + name)) {
        $('.big-image').css('display', 'block');
        $('.re').css('display', 'none');
        if(!$('.thumbs-' + name).hasClass('slick-initialized')) {
            executeThumbs('.thumbs-' + name); 
        }
        $('.thumbs-' + name).addClass('thumbs-active');
        $('.thumbs-active figure')[0].click();
        return true;
    }
}

function changeRe(sel) {
    if($(sel).hasClass('galery-re')) {
        $('.big-image').css('display', 'none');
        $('.re').css('display', 'block');
        changeThumb(this, 're');
    }
}
