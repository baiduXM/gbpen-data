$(function(){
    //首页搜索
    $('.ser-btn').click('touchstart',function () {
        console.log(123);
       $(".searchBox").slideToggle();
    });

    //首页小图轮播
    var mySwiper2 = new Swiper ('.swiper-s-pro', {
           slidesPerView:3,
         spaceBetween: 10,
        loop:true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        freeMode : true,
        paginationClickable :true
    });
    //content-product
    var mySwiper4 = new Swiper ('.swiper-pro', {
        loop: true,
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationElement : 'span',
        autoplay : 1500,
        paginationClickable :true
    });

    //content-product底部
    var mySwiper5 = new Swiper ('.swiper-pro-cont', {
        slidesPerView:2,
        spaceBetween: 10,
        loop:true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        freeMode : true,
        paginationClickable :true
    });

});



