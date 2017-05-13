jQuery(document).ready(function($) {
	
		/*滚动js*/	
		var MarqueeDiv1Control=new Marquee("MarqueeDiv1");		//箭头控制滚动方向、加速及鼠标拖动实例
		MarqueeDiv1Control.Direction="left";
		MarqueeDiv1Control.Step=1;
		MarqueeDiv1Control.Width=430;
		//MarqueeDiv1Control.Height=167;
		MarqueeDiv1Control.Timer=20;
		MarqueeDiv1Control.ScrollStep=1;				//若为-1则禁止鼠标控制实例
		MarqueeDiv1Control.Start();
		MarqueeDiv1Control.BakStep=MarqueeDiv1Control.Step;

	
});