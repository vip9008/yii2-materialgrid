// global vars
var last_scroll_position = 0;

$(document).ready(function() {
    init();

    last_scroll_position = section_title();
});

$(window).scroll(function () {
    last_scroll_position = section_title();
});

function init() {
    // var top_bar_title = '#page-content > .top-bar .section-title';
    // var section_title = '#page-content > .page-header .page-title';
    // $(top_bar_title).html($(section_title).html());

    // var no_scroll = document.getElementById('page-content-overlay');
    // no_scroll.addEventListener('touchmove', function(e) {
    //  e.preventDefault();
    // }, false);

    $('#page-content-overlay').click(function() {
        side_nav_close();
    });

    $('#side-nav > .side-nav-container > .nav > .nav-block > a.dropdown').click(function() {
        if ($(this).parent().hasClass('active')) {
            $(this).siblings('.sub-menu').slideUp('fast', function() {
                $(this).parent().removeClass('active');
            });
        } else {
            $(this).siblings('.sub-menu').slideDown('fast', function() {
                $(this).parent().addClass('active');
            });
        }
    });
}

function section_title() {
    var scroll = top_bar_effect();
    if ($('#page-content').hasClass('animate-header')) {
        var selector1 = '#page-content > .page-header .page-title';
        var selector2 = '#page-content > .top-bar .section-title';
        if (scroll > last_scroll_position) {
            if (scroll >= 80 && !$(selector1).hasClass('fade-out')) {
                $(selector1).addClass('fade-out');
                $(selector2).addClass('fade-in');
            }
        } else {
            if (scroll <= 80 && $(selector1).hasClass('fade-out')) {
                $(selector1).removeClass('fade-out');
                $(selector2).removeClass('fade-in');
            }
        }
    }

    return scroll;
}

function top_bar_effect() {
    var scroll = $(window).scrollTop();
    if ($('#page-content').hasClass('animate-header')) {
        var bar = '#page-content > .top-bar';
        var header = '#page-content > .page-header';
        var height = $(header).outerHeight();
        if (scroll > last_scroll_position) {
            if (scroll >= (height - 64) && !$(bar).hasClass('active')) {
                $(bar).addClass('active').removeClass('blend');
            }
        } else {
            if (scroll <= (height - 64) && $(bar).hasClass('active')) {
                $(bar).removeClass('active').addClass('blend');
            }
        }
    }

    // section_hash_detect(scroll);

    return scroll;
}

function section_hash_detect(scroll) {
    $('section.chapter').each(function(){
        if ($(this).is('[id]') && window.location.hash != ('#' + $(this).attr('id'))) {
            var element_top = $(this).offset().top;
            var element_height = $(this).height();
            var margin = 0;
            if (element_top < (scroll + margin) && (element_top + element_height) > (scroll + margin)) {
                // causing issue when the section is not reached at the end of the page (no more scroll & prev. section in view)
                // var hash_code = '#' + $(this).attr('id');
                //     $('a[href="' + hash_code + '"]').each(function() {
                //     $(this).parent().children('a.active').removeClass('active');
                //     $(this).addClass('active');
                // });

                window.location.hash = $(this).attr('id');
                $(window).scrollTop(scroll);
                return;
            }
        }
        return;
    });
}

function side_nav_open() {
    $('body').addClass('side-nav-expand');
}

function side_nav_close() {
    $('body').removeClass('side-nav-expand');
}