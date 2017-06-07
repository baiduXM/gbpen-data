$(document).ready(function () {

    /* 电话 */
    dh();
    function dh() {
        /* 初始化 */
        $(".dh_tb").addClass("sk");
        setTimeout(function () {
            $(".dh_tb").removeClass("sk");
        },1000);

        setInterval(function () {
            $(".dh_tb").addClass("sk");
            setTimeout(function () {
                $(".dh_tb").removeClass("sk");
            },1000);
        },1500);
    }

    search();
    /* 搜索 */
    function search() {
        var onOff = false;
        $(".zzc").click(function () {
            onOff = !onOff;
            if(onOff){
                $(this).css("display","none");
                $(".ss").animate({"width":"210px"}, function () {
                    $(".test").animate({"opacity":1,"filter":"alpha(opacity=100)"});
                });
            }
        });
        $(".sub").click(function () {
            onOff = !onOff;
            if($(".test").val() == ""){
                $(".ss").animate({"width":"30px"}, function () {
                    $(".test").animate({"opacity":0,"filter":"alpha(opacity=0)"});
                    $(".zzc").css("display","block");
                });
                return false;
            }
        })
    }


    /* 导航 */
    nav();
    function nav() {
        var arr = 0;
        $(".nav_li").each(function () {
            if($(this).find("ul").length>0){
                var arr = 0;
                $(this).find("ul").children("li").each(function () {
                    arr+=$(this).width();
                });
                $(this).find("ul").css({"width":arr+"px"});
                if(arr+($(this).offset().left-$(".home").offset().left) > 970 ){
                    $(this).find("ul").css("left",-(arr-$(this).width()+44)+"px");
                    $(this).find(".sjx").css("left",(arr-$(this).width()+88)+"px");
                }
                $(this).find("ul").css({"visibility":"visible","display":"none"});
            }
        }).hover(function () {
            $(this).children("ul").show(100);
        },function () {
            $(this).children("ul").hide(100);
        });

        $(".as").hover(function () {
            $(this).addClass("co");
        }, function () {
            $(this).removeClass("co");
        });

    }





    /* asideNav */
    asideNav();
    function asideNav() {
        var er = $(".er");
        var thr = $(".thr");

        if( er.next().length>0 ){
            er.next().prev().append("<span></span>");
        }

        er.click(function () {
            er.next().slideToggle();

            if( $(this).hasClass("choose") ){
                $(this).removeClass("choose")
            }else{
                $(this).addClass("choose");
            }
        });
        thr.click(function () {
            thr.next().slideToggle();
        });
    }



    /* 判断aside_left的boder */
    border();
    function border() {
        if( $(".as_r").innerHeight()>$(".as_l").innerHeight() ){
            $(".as_l").css("minHeight",$(".as_r").innerHeight()+"px");
        }
    }


    /* list-imagetext判断奇偶的浮动 */
    imagetext();
    function imagetext() {
        $(".list-imagetext .content ul").children("li").each(function (i) {
            if( i%2 == 1 ){
                $(this).find(".img").css({"float":"right"});
                $(this).find(".detail").css({"float":"left"});
            }
        })
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
    },10 )
}

function getStyle( obj, attr ) {
    return obj.currentStyle ? obj.currentStyle[attr]:getComputedStyle(obj)[attr];
}
