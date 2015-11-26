
jQuery(".hxz").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});

jQuery(".pro_det").slide({mainCell:"ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});


jQuery('.anli .picMarquee').slide({mainCell:"ul.picList",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});


/*鼠标移过，左右按钮显示*/
jQuery(".picMarquee").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",1) },function(){ jQuery(this).find(".prev,.next") });



