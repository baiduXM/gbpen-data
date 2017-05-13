jQuery(document).ready(function(){

(function(){
			$('.searchbox').focus(function(){
				if($(this).val()=='请输入关键字'){
					$('.searchbox').val('');
				}
		});
		$('.searchbox').blur(function(){
			if($(this).val()==''){
				$('.searchbox').val('请输入关键字')
			}
		});		
	})();


$('.ny-prolist li:nth-child(4n)').css('marginRight',0);
	$('.ny-prolist li a').hover(function() {
			$(this).children('h2').show();
		}, function() {
			$(this).children('h2').hide();
		});





});

