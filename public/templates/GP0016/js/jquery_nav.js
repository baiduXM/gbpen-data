// 导航下拉
      jQuery("#nav").slide({ 
        type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
        titCell:".nLi", //鼠标触发对象
        targetCell:".sub", //titCell里面包含的要显示/消失的对象
        effect:"slideDown", //targetCell下拉效果
        delayTime:300 , //效果时间
        triggerTime:0, //鼠标延迟触发时间（默认150）
        returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
      });

        // 导航英文切换
         $(document).ready(function () {
           
            $(".nLi").hover(function() {
           $(this).children('h4').stop()
            	// $(this).children('h4').fadeIn(500);
            $(this).children('h4').show().animate({opacity:1},500)
        

            }, function() {
           $(this).children('h4').stop()
            	// $(this).children('h4').fadeOut();
              $(this).children('h4').hide().animate({opacity:0})
             
            });
            
         });
        

