window.onresize = function fixheight() {
    $('.big-image > figure').css("min-height", "0");
}
$(window).paroller();
$(window).scroll(function() {
    var scrolled = $(window).scrollTop();
    if(scrolled >= 600) {
        $('nav').addClass('navbar-fixed');
        $('nav').css('left', 0 - $(this).scrollLeft());
    } else {
        $('nav').removeClass('navbar-fixed');
    }
});

$(document).ready(function() {
    resizeImg();
    $("a").click(function() {
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
});
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

function executeThumbs(selector) {
    $(selector).slick({
        infinite: true,
        dots: true,
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
    console.log($('.thumbs-active figure')[0]);
}

var thumb_bani = false;
var thumb_houses = false;
var thumb_inter = false;
var thumb_land = false;
var thumb_outside = false;
var thumb_inside = false;

$('.galery-menu > .btn').click(function() {
    if($(this).hasClass('btn-s')) {
        return;
    };
    $('.galery-menu').children().removeClass('btn-s');
    $(this).addClass('btn-s');
    $('.thumbs-active').removeClass('thumbs-active');

    if($(this).hasClass('galery-all')) {
        $('.thumbs-all').addClass('thumbs-active');
        $('.thumbs-active figure')[10].click();
    }

    if($(this).hasClass('galery-bani')) {
        if(thumb_bani == false) {
            executeThumbs('.thumbs-bani');
            thumb_bani = true;
        }
        $('.thumbs-bani').addClass('thumbs-active');
        $('.thumbs-active figure')[0].click();
    }

    if($(this).hasClass('galery-houses')) {
        if(thumb_houses == false) {
            executeThumbs('.thumbs-houses');
            thumb_houses = true;
        }
        $('.thumbs-houses').addClass('thumbs-active');
        $('.thumbs-active figure')[0].click();
    }

    if($(this).hasClass('galery-inter')) {
        if(thumb_inter == false) {
            executeThumbs('.thumbs-inter');
            thumb_inter = true;
        }
        $('.thumbs-inter').addClass('thumbs-active');
        $('.thumbs-active figure')[0].click();
    }

    if($(this).hasClass('galery-land')) {
        if(thumb_land == false) {
            executeThumbs('.thumbs-land');
            thumb_land = true;
        }
        $('.thumbs-land').addClass('thumbs-active');
        $('.thumbs-active figure')[0].click();
    }

    if($(this).hasClass('galery-outside')) {
        if(thumb_outside == false) {
            executeThumbs('.thumbs-outside');
            thumb_outside = true;
        }
        $('.thumbs-outside').addClass('thumbs-active');
        $('.thumbs-active figure')[0].click();
    }

    if($(this).hasClass('galery-inside')) {
        if(thumb_inside == false) {
            executeThumbs('.thumbs-inside');
            thumb_inside = true;
        }
        $('.thumbs-inside').addClass('thumbs-active');
        $('.thumbs-active figure')[0].click();
    }
});

function loadImgs($count, $name, $alt) {
    $figure = "<figure itemprop=\"associatedMedia\" itemscope itemtype=\"http://schema.org/ImageObject\">";
    $figureclose = "</figure>";
    $linkclose = "</a>";
    $content = "";
    for(var i = 1; i < $count; i++) {
        $link = "<a href=\"./images/portfolio/" + $name + "/" + i + ".jpg\" itemprop=\"contentUrl\" data-size=\"1200x800\">";
        $img = "<img src=\"./images/portfolio/" + $name + "_preview/" + i + ".jpg\" itemprop=\"thumbnail\" alt=\"" + $alt + "\" />";
        $content = $figure + $link + $img + $linkclose + $figureclose;
        $('.thumbs-all').append($content);
        $('.thumbs-' + $name).append($content);
    }
}

loadImgs(41, 'bani', 'Баня');
loadImgs(1, 'wood', 'Деревянный дом');
loadImgs(35, 'inter', 'Интерьер');
loadImgs(31, 'land', 'Ландшафт');
loadImgs(128, 'outside', 'Надворные постройки');
loadImgs(31, 'inside', 'Отделка');

// execute above function
executeThumbs('.thumbs-all');


$('.thumbs-all img')[10].click();
