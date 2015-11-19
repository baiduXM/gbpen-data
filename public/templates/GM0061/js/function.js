$(document).ready(function(){
	
		TouchSlide({ 
					slideCell:"#slideBox",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					mainCell:".bd ul", 
					effect:"leftLoop", 
					autoPage:true,//自动分页
					autoPlay:true,
					interTime:6000 //自动播放
				});
	
	
	
	$(window).load(function(){
	var img=new Image();
	img.src=$("ul.newslist li img").attr("src");
	$("ul.newslist li .editbox .nr").height($("ul.newslist li img").height()-$("ul.newslist li .editbox .title").height()-10)
	if($(window).width()<400){
		$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/2+"px"})
		}else{
			if($(window).width()<540)
			{$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/3+"px"})}
			else{$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/4+"px"})}
			}
	
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".index-wrap").height($(".wrap").height())
	
	});
	$(window).resize(function(){
		$("ul.newslist li .editbox .nr").height($("ul.newslist li img").height()-$("ul.newslist li .editbox .title").height()-10)
		if($(window).width()<400){
		$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/2+"px"})
		}else{
			if($(window).width()<540)
			{$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/3+"px"})}
			else{$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/4+"px"})}
			}
	
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$(".index-wrap").height($(".wrap").height()+$(".quickbar-tips").height()) 
	})
	
	                            $(window).on('load', function () {
                                function setHeightf() {
                                    $('.m-left').each(function () {
                                        var self = this;
                                        var heights = $(self).height();
                                        var right = $('.m-right').find('.m_menu');
                                        right.height(heights)
                                    })

                                };
                                setHeightf();
                                $(window).resize(function () {
                                    setHeightf();
                                    setTimeout(setHeightf);																	
                                })
	  function setHeightg() {
				  $('.m-left').each(function () {
					  var self2 = this;
					  var heights2 = $(self2).height();
					  var right2 = $('m-rightsecond').find('.nurse');
					  right2.height(heights2)
				  })

			  };
			  setHeightg();
			  $(window).resize(function () {
				  setHeightg();
				  setTimeout(setHeightg);																	
			  })		
                                function setHeighth() {
                                    $('.m-rightsecond').each(function () {
                                        var self3 = this;
                                        var heights3 = $(self3).height();
                                        var right3 = $('.m-leftsecond').find('.jpbm');
                                        right3.height(heights3)
                                    })

                                };
                                setHeighth();
                                $(window).resize(function () {
                                    setHeighth();
                                    setTimeout(setHeighth);																	
                                })	
                                function setHeighti() {
                                    $('.m-left').each(function () {
                                        var self4 = this;
                                        var heights4 = $(self4).height();
                                        var right4 = $('.m-right').find('.m_menua');
                                        right4.height(heights4)
                                    })

                                };
                                setHeighti();
                                $(window).resize(function () {
                                    setHeighti();
                                    setTimeout(setHeighti);																	
                                })	
                                function setHeightm() {
                                    $('.maobu2').each(function () {
                                        var self5 = this;
                                        var heights5 = $(self5).height();
                                        var right5 = $('.left_mbword');
                                        right5.height(heights5)
                                    })

                                };
                                setHeightm();
                                $(window).resize(function () {
                                    setHeightm();
                                    setTimeout(setHeightm);																	
                                })																	  
			  					
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
		return false;
	})
	$("#classa").click(function(){
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
		return false;
	})	

	$(".tell-icon .close").click(function(){
		$(".tell-icon").removeClass("display-block")
		$(".index-wrap").height($(window).height()-$(".fixed").height())
		return false
	})
	
	$(".headersearch").on('touchstart',function(){
		$(".searchbox").toggleClass("searchbox-block")
		return false
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

$(".ny-news-list li,#picture li,ul.picture2 li,.news_list .news_d").hide();	
    size_li = $(".ny-news-list li,ul.picture2 li,.case_list li,.news_list .news_d").size();
    x=4;
    $('.ny-news-list li:lt('+x+'),ul.picture2 li:lt('+x+'),.case_list li:lt('+x+'),.news_list .news_d:lt('+x+')').show();
    $('#more').click(function () {
        x= (x+4 <= size_li) ? x+4 : size_li;
        $('.ny-news-list li:lt('+x+'),ul.picture2 li:lt('+x+'),.case_list li:lt('+x+'),.news_list .news_d:lt('+x+')').fadeIn();
        if(x == size_li){
            $('#more').hide();
			$('#less_more').show();
        }
    });		
	$(".share-cance").click(function(){
		$(".newsclass").removeClass("show")
		$(".opacity2").hide()
	})
	
  });
  
