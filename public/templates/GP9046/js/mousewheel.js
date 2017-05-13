jQuery(document).ready(function() {
	// alert($(window).height());
	var _mousewheel = 0;
	var bolean=1;
	var _minus =$(".topbg").outerHeight(true)+$(".footer").outerHeight(true);
	var	_homeInfo = 405;
	if($(".homePage").length>0){
		$(".banner").css("height",$(window).height()-$(".homePage").height()-_minus);
		$("body").mousewheel(function(event,delta){
			if(delta==-1&&_mousewheel==0&&bolean==1){
				homeMousewhellUp();
			}else if(delta==1&&_mousewheel==1&&bolean==0){
				event.preventDefault();
				homeMousewhellDown();
			}
		});
	}
	$(".banner .up_down").click(function(){
		if (bolean){
			homeMousewhellUp();
		}else{
			homeMousewhellDown();
		}	
	});
	homeMousewhellUp = function(){
		_mousewheel++;
		$(".banner").stop(true,false).animate({
			"height":$(".banner").height()-_homeInfo
		},500);
		$(".homePage").stop(true,false).animate({
			"height":_homeInfo
		},500);
		$(".banner .up_down").addClass("up");
		bolean=0;
	}
	homeMousewhellDown = function(){
		_mousewheel=0;
		bolean=1;
		$(".banner").stop(true,false).animate({
			"height":$(window).height()-_minus
		},500);
		_mousewheelScroll=0;
		$(".homePage").stop(true,false).animate({
			"height":0
		},500);
		$(".banner .up_down").removeClass("up");
		bolean=1;
	}
	
});