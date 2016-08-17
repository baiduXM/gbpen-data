jQuery(document).ready(function($) {
	
		$('#prizes .photos-content.enable').jCarouselLite({
			btnPrev: '#prizes a.photos-prev',
			btnNext: '#prizes a.photos-next',
			visible: 4,
			auto: 3000,
			speed: 1000
		}).css({visibility:"visible"});		
	
   function addListener(element,e,fn){    
        if(element.addEventListener){    
             element.addEventListener(e,fn,false);    
         } else {    
             element.attachEvent("on" + e,fn);    
          }    
   }
   var myinput = document.getElementById("myinput");
   addListener(myinput,"click",function(){
    myinput.value = "";
   })
   addListener(myinput,"blur",function(){
    myinput.value = "请输入您想搜索的产品";
   })
	
});
