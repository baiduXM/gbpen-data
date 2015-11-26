$(document).ready(function() {
      // jQuery("#nav").slide({ 
      //   type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
      //   titCell:".nLi", //鼠标触发对象
      //   targetCell:".subnav", //titCell里面包含的要显示/消失的对象
      //   effect:"slideDown", //targetCell下拉效果
      //   delayTime:300 , //效果时间
      //   triggerTime:0, //鼠标延迟触发时间（默认150）
      //   returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
      // });
    jQuery("#nav").slide({ type:"menu",	titCell:".nLi", targetCell:".sub",	effect:"slideDown", delayTime:300 , triggerTime:0,returnDefault:true });		

	// banner
	jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:500,interTime:4000,trigger:"click"});


	// 产品展示
	$('#prizes .photo1').jCarouselLite({
	      btnPrev: '#prizes a.photos-prev',
	      btnNext: '#prizes a.photos-next',
	      visible: 4,
	      auto: 3000,
	      speed: 1000
	}).css({visibility:"visible"});

	$('#prizes .photo2').jCarouselLite({
	      btnPrev: '#prizes a.photos-prev',
	      btnNext: '#prizes a.photos-next',
	      visible: 4,
	      auto: 3000,
	      speed: 1000
	}).css({visibility:"visible"});

// 内页
	$(".listbg li a").click(function(){		
		$(this).next(".second").slideToggle(300);
		return false;
		})	


});