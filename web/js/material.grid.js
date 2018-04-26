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
        if ($(this).hasClass('list-menu')) {
            return;
        }
        
        var width = $(this).css('width', '').children('.select-menu').css('width', '').width();
        var label_width = $(this).css('width', '').children('.select-value').css('width', '').outerWidth();

        if (width > max_width) {
            if (!$(this).hasClass('context-menu')) {
                $(this).width(width);
                width = width + margin;
            }
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

function activate_snackbar() {
    var snackbar = $('#snackbars > .item').first();
    if (snackbar.length) {
        $(snackbar).addClass('active');
        setTimeout(function() {
            $('#snackbars > .item.active').removeClass('active').delay(300).queue(function(next) {
                $(this).remove();
                activate_snackbar();
                next();
            });
        }, 3000);
    }
}

function material_grid_init() {
    window_width();

    activate_snackbar();

    $(window).on('click', function(e) {
        $('.select-control.active').removeClass('active');
    });

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

    $('#snackbars').on('click', '.item a.control.close', function() {
        $(this).parent().remove();
    });

    $('.checkbox-input > .checkbox > input').each(function() {
        if ($(this).val() == '1') {
            $(this).parent('.checkbox').parent('.checkbox-input').addClass('active');
            return;
        }
        return;
    });

    $('body').on('click', '.checkbox-input', function() {
        if ($(this).hasClass('disabled')) {
            return false;
        }

        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
            $(this).children('.checkbox').children('input').val(1).trigger('change');
            return true;
        } else {
            $(this).removeClass('active');
            $(this).children('.checkbox').children('input').val(0).trigger('change');
            return true;
        }
    });

    $('.data-table table > tbody > tr').on('click', 'td.control > .checkbox-input', function() {
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
            $(checkbox).children('.checkbox').children('input').val(1).trigger('change');
        } else {
            $(checkbox).removeClass('active');
            $(checkbox).children('.checkbox').children('input').val(0).trigger('change');
        }
    });

    $('.data-table table > thead > tr').on('click', 'th.control > .checkbox-input', function() {

        if (!$(this).hasClass('active')) {
            $(this).parents('thead').siblings('tbody').children('tr').children('td.control').children('.checkbox-input').each(function() {
                if (!$(this).hasClass('active')) {
                    $(this).addClass('active').parent('.control').parent('tr').addClass('seleceted');
                    $(this).children('.checkbox').children('input').val(1).trigger('change');
                }
            });
        } else {
            $(this).parents('thead').siblings('tbody').children('tr').children('td.control').children('.checkbox-input').each(function() {
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active').parent('.control').parent('tr').removeClass('seleceted');
                    $(this).children('.checkbox').children('input').val(0).trigger('change');
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

    $('.select-control').each(function() {
        if (!$(this).hasClass('context-menu') && $(this).children('input').val()) {
            var html = $(this).children('.select-menu').find('.list-item.active').html();
            $(this).children('.select-value').html(html);
        }
    });

    $('.select-control').on('click', function(event) {
        event.stopPropagation();
    });

    $('.select-control').on('click', '.select-value, .select-btn', function() {
        if ($(this).parent('.select-control').hasClass('active')) {
            $(this).parent('.select-control').removeClass('active');
            $(this).siblings('.select-menu').css('margin-top', '');
        } else {
            $('.select-control.active').not($(this).parent('.select-control')).removeClass('active');
            $(this).parent('.select-control').addClass('active');

            if ($('body').hasClass('width-sm') && $(this).parent('.select-control').hasClass('default-menu')) {
                var index = $(this).siblings('.select-menu').find('.list-item.active').index();
                var position = -14;
                if (index > 0) {
                    position = position - (index * 48);
                    $(this).siblings('.select-menu').css('margin-top', position);
                }
            }
        }
    });

    $('.select-control .select-menu').on('click', 'button.list-item, a.list-item', function() {
        if ($(this).hasClass('disabled') || $(this).is(':disabled')) {
            return;
        }

        if (!$(this).parent('.items-container').parent('.select-menu').parent('.select-control').hasClass('context-menu')) {
            $(this).closest('.select-menu').find('.list-item.active').removeClass('active');
            $(this).closest('.select-control').children('.select-value').html($(this).html());
            $(this).closest('.select-control').children('input').val($(this).attr('data-value')).trigger('change');
            $(this).addClass('active');
        }
        
        $(this).closest('.select-menu').css('margin-top', '').parent('.select-control').removeClass('active');
    });

    $('.expansion-panel .panel').on('click', '.icon', function() {
        if (!$(this).parent('.panel').hasClass('active')) {
            $(this).parent('.panel').siblings('.panel.active').removeClass('active');
            $(this).parent('.panel').addClass('active').closest('.expansion-panel').addClass('active');
        } else {
            $(this).parent('.panel').removeClass('active').closest('.expansion-panel').removeClass('active');
        }
    });

    $('.form-input').each(function() {
        if ($(this).children('.text-input').val()) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });

    $('body').on('change', '.form-input .text-input', function() {
        if($(this).val()) {
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

    $('.form-input').on('click', '.side-action', function() {
        switch($(this).attr('data-action')) {
            case 'change_visibility':
                if ($(this).html() == 'visibility') {
                    $(this).html('visibility_off').siblings('.text-input').prop('type', 'password');
                } else {
                    $(this).html('visibility').siblings('.text-input').prop('type', 'text');
                }
            break;
        }
    });

    $('.form-input.date-picker').on('click', function() {

        var attributes = [
            'data-starting-date',
            'data-ending-date',
            'data-selected-date',
            'data-initial-date',
        ];

        // set config
        for (var i = 0; i < attributes.length; i++) {
            var config = attributes[i];
            config = (config.replace('data-', '')).replace('-', '_');
            var value = $(this).attr(attributes[i]);
            if (value) {
                date_picker_config[config] = new Date(value);
            }
        }

        var current_date = date_picker_config.initial_date;
        if (date_picker_config.selected_date) {
            current_date = date_picker_config.selected_date;
        }

        date_picker_init($(this).children('.text-input').attr('data-target'), current_date);
    });

    $('.form-input.date-picker').on('click', '.calendar > .month-control > a.prev, .calendar > .month-control > a.next', function() {
        // function to change calendar >> prev and next
    });

    $('.dialog.date-picker').on('click', '.header > .year', function() {
        $(this).parent('.header').parent('.dialog').addClass('show-years');
    })

    $('.dialog.date-picker').on('click', '.header > .day', function() {
        $(this).parent('.header').parent('.dialog').removeClass('show-years');
    })

    $('.dialog.date-picker').on('click', '.calendar > .full-month > a.day-number,  > .calendar > .full-month > button.day-number' , function() {
        $(this).addClass('active').siblings('.day-number').removeClass('active');
    })
}

function open_dialog(id) {
    $(id).addClass('active');
}

function close_dialog(id) {
    $(id).removeClass('active');
}

// DATE PICKER FUNCTIONS

var date_picker_config = {
    'starting_date': new Date('1970-01-01'),
    'ending_date': new Date(((new Date()).getFullYear() + 20) + '-12-31'),
    'selected_date': false,
    'initial_date': new Date()
};

function date_picker_init(target, current_date) {
    var months_string = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];

    var days_string = [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
    ];

    var format = days_string[current_date.getDay()].substr(0, 3) + ', ' + months_string[current_date.getMonth()].substr(0, 3) + ' ' + current_date.getDate();
    $(target + ' .dialog.date-picker > .header > .day').html(format);

    // if the same month is selected dont re-render calendar
    if (current_date.toISOString().substr(0, 7) != $(target).attr('data-selected-date')) {
        $(target).attr('data-selected-date', current_date.toISOString().substr(0, 7));

        $(target + ' .dialog.date-picker > .header > .year').html(current_date.getFullYear());

        format = months_string[current_date.getMonth()] + ' ' + current_date.getFullYear();
        $(target + ' .dialog.date-picker > .calendar > .month-control > .month-text').html(format);

        // number of days in the current month
        var last_day = new Date(current_date.getFullYear(), current_date.getMonth() + 1, 0).getDate();
        // get day index of the first
        var first_day_index = new Date(current_date.getFullYear(), current_date.getMonth(), 1).getDay();

        // clear calendar
        $(target + ' .dialog.date-picker > .calendar > .full-month').html('');

        var index; // for loops
        // add week indicators
        for (index = 0; index < days_string.length; index++) {
            $(target + ' .dialog.date-picker > .calendar > .full-month').append('<div class="week-day text-secondary">' + days_string[index].substr(0, 1) + '</div>');
        }
        // add empty days
        for (index = 0; index < first_day_index; index++) {
            $(target + ' .dialog.date-picker > .calendar > .full-month').append('<div class="day-number text-hint"></div>');
        }
        // add month days
        for (index = 0; index < last_day; index++) {
            format = current_date.toISOString().substr(0, 8) + (index + 1).toString().padStart(2, '0');
            $(target + ' .dialog.date-picker > .calendar > .full-month').append('<a href="javascript: close_dialog(\'' + target + '\');" class="day-number bg-indigo" data-fulldate="' + format + '">' + (index + 1) + '</a>');
        }
    }

    open_dialog(target);
}
