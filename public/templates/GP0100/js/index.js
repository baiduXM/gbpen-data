jQuery(document).ready(function($) {
  $('#prizes .photos-content.enable').jCarouselLite({
    btnPrev: '#prizes a.photos-prev',
    btnNext: '#prizes a.photos-next',
    visible: 6,
    auto: 3000,
    speed: 1000
  }).css({visibility:"visible"});
  $('#prizes1 .photos-content.enable').jCarouselLite({
    btnPrev: '#prizes a.photos-prev',
    btnNext: '#prizes a.photos-next',
    visible: 4,
    auto: 3000,
    speed: 1000
  }).css({visibility:"visible"});  
});