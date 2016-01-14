
$(document).ready(function(){

//实例一
	$("#menu li a").wrapInner('<span class="out"></span>' ).append('<span class="bg"></span>');
	$("#menu li a").each(function(){
		$('<span class="over">' +  $(this).text() + '</span>').appendTo(this);
	});

	$("#menu li a").hover(function(){
		$(".out",this).stop().animate({'top':'48px'},250);
		$(".over",this).stop().animate({'top':'0px'},250);
		$(".bg",this).stop().animate({'top':'0px'},120);
	},function(){
		$(".out",this).stop().animate({'top':'0px'},250);
		$(".over",this).stop().animate({'top':'-48px'},250);
		$(".bg",this).stop().animate({'top':'-48px'},120);
	});



// banner
/*鼠标移过，左右按钮显示*/
		jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
		/*SuperSlide图片切换*/
		jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});
	

})




window.onload = function(){
	var oBox = document.getElementById('box')
	var aSpan = oBox.getElementsByTagName('span');
	var aLi = oBox.getElementsByTagName('li');
	var playtime = null;
	var iNow = 0;
	for(i=0;i<aSpan.length;i++){
		aSpan[i].index = i;
		aSpan[i].onclick = function(){
			for(var len=aLi.length,i=0;i<len;i++)doMove(aLi[i], {width:29});
			for(var len=aSpan.length,i=0;i<len;i++)aSpan[i].className = '';
			this.className = 'hove';
			doMove(this.parentNode, {width:217});
			iNow = this.index;
		};
	}
	playtime = setInterval(tab,3000);
	oBox.onmouseover = function(){
		clearInterval(playtime);
	}
	oBox.onmouseout = function(){
		playtime = setInterval(tab,3000);
	}
	function tab(){
		iNow == aLi.length-1 ? iNow = 0 : iNow++;
		aSpan[iNow].onclick();
	}





};