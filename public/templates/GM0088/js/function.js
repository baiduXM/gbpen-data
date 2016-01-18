$(document).ready(function(){

	

	
	

    //底部咨询电话

	//分享
	$(".share").height($("footer").height())

	//二级菜单下拉
	nav("#left_nav");
	nav(".aboutNav");
	function nav(stair){
		var stair=$(stair).children('li').children('a');
		var obj=stair.next();
		var erj=obj.children('li').children('a');
        var sj=erj.next();
		if (obj.length>0) {
			
			obj.prev().append('<span>+</span>')
			stair.click(function(event) {

				if($(this).children('span').text() == "+"){
					// event.preventDefault();
                     $(this).attr('href', 'javascript:void(0)');
                 $(this).children('span').text('-')
             }else{
                 $(this).children('span').text('+')
             };
              $(this).next().slideToggle(200)
			});
            if (sj.length>0) {

            	sj.prev().append('<span>+</span>')
            	
            	erj.click(function(event) {
            		
            		if($(this).children('span').text() == "+"){
            			$(this).attr('href', 'javascript:void(0)');
                 $(this).children('span').text('-')
             }else{
                 $(this).children('span').text('+')
             };

              $(this).next().slideToggle(200)
            	});
            };
		};       
    }

  


	

	$(".qx").click(function() {
		$(".share").hide();

	});
	$(".icon-flow-branch").click(function() {

		$(".share").show(500, function() {
			$(".share").height($("footer").outerHeight())
		});
	});
 //返回上一页
	$('.forword').click(function(){
		window.history.go(-1);
	
	});
	
	
		$('.type').click(function(){
			if($('.aboutName').is(':hidden')){
				$(this).html("分类↓");
				
			}else{
				
				$(this).html("分类↑");
			}
			$('.aboutName').slideToggle(200);
			
		})

	
	$('.font-set').click(function(){
		$('.font-list').slideToggle(200);
		$('.type-list').slideUp(200);
	});
	
	fontSize('.d','1.25rem');
	fontSize('.x','.75rem');
	fontSize('.z','1rem');
	function fontSize(fontSiz,siz){
		$(fontSiz).click(function() {
		$('.infos').css('font-size',siz);
		$('.font-sel').slideUp();
		});
		
	}
	
	//返回顶部
	$('.icon-angle-circled-up').click(function(){
		$('.main').animate({
			'scrollTop' : 0

		},1);

	})


  });