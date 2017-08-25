

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

    // 分类
        $("#aside_nav_click").click(function(){
            $("#aside_nav_list").slideToggle()
        })
    // 二级导航下拉
      $(".icon").click(function(){
          $(".menu_body").slideToggle()   
      })
  // 三级导航下拉
      $(".icont").click(function(){
          $(".menu_thr").slideToggle()
      })
});

window.onload = function () {

    banner();

    // asideNav();

    fontSize();

    indexSearch();

    asideBanner();

    function asideBanner() {
        var oAsideBanner = document.getElementById('aside-banner');
        if( oAsideBanner ){
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: 3000,
                pagination: '.swiper-pagination',
                paginationClickable: true,
                autoplayDisableOnInteraction : false,
                paginationElement : 'li'
            });
        }
    }

    function indexSearch() {
        var oHeader = document.getElementById('header');
        if( oHeader ){
            var index = document.getElementById('index-wrap');
            var oSearchZz = document.getElementById('search-zezhao');
            var height = index.offsetHeight;
            oSearchZz.style.height = height+'px';

            var oSearchClick = document.getElementById('search-click');
            var oNavSearch = document.getElementById('nav-search');
            var oInp = document.getElementById('inp');
            oSearchClick.onclick = function () {
                startMove( oNavSearch,{opacity:100,marginLeft:0} );
                startMove(oSearchZz,{left:0,opacity:20});
            };
            oSearchZz.onclick = function () {
                startMove( oNavSearch,{opacity:0,marginLeft:640}, function () {
                    oInp.value = '';
                } );
                startMove(oSearchZz,{left:640,opacity:0});
            };
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
    
    // var liLen=$("#aside_nav_list").length;

    // if(liLen==0){
    //     $("#aside_nav_click").hidden()
    // }
    // function asideNav() {
    //     var oNanlist = document.getElementById('aside_nav_list');
    //     if( oNanlist ){
    //         oNavtop = document.getElementById('navtop');
    //         var aLione = oNavtop.children;
    //         var onOff = false;
    //         var onOff2 = false;
    //         var num = 0;
    //         var num2 = 0;

    //         for( var i=0;i<aLione.length;i++ ){
    //             aLione[i].onOff = false;
    //             var oA = aLione[i].children[0];
    //             aLione[i].index = i;
    //             oA.onclick = function () {
    //                 this.parentNode.onOff =! this.parentNode.onOff;
    //                 num = this.parentNode.index;
    //                 var oUltwo = aLione[num].getElementsByTagName('ul')[0];
    //                 if( oUltwo ){
    //                     var aLitwo = oUltwo.children;
    //                     if( aLitwo.length>0 ){
    //                         if( aLione[num].onOff == true ){
    //                             oUltwo.style.height = 'auto';
    //                             /*var height1 = (aLitwo.length)*32;*/
    //                             var height1 = parseInt(oUltwo.offsetHeight);
    //                             oUltwo.style.height = '0';
    //                             startMove( oUltwo,{ height:height1 } , function () {
    //                                 oUltwo.style.height = 'auto';
    //                             });
    //                         }else{
    //                             startMove( oUltwo,{ height:0 });
    //                         }

    //                     }
    //                     if( aLione[num].onOff == true ){
    //                         if( aLitwo.length > 0 ){
    //                             for( var j=0;j<aLitwo.length;j++ ){
    //                                 aLitwo[j].onOff2 = false;
    //                                 var oA2 = aLitwo[j].children[0];
    //                                 aLitwo[j].index = j;
    //                                 oA2.onclick = function () {
    //                                     oUltwo.style.height = 'auto';
    //                                     this.parentNode.onOff2 =! this.parentNode.onOff2;
    //                                     num2 = this.parentNode.index;

    //                                     var oUlthree = aLitwo[num2].getElementsByTagName('ul')[0] ;
    //                                     if( oUlthree ){
    //                                         if( aLitwo[num2].onOff2 == true ){
    //                                             var aLithree = oUlthree.children;
    //                                             var height2 = (aLithree.length)*(aLithree[0].offsetHeight+parseInt(getStyle(aLithree[0],"marginTop")));
    //                                             startMove( oUlthree,{ height:height2 } );
    //                                         }else{
    //                                             startMove( oUlthree,{ height:0 } );
    //                                         }
    //                                     }
    //                                 }
    //                             }
    //                         }
    //                     }
    //                 }
    //             }
    //         }
    //     }
    //     var oNav_click = document.getElementById('aside_nav_click');
    //     if( oNav_click ){
    //         var oSpan = oNav_click.children[0];
    //         var oUl = oNanlist.getElementsByTagName('ul')[0];
    //         var aLi = oUl.children;
    //         var onOff_click = false;
    //         var old = (aLi[0].offsetHeight+parseInt(getStyle(aLi[0],'marginBottom')))*aLi.length+parseInt(getStyle(aLi[0],'marginTop'));
    //         oNav_click.onclick = function () {
    //             onOff_click =! onOff_click;
    //             if( onOff_click ){
    //                 oSpan.style.background = "url('images/zhankai.png')";
    //                 oSpan.style.backgroundSize = "100% 100%";
    //                 startMove( oNanlist,{opacity:100} );
    //                 startMove( oUl,{height:old}, function () {
    //                     oUl.style.height = 'auto';
    //                 } );
    //             }else{
    //                 oSpan.style.background = "url('images/guanbi.png')";
    //                 oSpan.style.backgroundSize = "100% 100%";
    //                 old = oUl.offsetHeight;
    //                 startMove( oUl,{height:0} );
    //                 startMove( oNanlist,{opacity:0} );
    //             }
    //         }
    //     }
    // }
    
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
                    startMove(oFont,{opacity:0,height:0});
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





