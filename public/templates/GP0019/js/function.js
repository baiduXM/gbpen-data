$(document).ready(function() {

// menuhover
         jQuery("#nav").slide({ 
            type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
            titCell:".nLi", //鼠标触发对象
            targetCell:".sub", //titCell里面包含的要显示/消失的对象
            effect:"slideDown", //targetCell下拉效果
            delayTime:300 , //效果时间
            triggerTime:0, //鼠标延迟触发时间（默认150）
            returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
         });

	// banner js
    
		jQuery(".banner").slide({mainCell:".bd ul",autoPlay:true});
   
	// content
      var conHeight=$('.wrap').height()-$('.header').height()-$('.foot').outerHeight();
      $('.contentbox').height(conHeight);
      $('.nycontentbox').height(conHeight);

      // $(window).resize(function(){
      //   $('.contentbox').height(conHeight);
      // })
      // if ($(window).height()<700) {
      //   $(window).height(700);
      // }else{
      //   $('.wrap').height($(window).height());
      //   }



// about 


        jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:5,trigger:"click",interTime:2500});
        // jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:3});

  // sidebar class
      $(".first li a").click(function () {
          $(this).parent().siblings().find(".second").slideUp()
          $(this).siblings(".second").slideToggle()
      })  
      $(".second li a").click(function () {
          $(this).parent().siblings().find(".third").slideUp()
          $(this).siblings(".third").slideToggle()
      }) 


     jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"leftLoop"});
      // list-page
      $('#testDiv1').slimScroll({
          height: '416px',
          railVisible: true,
          railColor: '#d1d1d1'
      });
      $('#testDiv2').slimScroll({
          height: '300px',
          railVisible: true,
          railColor: '#d1d1d1'
      }); 
      $('#testDiv3').slimScroll({
          height: '300px',
          railVisible: true,
          railColor: '#d1d1d1'
      });           
})