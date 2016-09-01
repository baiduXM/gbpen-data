$(document).ready(function(){


	// indexpro图片滚动
	TouchSlide({ 
	    slideCell:"#picScroll",
	    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	    autoPage:true, //自动分页
	    autoPlay:true,
	    innerTime:5000,
	    pnLoop:"false", // 前后按钮不循环
	    switchLoad:"_src" //切换加载，真实图片路径为"_src" 
	});	

	//多图时
	TouchSlide({
		slideCell:"#slideBox1",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd ul", 
        effect:"leftLoop", 
        autoPage:true,//自动分页
        autoPlay:true,
        interTime:5000,//自动播放)
        pnLoop:"ture" // 前后按钮不循环

    });

  });



   