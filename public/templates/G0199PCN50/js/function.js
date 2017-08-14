$(document).ready(function(){
	$(".picScroll-left .bd ul li").hover(function(){
	 $(this).find(".title").stop().animate({
		 bottom:0
		 },{duration: 300, easing:"easeInSine"})
	},function(){
	 $(this).find(".title").stop().animate({
		 bottom:-25
		 },{duration: 200, easing:"easeOutSine"})
	});

	jQuery(".menu").slide({ 
		type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
		titCell:".nav_li", //鼠标触发对象
		targetCell:".sub", //titCell里面包含的要显示/消失的对象
		effect:"slideDown", //targetCell下拉效果
		delayTime:100 , //效果时间
		triggerTime:0, //鼠标延迟触发时间（默认150）
		returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
	});

	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});


	//多图时轮播
		jQuery(".slideBoxs").slide({  mainCell:".bds ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/
		/* 控制进度条 */
			startFun:function(){
				var timer = jQuery(".slideBoxs .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});


	 /*内页三级菜单下拉*/
  	jQuery(".second").slide({
			titCell:".module_nav2", //鼠标触发对象
			targetCell:".module_nav2 ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
			effect:"slideDown", //targetCell下拉效果
			delayTime:300 , //效果时间
			triggerTime:0, //鼠标延迟触发时间（默认150）
			defaultPlay:true,//默认是否执行效果（默认true）
			});
  	jQuery(".first").slide({
			titCell:".yiji", //鼠标触发对象
			targetCell:".second", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
			effect:"slideDown", //targetCell下拉效果
			delayTime:300 , //效果时间
			triggerTime:0, //鼠标延迟触发时间（默认150）
			defaultPlay:true,//默认是否执行效果（默认true）
			returnDefault:true 
			});

  	jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});

  	//限制字符个数
		$(".h3_l").each(function(){
		var maxwidth=parseInt($(this).attr("data-limit"));
		if($(this).text().length>maxwidth){
		$(this).text($(this).text().substring(0,maxwidth));
		$(this).html($(this).html()+'...');
		}
		});
  	


  });
  $(".back-top").click(function(){
		$("html,body").animate({scrollTop :0}, 800);
		return false;
	});