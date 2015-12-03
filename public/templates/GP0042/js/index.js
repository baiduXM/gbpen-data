$(document).ready(function(){
	 jQuery(".focus").slide({ titCell:"#tip li", mainCell:"#pic ul",effect:"left",autoPlay:true,delayTime:200 })

		
	   
	    $('.advisor ul li').last().css("marginRight",0);
	    $('.title span').css('marginLeft',-$('.title span').width()/2);
	    $('.advior-item:nth-child(5n)').css("marginRight",0);
	    $('.advior-item .photo span').hover(function() {
 			$(this).next().next().hide();
 		}, function() {
 			$(this).next().next().show();
 		});
        $('.busi ul li').first().css('height',345)
        $('.busi ul li:eq(1)').css('marginBottom',15)
        $('.busi ul li:eq(2)').css('marginBottom',15)
       jQuery(".multipleColumn").slide({titCell:".hd ul",mainCell:".bd .ulWrap",autoPage:true,effect:"leftLoop",autoPlay:true,vis:2});
	
});