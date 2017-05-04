jQuery(document).ready(function() {
    $(".font").click(function(){
        $(".fontbox").slideToggle();
        $(this).find('b').toggleClass('show')
    });
    // 字体大号
    $(".fontbox ul li:nth-child(1)").click(function(){
            $(".edit").attr('class',"edit font-big")
            $(".fontbox").hide()
    })

    // 字体中号
    $(".fontbox ul li:nth-child(2)").click(function(){
            $(".edit").attr('class',"edit font-normal")
            $(".fontbox").hide()
    })

    // 字体小号
    $(".fontbox ul li:nth-child(3)").click(function(){
            $(".edit").attr('class',"edit font-small")
            $(".fontbox").hide()

    })      	
    TouchSlide(         
    {slideCell:"#proBox",
    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
    mainCell:".bd ul", 
    effect:"leftLoop", 
    prevCell:".slide_left",
    nextCell:".slide_right",
    autoPage:true,//自动分页
    autoPlay:true,
    interTime:10000,//自动播放)
    pnLoop:"ture" // 前后按钮不循环

    });


    
  
    

      

});