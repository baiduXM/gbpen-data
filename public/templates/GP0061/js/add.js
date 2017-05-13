    // 加入收藏 兼容360和IE6 
    function shoucang(sTitle,sURL) 
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