$(document).ready(function(){
	jQuery.navlevel2 = function(level1,dytime) {
		
	  $(level1).mouseenter(function(){
		  varthis = $(this);
		  delytime=setTimeout(function(){
			varthis.find('ul').slideDown();
		},dytime);
		$(this).find('img').addClass("block");
	  });
	  $(level1).mouseleave(function(){
		 clearTimeout(delytime);
		 $(this).find('ul').slideUp();
	  	$(this).find('img').removeClass("block");
	  });
	  
	};
	  $.navlevel2("li.mainlevel",200);

	$(function () {
	$(".box ul li").hover(
		function () {
			$(this).find(".dask").stop().delay(50).animate({"top":34,opacity:0.8},300)
		 },
		function () {
			$(this).find(".dask").stop().animate({"top":-200,opacity:0},300)
		}
		
	)
	});

	jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/
		/* 控制进度条 */
			startFun:function(){
				var timer = jQuery(".slideBox .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});


	  /*内页三级菜单下拉*/
	  	jQuery(".secondul").slide({
				titCell:".secondli", //鼠标触发对象
				targetCell:".secondli ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
				defaultPlay:true,//默认是否执行效果（默认true）
				returnDefault:true 
				});
	  	jQuery(".firstul").slide({
				titCell:".firstli", //鼠标触发对象
				targetCell:".firstli ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
				defaultPlay:true,//默认是否执行效果（默认true）
				returnDefault:true 
				});


	
	$(".kz").each(function(){
		var maxwidth=parseInt($(this).attr("data-limit"));
		if($(this).text().length>maxwidth){
		$(this).text($(this).text().substring(0,maxwidth));
		$(this).html($(this).html()+'...');
		}
		});

	if($(".focusBox img").length<2){
        $(".focusBox").parent().find(".img_hd").css("display","none");
        $(".focusBox").find("a").css("display","none");
    }

	var i=0; //图片标识
	var img_num=$(".img_ul").children("li").length; //图片个数
	$(".img_ul li").hide(); //初始化图片	
	play();
	$(function(){
	$(".img_hd ul").css("width",($(".img_hd ul li").outerWidth(true))*img_num); //设置ul的长度

	$(".bottom_a").css("opacity",0.7);	//初始化底部a透明度
	//$("#play").css("height",$("#play .img_ul").height());
	if (!window.XMLHttpRequest) {//对ie6设置a的位置
		$(".change_a").css("height",$(".change_a").parent().height());
	}
	
	$(".bottom_a").hover(function(){//底部a经过事件
		$(this).css("opacity",1);	
	},function(){
		$(this).css("opacity",0.7);	 
	});

	$(".img_hd ul li").click(function(){
		i=$(this).index();
		play();
	});

	$(".prev_a").click(function(){
		//i+=img_num;
		i--;
		//i=i%img_num;
		i=(i<0?0:i);
		play();
	}); 
	$(".next_a").click(function(){
		i++;
		//i=i%img_num;
		i=(i>(img_num-1)?(img_num-1):i);
		play();
	}); 
}); 

function play(){//动画移动	
	var img=new Image(); //图片预加载
	img.onload=function(){
		img_load(img,$(".img_ul").children("li").eq(i).find("img"))
	};
	img.src=$(".img_ul").children("li").eq(i).find("img").attr("src");
	//$(".img_ul").children("li").eq(i).find("img").(img_load($(".img_ul").children("li").eq(i).find("img")));
	$(".img_hd ul").children("li").eq(i).addClass("on").siblings().removeClass("on");
	if(img_num>7){//大于7个的时候进行移动
		if(i<img_num-3){ //前3个
			$(".img_hd ul").animate({"marginLeft":(-($(".img_hd ul li").outerWidth()+4)*(i-3<0?0:(i-3)))});
		}else if(i>=img_num-3){//后3个
			$(".img_hd ul").animate({"marginLeft":(-($(".img_hd ul li").outerWidth()+4)*(img_num-7))});
		}
	}
	if(!window.XMLHttpRequest){//对ie6设置a的位置
		$(".change_a").css("height",$(".change_a").parent().height());
	}
}

function img_load(img_id,now_imgid){//大图片加载设置 （img_id 新建的img,now_imgid当前图片）
	if(img_id.width/img_id.height>1){
		if(img_id.width >=$("#play").width())
		$(now_imgid).width($("#play").width());
	}else{
		if(img_id.height>=500) $(now_imgid).height(500);
	}
	$(".img_ul").children("li").eq(i).show().siblings("li").hide(); //大小确定后进行显示
}

function imgs_load(img_id){//小图片加载设置
	if(img_id.width >=$(".img_hd ul li").width()){img_id.width = 80};
	//if(img_id.height>=$(".img_hd ul li").height()) {img_id.height=$(".img_hd ul li").height();}
}




});



