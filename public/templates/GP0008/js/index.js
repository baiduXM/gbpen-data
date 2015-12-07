
$(document).ready(function($) {
	
	        jQuery("#nav").slide({ 
				type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
				titCell:".nLi", //鼠标触发对象
				targetCell:".sub", //titCell里面包含的要显示/消失的对象
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
				returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
			});
			


jQuery(".foucebox").slide({ mainCell:".bd ul", effect:"fold", autoPlay:true, delayTime:300, triggerTime:50, startFun:function(i){
				//下面代码控制鼠标状态滑动
				jQuery(".foucebox .hoverBg").animate({"margin-top":72*i},150);
			}
		});
jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
jQuery(".dtBox").slide({mainCell:".bd ul",autoPlay:true});


	    $(".listbg li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    }) 

 var about_r=$(".right").outerHeight()
var about_l=$(".left").outerHeight()
  if(about_r>about_l){
      $(".right").parent(".cont ").css({height:about_r+"px"});
  }else{
       $(".left").parent(".cont").css({height:about_l+"px"});
  }
 //  var lenght=$(".about h3 b").text().length;
 //  var t=$(".about h3 b").text().substring(0,1);
 //  var t1=$(".about h3 b").text().substring(1,lenght);

 // $(".about h3").prepend('<em>'+'<i>'+t+'</i>'+t1+'</em>')
		
	function lengTh(a,b){
		var length=$(a).text().length;
		var t=$(a).text().substring(0,1);
		var t1=$(a).text().substring(1,length);
		$(b).prepend('<em>'+'<i>'+t+'</i>'+'<strong>'+t1+'</strong>'+'</em>');
		
	}
   lengTh(".about h3 b",".about h3");
   lengTh(".right .title b",".right .title");
		
		});