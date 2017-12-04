jQuery(document).ready(function($) {
	
	/*滚动js*/	

	/*********箭头控制滚动方向、加速及鼠标拖动***************/
	/*********箭头控制滚动方向、加速及鼠标拖动***************/
	var MarqueeDiv2Control=new Marquee("MarqueeDiv2");		//箭头控制滚动方向、加速及鼠标拖动实例
	MarqueeDiv2Control.Direction= 0 ;
	MarqueeDiv2Control.Step=1;
	MarqueeDiv2Control.Width=231;
	MarqueeDiv2Control.Height=256;
	MarqueeDiv2Control.Timer=20;
	MarqueeDiv2Control.ScrollStep=1;				//若为-1则禁止鼠标控制实例
	MarqueeDiv2Control.Start();
	MarqueeDiv2Control.BakStep=MarqueeDiv2Control.Step;
	$("LeftButton2").onmouseover=function(){MarqueeDiv2Control.Direction= 0 };
	$("LeftButton2").onmouseout=$("LeftButton2").onmouseup=function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep};
	$("LeftButton2").onmousedown=$("RightButton2").onmousedown=function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep+3};
	$("RightButton2").onmouseover=function(){MarqueeDiv2Control.Direction= 1 };
	$("RightButton2").onmouseout=$("RightButton2").onmouseup=function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep};


	
});