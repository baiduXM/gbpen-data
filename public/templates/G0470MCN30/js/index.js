$(function(){
    //首页搜索
    $('.ser-btn').click('touchstart',function () {
        $(this).siblings('form').addClass('s');
        $(this).find('i').hide();
    });

    //首页小图轮播
    var swiper1 = new Swiper('.list1-slide', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 2,
        paginationClickable: true,
        spaceBetween: 0
    });
    //content-product
    var mySwiper4 = new Swiper ('.swiper-pro', {
        loop: true,
        pagination: '.swiper-pagination',
        paginationElement : 'span',
        autoplay : 1500,
        paginationClickable :true
    });

});



