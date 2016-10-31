

jQuery(document).ready(function($) {
	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,interTime:3000,delayTime:1000,effect:"leftLoop",});
	$(".tempWrap").css("height","100%");
	jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});
	//大图切换
		

		//小图左滚动切换
		
		jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"leftLoop"});	

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
 	var first_CHli = $(a).children('li');
 	var second_CH=first_CH.next();
 	var two_CH=second_CH.children('li').children('a');
 	var third_CH=two_CH.next();
 	if (second_CH.length>0){
 		
 		// second_CH.prev().addClass('tans');
 		// second_CH.prev().attr('href', '#');
 		first_CH.mouseenter(function() {
 			// alert("a");
 			$(this).next().show(500);
 			second_CH.children('li').next().show(500);
 		});
 		second_CH.children('li').mouseleave(function(){
 			third_CH.hide(500);
 		});
 		$("#navul").mouseleave(function(){
	 		$(".navul").hide(500);
	 		
 		});
 		
 	};
 	
 	if(third_CH.length>0){
 		// third_CH.prev().addClass('line');
 		// third_CH.prev().attr('href', '#');
 		two_CH.mouseenter(function() {
 			$(this).next().slideToggle();
 		});
 		two_CH.mouseleave(function(){
 			third_CH.mouseenter(function(){
 				$(this).next().hide(500);

 			});
 			third_CH.mouseleave(function(){
 			});

 		});
 		// $(this).
 		
 	}
 	
 }

 var contentimage = $("#contentimage").height();
 if(contentimage != null){
 	if(contentimage > 450){
 		var atheight = parseInt($("#contentarticle").css("height"));
 		$("#contentarticle").css("height",(atheight+contentimage-450));
 	}
 }


Class_F('#navul')
// $('#navul').hover(function(){
// 	// alert(this);
// 	$('#navul ul').slideToggle();
// });

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
  // scroller  = new jsScroller(document.getElementById("Scroller-1"), 630, 450);
  // scrollbar = new jsScrollbar (document.getElementById("Scrollbar-Container"), scroller, false);
}

