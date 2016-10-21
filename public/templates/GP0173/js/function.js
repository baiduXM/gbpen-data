$(document).ready(function(){

    // banner滚动
  	jQuery(".slideBox").slide({mainCell:".banner ul",autoPlay:true});
  	
    // 导航上拉 li不要平分class了
	$(".navs ul li").hover(function() {
		var ulHeight = $(this).find('ul.erji').find('li').length * 33;
		$(this).find('.erji').stop(true, true).css({border:"1px solid #999"}).animate({height:ulHeight}, 300);
	}, function() {
		$(this).find('.erji').animate({height:"0px"}, 200,function(){
			$(this).css({border:"none"});
		});
	});


    // 产品图滚动上
    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true });
    // 产品图滚动下
    jQuery(".hd").slide({mainCell:"ul",autoPage:true,effect:"left",
               autoPlay:true,vis:6,trigger:"click"});
    
	
});	
	
    


	