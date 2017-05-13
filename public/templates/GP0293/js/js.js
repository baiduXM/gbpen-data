window.onload = function () {


    nav('nav');

    banner();

    news_list();

/*    pro_banner();*/

    product();

    top();

    asideNav();

    listImage();

    productxx();

    function nav(id) {
        var oNav = document.getElementById(id);
        if (oNav) {
            var aLi = oNav.children;
            for (var i=0; i<aLi.length; i++) {
                aLi[i].onmouseover = function () {

                    var oUlList = this.children;

                    if (oUlList.length==3) {
                        var aLiList = oUlList[1].children;
                        if( aLiList.length>0 ){
                            var height = aLiList[0].offsetHeight * aLiList.length+40;
                            startMove(oUlList[1], {height: height, opacity: 100});
                            startMove( oUlList[2],{opacity:100} );
                        }
                    }
                };
                aLi[i].onmouseout = function () {
                    var oUlList = this.children;

                    if (oUlList.length==3 ) {
                        startMove(oUlList[1], {height: 0, opacity: 0});
                        startMove( oUlList[2],{opacity:0} );
                    }
                };
            }
        }
    }

    function banner() {
        var oBanner = document.getElementById('banner');
        if( oBanner ){
            var oUl = document.getElementById('banner-pic');
            var aLi = oUl.getElementsByTagName('li');
            var oRun = document.getElementById('run');
            var aLiRun = oRun.getElementsByTagName('li');
            var timer = null;
            var num = 0;

            clearInterval(timer);
            aLiRun[0].className = "choose";
            timer = setInterval(fn,5000);

            for( var i=0;i<aLiRun.length;i++ ){
                aLiRun[i].index = i;
                aLiRun[i].onclick = function () {
                    clearInterval(timer);
                    for( var j=0;j<aLiRun.length;j++ ){
                        aLiRun[j].className = '';
                    }
                    startMove( aLi[num],{opacity:0} );
                    num = this.index;
                    aLiRun[num].className = 'choose';
                    startMove( aLi[num],{opacity:100} );

                    timer = setInterval(fn,5000);
                }
            }

            function fn() {
                startMove( aLi[num],{opacity:0} );
                for( var j=0;j<aLiRun.length;j++ ){
                    aLiRun[j].className = '';
                }
                num++;
                if( num == aLi.length ){
                    num=0;
                }
                aLiRun[num].className = 'choose';
                startMove( aLi[num],{opacity:100} );
            }
        }
    }

    function news_list() {
        var oNewsList = document.getElementById('news_list');

        if( oNewsList ){
            var aLi = oNewsList.children;
            var osec2 = document.getElementById('sec2_banner');

            oNewsList.innerHTML += oNewsList.innerHTML;
            oNewsList.style.width = aLi.length*(aLi[0].offsetWidth+parseInt(getStyle(aLi[1],'marginLeft')))-parseInt(getStyle(aLi[1],'marginLeft')) + 'px';
            for( var i=0;i<aLi.length;i++ ){
                aLi[i].index = i;
                aLi[i].onmouseover = function () {
                    var oUp = this.getElementsByTagName('div')[1];
                    startMove( oUp,{bottom:56} );
                }
                aLi[i].onmouseout = function () {
                    var oUp = this.getElementsByTagName('div')[1];
                    startMove( oUp,{bottom:0} );
                }

                if( aLi[i].index%2 != 0 ){
                    aLi[i].style.marginTop = '-28px';
                }
            }


            var timer = null;
            var iSpeed = 1;
            var left = document.getElementById('sec2_left');
            var right = document.getElementById('sec2_right');

            timer = setInterval(move,30 );
            function move() {
                if( oNewsList.offsetLeft < -oNewsList.offsetWidth/2 ){
                    oNewsList.style.left = 0;
                }
                else if( oNewsList.offsetLeft >= 0 ){
                    oNewsList.style.left = -oNewsList.offsetWidth/2 + 'px';
                }
                oNewsList.style.left = oNewsList.offsetLeft - iSpeed + 'px';
            }

            osec2.onmouseover = function () {
                clearInterval( timer );
            };
            osec2.onmouseout = function () {
                timer = setInterval(move,30 );
            };

            left.onclick = function () {
                clearInterval(timer);
                iSpeed = -1;
                timer = setInterval(move,30 );
            };
            right.onclick = function () {
                clearInterval(timer);
                iSpeed = 1;
                timer = setInterval(move,30 );
            }
        }
    }

    /*function pro_banner() {
        var oProBanner = document.getElementById('pro_banner');
        if( oProBanner ){
            var aLi = oProBanner.children;
            var timer = null;
            var num = 0;

            oProBanner.innerHTML += oProBanner.innerHTML;
            oProBanner.style.width = aLi.length*aLi[0].offsetWidth + 'px';

            clearInterval(timer);
            timer = setInterval(fn,3000);

            oProBanner.onmouseover = function () {
                clearInterval( timer );
            };
            oProBanner.onmouseout = function () {
                timer = setInterval(fn,3000 );
            };

            function fn() {
                num++;
                var iSpeed = -aLi[0].offsetWidth*num;

                if( num > aLi.length/2 ){
                    num = 0;
                    oProBanner.style.left = 0;
                    num++;
                    iSpeed = -aLi[0].offsetWidth*num;
                    startMove( oProBanner,{left:iSpeed} );
                }else{
                    startMove( oProBanner,{left:iSpeed} );
                }
            }
        }
    }*/

    function product() {
        var oProductIndex = document.getElementById('index_product');
        if( oProductIndex ){

            var oImg = document.getElementById('pro_img');         //左边大图
/*            var oImgList = document.getElementById('pro_imglist'); //栏目列表子列表ul*/
            var oTitle = document.getElementById('pro_title');     //栏目菜单
            var oDetail = document.getElementById('pro_detail');   //文字内容
            var oList = document.getElementById('pro_list');       //栏目列表
            var num = 0 ;

            var aTitle_li = oTitle.children;
            var aList_Ul = oList.children;

            var aLiImg =  aList_Ul[num].children;
            var oBg1 = aLiImg[0].getElementsByTagName('span')[0];
            oBg1.className = "bg choose";
            aLiImg[0].style.border = "1px solid #8fc320";
            for( var i=0;i<aLiImg.length;i++ ){

                aLiImg[i].onclick = function () {
                    var oImg_list = this.getElementsByTagName('img')[0];
                    oImg.src = oImg_list.src;

                    for( var j=0;j<aLiImg.length;j++ ){
                        aLiImg[j].getElementsByTagName('span')[0].className = "bg";
                        aLiImg[j].style.border = "1px solid #fff";
                    }
                    this.style.border = "1px solid #8fc320";
                    this.getElementsByTagName('span')[0].className = "choose";
                }
            }

            for( var i=0;i<aTitle_li.length;i++ ){
                aTitle_li[i].index = i;
                aTitle_li[i].onclick = function () {
                    num = this.index;

                    for(var j=0;j<aTitle_li.length;j++){
                        aList_Ul[j].style.display = "none";
                    }
                    aList_Ul[num].style.display = "block";


                   var aLiImg =  aList_Ul[num].children;
                    /*  var oBg1 = aLiImg[0].getElementsByTagName('span')[0];
                    oBg1.className = "bg choose";
                    aLiImg[0].style.border = "1px solid #8fc320";*/

                    for( var i=0;i<aLiImg.length;i++ ){

                        aLiImg[i].getElementsByTagName('span')[0].className = "bg";
                        aLiImg[i].style.border = "1px solid #fff";

                        aLiImg[i].onmouseover = function () {
                            var oBg = this.getElementsByTagName('span')[0];
                            startMove( oBg,{opacity:0} );
                        };
                        aLiImg[i].onmouseout = function () {
                            var oBg = this.getElementsByTagName('span')[0];
                            startMove( oBg,{opacity:50} );
                        };

                        aLiImg[i].onclick = function () {
                            var oImg_list = this.getElementsByTagName('img')[0];
                            oImg.src = oImg_list.src;

                            for( var j=0;j<aLiImg.length;j++ ){
                                aLiImg[j].getElementsByTagName('span')[0].className = "bg";
                                aLiImg[j].style.border = "1px solid #fff";
                            }
                            this.style.border = "1px solid #8fc320";
                            this.getElementsByTagName('span')[0].className = "choose";
                        }
                    }
                }
            }
        }
    }

    function top() {
        var oTop = document.getElementById('top_click');
        if( oTop ){
            oTop.onclick = function () {
                document.documentElement.scrollTop = document.body.scrollTop = 0;
            }
        }
    }

    function asideNav() {
        var oAsideNav = document.getElementById('aside_nav');
        if( oAsideNav ){
            var oUl = oAsideNav.children[0];
            var aLi = oUl.children;
            var num = 0;
            for( var i=0;i<aLi.length;i++ ){
                aLi[i].index = i;
                aLi[i].onmouseover = function () {
                    var long = this.children.length;
                    if( long >= 2 ){
                        var oUlList = this.children[2];
                        var aLiList = oUlList.children;
                        var sjx = this.children[1];

                        oUlList.style.display = 'block';
                        sjx.style.display = 'block';
                        var width = (aLiList[0].offsetWidth+30)*aLiList.length-25;

                        oUlList.style.width = width + 'px';
                        oUlList.style.left = '50%';
                        oUlList.style.marginLeft = -width/2 + 'px';

                        for( var j=0;j<aLiList.length;j++){
                            aLiList[j].index = j;
                            aLiList[j].onmouseover = function () {

                                if( this.children.length>1 ){
                                    num = this.index;
                                    var oUlListtwo = aLiList[num].children[2];
                                    var aLiListtwo = oUlListtwo.children;
                                    var sjx1 = aLiList[num].children[1];

                                    oUlListtwo.style.display = 'block';
                                    sjx1.style.display = 'block';


                                    var width = (100+30)*aLiListtwo.length-30;
                                    oUlListtwo.style.width = width + 'px';
                                    var he = parseInt(getStyle(oUlListtwo,"width"));
                                    oUlListtwo.style.left = '50%';
                                    oUlListtwo.style.marginLeft = -width/2 + 'px';

                                }
                            }
                        }
                    }
                };
                aLi[i].onmouseout = function () {
                    var long = this.children.length;
                    if( long >= 2 ){
                        var oUlList = this.children[2];
                        var aLiList = oUlList.children;
                        var sjx = this.children[1];
                        var oUlListtwo = aLiList[num].children[2];
                        var sjx1 = aLiList[num].children[1];

                        oUlListtwo.style.display = 'none';
                        sjx1.style.display = 'none';

                        oUlList.style.display = 'none';
                        sjx.style.display = 'none';
                    }
                }
            }
        }
    }

    function listImage() {
        var oListImage = document.getElementById('list-imagetext');
        if( oListImage ){
            var oUl = oListImage.children[0];
            var aLi = oUl.children;

            for( var i=0;i<aLi.length;i++ ){
                aLi[i].onmouseover = function () {
                    var oUp = this.getElementsByTagName('div')[1];
                    startMove( oUp,{bottom:56} );
                };
                aLi[i].onmouseout = function () {
                    var oUp = this.getElementsByTagName('div')[1];
                    startMove( oUp,{bottom:0} );
                };

            }
        }
    }

    function productxx() {
        var oProxx = document.getElementById('proxx-dt');

        if( oProxx ){
            var oUlPic = document.getElementById('proul');
            var oSlt = document.getElementById('proslt');
            var aLiPic = oUlPic.getElementsByTagName('li');
            var aLiSlt = oSlt.getElementsByTagName('li');
            var num = 0;
            var timer = null;

            oUlPic.innerHTML += oUlPic.innerHTML;

            oUlPic.style.width = aLiPic[0].offsetWidth*aLiPic.length + 'px';
            oSlt.style.width = (aLiSlt[0].offsetWidth+35)*aLiPic.length + 'px';

            aLiSlt[num].className = "choose";

            /* 自动 */
            clearInterval(timer);
            timer = setInterval(fn,5000);

            /* 小图点击 */
            for( var j=0;j<aLiSlt.length;j++ ){
                aLiSlt[j].index = j;
                aLiSlt[j].onclick = function () {
                    clearInterval(timer);
                    num = this.index;
                    startMove( oUlPic,{ left:-num*aLiPic[0].offsetWidth } );
                    if( num == 0 ){
                        startMove( oSlt, {left: 0 });
                        for( var i=0;i<aLiSlt.length;i++ ){
                            startMove( aLiSlt[i],{opacity:50} );
                        }
                        startMove( aLiSlt[num],{ opacity:100 } );
                    }else if( num == aLiSlt.length-1 ){
                        startMove( oSlt, {left: -(num-2)*aLiSlt[0].offsetWidth} );
                        for( var i=0;i<aLiSlt.length;i++ ){
                            startMove( aLiSlt[i],{opacity:50} );
                        }
                        startMove( aLiSlt[num],{ opacity:100 } );
                    }else{
                        startMove( oSlt, {left: -(num-1)*aLiSlt[0].offsetWidth} );
                        for( var i=0;i<aLiSlt.length;i++ ){
                            startMove( aLiSlt[i],{opacity:50} );
                        }
                        startMove( aLiSlt[num],{ opacity:100 } );
                    }
                    timer = setInterval(fn,5000);
                }
            }


            function fn() {
                num++;
                if( num > aLiPic.length/2 ){
                    num = 0;
                    oUlPic.style.left = -aLiPic[0].offsetWidth*num + 'px';
                    num ++;
                }
                startMove( oUlPic,{ left:-num*aLiPic[0].offsetWidth } );
                if( num == aLiSlt.length ){
                    startMove( oSlt, {left: 0 });
                    for( var i=0;i<aLiSlt.length;i++ ){
                        aLiSlt[i].className = "";
                    }
                    aLiSlt[0].className = "choose";
                }else if( num == aLiSlt.length-1 ){
                    startMove( oSlt, {left:  -(num-2)*(aLiSlt[0].offsetWidth+35)} );
                    for( var i=0;i<aLiSlt.length;i++ ){
                        aLiSlt[i].className = "";
                    }
                    aLiSlt[num].className = "choose";
                }else{
                    startMove( oSlt, {left: -(num-1)*(aLiSlt[0].offsetWidth+35)} );
                    for( var i=0;i<aLiSlt.length;i++ ){
                        aLiSlt[i].className = "";
                    }
                    aLiSlt[num].className = "choose";
                }
            }
        }
    }

};

