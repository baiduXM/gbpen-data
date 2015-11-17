 $('body').show();
 $(function($){
	$('.culture').mouseover(function () {
	    $('div.culture').addClass("anim");
	});

	$('.culture').mouseout(function () {
	    $('div.culture').removeClass("anim");
	    
	});
	$('.team').mouseover(function () {
	    $('div.team').addClass("anim");
	});

	$('.team').mouseout(function () {
	    $('div.team').removeClass("anim");
	});
	$('.join').mouseover(function () {
	    $('div.join').addClass("anim");
	});

	$('.join').mouseout(function () {
	    $('div.join').removeClass("anim");
	});

	if($('h1.logo img').height()<92.25){
		var top = (92.25 - $('h1.logo img').height()) / 2;
		$('h1.logo img').css('margin-top', top);
	}
	
});