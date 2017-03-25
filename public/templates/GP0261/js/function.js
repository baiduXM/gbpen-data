	
$(document).ready(function(){
	$(".list>li>a").click(function(){		
		$(this).next(".second").slideToggle(300).siblings(".second").slideUp("slow");
	})	
	$(".second>li>a").click(function(){		
		$(this).next(".third").slideToggle(300).siblings(".third").slideUp("slow");
	})

	// $(".list>li>a").click(function(){		
	// 	$(this).parent().siblings().find(".second").slideUp()
	//     $(this).siblings(".second").slideToggle()
	// 	// return false;
	// })	
	// $(".second>li>a").click(function () {
	//     $(this).parent().siblings().find(".third").slideUp()
	//     $(this).siblings(".third").slideToggle()
	// })

		jQuery(".banner").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.7) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
		/*SuperSlide图片切换*/
		jQuery(".banner").slide({ mainCell:".pics",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});
		
	jQuery("#nav").slide({ type:"menu",	titCell:".nLi", targetCell:".sub",	effect:"slideDown", delayTime:300 , triggerTime:0,returnDefault:true });		
	jQuery("#navlist").slide({ 
				type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
				titCell:".nLi", //鼠标触发对象
				targetCell:".sub", //titCell里面包含的要显示/消失的对象
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
				returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
			});
	// 导航当前状态
    var num=window.location.href.split("/").length-1;    
    var index=window.location.href.split("/")[num];

    if(index==null || index==0){
        $("ul.nav>li:eq(0)>a").addClass('in')
    }else{
        $("ul.nav>li>a[href^='"+index+"']").addClass('in')
    }	

				jQuery('.picMarquee').slide({mainCell:"ul.picList",autoPlay:true,effect:"leftMarquee",vis:6,interTime:50});
				$('.tempWrap').css('width','100%');	
				//大图切换
				jQuery(".game163").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200,
					startFun:function(i,p){
						//控制小图自动翻页
						if(i==0){ jQuery(".game163 .sPrev").click() } else if( i%4==0 ){ jQuery(".game163 .sNext").click()}
					}
				});

				//小图左滚动切换
				jQuery(".game163 .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:4,scroll:4,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:false });

            $('#prizes .photos-content').jCarouselLite({
      btnPrev: '#prizes a.photos-prev',
      btnNext: '#prizes a.photos-next',
      visible: 5,
      auto: 3000,
      speed: 1000
}).css({visibility:"visible"});

            $('#prizesb .photos-content').jCarouselLite({
      btnPrev: '#prizesb a.photos-prev',
      btnNext: '#prizesb a.photos-next',
      visible: 5,
      auto: 3000,
      speed: 1000
}).css({visibility:"visible"});

    //限制个数
	$(".xz").each(function(){   
		var maxwidth=parseInt($(this).attr("data-limit"));
		if($(this).text().length>maxwidth){   
			$(this).text($(this).text().substring(0,maxwidth));    
			$(this).html($(this).html()+'...');   
		}    
	});  

});