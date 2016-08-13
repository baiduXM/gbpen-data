jQuery(document).ready(function($) {
	
  $('#prizes .photos-content.enable').jCarouselLite({
    btnPrev: '#prizes a.photos-prev',
    btnNext: '#prizes a.photos-next',
    visible: 3,
    auto: 3000,
    speed: 1000
  }).css({visibility:"visible"});

});