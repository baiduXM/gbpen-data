$(document).ready(function(){


	var swiper = new Swiper('.banner.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
// 菜单
  var swiper = new Swiper('.menu.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
      
           paginationClickable: false
    });
  //产品
  var swiper = new Swiper('.pic_xq.swiper-container', {
            paginationClickable: false

    });

var mw=$(".menu").width()
$(".menu").height(mw*.2891)
$(".news").height(mw*.30156)
$(".pic .tit").height(mw*.22)
  });