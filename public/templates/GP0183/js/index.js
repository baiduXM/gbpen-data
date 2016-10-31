$(document).ready(function() {
// 标题
	$(".column-hd").each(function(index, el) {
		$(this).find('h3,h2').addClass('opacity title');
		var hwidth = $(this).find('h2 span').outerWidth(true);
		$(this).find('.ledgement').width(hwidth)
	});
	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		if (scrollTop > 0) {
			$(".column-01 .title").css({filter:"Alpha(opacity=100)"}).animate({left:"0px",opacity:"1"},1500);
		};
		if (scrollTop > 400) {
			$(".column-02 .title").css({filter:"Alpha(opacity=100)"}).animate({left:"0px",opacity:"1"},1500);
		};
		if (scrollTop > 1300) {
			$(".column-04 .title").css({filter:"Alpha(opacity=100)"}).animate({left:"0px",opacity:"1"},1500);
		};
	});
	$("body").click(function(event) {
		// alert($(window).scrollTop())
	});

// 焦点图片切换
	jQuery("#banner").slide({ titCell:".dot ol", mainCell:"ul.picture", effect:"left",  autoPlay:true, autoPage:true, trigger:"click" });

// 栏目一图片滚动
	jQuery(".front-service").slide({mainCell:".service ul", effect:"left", autoPlay:true, autoPage:true, vis:4, trigger:"click" });
	$(".service ul li a").hover(function() {
		$(this).find('em').animate({width:"100%"}, 300);
	}, function() {
		$(this).find('em').animate({width:"0px",left:"100%"}, 300,function(){
			$(this).css({left:"0px"});
		});
	});

// 栏目二 矩形动画
	var canvas = document.getElementById("rect");
	var ctx = canvas.getContext("2d");
	var expr=654;
	var expt=339;
	var expl=1;
	var expb=1;
	var exp = true
	ctx.fillStyle = "rgba(255,255,255,1)";
	function draw(){
		if (exp) {
			ctx.strokeStyle = "rgba(32,160,226,1)";
			ctx.lineWidth = 1;
		} else {
			ctx.strokeStyle = "rgba(255,255,255,1)";
			ctx.lineWidth = 3;
		};
		ctx.clearRect(0,0,655,340);
		ctx.beginPath();
		ctx.moveTo(1,1);
		ctx.lineTo(1,expb);
		if (expb == 339) {
			ctx.lineTo(expl,339);
			if (expl == 654) {
			 	ctx.lineTo(654,expt);
			 	if (expt == 1) {
					ctx.lineTo(expr,1);
			 	}
			};
		};
		// ctx.closePath();
		ctx.stroke();
		ctx.fill();
		if (expb < 339) {
			expb ++;
		} else if(expb == 339 && expl < 654) {
			expl ++;
		} else if (expl == 654 && expt > 1) {
			expt --;
		} else if(expt == 1 && expr > 1){
			expr --;
		} else if (expb == 339 && expl == 654 && expt == 1 && expr == 1) {
			if (exp) {
				exp = false;
				$(".back-rect").css({display:"block"});
				expr=654;
				expt=339;
				expl=expb=1;
			} else {
				exp = true;
				$(".back-rect").css({display:"none"});
				expr=654;
				expt=339;
				expl=expb=1;
			};
		};
	};
	setInterval(function(){draw();}, 5);

// 底部图片列表
	jQuery(".front-staff").slide({mainCell:".staff ul",autoPage:true,effect:"left",autoPlay:true,vis:4,pnLoop:false});


});
