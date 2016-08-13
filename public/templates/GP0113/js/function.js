$(document).ready(function() {
$(".deteo").height($(".ny_detal").height()-45)	
	//实例一
	$("#menu>ul>li>h3 a").wrapInner('<span class="out"></span>' ).append('<span class="bg"></span>');
	$("#menu>ul>li>h3 a").each(function(){
		$('<span class="over">' +  $(this).text() + '</span>').appendTo(this);
	});

	$("#menu>ul>li>h3 a").hover(function(){
		$(".out",this).stop().animate({'top':'44px'},250);
		$(".over",this).stop().animate({'top':'0px'},250);
		$(".bg",this).stop().animate({'top':'0px'},120);
	},function(){
		$(".out",this).stop().animate({'top':'0px'},250);
		$(".over",this).stop().animate({'top':'-44px'},250);
		$(".bg",this).stop().animate({'top':'-44px'},120);
	});
    jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});


    jQuery(".focusBox").hover(function() {
        jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.2)
    }, function() {
        jQuery(this).find(".prev,.next").fadeOut()
    });
	jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
	/*SuperSlide图片切换*/
	jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});		


	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});

	//下拉菜单 
    $(".first li a").click(function(){
      $(this).parent().siblings().find(".second").slideUp()
      $(this).siblings(".second").slideToggle()
    })
    $(".second li a").click(function(){
      $(this).parent().siblings().find(".third").slideUp()
      $(this).siblings(".third").slideToggle()
    }) 



});

// $(function() {
//     if (window.PIE) {
//         $('.rounded').each(function() {
//             PIE.attach(this);
//         });
//     }
// });

