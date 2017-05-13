$(document).ready(function() {

// 导航
    if ($("#nav>li").length%2 == 1) {
        var home = $(".home").html()
        $("#nav").prepend('<li>'+home+'</li>')
    }
    $(".home").remove();
    // 计算li宽度
    var halfli = $("#nav>li").length/2 - 1;
    $("#nav>li:eq("+halfli+")").css({marginRight:"150px"});
    $("#nav>li:eq("+(halfli+1)+"),#nav>li:eq(0)").removeClass('before')
    var liwidth = ($("#nav").width() - $(".logo").width() - ($("#nav>li").length)*8) / $("#nav>li").length;
    $("#nav>li").width(liwidth)

    //获取地址，以及滑块定位
    $("ul.nav a").each(function(){  
        $this = $(this);  
        if($this[0].href == String(window.location)){  
            $this.parents("ul.nav>li").addClass("in");
        }  
    });  
    if ($("ul.nav>li").hasClass('in') == false) {
        $("ul.nav>li:eq(0)").addClass('in')
    }

    var initial = $("ul.nav>li.in").position().left;
    var liWidth = $("ul.nav>li.in").width()-12;
    $(".frame").css({left:initial,width:liWidth});
    $("ul.nav>li").mouseover(function(){
        var thisWidth = $(this).width()-12;
        var leftPosition = $(this).position().left;
        $(".frame").stop(true,false).animate({left:leftPosition,width:thisWidth}, 400);
    });
    $("ul.nav").mouseleave(function(event) {
        $(".frame").stop(true, true).animate({left:initial,width:liWidth},400);
    });

    //二级导航位置居中
    $(".subnav").each(function(index, el) {
        $(this).css({display:"block"}); //防止css中ul添加了display:none;暂时给予display:bock
        var parent = $(this).parent("li")
        var sum = 0;
        $(this).find('li').each(function(i, r) {
            sum += $(this).outerWidth(true); //获取二级li宽度集合
            return sum;
        });
        $(this).width(sum);
        var half = parent.outerWidth()/2; //此处由于父元素导航中中点含有margin-right值，故outerWidth()没有true
        var wleft = parent.position().left + half; //获取父元素li中点距ul左侧距离
        var wright = parent.parent("ul").width()-wleft; //获取父元素li中点距ul右侧距离
        if ((wleft < sum/2) && (wright > sum/2)) { //当ul宽度的一半小于li中点距离左侧值,且大于距离右侧值
            var left = half - wleft
            $(this).css({left:left});
        } else if ((wright < sum/2) && (wleft > sum/2)) { //当ul宽度的一半小于li中点距离右侧值,且大于距离左侧值
            var right = half - wright
            $(this).css({right:right})
        } else{
            var mid = half - sum/2;
            $(this).css({left:mid});
        };
        $(this).css({display:"none"}); //二级导航栏位置计算完毕，给予二级导航栏隐藏
    });

    // 二级导航栏淡入淡出
    $("#nav>li").hover(function() {
        $(this).find('ul.subnav').stop(true, true).fadeIn(400);
    }, function() {
        $(this).find('ul.subnav').fadeOut(100);
    });

// 页脚友情链接
    $(".flink h4").click(function(event) {
        if ($(this).hasClass('in')) {
            $(this).removeClass('in').siblings('ul.flink-list').slideUp(300);
        } else{
            $(this).addClass('in').siblings('ul.flink-list').slideDown(300);
        }
    });
    $("ol.icon li:eq(1)").addClass('wx')
    var code = $(".clone-code").html();
    $(".clone-code").remove();
    $(".wx").append('<div class="code">'+code+'</div>')
    $(".wx").hover(function() {
        $(".code").stop(true, true).fadeIn(300);
    }, function() {
        $(".code").fadeOut(300);
    });

// 编辑框
    $("ul.first a").click(function(event) {
        if ($(this).siblings("ul").length > 0) {
            var a=$(this);
            var thisname = a.parent().attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").show(400);
                a.parent().siblings().find('ul').animate({width:"0px"}, 300).parent().removeClass();
                var parent = a.parent().parent("ul").attr('class');
                switch (parent) {
                    case "first":
                        a.parent().addClass("box-on");
                        break;
                    case "second":
                        a.parent().addClass("box-in");
                        break;
                    default:
                        a.parent().addClass("box_at");
                }
            }else{
                a.parent().removeClass().find('ul').hide(300);
                a.siblings('ul').find('li').removeClass().find('ul').hide(300);
            };
            return false;
        };
    });

// 超出，出现自定义模拟滚动条
    if ($(".inside").length>0) {
        $(".main").mCustomScrollbar({
            scrollButtons:{
                enable:false,
                scrollType:"continuous",
                scrollSpeed:20,
                scrollAmount:40
            },
            horizontalScroll:false,
        });
        $(".topnav").mCustomScrollbar({
            axis:"x",
            theme:"dark-thin",
            autoExpandScrollbar:true,
            advanced:{autoExpandHorizontalScroll:true}
        });
    };

// 产品展示
    $(".case").hover(function() {
        if ($(".case-list img").length > 1) {
            $(".case .arrows").find('a.prev').stop(true, true).animate({left:"0px"}, 300).siblings('a.next').stop(true, true).animate({right:"0px"}, 300);
        };
    }, function() {
        if ($(".case-list img").length > 1) {
            $(".case .arrows").find('a.prev').animate({left:"-40px"}, 300).siblings('a.next').animate({right:"-40px"}, 300);
        };
    });
    jQuery(".case").slide({mainCell:".case-list",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click"});

});
