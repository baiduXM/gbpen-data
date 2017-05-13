$(document).ready(function () {


    header();

    banner();

    scroll("list-page","content_w","content_n","scroll","scrolling");

    asideBanner();

    sec_img();

    mouseover();

    asideNav();

    function header() {
        var oHeader = document.getElementById('header');
        if( oHeader ){
            var oNav = document.getElementById('nav');
            var aLi = oNav.children;
            for( var i=0;i<aLi.length;i++ ){
                aLi[i].index = i;
                aLi[i].onmouseover = function () {
                    var oUlList = this.children[1];
                    var aLiList = oUlList.children;
                    var oSjx = this.children[2];
                    if( aLiList.length>0 ){
                        oUlList.style.display = "block";
                        oSjx.style.display = "block";
                        var width = (aLiList[0].offsetWidth + parseInt(getStyle(aLiList[0],"padding"))*2)*aLiList.length
                        oUlList.style.width = width+'px';

                        oUlList.style.left = -width/2+aLi[0].offsetWidth/2 + 'px';
                    }
                };
                aLi[i].onmouseout = function () {
                    var oUlList = this.children[1];
                    var aLiList = oUlList.children;
                    var oSjx = this.children[2];
                    if( aLiList.length>0 ){
                        oUlList.style.display = "none";
                        oSjx.style.display = "none";
                    }
                }
            }
        }
    }

    /* 头部轮播 */
    function banner() {
       var oBanner = document.getElementById('banner');
        if(oBanner){
            var oUl = document.getElementById('banner-pic');
            var aLi = oUl.getElementsByTagName('li');
            var timer = null;
            var num = 0;

            clearInterval(timer);
            timer = setInterval(fn,5000);

            function fn() {
                startMove( aLi[num],{opacity:0} );
                num++;
                if( num == aLi.length ){
                    num=0;
                }
                startMove( aLi[num],{opacity:100} );
            }
        }
    }

    function scroll( id,id1,id2,id3,id4 ) {
        var oAbout = document.getElementById(id);
        if( oAbout ){
            var oAc = document.getElementById(id1);
            var oNeirong = document.getElementById(id2);
            var oAs1 = document.getElementById(id3);
            var oAs2 = document.getElementById(id4);

            if( oNeirong.offsetHeight < oAc.offsetHeight ){
                oAs2.style.height = oAs1.offsetHeight + 'px';
            }else{
                oAs2.style.height =  oAc.offsetHeight*oAs1.offsetHeight / oNeirong.offsetHeight + 'px';
                var iMaxTop = oAs1.offsetHeight - oAs2.offsetHeight;
                oAs2.onmousedown = function (ev) {
                    var ev = ev || event;
                    var disY = ev.clientY - oAs2.offsetTop;
                    if( oAs2.setCapture ){
                        oAs2.setCapture();
                    }
                    document.onmousemove = function (ev) {
                        alert(1)
                        var ev = ev || event;
                        var T = ev.clientY - disY;
                        if( T<0 ){
                            T = 0;
                        }else if( T>iMaxTop ){
                            T = iMaxTop;
                        }
                        oAs2.style.top = T + 'px';
                        var iScale = T / iMaxTop;
                        oNeirong.style.top = (oAc.clientHeight - oNeirong.offsetHeight) *iScale + 'px';
                    };
                    document.onmouseup = function () {
                        document.onmousemove = document.onmouseup = null;
                        if( oAs2.releaseCapture ){
                            oAs2.releaseCapture();
                        }
                    };
                    return false;
                };

                oAc.onmousewheel = fn;
                if( oAc.addEventListener ){
                    oAc.addEventListener( 'DOMMouseScroll',fn,false );
                }

                var sT = oAs2.offsetTop;
                var sB = oAs2.offsetTop + oAs1.offsetHeight - oAs2.offsetHeight;
                function fn( ev ) {
                    var ev = ev || event;
                    var iMaxTop = oAs1.offsetHeight - oAs2.offsetHeight;
                    var b = null;

                    if( ev.wheelDelta ){
                        b = ev.wheelDelta > 0 ? true : false;
                    }else{
                        b = ev.detail < 0 ? true : false;
                    }

                    if( b == true ){
                        oAs2.style.top = oAs2.offsetTop - 10 + 'px';
                        if( oAs2.offsetTop < sT ){
                            oAs2.style.top = sT + 'px';
                        }
                    }else{
                        oAs2.style.top = oAs2.offsetTop + 10 + 'px';
                        if( oAs2.offsetTop > sB ){
                            oAs2.style.top = sB + 'px';
                        }
                    }
                    var iScale = oAs2.offsetTop / iMaxTop;
                    oNeirong.style.top = ( oAc.clientHeight - oNeirong.offsetHeight )*iScale + 'px';
                    if( ev.preventDefault ){
                        ev.preventDefault();
                    }else{
                        return false;
                    }
                }
            }
        }
    }

    function asideBanner() {
        var oAsideBanner = document.getElementById('aside-banner');
        if( oAsideBanner ){
            var oUl = oAsideBanner.getElementsByTagName('ul')[0];
            var aLi = oUl.getElementsByTagName('li');
            var oLeft = document.getElementById('aside_bl');
            var oRight = document.getElementById('aside_br');
            var timer = null;
            var num = 0;

            oUl.innerHTML += oUl.innerHTML;
            oUl.style.width = aLi[0].offsetWidth*aLi.length +'px';


            clearInterval(timer);
            timer = setInterval(fn,5000);


            oLeft.onclick = function () {
                clearInterval(timer);
                num--;
                if(num == -1){
                    num = aLi.length/2;
                    oUl.style.left = -aLi[0].offsetWidth*num + 'px';
                    num --;
                    startMove( oUl,{ left: -aLi[0].offsetWidth*num }, function () {
                        timer = setInterval(fn,5000);
                    });
                }else{
                    startMove( oUl,{ left: -aLi[0].offsetWidth*num }, function () {
                        timer = setInterval(fn,5000);
                    });
                }
            };
            oRight.onclick = function () {
                clearInterval(timer);
                num++;
                if(num == aLi.length/2+1){
                    num = 0;
                    oUl.style.left = -aLi[0].offsetWidth*num + 'px';
                    num++;
                    startMove( oUl,{ left: -aLi[0].offsetWidth*num }, function () {
                        timer = setInterval(fn,5000);
                    });
                }else{
                    startMove( oUl,{ left: -aLi[0].offsetWidth*num }, function () {
                        timer = setInterval(fn,5000);
                    });
                }
            };

            function fn() {
                num++;
                var width = -aLi[0].offsetWidth*num;
                var long = aLi.length/2;

                if( num > long ){
                    num = 0;
                    oUl.style.left = 0;
                    num++;
                    width = -aLi[0].offsetWidth*num;
                    startMove( oUl,{ left: width });
                }else{
                    startMove( oUl,{ left: width });
                }
            }
        }
    }

    /* sec_img */
    function sec_img() {
        $(".sec-img a").on("mouseenter mouseleave",function(e) {
            var w = $(this).width();
            var h = $(this).height();
            var x = (e.pageX - $(this).offset().left - (w / 2)) * (w > h ? (h / w) : 1);
            var y = (e.pageY - $(this).offset().top - (h / 2)) * (h > w ? (w / h) : 1);
            var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
            /* direction:0,1,2,3 ---> top right bottom left*/
            var eventType = e.type;
            var aPos=[{left:0,top:"-100%"},{left:"100%",top:0},{left:0,top:"100%"},{left:"-100%",top:0}];
            if(eventType == 'mouseenter'){
                $(this).find('em').css(aPos[direction]).stop(true,true).animate({left:0,top:0},200);
            }else{
                $(this).find('em').stop(true,true).animate(aPos[direction],200);
            }
        });
    }

    function mouseover() {

        $(".mouse").on("mouseenter", function () {
            var ani =  $(this).children('.animated');
            ani.addClass('rubberBand');
            ani.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                ani.removeClass('rubberBand');
            });
        });
    }

    function asideNav() {
        var oAsideNav = document.getElementById('asideNav');
        if( oAsideNav ){
            var aLi = oAsideNav.children;
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

                        var width = (aLiList[0].offsetWidth+30)*aLiList.length-30;

                        oUlList.style.width = width + 'px';
                        oUlList.style.left = -(oUlList.offsetWidth/2-aLi[0].offsetWidth/2)+10+'px';

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
