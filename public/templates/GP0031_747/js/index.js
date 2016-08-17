 // jQuery(document).ready(function($) {
 // 	function height(a,b,c){
 // 		var $this=$(a).height()
 // 		$(a).css({marginTop:-c+"px"});
 // 		$(b).css({height:($this-c)+"px"});
 // 	}
 // 	height(".news",".about",84);
 // });
 jQuery(document).ready(function($) {

 	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
 	jQuery("#nav").slide({ 
								type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
								titCell:".nLi", //鼠标触发对象
								targetCell:".sub", //titCell里面包含的要显示/消失的对象
								effect:"slideDown", //targetCell下拉效果
								delayTime:300 , //效果时间
								triggerTime:0, //鼠标延迟触发时间（默认150）
								returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
							});

 	jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});
 
 	
 	function conter_H (a,b,c) {
 		var l_Height=$(a).outerHeight();
 		var r_Hright=$(b).outerHeight();
 		if(l_Height>r_Hright){
 			$(c).css({
 				height: l_Height+"px"
 			});
 		}else{
 			$(c).css({
 				height: r_Hright+"px"
 			});
 			
 		}
 		
 	}
 	conter_H('.about','.news','.content');

 });
