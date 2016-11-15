$(document).ready(function() {


	 // nav
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});

     // $('.menu>.nav>li:eq(length)').css('text-align','right')
		// $('.menu>.nav>li').last().find('.sub').css('text-align','right')
		// $(".menu>.nav>li").eq(-2).find('.sub').css('text-align','right')
		// $(".menu>.nav>li").eq(-3).find('.sub').css('text-align','right')    
		// $(".menu>.nav>li").eq(1).find('.sub').css('margin-left','60px')    
	 // $(".menu>.nav>li").each(function(i){
	 // 	var mLeft = -60*i;
	 // 	console.log(mLeft)
	 // 	$(this).find('.sub').css("margin-left",mLeft)
  //     });
	  // $(".menu>.nav>li").last().css()
	 // $('.menubar').click(function(){
	 // 	$('.nav-wrap').show();
	 // })
	 // $('.close').click(function(){
	 // 	$('.nav-wrap').hide()
	 // })
	// banner js
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});
	
		// $('.picMarquee-left .bd ul li').hover(function(){
		// 	$(this).find('.title').animate({height:40},"slow");
		// },function(){
		// 	$(this).find('.title').animate({height:0},"slow");			
		// })
// about 
		// $('.morebtn a').hover(function() {
		// 	$(this).prev('h2').hide();
		// }, function() {
		// 	$(this).prev('h2').show();
		// });

        // jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:5,trigger:"click",interTime:2500});
        // jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:3});

		// 下拉菜单
		$(".nav>ul>li>a").click(function(){
			$(this).parent().siblings().find(".subnav").slideUp()
			$(this).siblings(".subnav").slideToggle()
			})
			
		$(".first li a").click(function(){
			$(this).parent().siblings().find(".second").slideUp()
			$(this).siblings(".second").slideToggle()
		})
		$(".second li a").click(function(){
			$(this).parent().siblings().find(".third").slideUp()
			$(this).siblings(".third").slideToggle()
		})		


		$('.sec-nav ul li:nth-child(3n),.pro-list li:nth-child(3n),.prolist li:nth-child(3n)').css('marginRight',0)	
		// $('.prolist li a').hover(function(){
		// 	$(this).find('h2').animate({height:"38px"});
		// },function(){
		// 	$(this).find('h2').animate({height:"0px"});

		// })
		// $('.pro-list li a,.picScroll-left .bd ul li a').hover(function() {
		// 	$(this).children('.proimg').children('h3').show();
		// }, function() {
		// 	$(this).children('.proimg').children('h3').hide();
			
		// })

})
// $(function () {
	
// 	var winw = parseInt($(window).width());
// 	// $('.menu .nav .box').css({'padding-left':(winw-960)/2,'padding-right':(winw-960)/2,'margin-left':-(winw-960)/2});
// 	// $('.menu .nav .box ul').css({'padding-left':(winw-960)/2,'padding-right':(winw-960)/2,'margin-left':-(winw-960)/2});
	
// 	var navLi=$(".menu .nav li");
// 	navLi.mouseover(function () {
// 		$(this).find("a").addClass("current");
// 		$(this).find(".box").stop().slideDown(200);
// 	})
// 	navLi.mouseleave(function(){
// 		$(this).find("a").removeClass("current");
// 		$(this).find(".box").stop().slideUp(200);
// 	})
// 	// console.log($('.nav>li').size())

// })


//设为首页
function SetHome(obj, vrl) {
    try {
        obj.style.behavior = 'url(#default#homepage)';
        obj.setHomePage(vrl);
    }
    catch (e) {
        if (window.netscape) {
            try {
                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
            }
            catch (e) {
                alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
            }
            var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
            prefs.setCharPref('browser.startup.homepage', vrl);
        } else {
            alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入：" + vrl + "点击确定。");
        }
    }
}

//加入收藏
function shoucang(sTitle, sURL)
{
    try
    {
        window.external.addFavorite(sURL, sTitle);
    }
    catch (e)
    {
        try
        {
            window.sidebar.addPanel(sTitle, sURL, "");
        }
        catch (e)
        {
            alert("加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}