function startMove( obj, json, fn ) {
    clearInterval( obj.timer );
    obj.timer = setInterval(function () {
        var bStop = true;
        for( var attr in json ){
            // 1.取当前的值
            var iCur = 0;
            if( attr == 'opacity' ){
                iCur = parseInt(parseFloat(getStyle( obj, attr ))*100);
            }else{
                iCur = parseInt(getStyle( obj, attr ));
            }

            // 2.算速度
            var iSpeed = ( json[attr] - iCur )/8;
            iSpeed = iSpeed > 0 ? Math.ceil( iSpeed ):Math.floor( iSpeed );

            // 3.检测停止与运行动作
            if( iCur != json[attr] ){
                bStop = false;
            }
            if( attr == 'opacity' ){
                obj.style.filter = 'alpha(opacity='+( iCur + iSpeed )+')';
                obj.style.opacity = ( iCur+iSpeed )/100;
            }else{
                obj.style[attr] = iCur + iSpeed + 'px';
            }
        }
        if( bStop ){
            clearInterval( obj.timer );
            fn && fn();
        }
    },30 )
}

function getStyle( obj, attr ) {
    return obj.currentStyle ? obj.currentStyle[attr]:getComputedStyle(obj)[attr];
}


function getByClass( oParent, sClass ) {
    var aEle = oParent.getElementsByTagName('*');
    var aResult = [];

    for( var i=0;i<aEle.length;i++ ){
        var aClassName = aEle[i].className.split(' ');
        for( var j=0;j<aClassName.length;j++ ){
            if( aClassName[j] == sClass ){
                aResult.push(aEle[i]);
                break;
            }
        }
    }
    return aResult;
}