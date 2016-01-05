jQuery("#slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"left"});
//banner
jQuery("#slide").slide({mainCell:"ul",autoPlay:true,effect:"left"});
jQuery("#slide").hover(function(){ jQuery(this).find(".prev,.next") });