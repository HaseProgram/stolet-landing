$(document).ready(function() {
    resizeImg();

    $btnMore = "<a href=\"#\" class=\"btn-more\">Показать описание полностью.</a>";
    $('.sliders .description').each(function() {
        $($btnMore).insertAfter(this);
    })

    loadImgs(22, 'wood', 'wood', 'Деревянный дом');
    loadImgs(0, 'stone', 'stone', 'Каменный дом');
    loadImgs(41, 'bani', 'bani', 'Баня');
    loadImgs(35, 'inter', 'inter', 'Интерьер');
    loadImgs(128, 'outside', 'outside', 'Надворные постройки');
    loadImgs(31, 'inside', 'inter', 'Отделка');
    
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

    $first = true;
    $('.big-image a').click(function(event) {
        event.preventDefault();
        if($first) {
            console.log('click')
            $('.thumbs-all img')[10].click();
            var poll = setInterval(function () {
                $('.big-image img').click();
                clearInterval(poll);
            }, 10);
            $first = false;
        }
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
        changeThumb(this, 'bani');
        changeThumb(this, 'inter');
        //changeThumb(this, 'land');
        changeThumb(this, 'outside');
        changeThumb(this, 'inside');
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

function loadImgs($count, $path, $name, $alt) {
    $figure = "<figure itemprop=\"associatedMedia\" itemscope itemtype=\"http://schema.org/ImageObject\">";
    $figureclose = "</figure>";
    $linkclose = "</a>";
    $content = "";
    for($i = 1; $i < $count; $i++) {
        $src = "./images/portfolio/" + $path + "/" + $i + ".jpg";
        $srcprev = "./images/portfolio/" + $path + "_preview/" + $i + ".jpg";
        $class = $path + $i;
        $link = "<a class=\"" + $class + "\" href=\"" + $src + "\" itemprop=\"contentUrl\">";
        $content = $figure + $link + $linkclose + $figureclose;
        $('.thumbs-all').append($content);
        $('.thumbs-' + $name).append($content);

        $img = document.createElement('img');   
        $img.src = $srcprev;
        $img.setAttribute('alt', $alt);
        $img.setAttribute('data-for', $class);
        $img.onload = function() {
            $h = 0; $w = 0;
            $class = this.getAttribute('data-for');
            if (this.naturalWidth) {
                $w = this.naturalWidth * 20;
                $h = this.naturalHeight * 20;
                $('.' + $class).attr('data-size', $w + 'x' + $h);
            } else {
                $('.' + $class).attr('data-size', '600x800');
            }
            $('.' + $class).append(this);
        }
    }
}
