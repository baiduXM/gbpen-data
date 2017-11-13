$(document).ready(function(){
    
	TouchSlide({ 
                    slideCell:"#focus",
                    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
                    mainCell:".bd ul", 
                    effect:"left", 
                    autoPlay:true,//自动播放
                    autoPage:true, //自动分页
                    switchLoad:"_src", //切换加载，真实图片路径为"_src" 
                    effect:"leftLoop"
                  });
	// TouchSlide({ 
 //                    slideCell:"#picScroll",
 //                    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
 //                    autoPage:true, //自动分页
 //                    pnLoop:"false", // 前后按钮不循环
 //                    switchLoad:"_src" //切换加载，真实图片路径为"_src" 
 //                  });
	// TouchSlide({ 
 //                    slideCell:"#picScroll1",
 //                    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
 //                    autoPage:true, //自动分页
 //                    pnLoop:"false", // 前后按钮不循环
 //                    switchLoad:"_src" //切换加载，真实图片路径为"_src" 
 //                  });
    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;
  });
  
