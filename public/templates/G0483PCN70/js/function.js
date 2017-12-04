 $(document).ready(function(){
	
	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		new WOW().init();
	};
	jQuery(".nav").slide({ type:"menu",  titCell:".m", targetCell:".sub", delayTime:300, triggerTime:0,returnDefault:false  });
 		jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:true,
			startFun:function(){
				var timer = jQuery(".slideBox .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});
 	jQuery(".txMovie").slide({ titCell:".focus_nav li", mainCell:".focus_pic", targetCell:".focus_text li", autoPlay:true,delayTime:100,startFun:function(i,p){
		//控制小图自动翻页
		if(i==0){ jQuery(".txMovie .navPrev").click() } else if( i%6==0 ){ jQuery(".txMovie .navNext").click()}
		}
	});
	//小图滚动
	jQuery(".txMovie").slide({ mainCell:".focus_nav ul",prevCell:".navPrev",nextCell:".navNext",effect:"left",vis:6,scroll:6,delayTime:0,autoPage:true,pnLoop:false});
 	$(".kz").each(function(){
		    var maxwidth=parseInt($(this).attr("data-limit"));
		    if($(this).text().length>maxwidth){
		    $(this).text($(this).text().substring(0,maxwidth));
		    $(this).html($(this).html()+'...');
		    }
	    });
 	$("ul.first a").click(function(event) {
		if ($(this).nextAll("ul").length > 0) {
			var a=$(this);
			var thisname = a.attr('class');
			if (thisname == null || thisname == 0) {
				a.nextAll("ul").slideDown(300);
				a.parent().siblings().find('ul').slideUp(500).prevAll("a").removeClass();
				a.next("i").removeClass('in')
				var parent = a.parent().parent("ul").attr('class');
				switch (parent) {
					case "first":
						a.addClass("box-on");
						a.next('i').addClass('in')
						break;
					case "second":
						a.addClass("box-in");
						break;
					default:
						a.addClass("box_at");
				}
			}else{
				a.removeClass().nextAll('ul').slideUp(300);
				a.nextAll('ul').find('a').removeClass().nextAll('ul').slideUp(300);
				a.next("i").removeClass('in');
			};
			return false;
		};
	});

	//大图滚动
jQuery("#ifocus").slide({ titCell:"#ifocus_btn li", mainCell:"#ifocus_piclist ul",effect:"top", delayTime:200, autoPlay:true,triggerTime:0});
//文字切换
jQuery("#ifocus").slide({ titCell:"#ifocus_btn li", mainCell:"#ifocus_tx ul",delayTime:0, autoPlay:true});
	






 });