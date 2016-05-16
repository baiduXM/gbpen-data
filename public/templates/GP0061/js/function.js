$(document).ready(function() {

// menuhover
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});


	// banner js
    
        jQuery(".fullSlide").slide({ titCell:".hd li", mainCell:".bd ul", effect:"fold",  autoPlay:true,trigger:"click", delayTime:700 });


		// 下拉菜单
		$(".first li a").click(function(){
			$(this).parent().siblings().find(".second").slideUp()
			$(this).siblings(".second").slideToggle()
		})
		$(".second li a").click(function(){
			$(this).parent().siblings().find(".third").slideUp()
			$(this).siblings(".third").slideToggle()
		})		

		$('.case .caselist li:nth-child(3n),.prolist li:nth-child(3n)').css('marginRight',0)	
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
		 // if ($('.slideBox .bd ul li').length == 2) {
		 // 	$('.slideBox .prev','.slideBox .next').hide();
		 // }



})
// 设置为主页 
function SetHome(obj,vrl){ 
try{ 
obj.style.behavior='url(#default#homepage)';obj.setHomePage(vrl); 
} 
catch(e){ 
if(window.netscape) { 
try { 
netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 
} 
catch (e) { 
alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。"); 
} 
var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch); 
prefs.setCharPref('browser.startup.homepage',vrl); 
}else{ 
alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入："+vrl+"点击确定。"); 
} 
} 
} 


