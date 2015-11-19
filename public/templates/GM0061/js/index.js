$(document).ready(function(){
	    TouchSlide({ 
          slideCell:"#picScroll",
          titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
          autoPage:true, //自动分页
          pnLoop:"false", // 前后按钮不循环
          switchLoad:"_src" //切换加载，真实图片路径为"_src" 
        });


        
})