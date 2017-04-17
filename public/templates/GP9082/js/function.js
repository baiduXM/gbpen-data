 $(document).ready(function(){
 		//下拉菜单
 		jQuery(".navbar").slide({ 
				type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
				titCell:".nav_li", //鼠标触发对象
				targetCell:".sub", //titCell里面包含的要显示/消失的对象
				effect:"slideDown", //targetCell下拉效果
				delayTime:100 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
				returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
			});
 		//大图轮播
 		jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/
		/* 控制进度条 */
			startFun:function(){
				var timer = jQuery(".slideBox .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});
 		//内页轮播
		jQuery(".slideBox2").slide({ titCell:".hd2 ul", mainCell:".bd2 ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/
		/* 控制进度条 */
			startFun:function(){
				var timer = jQuery(".slideBox2 .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});
		//多图时轮播
		jQuery(".slideBoxs").slide({  mainCell:".bds ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/
		/* 控制进度条 */
			startFun:function(){
				var timer = jQuery(".slideBox2 .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});
 		//产品展示轮播
		jQuery(".slideBox1").slide({titCell:".hd1 ul", mainCell:" .ulWrap",autoPage:true,delayTime:1000,effect:"left",autoPlay:true,trigger:"click",vis:3});
 		//遮罩层
		 $(".ulWrap li").hover(function(){
			$(this).find(".txt").stop().animate({height:"240px"},200);
			$(this).find(".txt h3").stop().animate({paddingTop:"100px"},200);
		},function(){
			$(this).find(".txt").stop().animate({height:"30px"},200);
			$(this).find(".txt h3").stop().animate({paddingTop:"0px"},200);
		});
		

		jQuery(".case_list1").slide({
				titCell:"h3", //鼠标触发对象
				targetCell:"p", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
				defaultPlay:true,//默认是否执行效果（默认true）
				returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
				});

		 //内页遮罩层
		 $(".pro_list ul li").hover(function(){
			$(this).find(".txt1").stop().animate({height:"147px"},200);
			$(this).find(".txt1 h3").stop().animate({paddingTop:"50px"},200);
		},function(){
			$(this).find(".txt1").stop().animate({height:"30px"},200);
			$(this).find(".txt1 h3").stop().animate({paddingTop:"0px"},200);
		});
		
	  	
		  /*内页三级菜单下拉*/
	  	// jQuery(".secondul").slide({
				// titCell:".secondli", //鼠标触发对象
				// targetCell:".secondli ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				// effect:"slideDown", //targetCell下拉效果
				// delayTime:300 , //效果时间
				// triggerTime:0, //鼠标延迟触发时间（默认150）
				// defaultPlay:true,//默认是否执行效果（默认true）
				// });
	  	// jQuery(".firstul").slide({
				// titCell:".firstli", //鼠标触发对象
				// targetCell:".firstli ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				// effect:"slideDown", //targetCell下拉效果
				// delayTime:300 , //效果时间
				// triggerTime:0, //鼠标延迟触发时间（默认150）
				// defaultPlay:true,//默认是否执行效果（默认true）
				// returnDefault:true 
				// });
				$(function(){
				    $(".firstul > li > a").click(function(){
					     $(this).addClass("xz").parents().siblings().find("a").removeClass("xz");
						 $(this).parents().siblings().find(".secondul").hide(300);
						 $(this).siblings(".secondul").toggle(300);
						 $(this).parents().siblings().find(".secondul > li > .secondli").hide().parents().siblings().find(".thr_nr").hide();
						
					})
					
				    $(".secondul > li > a").click(function(){
				        $(this).addClass("sen_x").parents().siblings().find("a").removeClass("sen_x");
				        $(this).parents().siblings().find(".thrul").hide(300);	
					    $(this).siblings(".thrul").toggle(300);	
					})

				    $(".thrul > li > a").click(function(){
					     $(this).addClass("xuan").parents().siblings().find("a").removeClass("xuan");
						 $(this).parents().siblings().find(".thr_nr").hide();	
					     $(this).siblings(".thr_nr").toggle();
					})
				})

	  	
		//限制字符个数
		$(".h3_l").each(function(){
		var maxwidth=parseInt($(this).attr("data-limit"));
		if($(this).text().length>maxwidth){
		$(this).text($(this).text().substring(0,maxwidth));
		$(this).html($(this).html()+'...');
		}
		});
		
	  	

 });