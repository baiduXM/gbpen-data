window.onload = function () {





    indexPic();

    list( 'zs','jpzs','banner-left','banner-right' );

    dibu();

    lxwm();

    asideNav();

    product();

    productxx();

    banner();



    function banner() {
        var oUl = document.getElementById('tp');
        if(oUl){
            var aLi = oUl.getElementsByTagName('li');
            var oYd = document.getElementById('yd');
            var aLiyd = oYd.getElementsByTagName('li');
            aLi[0].style.opacity = '1';
            aLi[0].style.filter = "alpha(opacity=100)";
            var timer = null;
            var num = 0;

            aLiyd[0].className = "choose";

            clearInterval(timer);
            timer = setInterval(function () {

                startMove( aLi[num],{ opacity:0 } );
                num ++;
                if( num == aLi.length ){
                    num = 0;
                }
                for( var j=0;j<aLiyd.length;j++ ){
                    aLiyd[j].className = '';
                }
                aLiyd[num].className = 'choose';
                startMove( aLi[num],{ opacity:100 } );
            },3000);

            for( var i=0;i<aLiyd.length;i++ ){
                aLiyd[i].index =i;
                aLiyd[i].onclick = function () {

                    clearInterval(timer);
                    startMove( aLi[num],{ opacity:0 } );
                    num = this.index;
                    for( var j=0;j<aLiyd.length;j++ ){
                        aLiyd[j].className = '';
                    }
                    aLiyd[num].className = 'choose';
                    startMove( aLi[num],{ opacity:100 } );
                    timer = setInterval(function () {

                        startMove( aLi[num],{ opacity:0 } );
                        num ++;
                        if( num == aLi.length ){
                            num = 0;
                        }
                        for( var j=0;j<aLiyd.length;j++ ){
                            aLiyd[j].className = '';
                        }
                        aLiyd[num].className = 'choose';
                        startMove( aLi[num],{ opacity:100 } );
                    },3000);
                }
            }

        }

    }

    function indexPic() {
        var oZs = document.getElementById('zs');
        if( oZs ){
            var oZsbg = document.getElementById('zsbg');
           /* var aImg = oZsbg.getElementsByTagName('img');*/


            var left = getLeft( oZs )-20;

            oZsbg.style.width = left + 'px';
           /* for( var i=0;i<aImg.length;i++ ){
                aImg[i].style.width = left + 'px'
            }*/

            window.onresize = function () {
                left = getLeft( oZs )-20;
                oZsbg.style.width = left + 'px';
               /* for( var i=0;i<aImg.length;i++ ){
                    aImg[i].style.width = left + 'px'
                }*/
            };





        }

        function getLeft( obj ) {
            var iLeft = 0;
            while( obj ){
                iLeft += obj.offsetLeft;
                obj = obj.offsetParent;
            }
            return iLeft;
        }
    }

    function list( id, id1, id2, id3 ) {
        var obj = document.getElementById(id);             //最外层div,用来判断存不存在这块元素
        if( obj ){

            var oListLi = document.getElementById( id1 );  //内容列表ul的外层div
            var oUl = oListLi.getElementsByTagName('ul')[0];  //内容列表ul
            var aLi = oUl.getElementsByTagName('li');
            var oLeft = document.getElementById(id2);
            var oRight = document.getElementById(id3);
            var oLong = aLi[0].offsetWidth;
            oUl.innerHTML += oUl.innerHTML;
            var num = 0;
            var ge = aLi.length;
            var weight = oLong * ge;
            oUl.style.width = weight + 'px';

            var timer = null;
            clearInterval( timer );
            timer = setInterval(function () {
                num ++;
                if( num > ge/2 ){
                    num = 0;
                    oUl.style.left = -oLong*num + 'px';
                    num++;
                    startMove( oUl,{ left: -oLong*num });
                }else{
                    startMove( oUl,{ left: -oLong*num });
                }
            },5000);

            oLeft.onclick = function () {
                clearInterval(timer);
                num--;
                if( num<0 ){
                    num = ge/2;
                    oUl.style.left = -oLong*num + 'px';
                    num--;
                    startMove( oUl,{ left: -oLong*num }, function () {
                        timer = setInterval(function () {
                            num ++;
                            if( num > ge/2 ){
                                num = 0;
                                oUl.style.left = -oLong*num + 'px';
                                num++;
                                startMove( oUl,{ left: -oLong*num });
                            }else{
                                startMove( oUl,{ left: -oLong*num });
                            }
                        },5000);
                    });
                }else{
                    startMove( oUl,{ left: -oLong*num }, function () {
                        timer = setInterval(function () {
                            num ++;
                            if( num > ge/2 ){
                                num = 0;
                                oUl.style.left = -oLong*num + 'px';
                                num++;
                                startMove( oUl,{ left: -oLong*num });
                            }else{
                                startMove( oUl,{ left: -oLong*num });
                            }
                        },5000);
                    });
                }

            };
            oRight.onclick = function () {
                clearInterval(timer);
                num++;
                if( num > ge/2 ){
                    num = 0;
                    oUl.style.left = -oLong*num + 'px';
                    num++;
                    startMove( oUl,{ left: -oLong*num }, function () {
                        timer = setInterval(function () {
                            num ++;
                            if( num > ge/2 ){
                                num = 0;
                                oUl.style.left = -oLong*num + 'px';
                                num++;
                                startMove( oUl,{ left: -oLong*num });
                            }else{
                                startMove( oUl,{ left: -oLong*num });
                            }
                        },5000);
                    });
                }else{
                    startMove( oUl,{ left: -oLong*num }, function () {
                        timer = setInterval(function () {
                            num ++;
                            if( num > ge/2 ){
                                num = 0;
                                oUl.style.left = -oLong*num + 'px';
                                num++;
                                startMove( oUl,{ left: -oLong*num });
                            }else{
                                startMove( oUl,{ left: -oLong*num });
                            }
                        },5000);
                    });
                }
            }
        }
    }

    function dibu() {
        var oZx = document.getElementById('zx');
        if( oZx ){
            var oA1 = getByClass( oZx,"tauch" );

            for( var i=0;i<oA1.length;i++ ){
                oA1[i].index = i;
                if( oA1[i]){
                    var old1 = 45;
                    oA1[i].onmouseover = function () {
                        var oH1 = this.getElementsByTagName('h6')[0];
                        var oStrong = oH1.getElementsByTagName('strong')[0];
                        var width1 = parseInt(oStrong.offsetWidth);
                        var oSpan1 = oH1.getElementsByTagName('span')[0];

                        startMove2( oSpan1,{ width:width1+70 }, function () {
                            startMove2( oSpan1,{ width: width1-20 }, function () {
                                startMove2( oSpan1,{ width: width1+20 }, function () {
                                    startMove2( oSpan1,{ width: width1 });
                                });
                            } )
                        } );
                        this.onmouseout = function () {
                            startMove2( oSpan1,{ width:old1 } )
                        };
                    };

                }
            }


            /*var oA2 = document.getElementById('sec-a2');
            if( oA2 ){
                var oH2 = oA2.getElementsByTagName('h6')[0];
                var width2 = oH2.offsetWidth;
                var oSpan2 = oH2.getElementsByTagName('span')[0];
                var old2 = oSpan2.offsetWidth;
                oA2.onmouseover = function () {
                    startMove2( oSpan2,{ width:width2+70 }, function () {
                        startMove2( oSpan2,{ width: width2-40 }, function () {
                            startMove2( oSpan2,{ width: width2+20 }, function () {
                                startMove2( oSpan2,{ width: width2 });
                            })
                        } )
                    } );
                };
                oA2.onmouseout = function () {
                    startMove2( oSpan2,{ width:old2 } )
                };
            }*/

            function startMove2( obj, json, fn ) {
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
                        var iSpeed = ( json[attr] - iCur )/1.5;
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

        }
    }

    function lxwm() {
        var oSec3 = document.getElementById('section3');
        if( oSec3 ){
            var oTb = document.getElementById('tubiao');
            var aDiv = oTb.getElementsByTagName('div');

            for( var i=0;i<aDiv.length;i++ ){
                aDiv[i].index = i;
                aDiv[i].onmouseover = function () {
                    var num = this.index;
                    var oImg = aDiv[num].getElementsByTagName('img')[0];
                    oImg.onmouseover = function () {
                        $(oImg).addClass('animated bounce');
                        setTimeout(function(){
                            $(oImg).removeClass('bounce');
                        }, 1000);
                    }
                };


            }
        }
    }

    function asideNav() {
        var oNanlist = document.getElementById('navlist');
        if( oNanlist ){
            oNavtop = document.getElementById('navtop');
            var aLione = oNavtop.children;
            var onOff = false;
            var onOff2 = false;
            var num = 0;
            var num2 = 0;

            for( var i=0;i<aLione.length;i++ ){
                aLione[i].onOff = false;
                var oA = aLione[i].children[0];
                aLione[i].index = i;
                oA.onclick = function () {
                    this.parentNode.onOff =! this.parentNode.onOff;
                    num = this.parentNode.index;
                    var oUltwo = aLione[num].getElementsByTagName('ul')[0];
                    if( oUltwo ){
                        var aLitwo = oUltwo.children;
                        if( aLitwo.length>0 ){
                            if( aLione[num].onOff == true ){
                                oUltwo.style.height = 'auto';
                                /*var height1 = (aLitwo.length)*32;*/
                                var height1 = parseInt(oUltwo.offsetHeight);
                                oUltwo.style.height = '0';
                                startMove( oUltwo,{ height:height1 } , function () {
                                    oUltwo.style.height = 'auto';
                                });
                            }else{
                                startMove( oUltwo,{ height:0 });
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
                                                var height2 = (aLithree.length)*32;
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



        }
    }

    function product() {
        var oPr = document.getElementById('product-right');
        if( oPr ){
            var oUl = oPr.children[0];
            var aLi = oUl.getElementsByTagName('li');
            var old1 = aLi[0].getElementsByTagName('div')[0].offsetLeft;
            var old2 = aLi[0].getElementsByTagName('h6')[0].offsetLeft;

            for( var i=0;i<aLi.length;i++ ){

                aLi[i].onmouseover = function () {
                    var oA = this.children[0];
                    var oHua = oA.getElementsByTagName('div')[0];
                    var oWz = oA.getElementsByTagName('h6')[0];
                    var left1 = parseInt(aLi[0].offsetWidth/2 - oHua.offsetWidth/2);
                    var left2 = 0;

                    startMove3( oHua,{ left:left1 } );
                    startMove3( oWz,{ left:left2 } );

                }
                aLi[i].onmouseout = function () {
                    var oA = this.children[0];
                    var oHua = oA.getElementsByTagName('div')[0];
                    var oWz = oA.getElementsByTagName('h6')[0];
                    startMove3( oHua,{ left:old1 } );
                    startMove3( oWz,{ left:old2 } );
                }

            }


            function startMove3( obj, json, fn ) {
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
                        var iSpeed = ( json[attr] - iCur )/2;
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
        }
    }



    function productxx() {
        var oProxx = document.getElementById('proxx-dt');

        if( oProxx ){
            var oUlPic = document.getElementById('proul');
            var oLeft = document.getElementById('proleft');
            var oRight = document.getElementById('proright');
            var oSlt = document.getElementById('proslt');
            var aLiPic = oUlPic.getElementsByTagName('li');
            var aLiSlt = oSlt.getElementsByTagName('li');
            var num = 0;
            var timer = null;


            oUlPic.innerHTML += oUlPic.innerHTML;

            oUlPic.style.width = aLiPic[0].offsetWidth*aLiPic.length + 'px';
            oSlt.style.width = aLiSlt[0].offsetWidth*aLiPic.length + 'px';

            /* 自动 */
            clearInterval(timer);
            timer = setInterval(fn,5000);

            oLeft.onclick = function () {
                clearInterval(timer);
                num --;
                if( num<0 ){
                    num = aLiPic.length/2;
                    oUlPic.style.left = -aLiPic[0].offsetWidth*num + 'px';
                    num--;
                }
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
            };
            oRight.onclick = function () {
                clearInterval(timer);
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
                        startMove( aLiSlt[i],{opacity:50} );
                    }
                    startMove( aLiSlt[0],{ opacity:100 } );
                }else if( num == aLiSlt.length-1 ){
                    startMove( oSlt, {left:  -(num-2)*aLiSlt[0].offsetWidth} );
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
                        startMove( aLiSlt[i],{opacity:50} );
                    }
                    startMove( aLiSlt[0],{ opacity:100 } );
                }else if( num == aLiSlt.length-1 ){
                    startMove( oSlt, {left:  -(num-2)*aLiSlt[0].offsetWidth} );
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
            }
        }
    }


};



function startMove1( obj, iTarget ) {
    var iSpeed = 0;
    var left = obj.offsetLeft;
    clearInterval( obj.timer );
    obj.timer = setInterval(function () {
        iSpeed += (iTarget-obj.offsetLeft)/5;
        iSpeed *= 0.7;
        if( Math.abs(iSpeed)<1 && Math.abs(left-iTarget)<1){
            clearInterval( obj.timer );
            obj.style.left = iTarget + 'px';
        }else{
            left += iSpeed;
            obj.style.left = left + 'px';
        }
    },25 )
}

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

