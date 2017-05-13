 $(document).ready(function(){

  //限制字符个数
    $(".kz").each(function(){
    var maxwidth=parseInt($(this).attr("data-limit"));
    if($(this).text().length>maxwidth){
    $(this).text($(this).text().substring(0,maxwidth));
    $(this).html($(this).html()+'...');
    }
    });

	//下拉菜单
	jQuery(".nav").slide({ 
		type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
		titCell:".nav_li", //鼠标触发对象
		targetCell:".sub", //titCell里面包含的要显示/消失的对象
		effect:"slideDown", //targetCell下拉效果
		delayTime:300 , //效果时间
		triggerTime:0, //鼠标延迟触发时间（默认150）
		returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
	});

	//大图轮播
	jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
	mouseOverStop:false});

  jQuery(".txtMarquee-top").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:1,interTime:100,delayTime:0});

  jQuery(".slideBox1").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
  mouseOverStop:false});
  jQuery(".slideBox2").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
  mouseOverStop:false});

  jQuery(" .picScroll-left .bd li").each(function(i){ jQuery(" .picScroll-left .bd li").slice(i*4,i*4+4).wrapAll("<ul></ul>");});
  jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd .ulWrap",autoPage:true,effect:"left",autoPlay:true,delayTime:1000,trigger:"click"});

  if($(".focusBox img").length<2){
        $(".focusBox").find("a").css("display","none");
    }
  jQuery(".slideBox3").slide({mainCell:".bd ul",autoPlay:true,effect:"left",delayTime:500});

  $(".btns li:nth-child(3n)").css('margin-right', '0');

  $(".case .bd li").hover(function(){
    $(this).find(".pic").stop().animate({"margin-left":"230px"},500);
    $(this).find(".text").stop().animate({"left":"0"},500);
  },function(){
    $(this).find(".pic").stop().animate({"margin-left":"0"},500);
    $(this).find(".text").stop().animate({"left":"-230px"},500);
  });

   $(".product .i").hover(function(){
    $(this).find(".img_li").stop().slideUp(100);
    $(this).find(".text_li").stop().delay(100).slideDown(100);
  },function(){
    $(this).find(".text_li").stop().slideUp(100);
    $(this).find(".img_li").stop().delay(100).slideDown(100);
  });

  $(".product .t").hover(function(){
    $(this).find(".text_li").stop().slideUp(100);
    $(this).find(".img_li").stop().delay(100).slideDown(100);
  },function(){
    $(this).find(".img_li").stop().slideUp(100);
    $(this).find(".text_li").stop().delay(100).slideDown(100);
  });



  $(".firul li.firli:last-child .fira").css('border-right', 'none');

  $(".pro_list li:nth-child(2n)").css('margin-top', '50px');

  
  //首页飘入
    $(window).scroll(function(){
      if($(window).scrollTop()>2300){
         $(".product").addClass("animated bounce");
      }else if($(window).scrollTop()>900){
        $(".news .fl").addClass("animated bounceInLeft");
        $(".news .fr").addClass("animated bounceInRight");
      }else if($(window).scrollTop()>50){
        $(".about").addClass("animated bounce");
      }
    });

    
    

});