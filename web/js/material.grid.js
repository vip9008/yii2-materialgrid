$(document).ready(function() {
    material_grid_init();
});

$(window).on('windowResize', function() {
    window_width();
});

$(window).resize(function() {
    if (this.win_resize) {
        clearTimeout(this.win_resize);
    }

    this.win_resize = setTimeout(function() {
        $(this).trigger('windowResize');
    }, 500); 
});

function select_menu_width() {
    var max_width = 96;
    var chunk = 64;
    var margin = 24;

    if ($('body').hasClass('width-sm')) {
        max_width = 112;
        chunk = 56;
        margin = 16;
    }

    $('.select-control').each(function() {
        var width = $(this).removeAttr('style').children('.select-menu').removeAttr('style').width();
        // console.log(width);
        if (width > max_width) {
            $(this).width(width);
            width = width + margin;
            width = Math.ceil((width / chunk).toFixed(1)) * chunk;
            $(this).children('.select-menu').width(width);
        }
    });
}

function window_width() {
    var viewport_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    if (viewport_width >= 840) {
        if ($('body').hasClass('width-lg')) {
            return false;
        }
        $('body').removeClass('width-md width-sm').addClass('width-lg');
    } else if (viewport_width >= 600) {
        if ($('body').hasClass('width-md')) {
            return false;
        }
        $('body').removeClass('width-lg width-sm').addClass('width-md');
    } else {
        if ($('body').hasClass('width-sm')) {
            return false;
        }
        $('body').removeClass('width-lg width-md').addClass('width-sm');
    }

    select_menu_width();
    return true;
}

function material_grid_init() {
    window_width();

    $('a[href*="#"]:not([href="#"])').on('click', function() {
        var hash_code = $(this).attr('href');
        $('a[href="' + hash_code + '"]').each(function() {
            $(this).parent().children('a.active').removeClass('active');
            $(this).addClass('active');
        });

        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top + 10
                }, 500);
                return false;
            }
        }
    });

    $('.checkbox-input > .checkbox > input').each(function() {
        if ($(this).val() == '1') {
            $(this).parent('.checkbox').parent('.checkbox-input').addClass('active');
            return;
        }
        return;
    });

    $('.checkbox-input').on('click', function() {
        if ($(this).hasClass('disabled')) {
            return false;
        }

        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
            $(this).children('.checkbox').children('input').val(1);
            return true;
        } else {
            $(this).removeClass('active');
            $(this).children('.checkbox').children('input').val(0);
            return true;
        }
    });

    $('.data-table > table > tbody > tr').on('click', 'td.control > .checkbox-input', function() {
        if (!$(this).hasClass('active')) {
            $(this).parent('.control').parent('tr').addClass('seleceted');
        } else {
            $(this).parent('.control').parent('tr').removeClass('seleceted');
        }

        var rows = $(this).parents('tbody').children('tr').size();
        var seleceted = $(this).parents('tbody').children('tr.seleceted').size();
        var checkbox = $(this).parents('tbody').siblings('thead').children('tr').children('th.control').children('.checkbox-input');
        if (rows == seleceted) {
            $(checkbox).addClass('active');
            $(checkbox).children('.checkbox').children('input').val(1);
        } else {
            $(checkbox).removeClass('active');
            $(checkbox).children('.checkbox').children('input').val(0);
        }
    });

    $('.data-table > table > thead > tr').on('click', 'th.control > .checkbox-input', function() {
        if (!$(this).hasClass('active')) {
            $(this).parents('thead').siblings('tbody').children('tr').children('td.control').children('.checkbox-input').each(function() {
                if (!$(this).hasClass('active')) {
                    $(this).addClass('active');
                    $(this).children('.checkbox').children('input').val(1);
                }
            });
        } else {
            $(this).parents('thead').siblings('tbody').children('tr').children('td.control').children('.checkbox-input').each(function() {
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                    $(this).children('.checkbox').children('input').val(0);
                }
            });
        }
    });

    $('.radiobutton-input > .radio > input').each(function() {
        if ($(this).prop('checked')) {
            $(this).parent('.radio').parent('.radiobutton-input').addClass('active');
            return;
        }
        return;
    });

    $('.radiobutton-input').on('click', function() {
        if ($(this).hasClass('disabled')) {
            return false;
        }

        if (!$(this).hasClass('active')) {
            $(this).parent('.radiobutton-group').children('.radiobutton-input').removeClass('active');
            $(this).addClass('active');
            $(this).children('.radio').children('input').click();
            return true;
        }
    });

    $('.select-control').on('click', '.select-value', function() {
        if ($(this).parent('.select-control').hasClass('active')) {
            $(this).parent('.select-control').removeClass('active');
            $(this).siblings('.select-menu').css('margin-top', '');
        } else {
            $(this).parent('.select-control').addClass('active');

            if ($('body').hasClass('width-sm') && $(this).parent('.select-control').hasClass('default-menu')) {
                var index = $(this).siblings('.select-menu').children('.menu-item.active').index();
                var position = -14;
                if (index > 0) {
                    position = position - (index * 48);
                    $(this).siblings('.select-menu').css('margin-top', position);
                }
            }
        }
    });

    $('.select-control').on('click', '.select-overlay', function() {
        $(this).parent('.select-control').removeClass('active');
        $(this).siblings('.select-menu').css('margin-top', '');
    });

    $('.select-control .select-menu').on('click', '.menu-item', function() {
        $(this).addClass('active');
        $(this).siblings('.menu-item').removeClass('active');
        $(this).parent('.select-menu').css('margin-top', '').parent('.select-control').removeClass('active');
        $(this).parent('.select-menu').parent('.select-control').children('.select-value').html($(this).html());
        $(this).parent('.select-menu').parent('.select-control').children('input').val($(this).attr('data-value'));
    });

    $('.expansion-panel .panel').on('click', '.icon', function() {
        if (!$(this).parent('.panel').hasClass('active')) {
            $(this).parent('.panel').siblings('.panel.active').removeClass('active');
            $(this).parent('.panel').addClass('active');
        } else {
            $(this).parent('.panel').removeClass('active');
        }
    });

    $('.form-input').each(function() {
        if ($(this).children('.text-input').val().length) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });

    $('.form-input .text-input').on('change', function() {
        if($(this).val().length) {
            $(this).parent('.form-input').addClass('active');
        } else {
            $(this).parent('.form-input').removeClass('active');
        }
    });

    $('.form-input.has-count .text-input').on('keyup change click blur', function() {
        var count = $(this).val().length;
        var max = $(this).attr('maxLength');
        $(this).siblings('.hint').children('.char-count').html(max - count);
    });
}