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


 $(document).ready(function($) {
 // 导航下拉
       jQuery("#nav").slide({ 
         type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
         titCell:".nLi", //鼠标触发对象
        targetCell:".sub", //titCell里面包含的要显示/消失的对象
         effect:"slideDown", //targetCell下拉效果
         delayTime:300 , //效果时间
        triggerTime:0, //鼠标延迟触发时间（默认150）
        returnDefault:false //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
       });

 	var ul=$(".current").children('.clearfix')
 	 var a=$(".current").children('a')
        
 		a.click(function() {
        if (ul.length>0) {
            a.attr("href","javascript:void(0)")
        };
        $(this).toggleClass('cu');  
 	});

 });

