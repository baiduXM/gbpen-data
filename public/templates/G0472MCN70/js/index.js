$(function(){
    //首页nav
    var mySwiper2 = new Swiper ('.swiper-nav', {
        slidesPerView:4,
        // spaceBetween: 16,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable :true
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
    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;
});



