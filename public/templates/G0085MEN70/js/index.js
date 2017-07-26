$(document).ready(function() {
	
// 焦点图片切换
	jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover" });

//产品切换
	jQuery(".side_pro").slide({ titCell:".scroll li", mainCell:"ol", effect:"top", autoPlay:true, delayTime:300, triggerTime:50,trigger:"click" });

// 家居切换
	jQuery(".fitment").slide({ mainCell:".fitment_list",effect:"left",pnLoop:false});

		
});