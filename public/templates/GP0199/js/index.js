$(function() {


	// nav
	    jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});
		$('.nav .nLi').hover(function(){
			$('.navbg').show()
		},function(){
			$('.navbg').hide()

		})
		$('.sub li').hover(function(){
			$('.subnbg').show()
		},function(){
			$('.subnbg').hide()

		})
		
		$('.contact ul li:nth-child(2)').hover(function(){
			$('.wb').show()
		},function(){
			$('.wb').hide()

		})
		
		// var li1 = $(".nav .nLi").length; 
		// $('.nav>li').last().find('.sub').css({"bottom":0,"top":"auto"});
		// $(".nav>li").eq(-2).find('.sub').css({"bottom":0,"top":"auto"});
		// $(".nav>li").eq(-3).find('.sub').css({"bottom":0,"top":"auto"});
	// banner js
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});
    //link 
      $("#slt-one h3").click(function(){
        var ul=$("#slt-one .new");
        if(ul.css("display")=="none"){
          ul.slideDown();
        }else{
          ul.slideUp();
        }
      });
      $("#slt-one li").click(function(){
        var span=$(this).text();
        $("#slt-one h3").html(span);
        $("#slt-one .new").hide(); 
      });



		//大图切换
		jQuery(".game163").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200,trigger:"click",
			startFun:function(i,p){
				//控制小图自动翻页
				if(i==0){ jQuery(".game163 .sPrev").click() } else if( i%4==0 ){ jQuery(".game163 .sNext").click()}
			}
		});

		//小图左滚动切换
		jQuery(".game163 .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:4,scroll:4,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:false });

});