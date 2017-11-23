$(document).ready(function(){
    (function(doc,win){

        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize' ,
            recalc = function()
            {
                var clientWidth = docEl.clientWidth;
                if(!clientWidth) return;
                if(clientWidth>640){
                    clientWidth=640;
                }
                docEl.style.fontSize = 20 * (clientWidth / 320) + 'px';
            };
        recalc();
        if(!doc.addEventListener) return;
        win.addEventListener(resizeEvt,recalc,false);
        doc.addEventListener('DOMContentLoaded',recalc,false);
    })(document,window);


    banner();

    asideNav();

    fontSize();

    asideBanner();

    scrollTop();

    nav();

/*    fenlei();*/

    function fenlei() {
        var  oNav = document.getElementById('aside-nav');
        if( oNav ){
            // 分类
            $(".fl").click(function(){
                $("#aside-nav").slideToggle();
                $(this).toggleClass("more_h");
            })
            // 二级导航下拉
            $(".icon").click(function(){
                $(".menu_body").slideToggle()
                $(".font").slideUp()
                $(".icon1").hide()
                $(".icon2").show()
            })
            // 三级导航下拉
            $(".icont").click(function(){
                $(".menu_thr").slideToggle()
                $(".font").slideUp()
                $(".icont1").hide()
                $(".icont2").show()
            })

        }
    }

    function banner() {
        var oBanner = document.getElementById('banner');
        if( oBanner ){
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: 3000,
                pagination: '.swiper-pagination',
                paginationClickable: true,
                autoplayDisableOnInteraction : false,
                paginationElement : 'li',
            });
        }
    }

    function asideNav() {
        var  oNav = document.getElementById('aside-nav');
        if( oNav ){
          /*  var aLinav = oNav.children;
            var num = 0 ;
            for( var i=0;i<aLinav.length;i++ ){
                aLinav[i].index = i;
                aLinav[i].onOff = false;
                aLinav[i].onclick = function () {
                    this.onOff =! this.onOff;
                    num = this.index;
                    var oUlList = this.getElementsByTagName('ul')[0];
                    if( oUlList ){
                        var oA = aLinav[num].getElementsByTagName('a')[0];
                        var oSpan = oA.getElementsByTagName('span')[0];
                        if( this.onOff == true ){
                            var aLiList = oUlList.children;
                            oUlList.style.height = 'auto';
                            var height = oUlList.offsetHeight;
                            oUlList.style.height = '0';
                            oSpan.innerHTML = "-";
                            startMove( oUlList,{ height:height } );
                        }else{
                            oSpan.innerHTML = "+";
                            startMove( oUlList,{ height:0 } );
                        }
                    }

                }
            }*/

            var aLione = oNav.children;
            var onOff = false;
            var onOff2 = false;
            var num = 0;
            var num2 = 0;

            for( var i=0;i<aLione.length;i++ ){
                aLione[i].onOff = false;
                var oA = aLione[i].children[1].children[0];
                aLione[i].index = i;
                oA.index = i;
                oA.onclick = function () {
                    aLione[this.index].onOff =!aLione[this.index].onOff;
                    num = this.index;
                    var oUltwo = aLione[num].getElementsByTagName('ul')[0];
                    if( oUltwo ){
                        var aLitwo = oUltwo.children;
                        if( aLitwo.length>0 ){
                            var oA = aLione[num].getElementsByTagName('a')[0];
                            var oSpan = oA.getElementsByTagName('span')[0];
                            if( aLione[num].onOff == true ){
                                oUltwo.style.height = 'auto';
                                var height = oUltwo.offsetHeight;

                                oUltwo.style.height = '0';
                                oSpan.innerHTML = "-";
                                startMove( oUltwo,{ height:height } );
                            }else{
                                oSpan.innerHTML = "+";
                                startMove( oUltwo,{ height:0 } );
                            }

                        }
                        if( aLione[num].onOff == true ){

                            if( aLitwo.length > 0 ){
                                for( var j=0;j<aLitwo.length;j++ ){
                                    aLitwo[j].onOff2 = false;
                                    var oA2 = aLitwo[j].children[0];
                                    aLitwo[j].index = j;
                                    oA2.onclick = function () {
                                        oUltwo.style.height = 'auto';
                                        this.parentNode.onOff2 =! this.parentNode.onOff2;
                                        num2 = this.parentNode.index;

                                        var oUlthree = aLitwo[num2].getElementsByTagName('ul')[0] ;
                                        if( oUlthree ){
                                            if( aLitwo[num2].onOff2 == true ){
                                                var aLithree = oUlthree.children;
                                                var height2 = (aLithree.length)*(aLithree[0].offsetHeight+parseInt(getStyle(aLithree[0],"marginTop")));
                                                startMove( oUlthree,{ height:height2 } );
                                            }else{
                                                startMove( oUlthree,{ height:0 } );
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }


            var oFenLei = document.getElementById('fenlei');
            var oNavList = document.getElementById('aside_nav');
            var onOFF = false;
            oFenLei.onclick = function () {
                onOFF =! onOFF;
                if( onOFF ){
                    oNavList.style.height = 'auto';
                    var height = oNavList.offsetHeight;
                    oNavList.style.height = 0;
                    oFenLei.innerHTML = "分类<lager style='font-weight: bolder;margin-left: 0.15rem'> -</lager>";
                    startMove( oNavList,{height:height}, function () {
                        oNavList.style.height = 'auto';
                    } );
                }else{
                    startMove( oNavList,{height:0}, function () {
                        for( var i=0;i<aLinav.length;i++ ){
                            var oUl = aLinav[i].getElementsByTagName('ul')[0];
                            var oA = aLinav[i].getElementsByTagName('a')[0];
                            var oSpan = oA.getElementsByTagName('span')[0];
                            oUl.style.height = 0;
                            aLinav[i].onOff = false;
                            oSpan.innerHTML = "+";
                        }
                    } );
                    oFenLei.innerHTML = "分类 +";
                }
            }
        }
    }

    function fontSize() {
        var oFontSize = document.getElementById('fontSize');
        if( oFontSize ){
            var onOff = false;
            var oFont = document.getElementById('font');
            var oA = oFontSize.getElementsByTagName('a')[0];
            var oSpan = oFont.children;
            var oChange = document.getElementById('change');
            oA.onclick = function () {
                onOff =!onOff;
                if( onOff ){
                    oFont.style.height = 'auto';
                    var height = oFont.offsetHeight;
                    oFont.style.height = 0;
                    oA.innerHTML = "字<lager style='font-weight: bolder;margin-left: 0.15rem'> -</lager>";
                    startMove(oFont,{opacity:100,height:height});
                    for( var i=0;i<oSpan.length;i++ ){
                        oSpan[i].index = i;
                        oSpan[i].onclick = function () {
                            onOff =!onOff;
                            if( this.index == 0 ){
                                oChange.style.fontSize = "0.875rem";
                                startMove(oFont,{opacity:0,height:0});
                            }else if( this.index == 1 ){
                                oChange.style.fontSize = "0.65rem";
                                startMove(oFont,{opacity:0,height:0});
                            }else if( this.index ==2 ){
                                oChange.style.fontSize = "0.6rem";
                                startMove(oFont,{opacity:0,height:0});
                            }
                        }
                    }
                }else{
                    oA.innerHTML = "字 +"
                    startMove(oFont,{opacity:0,height:0});
                }
            }
        }
    }

    function asideBanner() {
        var oAsideBanner = document.getElementById('aside-banner');
        if( oAsideBanner ){
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: 3000,
                paginationClickable: true,
                autoplayDisableOnInteraction : false,
                paginationElement : 'li',
                prevButton:'.swiper-button-prev',
                nextButton:'.swiper-button-next',
            });
        }
    }

    function scrollTop() {
        var oFooter = document.getElementById('footer');
        if( oFooter ){
            var oTop = document.getElementById('scrollTop');
           /* oTop.onclick = function () {
                document.documentElement.scrollTop = document.body.scrollTop = 0;
            }*/
            $("#scrollTop").click(function(event) {
                $("#quickbar-wrap-body").animate({scrollTop:0}, 200);
            });
        }
    }

    function nav() {

        var oUl = document.getElementById('list_run');

        if( oUl ){
            var swiper = new Swiper('.swiper-container1', {
                slidesPerView: 4,
            });

        }
    }
});

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
