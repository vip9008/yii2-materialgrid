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

    $('.form-input.select-control').each(function() {
        var width = $(this).css('width', '').children('.select-menu').css('width', '').width();
        var label_width = $(this).css('width', '').outerWidth();

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

    $('body').on('click', function(e) {
        $('.form-input.select-control.opened').each(function() {
            $(this).removeClass('opened').children('.side-action').html('arrow_drop_down');
            if ($(this).hasClass('bar-menu')) {
                var value = '';
                if ($(this).children('.select-value').val().length) {
                    value = $(this).find('.list-item.active > .text > .title').html();
                }
                $(this).find('.list-item').removeAttr('style');
                $(this).find('.list-item.error-message').addClass('hidden');
                $(this).children('.text-input').val(value).trigger('change');
            }
        });
    });

    $('body').on('click', 'a[href*="#"]:not([href="#"])', function() {
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

    $('body').on('click', '#snackbars .item a.control.close', function() {
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

    $('body').on('click', '.data-table table > tbody > tr > td.control > .checkbox-input', function() {
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

    $('body').on('click', '.data-table table > thead > tr > th.control > .checkbox-input', function() {

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

    $('body').on('click', '.radiobutton-input', function() {
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

    $('body').on('click', '.form-input.select-control', function(event) {
        event.stopPropagation();
    });

    $('body').on('click', '.form-input.select-control', function() {
        if ($(this).hasClass('opened') && !$(this).hasClass('bar-menu')) {
            $(this).removeClass('opened').children('.side-action').html('arrow_drop_down');;
            $(this).children('.select-menu').css('margin-top', '');
        } else {
            $('.form-input.select-control.opened').not($(this)).removeClass('opened');
            $(this).addClass('opened').children('.side-action').html('arrow_drop_up');

            // if ($('body').hasClass('width-sm') && $(this).hasClass('default-menu')) {
            //     var index = $(this).children('.select-menu').find('.list-item.active').index();
            //     var position = -14;
            //     if (index > 0) {
            //         position = position - (index * 48);
            //         $(this).children('.select-menu').css('margin-top', position);
            //     }
            // }
        }
    });

    $('body').on('keyup', '.form-input.select-control.bar-menu > .text-input', function() {
        var filter = $(this).val().toUpperCase();
        var found = false;
        $(this).siblings('.select-menu').find('.list-item').each(function() {
            if ($(this).children('.text').children('.title').html().toUpperCase().indexOf(filter) > -1) {
                $(this).show();
                found = true;
            } else {
                $(this).hide();
            }
        });
        if (!found) {
            $(this).siblings('.select-menu').find('.list-item.error-message').removeClass('hidden').show();
        } else {
            $(this).siblings('.select-menu').find('.list-item.error-message').addClass('hidden').hide();
        }
    });

    $('body').on('click', '.form-input.select-control .select-menu button.list-item, .form-input.select-control .select-menu a.list-item', function(event) {
        if ($(this).hasClass('disabled') || $(this).is(':disabled')) {
            return;
        }

        if (!$(this).closest('.form-input.select-control').hasClass('context-menu')) {
            $(this).closest('.select-menu').find('.list-item.active').removeClass('active');
            $(this).closest('.form-input.select-control').children('.text-input').val($(this).find('.title').html()).trigger('change');
            $(this).closest('.form-input.select-control').children('.select-value').val($(this).attr('data-value'));
            $(this).addClass('active');
        }
        
        $(this).closest('.select-menu').css('margin-top', '').parent('.form-input.select-control').removeClass('opened').children('.side-action').html('arrow_drop_down');

        if ($(this).closest('.form-input.select-control').hasClass('bar-menu')) {
            $(this).siblings('.list-item').removeAttr('style');
            $(this).siblings('.list-item.error-message').addClass('hidden');
        }

        event.stopPropagation();
    });

    $('body').on('click', '.expansion-panel .panel > .icon', function() {
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

    $('body').on('keyup change click blur', '.form-input.has-count .text-input', function() {
        var count = $(this).val().length;
        var max = $(this).attr('maxLength');
        $(this).siblings('.hint').children('.char-count').html(max - count);
    });

    $('body').on('click', '.form-input button.side-action, .form-input a.side-action', function() {
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

    $('body').on('click', '.form-input.date-picker', function() {

        $(this).addClass('dialog-opened');

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

        var target = $(this).attr('data-target');

        var current_date = date_picker_config.initial_date;
        if (date_picker_config.selected_date) {
            current_date = date_picker_config.selected_date;
        }

        $(target).attr('data-selected-date', current_date.toISOString().substr(0, 10));

        var format = days_string[current_date.getDay()].substr(0, 3) + ', ' + months_string[current_date.getMonth()].substr(0, 3) + ' ' + current_date.getDate();
        $(target).children('.dialog-container').children('.date-picker').children('.header').children('.day').html(format);
        $(target).children('.dialog-container').children('.date-picker').children('.header').children('.year').html(current_date.getFullYear());

        date_picker_calendar(target, current_date);
        open_dialog(target);
    });

    $('body').on('click', '.dialog.date-picker > .calendar > .month-control > a.prev, .dialog.date-picker > .calendar > .month-control > a.next', function() {
        var target = $(this).closest('.date-picker-container');
        var current_date = new Date($(target).attr('data-current-date'));

        if ($(this).hasClass('prev')) {
            current_date.setDate(0);
        } else {
            current_date.setDate(1);
            current_date.setMonth(current_date.getMonth() + 1);
        }

        if (current_date >= date_picker_config.starting_date && current_date <= date_picker_config.ending_date) {
            date_picker_calendar(target, current_date);
        }
    });

    $('body').on('click', '.dialog.date-picker > .years > .btn', function() {
        if (!$(this).hasClass('active')) {
            $(this).addClass('active').siblings('.btn').removeClass('active').closest('.dialog.date-picker').removeClass('show-years');
            var target = $(this).closest('.date-picker-container');
            var current_date = new Date($(target).attr('data-current-date'));
            current_date.setYear($(this).html());
            date_picker_calendar(target, current_date);
        }
    });

    $('body').on('click', '.dialog.date-picker > .header > .year', function() {
        $(this).parent('.header').parent('.dialog').addClass('show-years');

        var target = $(this).parent('.header').parent('.dialog');
        var index = $(target).children('.years').children('.btn.active').index();
        var height = $(target).children('.years').height();
        var offset = (index * 44) + 37 - (height / 2);

        $(target).children('.years').scrollTop(offset);
    });

    $('body').on('click', '.dialog.date-picker > .header > .day', function() {
        $(this).parent('.header').parent('.dialog').removeClass('show-years');
    });

    $('body').on('click', '.dialog.date-picker > .calendar > .full-month > a.day-number, .dialog.date-picker > .calendar > .full-month > button.day-number' , function() {
        if (!$(this).hasClass('active')) {
            $(this).addClass('active').siblings('.day-number').removeClass('active');

            var selected_date = $(this).attr('data-fulldate');
            var target = $(this).closest('.date-picker-container');

            $(target).attr('data-current-date', selected_date);

            selected_date = new Date(selected_date);
            var format = days_string[selected_date.getDay()].substr(0, 3) + ', ' + months_string[selected_date.getMonth()].substr(0, 3) + ' ' + selected_date.getDate();
            $(target).children('.dialog-container').children('.date-picker').children('.header').children('.day').html(format);
            $(target).children('.dialog-container').children('.date-picker').children('.header').children('.year').html(selected_date.getFullYear());
        }
    });

    $('body').on('click', '.dialog.date-picker > .actions .btn.abort', function() {
        $(this).closest('.dialog.date-picker').removeClass('show-years');
        var target = $(this).closest('.date-picker-container');
        $(target).attr('data-current-date', '');

        $('.form-input.date-picker.dialog-opened').removeClass('dialog-opened');
        close_dialog(target);
    });

    $('body').on('click', '.dialog.date-picker > .actions .btn.confirm', function() {
        $(this).closest('.dialog.date-picker').removeClass('show-years');
        var target = $(this).closest('.date-picker-container');
        var new_date = $(target).attr('data-current-date');
        $(target).attr('data-selected-date', new_date);
        $('.form-input.date-picker.dialog-opened').removeClass('dialog-opened').attr('data-selected-date', new_date).children('.text-input').val(new_date).trigger('change');
        date_picker_config.selected_date = new Date(new_date);
        close_dialog(target);
    });
}

function open_dialog(target) {
    $(target).addClass('active');
}

function close_dialog(target) {
    $(target).removeClass('active');
}

// DATE PICKER FUNCTIONS

var date_picker_config = {
    'starting_date': new Date('1970-01-01'),
    'ending_date': new Date(((new Date()).getFullYear() + 20) + '-12-31'),
    'selected_date': false,
    'initial_date': new Date()
};

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

function date_picker_calendar(target, current_date) {
    // if the same month is selected dont re-render calendar
    if (current_date.toISOString().substr(0, 7) != $(target).attr('data-current-date').substr(0, 7)) {
        $(target).attr('data-current-date', current_date.toISOString().substr(0, 10));

        var format = months_string[current_date.getMonth()] + ' ' + current_date.getFullYear();
        $(target).children('.dialog-container').children('.date-picker').children('.calendar').children('.month-control').children('.month-text').html(format);

        // number of days in the current month
        var last_day = new Date(current_date.getFullYear(), current_date.getMonth() + 1, 0).getDate();
        // get day index of the first
        var first_day_index = new Date(current_date.getFullYear(), current_date.getMonth(), 1).getDay();

        // clear calendar
        $(target).children('.dialog-container').children('.date-picker').children('.calendar').children('.full-month').html('');

        var index; // for loops
        // add week indicators
        for (index = 0; index < days_string.length; index++) {
            $(target).children('.dialog-container').children('.date-picker').children('.calendar').children('.full-month').append('<div class="week-day text-secondary">' + days_string[index].substr(0, 1) + '</div>');
        }
        // add empty days
        for (index = 0; index < first_day_index; index++) {
            $(target).children('.dialog-container').children('.date-picker').children('.calendar').children('.full-month').append('<div class="day-number text-hint"></div>');
        }
        // add month days
        for (index = 0; index < last_day; index++) {
            format = current_date.toISOString().substr(0, 8) + (index + 1).toString().padStart(2, '0');
            var html = index + 1;
            if ((new Date(format)) >= date_picker_config.starting_date && (new Date(format)) <= date_picker_config.ending_date) {
                var css_class = 'day-number bg-indigo';
                // if this is the selected date then select it
                if (format == $(target).attr('data-selected-date')) {
                    css_class += ' active';
                }
                // if this is today then highlight it
                if (format == (new Date().toISOString().substr(0, 10))) {
                    html = '<b class="today indigo">' + html + '</b>';
                }

                $(target).children('.dialog-container').children('.date-picker').children('.calendar').children('.full-month').append('<a href="javascript: ;" class="' + css_class + '" data-fulldate="' + format + '">' + html + '</a>');
            } else {
                $(target).children('.dialog-container').children('.date-picker').children('.calendar').children('.full-month').append('<div class="day-number text-hint">' + html + '</div>');
            }
        }

        // add years
        $(target).children('.dialog-container').children('.date-picker').children('.years').html('');
        var min_year = date_picker_config.starting_date.getFullYear();
        var max_year = date_picker_config.ending_date.getFullYear();
        for (index = min_year; index <= max_year; index++) {
            var css_class = 'btn text-primary';
            if (current_date.getFullYear() == index) {
                css_class += ' active';
            }
            $(target).children('.dialog-container').children('.date-picker').children('.years').append('<a href="javascript: ;" class="' + css_class + '">' + index + '</a>');
        }
    }
}
