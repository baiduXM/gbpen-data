$(document).ready(function(){
	TouchSlide({ 
                    slideCell:"#focus",
                    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
                    mainCell:".bd ul", 
                    effect:"left", 
                    autoPlay:false,//自动播放
                    autoPage:true, //自动分页
                    switchLoad:"_src", //切换加载，真实图片路径为"_src" 
                    effect:"leftLoop"
                  });
	TouchSlide({ 
                    slideCell:"#picScroll",
                    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
                    autoPage:true, //自动分页
                    pnLoop:"false", // 前后按钮不循环
                    switchLoad:"_src" //切换加载，真实图片路径为"_src" 
                  });
	TouchSlide({ 
                    slideCell:"#picScroll1",
                    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
                    autoPage:true, //自动分页
                    pnLoop:"false", // 前后按钮不循环
                    switchLoad:"_src" //切换加载，真实图片路径为"_src" 
                  });
    TouchSlide(         
    {slideCell:"#proBox",
    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
    mainCell:".bd ul", 
    effect:"leftLoop", 
    prevCell:".slide_left",
    nextCell:".slide_right",
    autoPage:true,//自动分页
    autoPlay:true,
    interTime:10000,//自动播放)
    pnLoop:"ture" // 前后按钮不循环

    });
  });
  
