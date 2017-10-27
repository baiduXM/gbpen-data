 $(document).ready(function(){

	$('#wrapper').fullpage({
		anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6'],
		menu: '#menu',
		'afterLoad': function(anchorLink, index){
			if (index == 3) {
				$("#menu").addClass('black');
			} else{
				$("#menu").removeClass('black');
			}
		}

	});



 		//大图轮播
 		jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/
		/* 控制进度条 */
			startFun:function(){
				var timer = jQuery(".slideBox .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});


			window.onresize = function(){
				if($('.fp-tableCell').height()<730){
					$('.fp-tableCell').height(auto)
				}
			}
			// $(function(){
		 //        $('#wrapper').fullpage({
		 //            scrollOverflow: true
		 //        });
		 //    });
 });