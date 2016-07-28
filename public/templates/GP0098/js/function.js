jQuery(document).ready(function($) {
    jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});
	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});
    jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftLoop",vis:6,interTime:3000,prevCell:'.prev',nextCell:'.next'});
    $('ul.nav>li:last-child,ul.nav>li:last-child h3').css('border',"none")

		// 下拉菜单
	// $(".first li a").click(function(){
	// 	$(this).parent().siblings().find(".second").slideUp()
	// 	$(this).siblings(".second").slideToggle()

	// })
    $(".first li a").click(function(){
      $(this).parent().siblings().find(".second").slideUp()
      $(this).siblings(".second").slideToggle()
    })
    $(".second li a").click(function(){
      $(this).parent().siblings().find(".third").slideUp()
      $(this).siblings(".third").slideToggle()
    }) 

	
	// jQuery(".slideTxtBox").slide({trigger:"click"});


});
function openLink(obj) {
    if (obj.selectedIndex != 0) {
        window.open(obj.options[obj.selectedIndex].value);
    }
}