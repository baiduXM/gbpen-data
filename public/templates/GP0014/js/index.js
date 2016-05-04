jQuery(document).ready(function() {

	// 实力展示

	YAO.YTabs({
			tabs: YAO.getEl('YSIndex').getElementsByTagName('a'),
			contents: YAO.getElByClassName('YSample', 'div', 'YSlide'),
			defaultIndex: 1,
			auto: true,
			fadeUp: true
	});


	var MarqueeDiv1Control=new Marquee("MarqueeDiv1");		//箭头控制滚动方向、加速及鼠标拖动实例
	MarqueeDiv1Control.Direction="left";
	MarqueeDiv1Control.Step=1;
	MarqueeDiv1Control.Width=716;
	MarqueeDiv1Control.Height=167;
	MarqueeDiv1Control.Timer=20;
	MarqueeDiv1Control.ScrollStep=1;				//若为-1则禁止鼠标控制实例
	MarqueeDiv1Control.Start();
	MarqueeDiv1Control.BakStep=MarqueeDiv1Control.Step;

	var MarqueeDiv2Control=new Marquee("MarqueeDiv2");		//箭头控制滚动方向、加速及鼠标拖动实例
	MarqueeDiv2Control.Direction="left";
	MarqueeDiv2Control.Step=1;
	MarqueeDiv2Control.Width=716;
	MarqueeDiv2Control.Height=167;
	MarqueeDiv2Control.Timer=20;
	MarqueeDiv2Control.ScrollStep=1;				//若为-1则禁止鼠标控制实例
	MarqueeDiv2Control.Start();
	MarqueeDiv2Control.BakStep=MarqueeDiv2Control.Step;
});