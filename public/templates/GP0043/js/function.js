




window.onload=function(){



function adaption(selector,li_w,li_h){
		$(selector).each(function(i){
		img_i=$(selector).eq(i).find("img")
	    if(img_i.width() >= li_w&&img_i.width()>=img_i.height()){
          img_i.width("100%");}
        else if(img_i.height() > li_h){
         img_i.height("100%");}
	   var img_h=img_i.height()	
       var img_w=img_i.width()												
       var mar_t=Math.floor((li_h-img_h)*0.5);
       var mar_l=Math.floor((li_w-img_w)*0.5);
  	   $(this).css({"padding-top":mar_t+"px","padding-left":mar_l+"px"})
	   $(this).width($(this).width()-mar_l);
	   $(this).height($(this).height()-mar_t);
		})
	}
/*首页产品列表图片自适应*/

adaption(".anli .bd li .pic",165,165)




}
