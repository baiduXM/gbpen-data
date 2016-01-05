$(document).ready(function($) {
    var a = $("li.current").children('a')
    a.click(function() {
        $(this).next().slideToggle(400,function(){
        	$(this).is(':hidden') ? $(this).parent().css('background','url(images/sj_31.jpg) no-repeat 80% center') : $(this).parent().css('background','none');
        })
    });
});
