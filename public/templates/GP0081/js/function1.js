$(document).ready(function($) {

	//��������
	$(".aboutNav>li>a").click(function(){		
		$(this).parent().siblings().find(".second").slideUp()
	    $(this).siblings(".second").slideToggle()
		// return false;
	})	
	$(".second>dd>a").click(function () {
	    $(this).parent().siblings().find(".third").slideUp()
	    $(this).siblings(".third").slideToggle()
	})

});

	$(function() {
	    if (window.PIE) {
	        $('.rounded').each(function() {
	            PIE.attach(this);
	        });
	    }
	});


	//���ض���
	$(function(){

		function Top(a,b){
		 	$(a).click(function() {
		 		$(b).animate({scrollTop:0}, 1000)
		 	});
		 }

		Top('.go_top','body');

	});

	// ����
	(function(){
			var ind = 2; //��ʼλ��
			var nav= jQuery(".nav");
			var init = jQuery(".nav .m").eq(ind);
			var block = jQuery(".nav .block"); //����
			block.css({"left":init.position().left-3}); //��ʼ������λ��
			nav.hover(function(){},function(){ block.animate({"left":init.position().left-3},100); }); //�Ƴ��������鷵��

			jQuery(".nav").slide({ 
					type:"menu", //Ч������
					titCell:".m", // ��괥������
					targetCell:".sub", // Ч�����󣬱��뱻titCell����
					delayTime:300, // Ч��ʱ��
					triggerTime:0, //����ӳٴ���ʱ��
					returnDefault:true,//on���س�ʼλ��
					defaultIndex:ind,//��ʼλ��
					startFun:function(i,c,s,tit){ //���Ƶ�ǰ����λ��
						block.animate({"left":tit.eq(i).position().left-3},100);
					}
				});
	})()


	// banner�л� 
	jQuery(".slider").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click",
			mouseOverStop:false,/* ����Ƶ��������������*/
			
	});

	// ͼƬ����
	jQuery(".picScroll").slide({ mainCell:"ul", effect:"leftMarquee", vis:5, autoPlay:true, interTime:50, switchLoad:"_src" });

	//��Ʒ��ϸҳ��ͼ�л�
	jQuery(".game163").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200,
		startFun:function(i,p){
			//����Сͼ�Զ���ҳ
			if(i==0){ jQuery(".game163 .sPrev").click() } else if( i%4==0 ){ jQuery(".game163 .sNext").click()}
		}
	});

	//��Ʒ��ϸҳСͼ������л�
	jQuery(".game163 .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:4,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:true });
