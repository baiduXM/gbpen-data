$(document).ready(function() {

// menuhover
			// jQuery(".nav").slide({ 
			// 	type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
			// 	titCell:".nLi", //鼠标触发对象
			// 	targetCell:".sub", //titCell里面包含的要显示/消失的对象
			// 	effect:"slideDown", //targetCell下拉效果
			// 	delayTime:300 , //效果时间
			// 	triggerTime:0, //鼠标延迟触发时间（默认150）
			// 	returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
			// });	

// jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",trigger:"click", effect:"slideDown",delayTime:300,triggerTime:0});

	// banner js

		jQuery(".nybanner .slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"fold", trigger:"click",interTime:4000});
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});
 		// $('.photos .photos-content ul li').width($('.photos').width()/7)
		$('#prizes  .photos-content.enable').jCarouselLite({
			btnPrev: '#prizes a.photos-prev',
			btnNext: '#prizes a.photos-next',
			visible: 7,
			auto: 30,
			speed: 2000
		}).css({visibility:"visible"});
        

      

	    $('.prolist li a').hover(function(){
	    	$(this).children('.prohover').show()
	    },function(){
	    	$(this).children('.prohover').hide()

	    });
	    $('ul#menu1 li').first().addClass('hover');
        $('#main1 ul').first().addClass('block');



		// 下拉菜单
		$('.first li a').click(function() {
	        $(this).parent().siblings().find('.second').slideUp()
	        $(this).siblings(".second").slideToggle()
	        $(this).siblings(".second").children('li').children('a').click(function() {
	              $(this).parent().siblings().find('.three').slideUp()
	              $(this).siblings(".three").slideToggle()
	        });
	    });


		
		$('ul.teamlist li a').hover(function() {
			$(this).children('h2').show()
		}, function() {
			$(this).children('h2').hide()
		});
	    
	    $('.pro-list li:nth-child(4n)').css('marginRight', 0);

		
})
	function setTab(m,n){ 
		var tli=document.getElementById("menu"+m).getElementsByTagName("li"); 
		var mli=document.getElementById("main"+m).getElementsByTagName("ul"); 
		for(i=0;i<tli.length;i++){ 
		tli[i].className=i==n?"hover":""; 
		mli[i].style.display=i==n?"block":"none"; 
		} 
	}
