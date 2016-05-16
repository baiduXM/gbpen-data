$(document).ready(function() {
// menuhover
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});


  // banner js
    
        jQuery(".fullSlide").slide({ titCell:".hd li", mainCell:".bd ul", effect:"fold",  autoPlay:true,trigger:"click", delayTime:700 });


  $('.case .caselist li:nth-child(3n)').css('marginRight',0)  

    $('.probox-main ul li:nth-child(6)').css("z-index",9)
    $('.probox-main ul li:nth-child(7)').css("z-index",8)
    $('.probox-main ul li:nth-child(8)').css("z-index",7)
    $('.probox-main ul li:nth-child(9)').css("z-index",6)

  

})
