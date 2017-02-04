$(document).ready(function () {
    /*
 * Bootstrap select customize
 * */

    $('.selectpicker').on('show.bs.select', function (e) {
        if ($(this).data('align') == 'center') {
            var bootstrap_select = $(this).parent();
            var btn = $('.btn', bootstrap_select);
            var dropdown_menu = $('.dropdown-menu', bootstrap_select);
            var position_width = (btn.width() + dropdown_menu.outerWidth()) / 2;

            var new_position_px = -(position_width / 2) + 'px';
            $(dropdown_menu).css({'left' : new_position_px});
        }
    });
    $('.selectpicker.dropdown-flat').on('shown.bs.select', function (e) {
        var bootstrap_select = $(this).parent();
        $('.dropdown-menu.open',bootstrap_select).css('overflow','visible');
    });

    $('.selectpicker').on('hidden.bs.select', function (e) {
        var bootstrap_select = $(this).parent();
        $('.btn', bootstrap_select).blur();
    });


    /* Metro scheme */
    $('.als_metro_station').click(function(){
        $(this).toggleClass('als_metro_station_active');
//            $('.hide_map').toggleClass('hide_m');
//            $('.als_metro_fade').toggleClass('ng-hide');
//            $('.als_metro_moscow').toggleClass('als_metro_moscow_hide');
    });



});