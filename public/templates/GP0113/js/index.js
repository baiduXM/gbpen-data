jQuery(document).ready(function($) {
	
  $('#prizes .photos-content.enable').jCarouselLite({
    btnPrev: '#prizes a.photos-prev',
    btnNext: '#prizes a.photos-next',
    visible: 6,
    auto: 3000,
    speed: 1000
  }).css({visibility:"visible"});

// 字体分割
	var Txt1=$(".about-name").val();
	var Txt2=$(".news-name").val();
	var Txt3=$(".pro-name").val();
	$(".about .n_title").html(Txt1[0]);			
	$(".news .n_title").html(Txt2[0]);			
	$(".prod .n_title").html(Txt3[0]);			
	$(".about .n_tltaer b").html(Txt1.substr(1));			
	$(".news .n_tltaer b").html(Txt2.substr(1));			
	$(".prod .n_tltaer b").html(Txt3.substr(1));
	

});