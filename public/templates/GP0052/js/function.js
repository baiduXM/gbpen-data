$(document).ready(function() {
	$(".first li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    })
// menuhover
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});
	// banner js
    
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});

		// jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
	$('#prizes .photos-content.enable').jCarouselLite({
		btnPrev: '#prizes a.photos-prev',
		btnNext: '#prizes a.photos-next',
		visible: 3,
		auto: 3000,
		speed: 1000
	}).css({visibility:"visible"});

		jQuery(".newsbox").slide({delayTime:0,trigger:"click"});


		

    $('.brands-list ul li:nth-child(4n),.prolist li:nth-child(3n),.newslist:nth-child(3n)').css('marginRight',0);
    $('.probox li:nth-child(4n)').css('borderRight',"none");
    
	jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"fold",autoPlay:true,trigger:"click" });
		jQuery(".focusBox").slide({ titCell:".num li", mainCell:".pic",effect:"fold", autoPlay:true,trigger:"click",
			//下面startFun代码用于控制文字上下切换
			startFun:function(i){
				 jQuery(".focusBox .txt li").eq(i).animate({"bottom":0}).siblings().animate({"bottom":-32});
			}
		});
                $('.brands-list li .proimg a').hover(function(){
                  $(this).find(".shine").stop().animate({left: "269px"},500);
                },function(){
                    $(this).find(".shine").css("left","-269px"); 
                })

		jQuery(".focusBox").slide({ titCell:".num li", mainCell:".pic",effect:"fold", autoPlay:true,trigger:"click",
			//下面startFun代码用于控制文字上下切换
			startFun:function(i){
				 jQuery(".focusBox .txt li").eq(i).animate({"bottom":0}).siblings().animate({"bottom":-36});
			}
		});
		$('.limit ul li').last().css('marginRight',0);

		 jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"fold"});

// 字体分割
	var wordSplit = function(){
		this.word = [];
		this.getInfo = function(){
			this.word = $('.pro-tit-word-hide').val().split("");
			var firstword = this.word[0],
				secondword = this.word[1];
			this.joint(firstword,secondword);
		};
		this.joint = function(firstword,secondword){
			$('.fword').html(firstword);
			$('.sword').html(secondword);
			this.word.splice(0, 2);
			// console.log($('.pro-tit-rt h2').text());
			$('.pro-tit-rt h2').html(this.word.join(""));
		};
		this.init = function(){
			this.getInfo();
		};
		return this.init();
	}();
		 
	
})