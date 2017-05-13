jQuery(document).ready(function($) {

// 标题
for (var i = 0; i < $(".side-hd").length; i++) {	  
  var str=$(".side-hd:eq("+i+")").html() ;
    var target="<em>"+str.substring(0,2)+"</em>";
    $(".side-hd:eq("+i+")").html(target+str.substr(2));
}
});