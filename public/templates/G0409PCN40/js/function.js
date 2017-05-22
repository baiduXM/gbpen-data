$(document).ready(function () {

    banner();

    sec2();

    nav();

    asideNav();

    asideBanner();

    news();

    mouseover();

    banner_r();

    search();


    /* 大图轮播 */
    function banner() {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: 4000,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            spaceBetween: 50,
            effect: 'fade'
        });
    }

    /* product */
    function sec2() {
        var swiper = new Swiper('.swiper-container2', {
            slidesPerView: 3,
            spaceBetween: 20,
            /*freeMode: true,*/
            loop: true,
            autoplay: 3000,
            autoplayDisableOnInteraction : false,
            paginationClickable: true,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }

    function nav() {
        var oNav = document.getElementById('nav');
        if( oNav ){
            var aLi = oNav.children;
            for( var i=0;i<aLi.length;i++ ){
                aLi[i].onmouseover = function () {
                    var oUlList = this.getElementsByTagName('ul')[0];
                    if( oUlList ){
                        var aLiList = oUlList.getElementsByTagName('li');
                        var height = aLiList[0].offsetHeight*aLiList.length;
                        startMove(oUlList,{height:height,opacity:100});
                    }
                };
                aLi[i].onmouseout = function () {
                    var oUlList = this.getElementsByTagName('ul')[0];
                    if( oUlList ){
                        startMove(oUlList,{height:0,opacity:0});
                    }
                };
            }
        }
    }

    function news() {
        var oNews = document.getElementById('sec_news');
        if( oNews ){
            var aLi = oNews.children;
            var oYd = document.getElementById('yd');
            var oYdChild = oYd.children;

            for( var i=0;i<aLi.length;i++ ){
                var aDetail = aLi[i].children[0];
                aDetail.index = i;

                if( aDetail.index%2 == 0 ){
                    aDetail.style.marginTop = "20px";
                    aDetail.style.marginBottom = "80px";

                    aDetail.onmouseover = function () {
                        this.style.border = "1px solid #1da1dc";
                        this.style.height = "280px";
                        this.style.marginTop = "0";
                        this.style.marginRight = "38px";
                        this.style.marginLeft = "42px";

                        /*第一个圆点*/
                        if( this.index%4 == 0 ){
                            oYdChild[0].style.width = '20px';
                            oYdChild[0].style.height = '20px';
                            oYdChild[0].style.marginLeft = '-5px';
                            oYdChild[0].style.marginTop = '-5px';
                            oYdChild[0].style.border = '1px solid #1da1dc';
                        }

                        /*第三个圆点*/
                        if( this.index%4 == 2 ){
                            oYdChild[2].style.width = '20px';
                            oYdChild[2].style.height = '20px';
                            oYdChild[2].style.marginLeft = '-5px';
                            oYdChild[2].style.marginTop = '-5px';
                            oYdChild[2].style.border = '1px solid #1da1dc';
                        }

                    };
                    aDetail.onmouseout = function () {
                        this.style.border = "1px solid #cccccc";
                        this.style.height = "200px";
                        this.style.marginTop = "20px";
                        this.style.marginRight = "80px";
                        this.style.marginLeft = "0";

                        if( this.index%4 == 0 ){
                            oYdChild[0].style.width = '10px';
                            oYdChild[0].style.height = '10px';
                            oYdChild[0].style.marginLeft = '0';
                            oYdChild[0].style.marginTop = '0';
                            oYdChild[0].style.border = '1px solid #cccccc';
                        }

                        if( this.index%4 == 2 ){
                            oYdChild[2].style.width = '10px';
                            oYdChild[2].style.height = '10px';
                            oYdChild[2].style.marginLeft = '0';
                            oYdChild[2].style.marginTop = '0';
                            oYdChild[2].style.border = '1px solid #cccccc';
                        }
                    }
                }else{
                    aDetail.style.marginLeft = "80px";

                    aDetail.onmouseover = function () {
                        this.style.border = "1px solid #1da1dc";
                        this.style.height = "280px";
                        this.style.marginTop = "20px";
                        this.style.marginRight = "42px";
                        this.style.marginLeft = "38px";

                        /*第二个圆点*/
                        if( this.index%4 == 1 ){
                            oYdChild[1].style.width = '20px';
                            oYdChild[1].style.height = '20px';
                            oYdChild[1].style.marginLeft = '-5px';
                            oYdChild[1].style.marginTop = '-5px';
                            oYdChild[1].style.border = '1px solid #1da1dc';
                        }

                        /*第四个圆点*/
                        if( this.index%4 == 3 ){
                            oYdChild[3].style.width = '20px';
                            oYdChild[3].style.height = '20px';
                            oYdChild[3].style.marginLeft = '-5px';
                            oYdChild[3].style.marginTop = '-5px';
                            oYdChild[3].style.border = '1px solid #1da1dc';
                        }
                    };
                    aDetail.onmouseout = function () {
                        this.style.border = "1px solid #cccccc";
                        this.style.height = "200px";
                        this.style.marginTop = "80px";
                        this.style.marginRight = "0";
                        this.style.marginLeft = "80px";

                        if( this.index%4 == 1 ){
                            oYdChild[1].style.width = '10px';
                            oYdChild[1].style.height = '10px';
                            oYdChild[1].style.marginLeft = '0';
                            oYdChild[1].style.marginTop = '0';
                            oYdChild[1].style.border = '1px solid #cccccc';
                        }

                        if( this.index%4 == 3 ){
                            oYdChild[3].style.width = '10px';
                            oYdChild[3].style.height = '10px';
                            oYdChild[3].style.marginLeft = '0';
                            oYdChild[3].style.marginTop = '0';
                            oYdChild[3].style.border = '1px solid #cccccc';
                        }
                    }
                }
            }


            var oT = document.getElementById('up');
            var oD = document.getElementById('down');
            var hei = oNews.offsetHeight;
            var num = 0;
            oT.onclick = function () {
                if(num > 0 ) {
                    num--;
                    startMove(oNews, { "top": -600 * num });
                }
            };
            oD.onclick = function () {
                if(num < Math.floor(hei/600)-1 ){
                    num ++;
                    startMove( oNews,{ "top":-600*num } );
                }
            }

        }
    }

    function asideNav() {
        var two = $(".er");
        var three = $(".thr");

        /* 初始化 */
        if(two.next().length>0){
            two.next().prev().append("<span>&gt;</span>");
        }

        /* 二级 */
        two.click(function () {
            $(this).next().slideToggle();
            $(this).toggleClass("choose");
        });
        /* 三级 */
        three.click(function () {
            $(this).next().slideToggle();
            $(this).toggleClass("choose");
        })
    }

    function asideBanner() {
        var aSideBanner = $("#aside_banner");
        if( aSideBanner ){
            var galleryTop = new Swiper('.gallery-top', {
                direction : 'vertical',
                spaceBetween: 10,
                loop:true,
                autoplay: 5000,
            });
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                direction : 'vertical',
                spaceBetween: 10,
                slidesPerView: 3,
                touchRatio: 0.2,
                loop:true,
                autoplay: 5000,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slideToClickedSlide: true,
                autoplayDisableOnInteraction : false,
            });
            galleryTop.params.control = galleryThumbs;
            galleryThumbs.params.control = galleryTop;
        }
    }

    function banner_r() {
        var swiper = new Swiper('.swiper-container3', {
            loop: true,
            autoplay: 5000,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }

    function mouseover() {

        $(".mouse").on("mouseenter", function () {
            $(this).addClass('rubberBand');
            $(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass('rubberBand');
            });
        });
    }


    function search() {
        $('#quickbar_submits').click(function(){
            if($('#name').val() !='') $('#search_h form').submit();
            return false;
        });
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
