$(document).ready(function() {
// 导航
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
    var liWidth = $("ul.nav>li.in").width();

    $(".lump").css({left:initial,width:liWidth});
    $("ul.nav>li").mouseover(function(){
        var thisWidth = $(this).width();
        var leftPosition = $(this).position().left;
        $(".lump").stop(true,false).animate({left:leftPosition,width:thisWidth}, 400);
    });
    $("ul.nav").mouseleave(function(event) {
        $(".lump").stop(true, true).animate({left:initial,width:liWidth},400);
    });

	$(".subnav").each(function(l, ul) {
		var ulLeft = ($(this).parent("li").width() - $(this).width())/2;
		$(this).css({left:ulLeft});
	});
	$(".nav>li").hover(function() {
		$(this).find('.subnav').stop(true, true).slideDown(300);
	}, function() {
		$(this).find('.subnav').slideUp(300);
	});

// 内页头部
    var pagename = $(".name h2").text()
    var newname = pagename.substr(1);
    var pageinitial = pagename.substring(0,1);
    $(".name h2").text(newname);
    $(".name").append("<b>"+pageinitial+"</b>");

// 顶部导航
    $("ul.first>li").hover(function() {
        $(this).find('ul.second').stop(true, true).slideDown(300);
    }, function() {
        $(this).find('ul.second').slideUp(300);
    });
    $("ul.second>li").hover(function() {
        $(this).find('ul.third').stop(true, true).animate({width:"205px"}, 300);
    }, function() {
        $(this).find('ul.third').animate({width:"0px"}, 300);
    });

    $(window).scroll(function(){
        if ($(document).scrollTop() >= 330) {
            $(".topnav").css({position:"fixed"});
        } else{
            $(".topnav").css({position:"absolute"});
        };
        
    });
   
// 图片列表
     $(".product li a").on("mouseenter mouseleave",function(e) {  
        var w = $(this).width();
        var h = $(this).height();
        var x = (e.pageX - $(this).offset().left - (w / 2)) * (w > h ? (h / w) : 1);
        var y = (e.pageY - $(this).offset().top - (h / 2)) * (h > w ? (w / h) : 1);
        var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
        /* direction:0,1,2,3 ---> top right bottom left*/  
        var eventType = e.type;  
        var aPos=[{left:0,top:"-100%"},{left:"100%",top:0},{left:0,top:"100%"},{left:"-100%",top:0}];  
        if(eventType == 'mouseenter'){  
            $(this).find('.backcolor').css(aPos[direction]).stop(true,true).animate({left:0,top:0},300);  
        }else{  
            $(this).find('.backcolor').stop(true,true).animate(aPos[direction],300);  
        }  
    });

// 产品展示
    if ($(".case-bd .case-last img").length < 2) {
        $(".case-hd").css({display:'none'});
    };
    jQuery(".case-list").slide({mainCell:".case-last",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});

//二维码a链接
    var aa=$(".code li a").attr('href');
    console.log(aa);
    $(".code li a").click(function (event) {
        if(aa.href.length>0){
            event.preventDefault();
        }
    });
});
