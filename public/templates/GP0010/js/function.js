$(document).ready(function() {

// menuhover
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});
	 $('.sub li').last().css('border', 'none');
	 $('ul.nav>li').last().css('background','none');
	 $('ul.nav>li').hover(function() {
	 	$(this).addClass('on')
	 }, function() {
	 	$(this).removeClass('on')
	 	
	 });
	 if(document.getElementById("Scroller-1")){
var scroller  = new jsScroller(document.getElementById("Scroller-1"), 440, 240);
var scrollbar = new jsScrollbar (document.getElementById("Scrollbar-Container"), scroller, true);}
	// banner js
    
       /*鼠标移过，左右按钮显示*/
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,interTime:3500});
   
// pro
	$('#prizes .photos-content.enable').jCarouselLite({
		btnPrev: '#prizes a.photos-prev',
		btnNext: '#prizes a.photos-next',
		visible: 4,
		auto: 3000,
		speed: 1000
	}).css({visibility:"visible"});



// news
  $('.news li:nth-child(2n+2)').css('border-right',"none").children('a').css('float','right')
  $('.news li a').hover(function () {
  	  $(this).find('h3').show();
  },function () {
  	  $(this).find('h3').hide();
  	
  })

  //pro 
  $('.prolist li:nth-child(3n)').css("margin-right",0)
// sidebar class
    $(".first li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    }) 

// pro-det
 jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"leftLoop"});
})