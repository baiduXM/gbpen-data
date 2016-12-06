$(document).ready(function() {

// 标题
    $(".column-hd").each(function(index, el) {
        var stickLeft = ($(this).width() - $(this).find('h2').outerWidth(true))/2 - $(".stick").outerWidth(true);
        $(this).find('.stick-left').css({left:stickLeft}).siblings('.stick-right').css({right:stickLeft});
    });

// 图文列表
    $('.column-press').swiper({slidesPerView: 1,paginationClickable: true,freeMode: true,autoplay:2500,nextButton: '.column-next',prevButton: '.column-prev'});


});