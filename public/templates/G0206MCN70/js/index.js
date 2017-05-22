$(document).ready(function() {
    
// 头部导航
    $('.nav').swiper({slidesPerView: 4,freeMode: true});

// 大图滚动
    $('.slidepics').swiper({pagination: '.dotted p',paginationClickable: true,spaceBetween: 30,autoplay:2500,autoplayDisableOnInteraction:false});


});