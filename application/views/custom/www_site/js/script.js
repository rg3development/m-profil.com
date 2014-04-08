$(document).ready(function ($) {


$('.content_block').css('min-height', parseInt($('.side_menu').css("height")) + 50);


$(window).resize(function () {
    console.log('window ' + $(window).width() + ' X ' + $(window).height());
});

    $('.popup_close_btn').on('click', function () {
        $(this).parent().animate({'top':-800},500).parent().fadeOut(500);
    });


    $('.callback_link').on('click', function () {
        $('#callback_form').animate({'top':230+$(window).scrollTop()},500).parent().css({'height':$(document).height()}).fadeIn(500);
        return false;
    });

    $('.search_simple').on('click', function () {
        $('#search_this').val($(this).html());
        return false;
    });

    $('.menu_trigger').on('click', function () {
        var firedEl = $(this);

        firedEl.next().slideToggle(500);

        return false;
    });



placeholder_emul();


});


function placeholder_emul() {
    if (!Modernizr.input.placeholder) {

        $('[placeholder]').focus(
            function () {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(
            function () {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur();
        $('[placeholder]').parents('form').submit(function () {
            $(this).find('[placeholder]').each(function () {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            })
        });

    }
}


function distributorSlider(){
    /* Зададим следующие переменные */

    /* обертка слайдера */
    var slideWrap = jQuery('.distributors_list');
    /* ссылки на предудыщий иследующий слайд */
    var nextLink = jQuery('.slider_next');
    var prevLink = jQuery('.slider_prev');

    var playLink = jQuery('.auto');

    var is_animate = false;

    /* ширина слайда с отступами */
    var slideWidth = jQuery('.distributor_unit').outerWidth();

    /* смещение слайдера */
    var newLeftPos = slideWrap.position().left - slideWidth;

    /* Клик по ссылке на следующий слайд */
    nextLink.click(function(){

//        debugger;
        if(!slideWrap.is(':animated')) {

            slideWrap.animate({left: newLeftPos}, 500, function(){
                slideWrap
                    .find('.distributor_unit:first')
                    .appendTo(slideWrap)
                    .parent()
                    .css({'left': 0});
            });

        }
        return false;

    });

    /* Клик по ссылке на предыдующий слайд */
    prevLink.click(function(){
        if(!slideWrap.is(':animated')) {

            slideWrap
                .css({'left': newLeftPos})
                .find('.distributor_unit:last')
                .prependTo(slideWrap)
                .parent()
                .animate({left: 0}, 500);

        }
        return false;
    });
}
