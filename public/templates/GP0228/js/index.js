jQuery(document).ready(function($) {
	
// 首页案例展示
	jQuery(".casimg").slide({mainCell:".scrcont ul",autoPage:true,effect:"left",autoPlay:true});

//首页产品展示
	jQuery(".showpro").slide({mainCell:"ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:25});
});


