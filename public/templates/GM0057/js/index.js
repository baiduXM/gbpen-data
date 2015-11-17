
 window.addEventListener('load', function(){
   setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏

 TouchSlide({ 
                    slideCell:"#slideBox",
                    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
                    mainCell:".bd ul", 
                    effect:"leftLoop", 
                    autoPage:true,//自动分页
                    autoPlay:true,
                    interTime:6000 //自动播放
                });