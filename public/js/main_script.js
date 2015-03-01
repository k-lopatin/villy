/**
 * Created by Саня on 27.01.2015.
 */
(function($){


//  ТАБЫ
$(function() {
    $( "#tabs" ).tabs();
});


// КАЛЕНДАРЬ
$(function() {
    $( "#datepicker1" ).datepicker();
    $( "#datepicker2" ).datepicker();
    $( "#datepicker3" ).datepicker();
    $( "#datepicker4" ).datepicker();
    $( "#datepicker5" ).datepicker();
    $( "#datepicker6" ).datepicker();
});


//СТИЛЕЗАЦЫЯ ФОРМЫ
    (function($) {
        $(function() {
            $('input, select').styler({
                fileBrowse: 'Выбрать',
                singleSelectzIndex: '999',
                onSelectOpened: function() {

                }
            });

        })
    })(jQuery)


//КАСТУМ СКРОЛ
$(window).load(function(){
    $("#content-1").mCustomScrollbar({
    });
});

//МЕНЮ
$ (function() {
    $('.menu').click(function(){
        $('.navs').slideToggle(500);
    });
});


// Footer МЕНЮ
$ (function() {
    $('.menu_info').click(function(){
        $('.footer_nav').slideToggle(500);
    });
});

//ПЛАВАЮЩИЙ БЛОК
//$(function(){
//    var topPos = $('.floating').offset().top;
//    $(window).scroll(function() {
//        var top = $(document).scrollTop(),
//            pip = $('.map_2').offset().top,
//            height = $('.floating').outerHeight();
//        if (top > topPos && top < pip - height) {$('.floating').addClass('fixed').removeAttr("style");}
//        else if (top > pip - height) {$('.floating').removeClass('fixed').css({'position':'absolute','bottom':'0'});}
//        else {$('.floating').removeClass('fixed');}
//    });
//});

//СЛАЙДЕР
$(function() {
    $('#carousel ul').carouFredSel({
        prev: '#prev',
        next: '#next',
        auto: false,
        pagination: "#pager",
        scroll: 1000
    });
});



})(jQuery);

