$(document).ready(function(){

	TouchSlide({ 
		slideCell:"#slideBox",
		titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell:".bd ul", 
		effect:"leftLoop", 
		autoPage:true
	});
	resize();
	// $('#indexrd').height($('#indexli').height());

	$(window).resize(function(){
		resize();
		img(".logo",0.16719)
		img2(".banner",0.5);
		$(".news").outerWidth();

		$('#indexul li').each(function (){
			var ilh = $(this).find("figure").height();
			// alert(ilh);
			$(this).find("figure").next("div").height(ilh);
		});
	});

	
	//根据设备窗口大小调整高度
	function resize(){
		$(".nav-menu").height($(window).outerHeight());
		$(".main").height($(window).height()-$("footer").outerHeight()-$(".teldet").outerHeight());
		
	}
	$(".icon-cancel-circled").click(function(){
		$(".tel").hide();
		$(".main").height($(window).outerHeight()-$("footer").height())
		return false
	});
	$(".teldet").css({
		bottom: $("footer").outerHeight()+"px"
	
	});
	$(".share").height($("footer").outerHeight()+40)
	 function img(im,sc){
	 	var  img=$(im).width()
	 	var h=Math.floor($(window).width()*sc) 
	   
	    $(".trapezoid").css({
			
            borderBottomWidth:h*1.5+"px"
		});
	 }
	img(".logo",0.16719)
	

 function lineHeight(lneHeight,sc,num){
	 	var wid=$(lneHeight).width()
	 	var hig=Math.floor(wid*sc) 
	    // $(lneHeight).css({
	    // 	lineHeight:(hig*num)+"px",
	    // });
	 }
	 lineHeight(".menu li a",.5,1)
	//二级菜单下拉
	nav("#left_nav");
	nav(".aboutNav");
	function nav(stair){
		var stair=$(stair).children('li').children('a');
		var obj=stair.next();
		var erj=obj.children('li').children('a');
        var sj=erj.next();
		if (obj.length>0) {
			
			obj.prev().append('<span>+</span>')
			stair.click(function(event) {

				if($(this).children('span').text() == "+"){
					// event.preventDefault();
                     $(this).attr('href', 'javascript:void(0)');
                 $(this).children('span').text('-')
             }else{
                 $(this).children('span').text('+')
             };
              $(this).next().slideToggle(200)
			});
            if (sj.length>0) {

            	sj.prev().append('<span>+</span>')
            	
            	erj.click(function(event) {
            		
            		if($(this).children('span').text() == "+"){
            			$(this).attr('href', 'javascript:void(0)');
                 $(this).children('span').text('-')
             }else{
                 $(this).children('span').text('+')
             };

              $(this).next().slideToggle(200)
            	});
            };
		};       
}

    function img2(im,sc){
        var  img=$(im).width()
         hght=Math.floor(img*sc) 
        $(im).css({
            height:hght+1+"px"
        });
     }

    img2(".banner",0.5);


	$(".tel .close").click(function(){
		$(".tel").css('display','none');
		$(".main").height($(window).height()-$("footer").height())
		return false
	})
	
	 // 隐藏导航跟wrap的切换
	$(".slide-nav").click(function(){
		$("#quickbar-navs,.wrap").addClass("slide");
		
	})
	$(".nav-close,.shadow").on('touchstart click',function(){
		$("#quickbar-navs,.wrap").removeClass("slide");
		
		
	})
	
	$(".qx").click(function() {
		$(".share").hide();

	});
	$(".icon-flow-branch").click(function() {

		$(".share").show(500, function() {
			$(".share").height($("footer").outerHeight()+40)
		});
	});
 //返回上一页
	$('.forword').click(function(){
		window.history.go(-1);
	
	});
	
	(function(){
		$('.type').click(function(){
			if($('.aboutName').is(':hidden')){
				$(this).html("分类↓");
				
			}else{
				
				$(this).html("分类↑");
			}
			$('.aboutName').slideToggle(200);
			
		})
	})();
	
	$('.font-set').click(function(){
		$('.font-list').slideToggle(200);
		$('.type-list').slideUp(200);
	});
	
	fontSize('.d','1.25rem');
	fontSize('.x','.75rem');
	fontSize('.z','1rem');
	function fontSize(fontSiz,siz){
		$(fontSiz).click(function() {
		$('.infos').css('font-size',siz);
		$('.font-sel').slideUp();
		});
		
	}
	
	//返回顶部
	$('.icon-angle-circled-up').click(function(){
		$('.main').animate({
			'scrollTop' : 0

		},1);

	})
	
  var more=$(".news").outerWidth()*0.07;
    $(".more").css({
        width:more+"px",
        height:more+"px",
        lineHeight:more+"px"
    });


    
    var aboutimgw=Math.ceil($(".main").outerWidth()*0.453);
    var aboutimgh=Math.ceil(aboutimgw*0.651);
    var bl=aboutimgh
    $(".aboutdate img").css({
        // width: aboutimgw + "px",
        // height:aboutimgh+"px"
     });
    $(".bfore").css({
        // borderLeftWidth:  bl+"px",
        // borderTopWidth:bl/2+"px",
        // borderBottomWidth:bl/2+"px"
    });
    $(".db .tit").css({
        // lineHeight:aboutimgh+"px"
    });
$(".aboutdate p").css({
    // height: (Math.floor(aboutimgh/16/1.5))*1.5+1.5+"rem"

});

$(".pic_lm li:odd").addClass('js');
$("#pic_lm li").removeClass('js');




  });