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
  $(".nav li.nav_li:last-child .a").css('background', 'none');

	//大图轮播
	jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
	mouseOverStop:false});
	
	
	
  jQuery(".slideBox2").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
  mouseOverStop:false});

  jQuery(".txtMarquee-top").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:1,interTime:100,delayTime:0});

  jQuery(" .picScroll-left .bd li").each(function(i){ jQuery(" .picScroll-left .bd li").slice(i*4,i*4+4).wrapAll("<ul></ul>");});
  jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd .ulWrap",autoPage:true,effect:"left",autoPlay:true,delayTime:1000,trigger:"click"});

  $(".picScroll-left .bd li").hover(function(){
    $(this).find(".mask").stop().animate({"left":"0"},500);
  },function(){
    $(this).find(".mask").stop().animate({"left":"-285px"},500);
  });

  $(".news li:nth-child(2n)").css('margin-right', '0');

  $(".firul .firli .fira").click(function(){
    if($(this).parent().find(".secul").size()){
      $(this).parent().find(".secul").stop().slideToggle(300);
      return false;
    }else{
      return true;
    }  
  });

  $(".secul .secli a").click(function(){
    if($(this).parent().find("ul").size()){
      $(this).parent().find("ul").stop().slideToggle(300);
      return false;
    }else{
      return true;
    }  
  });

  $(".new_list2 li:nth-child(3n)").css('margin-right', '0');

  $(".new_list2 li").hover(function(){
    $(this).find(".mask").stop().animate({"top":"0"},300);
  },function(){
    $(this).find(".mask").stop().animate({"top":"-225px"},300);
  });

  if($(".focusBox img").length<2){
        $(".focusBox").parent().find(".img_hd").css("display","none");
    }

    $(".about_us").stop().animate({"margin-top":"-77px"},1000);
  
    $(".inner_l").stop().addClass("animated bounceInLeft");
    $(".inner_r").stop().addClass("animated bounceInRight");
  
  //首页飘入
    $(window).scroll(function(){
       if($(window).scrollTop()>1200){
        $(".news").addClass("animated bounceInLeft");
      }else if($(window).scrollTop()>600){
        $(".case").addClass("animated bounceInRight");
      }
    });


      var i=0; //图片标识
      var img_num=$(".img_ul").children("li").length; //图片个数
      $(".img_ul li").hide(); //初始化图片 
      play();
      $(function(){
        $(".img_hd ul").css("width",($(".img_hd ul li").outerWidth(true))*img_num); //设置ul的长度
        $(".img_hd ul li").click(function(){
          i=$(this).index();
          play();
        });

        $(".prev_a").click(function(){
          //i+=img_num;
          i--;
          //i=i%img_num;
          i=(i<0?0:i);
          play();
        }); 
        $(".next_a").click(function(){
          i++;
          //i=i%img_num;
          i=(i>(img_num-1)?(img_num-1):i);
          play();
        }); 
      }); 

      function play(){//动画移动  
        var img=new Image(); //图片预加载
        img.onload=function(){
          img_load(img,$(".img_ul").children("li").eq(i).find("img"))
        };
        img.src=$(".img_ul").children("li").eq(i).find("img").attr("src");
        //$(".img_ul").children("li").eq(i).find("img").(img_load($(".img_ul").children("li").eq(i).find("img")));
        $(".img_hd ul").children("li").eq(i).addClass("on").siblings().removeClass("on");
        if(img_num>3){//大于3个的时候进行移动
          if(i<img_num-3){ //前3个
            $(".img_hd ul").animate({"marginLeft":(-($(".img_hd ul li").outerWidth()+8)*(i-3<0?0:(i-3)))});
          }else if(i>=img_num-3){//后3个
            $(".img_hd ul").animate({"marginLeft":(-($(".img_hd ul li").outerWidth()+8)*(img_num-3))});
          }
        }
      }

      function img_load(img_id,now_imgid){//大图片加载设置 （img_id 新建的img,now_imgid当前图片）
        if(img_id.width/img_id.height>1){
          if(img_id.width >=$("#play").width())
          $(now_imgid).width($("#play").width());
        }else{
          if(img_id.height>=363) $(now_imgid).height(363);
        }
        $(".img_ul").children("li").eq(i).show().siblings("li").hide(); //大小确定后进行显示
      }

      function imgs_load(img_id){//小图片加载设置
        if(img_id.width >=$(".img_hd ul li").width()){img_id.width = 138};
        //if(img_id.height>=$(".img_hd ul li").height()) {img_id.height=$(".img_hd ul li").height();}
      }
    




});













