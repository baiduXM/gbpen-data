$(document).ready(function(){

  	// 焦点图片切换
    jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    $("#banner .dot").css("transform", "translateX(-50%)");
    // 导航
    $(function(){
        var ulWidth=$("ul.menu").width();//得到ul宽度
        var liLen=$("ul.menu>li").length;//得到li的个数
        $("ul.menu>li").css({width:ulWidth/liLen})
        
        // $(".menu>li").hover(function(){
        //     $(this).find("ul.nav_list").stop(true, true).slideDown(500);
        // },function(){
        //     $(this).find("ul.nav_list").slideUp(500);
        // })
        
    });
    // 导航当前状态
        var num=window.location.href.split("/").length-1;    
        var index=window.location.href.split("/")[num];

        if(index==null || index==0){
            $("ul.menu>li:eq(0)>a").addClass('in')
        }else{
            $("ul.menu>li>a[href^='"+index+"']").addClass('in')
        }

    $(".side_nav").animate({width:"100%",opacity:"1"},{duration: 3000,easing: "easeOutSine"})

    //边框效果--移入
    function biankuang(obj){
        $(obj).find('.biankuang_1').stop(true).animate({
            height:'305px'
        },300)
        $(obj).find('.biankuang_2').stop(true).delay(300).animate({
            width:'360px'
        },300)
        $(obj).find('.biankuang_3').stop(true).animate({
            height:'305px'
        },300)
        $(obj).find('.biankuang_4').stop(true).delay(300).animate({
            width:'360px'
        },300)
    }
    //边框效果--移出
    function biankuang1(obj){

        $(obj).find('.biankuang_1').stop(true).delay(100).animate({
            height:'0px'
        },100)
        $(obj).find('.biankuang_2').stop(true).animate({
            width:'0px'
        },100)
        $(obj).find('.biankuang_3').stop(true).delay(100).animate({
            height:'0px'
        },100)
        $(obj).find('.biankuang_4').stop(true).animate({
            width:'0px'
        },100)
    }
    //触发
    $('.ser_left').hover(
        function () {
          var obj = $(this);
                $(obj).find('.text_gobuy').addClass('text_gobuy_show');
                $(obj).find('.search_y').animate({left:'150',opacity:1},300);
            biankuang(obj);
        },
        function () {
          var obj = $(this);
            $(obj).find('.text_gobuy').removeClass('text_gobuy_show');
            $(obj).find('.search_y').animate({left:'100',opacity:0},300);
            biankuang1(obj);
        }
    );
    
    // 案例展示
    jQuery(".pic-left").slide({mainCell:".picList",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click",nextCell:".next",prevCell:".prev"});
    
    $(".side1 .gongy .serlist ul li:nth-child(2n+1)").css("margin-right", "28px");
    $(".side2 .gongy .newlist ul li:nth-child(2n+1)").css("margin-right", "46px");
    $(".side3 .gongy .prolist ul li:nth-child(4n)").css("margin", "20px 0");
    $(".side_right .prolist ul li:nth-child(3n)").css("margin", "20px 0");
    $(".foot_bot .f_one li:nth-child(5)").css("display", "none");
    
    // 产品图片切换
    jQuery(".pros").slide({ titCell:".dot", mainCell:".prolist", effect:"left",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    // 限制字数超出显示【查看更多】

    
});
	
    


	