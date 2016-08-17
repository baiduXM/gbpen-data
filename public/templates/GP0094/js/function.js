jQuery(document).ready(function($) {
  
  jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});
	
	jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:1000, trigger:"click"});

	$('.performances .inter  dl:nth-child(2)').css('border',"none");

  if($(".ul_side li").length>9){
    jQuery(".side_case_other").slide({mainCell:".ul_side",autoPlay:true,effect:"leftMarquee",vis:5,interTime:30});
  }

  
  
	//下拉菜单 
    $(".first li a").click(function(){
      $(this).parent().siblings().find(".second").slideUp()
      $(this).siblings(".second").slideToggle()
    })
    $(".second li a").click(function(){
      $(this).parent().siblings().find(".third").slideUp()
      $(this).siblings(".third").slideToggle()
    }) 
  jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});

});
function openLink(obj) {
    if (obj.selectedIndex != 0) {
        window.open(obj.options[obj.selectedIndex].value);
    }
}