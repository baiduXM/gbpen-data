
 $(document).ready(function($) {
 	jQuery("#slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"left"});
 	jQuery("#pimgw").slide({mainCell:".bd ul",autoPlay:true});
 	jQuery('.gd .picMarquee').slide({mainCell:"ul.picList",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});
 });
