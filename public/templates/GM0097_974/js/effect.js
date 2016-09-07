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
        // $(im).css({
        //     height:hght+5+"px"
        // });
     }
    img3(".pic_lm li",.8);
    function canvas(id,num1,num2,num3,num4,num5,color){
        var canvas=$(id)[0];
        if(canvas != undefined){
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
            context.fill();
        }
    }
    canvas("#canvas",0,0,20,hght*0.52,hght*0.6,"#b6c0e7");


    var pich=$(".pic").outerHeight();

    function canvas2(id,num1,num2,num3,color){
        var canvas=$(id)[0];
        if(canvas != undefined){
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
            context.fill();
        }
    }
    canvas2("#canvas2",0,20,pich,"#b6c0e7")



 var nwesW=$(".news").outerWidth();
 function canvas3(id,num1,num2,num3,num4,color){
        var canvas = $(id)[0];
        if(canvas != undefined){
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
            context.fill();
        }
        
    }
    canvas3("#canvas3",0,0,nwesW,nwesW*0.09,"#737aa8");
  

});
