$(document).ready(function(){
	// $(window).load(function(){
	// var img=new Image();
	// img.src=$(".logo img").attr("src");
	// $(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	
	// $(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	// $(".index-wrap").height($(".wrap").height()-$(".fixed").height()-$(".tell-icon").height())
	// });

	
	$(".menubtn").on('click',function(){
		console.log('1')
		$(this).find("span").toggleClass("block")
		if($(".down").hasClass("block")){
			$(".menu").addClass("menutransform")
			}else{$(".menu").removeClass("menutransform")}
		})

  
	
	
  	
	$("#font").click(function(){
		$("#up").hide()
		$("#down").show()
		$(".hide-class").removeClass("hide-class1")
		$(".font").slideToggle()
		$(".hide-class").slideUp()	
	})
	$(".font dl.big").click(function(){
		$(".edite").attr('class',"edite font-big")
		$(".news-ins").attr('class',"news-ins font-big")
		$(".font").hide()
	})
	$(".font dl.normal").click(function(){
		$(".edite").attr('class',"edite font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()
	})
	$(".font dl.small").click(function(){
		$(".edite").attr('class',"edite font-small")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()

	})	
	$("#first").click(function(){
		$("#up").toggle()
		$("#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()	
	})

  });
