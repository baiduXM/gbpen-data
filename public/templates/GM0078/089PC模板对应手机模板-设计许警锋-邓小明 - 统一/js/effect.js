jQuery(document).ready(function($) {
    //banner图滚动
var swiper = new Swiper('.banner.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
// 菜单
 var swiper = new Swiper('.menu.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: false
    });


 //canvas绘制四边形

    function img3(im,sc){
        var  img=$(im).width()
         hght=Math.floor(img*sc) 
        $(im).css({
            height:hght+5+"px"
        });
     }
    img3(".pic_lm li",.8);
    function canvas(id,num1,num2,num3,num4,num5,color){
        var canvas=$(id)[0];
        canvas.width=20;
        canvas.height=hght*0.7;
        var context=canvas.getContext("2d");
        context.beginPath()
        context.moveTo(num1,num2);
        context.lineTo(num3,num2);
        context.lineTo(num3,num4);
        context.lineTo(num1,num5);
        
        context.closePath();
        context.lineWidth=10;
        context.strokeStyle=color;
        context.stroke()
        context.fillStyle=color;
        context.fill()
    }
    canvas("#canvas",0,0,20,hght*0.52,hght*0.6,"#b91c22");


    var pich=$(".pic").outerHeight();

    function canvas2(id,num1,num2,num3,color){
        var canvas=$(id)[0];
         
        canvas.width=20;
        canvas.height=pich;
        var context=canvas.getContext("2d");
        context.beginPath()
        context.moveTo(num1,num2);
        context.lineTo(num2,num1);
        context.lineTo(num2,num3);
        context.lineTo(num1,num3);
        
        context.closePath();
        context.lineWidth=1;
        context.strokeStyle=color;
        context.stroke()
        context.fillStyle=color;
        context.fill()
    }
    canvas2("#canvas2",0,20,pich,"#b91c22")



 var nwesW=$(".news").outerWidth();
 function canvas3(id,num1,num2,num3,num4,color){
        var canvas=$(id)[0];
        canvas.width=nwesW;
        canvas.height=nwesW*0.1;
        var context=canvas.getContext("2d");
        context.beginPath()
        context.moveTo(num1,num2);
        context.lineTo(num3,num2);
        context.lineTo(num3,num4);
        
        context.closePath();
        context.lineWidth=1;
        context.strokeStyle=color;
        context.stroke()
        context.fillStyle=color;
        context.fill()
    }
    canvas3("#canvas3",0,0,nwesW,nwesW*0.09,"#b91c22");
    var more=$(".news").outerWidth()*0.07;
    $(".more").css({
        width:more+"px",
        height:more+"px",
        lineHeight:more+"px"
    });


    
    var aboutimgw=Math.ceil($(".main").outerWidth()*0.453);
    var aboutimgh=Math.ceil(aboutimgw*0.651);
    var bl=aboutimgh
    $(".aboutdate img").css({
        width: aboutimgw + "px",
        height:aboutimgh+"px"
     });
    $(".bfore").css({
        borderLeftWidth:  bl+"px",
        borderTopWidth:bl/2+"px",
        borderBottomWidth:bl/2+"px"
    });
    $(".db .tit").css({
        lineHeight:aboutimgh+"px"
    });
$(".aboutdate p").css({
    height: (Math.floor(aboutimgh/16/1.5))*1.5+1.5+"rem"

});

$(".pic_lm li:odd").addClass('js');



});
