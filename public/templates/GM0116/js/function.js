$(document).ready(function(){
	$(window).load(function(){
		TouchSlide({ 
					slideCell:"#slideBox",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					mainCell:".bd ul", 
					effect:"leftLoop", 
					autoPage:true,//自动分页
					autoPlay:true,
					interTime:6000 //自动播放
				});
	var img=new Image();
	img.src=$("ul.stylelist li div img,.bigimg .slideBox .bd li img").attr("src");
	$(".bigimgbox .imgbg").height($(".bigimg").height());
	$(".bigimgbox .imgbg").width($(".bigimg").width());
	$(".index-wrap").height($(window).height()-$(".fixed").height()-$(".tell-icon").height())
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	var myswiper=$('.indexmenu .scroll-container').swiper({
			mode:'vertical',
			scrollContainer: true,
			mousewheelControl: true,
			freeModeFluid:true,
			onTouchStart : function() {		 
			 }
		})

	});
	$(window).resize(function(){
		$(".index-wrap").height($(window).height()-$(".fixed").height()-$(".tell-icon").height())
		$(".bigimgbox .imgbg").height($(".bigimg").height());
		$(".bigimgbox .imgbg").width($(".bigimg").width());
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		

	})
	
	function pageSlideOver(){
    $('.page-out').live('transitionend', function(){
      $(this).removeClass('page-out');
    });
    $('.page-in').live('transitionend', function(){
      $(this).removeClass('page-in');
    });
  }
  //隐藏导航跟wrap的切换
	$("#class").click(function(){
		$(".class").removeClass("page-prev").addClass("page-in");
		$(".wrap").removeClass("page-active").addClass("page-next page-in")
		$(".opacity2").show()
		pageSlideOver();
	})
	$(".class-close,.opacity2").on('touchstart',function(){
		$(".class").addClass("page-prev page-out")
		$(".wrap").removeClass("page-next").addClass(" page-out")
		$(".opacity2").hide()
		$(".newsclass").removeClass("show")
		pageSlideOver();
	})
	
	$(".tell-icon .close").click(function(){
		$(".tell-icon").removeClass("display-block")
		$(".index-wrap").height($(window).height()-$(".fixed").height())
	})
	
	
  	
	$("#font").click(function(){
		$("#up").hide()
		$("#down").show()
		$(".hide-class").removeClass("hide-class1")
		$(".font").slideToggle()
		$(".hide-class").slideUp()	
	})
	$(".font dl.big").click(function(){
		$(".edite").attr('class',"edite font-big")
		$(".news-ins").attr('class',"news-ins font-big")
		$(".font").hide()
	})
	$(".font dl.normal").click(function(){
		$(".edite").attr('class',"edite font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()
	})
	$(".font dl.small").click(function(){
		$(".edite").attr('class',"edite font-small")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()

	})	
	$("#first").click(function(){
		$("#up").toggle()
		$("#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()	
	})
$(".back-top").click(function(){$(".index-wrap").animate({scrollTop :0}, 800)})
	$("#share_btn").click(function(){
		$(".newsclass").addClass("show")
		$(".opacity2").show()
		return false
	})
	$(".share-cance").click(function(){
		$(".newsclass").removeClass("show")
		$(".opacity2").hide()
	})
	
	$(".windows .close").click(function(){
		$(".windows").hide()
		})
		
		// $(".labout_show li").hide();	
    size_li2 = $(".labout_show li").size();
    x=4;
    $('.labout_show li:lt('+x+')').show();
    $('#lmore').click(function () {
        x= (x+4 <= size_li2) ? x+4 : size_li2;
        $('.labout_show li:lt('+x+')').fadeIn();
        if(x == size_li2){
            // $('#lmore').hide();
        }
    });

		// $(".labout_list li").hide();	
    size_li = $(".labout_list li").size();
    x=4;
    $('.labout_list li:lt('+x+')').show();
    $('#plmore').click(function () {
        x= (x+4 <= size_li) ? x+4 : size_li;
        $('.labout_list li:lt('+x+')').fadeIn();
        if(x == size_li){
            // $('#plmore').hide();
        }
    });	
  		
  });
  
                            $(window).on('load', function () {
                                function setHeightf() {
                                    $('.limat').each(function () {
                                        var self = this;
                                        var heights = $(self).height();
                                        var limat2 = $('.limat2').find('.sliword');
                                        limat2.height(heights);
                                        // $('.maline').height(heights-$(".menuline").height()-55);
                                        // $('.maline').height();
                                        // alert((heights*0.5));
                                        if((heights*0.5)<55){
                                        	$('.maline').height(20);
                                        }else if((heights*0.5)<100){
                                        	$('.maline').height(35);
                                        }else if((heights*0.5)<180){
                                        	$('.maline').height(175);
                                        }else{
                                        	$('.maline').height(175);
                                        }
                                    })

                                };
                                setHeightf();
                                $(window).resize(function () {
                                    setHeightf();
                                    setTimeout(setHeightf);
                                setHeighte();
                                    setTimeout(setHeighte);		
                                setHeightg();
                                    setTimeout(setHeighte);																		
                                })
								
								

                                function setHeighte() {
                                    $('.slimgs6').each(function () {
                                        var self = this;
                                        var heights = $(self).height();
                                        var alimat = $('.alimat').find('.sliworda2');
                                        alimat.height(heights)
                                    })

                                };
                                setHeighte();

 function setHeightg() {
                                   // $('.slimgs2').each(function () {
                                        var self2 = $(".slimgs2");
                                        var heights1 = $(self2).height();
                                        var alimat2 = $(".sliword2");
                                        alimat2.height(heights1)
                                  //  })

                                };
                                setHeightg();					
                              									
													
                                function setHeighti() {
                                  // $('.slimgs2').each(function () {
                                        var self5 = $(".dimgs");
                                        var heights5 = $(self5).height();
                                        var alimat5 = $(".cirle_pic");
                                        alimat5.height(heights5);										
                                  //  })

                                };
                                setHeighti();								
				 $(window).resize(function(){
					setTimeout(setHeighti);
				 })		
				 
                                function setHeighth() {
										 var self = $('.pings_s');
                                        var heights = $(self).height();
                                        var ckgd = $('.ckgd');								
                                        ckgd.height(heights);
										//ckgd.attr("style","line-height:"+heights/2+"px;height:"+heights+"px");
										$(".morejiahao").attr("style","line-height:"+heights/2+"px");
												$(".ckgd2").attr("style","line-height:"+heights/10+"px");

                                };
                                setHeighth();								
				 $(window).resize(function(){
					setTimeout(setHeighth);
				 })								 																								
                              
                            })  
                             function setHeighta(){
var list = $(".tul");
		                      list.height(list.width()).css('line-height',list.height() + 'px')		;
                                var list = $(".tul").height();

                                $(".tu_titlesa").attr("style","line-height:"+list/2+"px");
                                $(".tu_d2").attr("style", "line-height:" + list / 7 + "px");
								$(".tu_ebng").attr("style", "line-height:" + list / 7 + "px");
                                // list.height(list.width()).css('line-height',list.height() + 'px')	
		
				 };		
                                		
   				setHeighta();									
   				 $(window).resize(function(){
					setTimeout(setHeighta);
				 })					

													
													
														
						