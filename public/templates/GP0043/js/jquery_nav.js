



 $(document).ready(function($) {
	 
	 
    jQuery(".hxz").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});

    jQuery(".pro_det").slide({mainCell:"ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});

    jQuery(".gd").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});

    jQuery(".anli .inner li").each(function(i){
        jQuery(".anli .inner li").slice(i*2,i*2+2).wrapAll("<ul></ul>")
    })
    jQuery(".anli .inner").slide({mainCell:".bd",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});




 // 导航下拉



   jQuery("#nav").slide({
        type: "menu", // 效果类型，针对菜单/导航而引入的参数（默认slide）
        titCell: ".aa", //鼠标触发对象
        targetCell: ".cc", //titCell里面包含的要显示/消失的对象
        effect: "slideDown", //targetCell下拉效果
        delayTime: 300, //效果时间
        triggerTime: 0, //鼠标延迟触发时间（默认150）
        returnDefault: false //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
    });


var ul=$(".current").children('.clearfix')
 	 var a=$(".current").children('a')
 	if (ul.length>0) {
     
 		a.click(function() {
 		$(this).next().slideToggle()
 	});
 	
	
	
	
	
	 
 
 	};
 });

