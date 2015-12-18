
$(document).ready(function(){
			jQuery("#nav").slide({ 
				type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
				titCell:".nLi", //鼠标触发对象
				targetCell:".sub", //titCell里面包含的要显示/消失的对象
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
                defaultPlay:false,
				returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
			});
	
		
// $(function(){
// 	$('.photos .zolistw').hover(function(){
// 		$('.text',this).stop().animate({
// 			height:'182px'
// 		});
// 		$(this).find(".p_title").hide();
// 	},function(){
// 		$('.text',this).stop().animate({
// 			height:'0px'
// 		});
// 		$(this).find(".p_title").show();
// 	})	
				
// });		
      $(".photos  .linell").height($(".photos .pings img").height()-6)
      $(".photos .zolistw ").each(function(){
        $(this).find(".linell").width($(this).find("img").innerWidth()-6)
      })
      $(".borders  .linell").height($(".borders img").height()-4)
      $(".borders ").each(function(){
        $(this).find(".linell").width($(this).find("img").innerWidth()-4)
      })	 
      $("ul.inner_pro li  .linell").height($("ul.inner_pro li img").height()-6)
      $("ul.inner_pro li ").each(function(){
        $(this).find(".linell").width($(this).find("img").innerWidth()-6)
      })	 
	  
      $(".slideBoxc .linell").height($(".slideBoxc .bd li img").height()-6)
      $(".slideBoxc .bd li ").each(function(){
        $(this).find(".linell").width($(this).find("img").innerWidth()-6)
      })		  	   
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"leftLoop"});
		jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:true,effect:"leftLoop"});
		jQuery(".slideBoxc").slide({mainCell:".bd ul",autoPlay:true,effect:"leftLoop"});

		$('#prizes .photos-content.enable').jCarouselLite({
			btnPrev: '#prizes a.photos-prev',
			btnNext: '#prizes a.photos-next',
			visible: 4,
			auto: 3000,
			speed: 1000
		}).css({visibility:"visible"});
});