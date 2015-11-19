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

$(function() {

	window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];

	$('#slider').nivoSlider({
		effect: 'random',
		animSpeed:500,
		pauseTime:5000,
		startSlide:0,
		slices:15,
		directionNav:false,
		directionNavHide:false,
		controlNav:true,
		controlNavThumbs:false,
		keyboardNav:true,
		pauseOnHover:true,
		// captionOpacity:0.8,
		afterLoad: function(){
			$(".nivo-caption").animate({left:"0"}, {easing:"easeOutBack", duration: 500})
		},
		beforeChange: function(){
			$(".nivo-caption").animate({left:"-500"}, {easing:"easeInBack", duration: 500})
		},
		afterChange: function(){
			$(".nivo-caption").animate({left:"0"}, {easing:"easeOutBack", duration: 500})
		}
	});
	$('#slider').css({
		width: '100%',
		height: '100%'
	}); 
	$('#ca-container').contentcarousel();

	// 首页导航控制
	function ControlNav(){
		this.mouseleave = function(){
			$('.nav li').mouseleave(function(){
				$(this).find('.hoverview').fadeOut();
			});
		}
		this.mouseenter = function(){
			$('.nav li>a').mouseenter(function(){
				if($(this).next().find('li').length != 0){
					$(this).next().fadeIn();
				}
			});
			this.mouseleave();
		}();
	}
	ControlNav();
	$('.nav li').hover(function() {
		$('.header').css('z-index', 12);
		$('.header_inner').css('z-index', 13);
	}, function() {
		$('.header').css('z-index', 9);
		$('.header_inner').css('z-index', 10);
	});
});