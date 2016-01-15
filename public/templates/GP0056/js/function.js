

jQuery(document).ready(function($) {
	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,interTime:3000,delayTime:1000,effect:"leftLoop",});
	jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});
	//大图切换
		jQuery(".game163").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200,
			startFun:function(i,p){
				//控制小图自动翻页
				if(i==0){ jQuery(".game163 .sPrev").click() } else if( i%4==0 ){ jQuery(".game163 .sNext").click()}
			}
		});

		//小图左滚动切换
		jQuery(".game163 .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:4,scroll:4,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:false });

//导航下拉
 function nav(a){
 	var mune_N=$(a).children('li');
 
 	mune_N.hover(function() {
 		$(this).find('.sub').show();
 		$(this).children('a').addClass('on')
 	}, function() {
 		$(this).find('.sub').hide()
 		$(this).children('a').removeClass('on')
 	});

 }
 nav(".nav")

 //二级分类
 function Class_F(a){
 	var first_CH=$(a).children('li').children('a');
 	var second_CH=first_CH.next();
 	if (second_CH.length>0){
 		second_CH.prev().addClass('tans');
 		second_CH.prev().attr('href', 'javascript:0;');
 		first_CH.click(function() {
 			
 			$(this).next().slideToggle();
 		});
 	};
 	var two_CH=second_CH.children('li').children('a');
 	var third_CH=two_CH.next();
 	if(third_CH.length>0){
 		third_CH.prev().addClass('line');
 		third_CH.prev().attr('href', 'javascript:0;');
 		two_CH.click(function() {
 			$(this).next().slideToggle();
 		});

 	}
 }

Class_F('.first')


//搜索
$(".sreach button").click(function() {
	$("input").css({
		display: 'block',
	});
	

});
//产品中心鼠标移上去的效果
	// function Pro_move(a){
	// 	var P_child=$(a).children('li').children('a');
	// 		P_child.bind('mouseenter mouseleave', function(e) {
	// 		var w=$(this).width(),
	// 	    offsetleft=$(this).offset().left,   
	// 		offsettop=$(this).offset().top,
	// 		h=$(this).height(),
	// 		x = (e.pageX - offsetleft - (w / 2)) * (w > h ? (h / w) : 1),
	// 		y = (e.pageY - offsettop - (h / 2)) * (h > w ? (w / h) : 1),
	// 		direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
	// 		var b=$(this).find('span')
	// 		var eventType=e.type;
	// 		if(e.type=='mouseenter'){

	// 		switch(direction){
	// 		case 0:
	// 			//form top
	// 			b.css({left:0,top:"-100%"}).stop().transition({left:0,top:0});
	// 			break;
	// 			case 1:
	// 			//form right
	// 			b.css({left: "100%",top: 0}).stop().transition({left:0,top:0});
	// 			break;
	// 			case 2:
	// 			//form bottom
	// 			b.css({left:0,top: "100%"}).stop().transition({left:0,top:0});

	// 			break;
				
	// 		default:
	// 			//form left
	// 			b.css({left: "-100%",top: 0}).stop().transition({left:0,top:0});
	// 			break;
	// 	}
				
	// 		}else{
	// 			switch(direction){
	// 		case 0:
	// 			//form top
	// 			b.css({left: 0,top: 0}).stop().transition({left:0,top:"-100%"});
	// 			break;
	// 			case 1:
	// 			//form right
	// 			b.css({left: 0,top: 0}).stop().transition({left:"100%",top:0});
	// 			break;
	// 			case 2:
	// 			//form bottom
	// 			b.css({left:0,top:0}).stop().transition({left:0,top:"100%"});

	// 			break;
				
	// 		default:
	// 			//form left
	// 			b.css({left:0,top: 0}).stop().transition({left:"-100%",top:0});
	// 			break;
	// 	}
	// 		}
		
	// });
	
	// }
	// Pro_move(".pro_list")



});

//滚动条
var scroller  = null;
var scrollbar = null;
window.onload = function () {
  scroller  = new jsScroller(document.getElementById("Scroller-1"), 630, 450);
  scrollbar = new jsScrollbar (document.getElementById("Scrollbar-Container"), scroller, false);
}

