jQuery(document).ready(function() {

// 首页-案例焦点图
	 jQuery(".slideBox_pro").slide({titCell:".hd li", mainCell:".bd ul",effect:"fold", autoPlay:true, delayTime:500,trigger:"mouseover",});

// 书签切换
	jQuery(".itemcon").slide({ titCell:"ol li", mainCell:".newimg", effect:"left", autoPlay:true, delayTime:300,interTime:4000, triggerTime:50,trigger:"click" }); 

// 产品滚动
	jQuery(".showpro2").slide({mainCell:"ul.colee_l",autoPlay:true,effect:"leftMarquee",vis:4,interTime:25});
});

