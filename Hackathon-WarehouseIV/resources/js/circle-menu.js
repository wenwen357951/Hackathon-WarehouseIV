$(document).ready(function () {
    let canClick = true;
    let items = $('.cir-menu-item, #circle-menu-exit');
    let main_wrapper = $('.circle-menu')
    let can_pass = false;

    items.click(function () {
        if (!main_wrapper.hasClass('circle-unselect')) {
            if ($(this).attr('id') === 'circle-menu-exit') {
                can_pass = true;
                return;
            }
            if (!can_pass) {
                return;
            }
            can_pass = false;
        }

        if (!canClick) return;
        canClick = false;

        let selected = $(this);

        items.each(function () {
            if ($(this).attr('id') === selected.attr('id')) {
                if ($(this).hasClass('circle-enable')) {
                    $(this).removeClass('cir-menu-animation-in');
                    $(this).addClass('cir-menu-animation-out');
                }
            } else {
                $(this).removeClass('cir-menu-animation-out');
                $(this).removeClass('cir-menu-animation-in');

                if ($(this).hasClass('cir-menu-animation-in')) {
                    $(this).addClass('cir-menu-animation-out');
                }
            }
        });

        if (main_wrapper.hasClass('circle-unselect') || selected.hasClass('circle-disable')) {
            items.each(function () {
                $(this).addClass($(this).attr('id') === selected.attr('id') ? 'cir-menu-animation-in' : 'circle-disable');
                $(this).removeClass($(this).attr('id') !== selected.attr('id') ? 'cir-menu-animation-in' : 'circle-disable');
            });
            main_wrapper.removeClass('circle-unselect');
            return;
        }

        items.each(function () {
            $(this).removeClass('circle-enable')
        });
        main_wrapper.addClass('circle-unselect');
    });

    items.on("animationend", function () {
        if ($(this).hasClass('cir-menu-animation-out')) {
            $(this).removeClass('cir-menu-animation-out');
            items.each(function () {
                $(this).removeClass('circle-disable')
            });
        }
        if ($(this).hasClass('cir-menu-animation-in')) {
            $(this).removeClass('cir-menu-animation-in');
            $(this).addClass('circle-enable');
        }
        canClick = true;
    });
});