$(document).ready(function() {
	
// 首页案例切换
	jQuery(".focusBox1").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:300, trigger:"click"});

//产品切换
	jQuery(".picMarquee-left").slide({mainCell:".hd_01 ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});	

});