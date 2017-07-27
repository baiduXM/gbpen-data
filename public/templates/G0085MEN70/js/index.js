$(document).ready(function() {

// 大图滚动
    $('.slidepics').swiper({pagination: '.dotted p',paginationClickable: true,spaceBetween: 30,autoplay:2500,autoplayDisableOnInteraction:false});

// 图文列表切换
    $('.column-case').swiper({pagination: '.roll-list p',paginationClickable: true,loop:true,autoplay:5000,speed:500,autoplayDisableOnInteraction:false,nextButton: '.show-next',prevButton: '.show-prev',paginationBulletRender: function (index, className) {
            return '<span class="' + className + '">' + "0" + (index + 1) + '</span>';
        }
    });

	// $(".roll-list ol li").each(function(index, el) {
	// 	var num = $(this).text();
	// 	var figure = ("0"+num).substr(-2);
	// 	$(this).text(figure)
	// });

});