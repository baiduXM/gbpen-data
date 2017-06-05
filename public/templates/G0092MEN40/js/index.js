$(document).ready(function() {

// 标题
    $(".column-hd").each(function(index, el) {
        var stickLeft = ($(this).width() - $(this).find('h2').outerWidth(true))/2 - $(".stick").outerWidth(true);
        $(this).find('.stick-left').css({left:stickLeft}).siblings('.stick-right').css({right:stickLeft});
        console.log($(this).width())
    });
});