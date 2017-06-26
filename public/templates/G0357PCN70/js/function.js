$(document).ready(function(){

  	// 焦点图片切换
    jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    // 头部导航
    $(".navs ul li").hover(function(){   
        $(this).find(".erji").stop(false,true).slideDown(200);
        },function(){ 
        $(this).find(".erji").stop(false,true).slideUp("");
        })
    // 导航当前状态
    var num=window.location.href.split("/").length-1;    
    var index=window.location.href.split("/")[num];

    if(index==null || index==0){
        $("ul.menus>li:eq(0)>a").addClass('in')
    }else{
        $("ul.menus>li>a[href^='"+index+"']").addClass('in')
    }
    
    //限制字符个数
        // $(".ab-right").each(function(){
        // var maxwidth=23;
        // if($(this).text().length>maxwidth){
        // $(this).text($(this).text().substring(0,maxwidth));
        // $(this).html($(this).html()+'…');
        // }
        // });
    // 首页底部动画
        $("ul.flow li:eq(0)").animate({left:"0px"}, 200,function(){
            $("ul.flow li:eq(1)").animate({left:"248px"}, 300,function(){
                $("ul.flow li:eq(2)").animate({left:"496px"}, 400,function(){
                    $("ul.flow li:eq(3)").animate({left:"744px"}, 500);
                });
            });
        });
    
    // 侧边导航
        $(".ce > li > a").click(function(){
             $(this).addClass("xz").parents().siblings().find("a").removeClass("xz");
             $(this).parents().siblings().find(".er").hide(300);
             $(this).siblings(".er").toggle(300);
             $(this).parents().siblings().find(".er > li > .thr").hide().parents().siblings().find(".thr_nr").hide();            
        })
        
        $(".er > li > a").click(function(){
            $(this).addClass("sen_x").parents().siblings().find("a").removeClass("sen_x");
            $(this).parents().siblings().find(".thr").hide(300);    
            $(this).siblings(".thr").toggle(300);   
        })

        $(".thr > li > a").click(function(){
             $(this).addClass("xuan").parents().siblings().find("a").removeClass("xuan");
             $(this).parents().siblings().find(".thr_nr").hide();   
             $(this).siblings(".thr_nr").toggle();
        });
    
    //图片灯箱
    // if($(".ny-prolist li a").length>0){
    //     if ($(".ny-prolist li a").attr("href").indexOf("html")==-1){
    //          $(".ny-prolist li a").lightBox({txtImage:"",txtOf:" / "});
    //     };
    // }

    // 产品图片切换
    jQuery(".picScroll-left").slide({mainCell:".picList",autoPage:true,effect:"left",
               autoPlay:true,vis:1,trigger:"click"});

});
	
    


	