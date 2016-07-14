$(document).ready(function(){
    jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"leftLoop"});
			// $(".first li a").click(function(){		
			// 	$(this).find(".sub").slideToggle(300).siblings(".sub").slideUp("slow");
			// 	})	
			// $(".sub li a").click(function () {
		 //        $(this).parent().siblings().find(".three").slideUp()
		 //        $(this).siblings(".three").slideToggle()
		 //    })
    $(".first li a").click(function () {
        $(this).parent().siblings().find(".sub").slideUp()
        $(this).siblings(".sub").slideToggle()
    }); 
    $(".sub li a").click(function () {
        $(this).parent().siblings().find(".three").slideUp()
        $(this).siblings(".three").slideToggle()
    });

         jQuery(".nav").slide({ 
            type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
            titCell:".nLi", //鼠标触发对象
            targetCell:".sunav", //titCell里面包含的要显示/消失的对象
            effect:"slideDown", //targetCell下拉效果
            delayTime:300 , //效果时间
            triggerTime:0, //鼠标延迟触发时间（默认150）
            returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
         });
	// $(".first li a").click(function(){		
	// 	$(this).next(".sub").slideToggle(300);
	// 	// return false;
	// 	})	
	// $(function(){
	// 	$('ul.nav li').hover(function(){
	// 		$(this).children('ul').stop(true,true).show();
	// 		$(this).find("a").addClass("cu")
	// 	},function(){
	// 		$(this).children('ul').stop(true,true).hide();
	// 		$(this).find("a").removeClass("cu")
	// 	});
	// });

// banner
	jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:500,interTime:4000,trigger:"click"});

//产品展示轮播
jQuery(".slideBox1").slide({ mainCell:" .ulWrap",autoPage:true,interTime:30,effect:"leftMarquee",autoPlay:true,trigger:"click",vis:5});









			

});