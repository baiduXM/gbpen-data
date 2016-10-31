jQuery(document).ready(function($) {
	
// 字体分割
	var Txt1=$("#new").val().substring(0,2);
	var Txt2=$("#new").val().substring(2,4);
	var Txt3=$("#about").val().substring(0,2);
	var Txt4=$("#about").val().substring(2,4);
	// var Txt2=$(".news-name").val();
	$(".news .tit h2 span").html(Txt1);			
	$(".news .tit h2 b").html(Txt2);			
	$(".about .tit h2 span").html(Txt3);			
	$(".about .tit h2 b").html(Txt4);	
	// $(".about .n_title").html(Txt1[0]);			
	// $(".news .n_title").html(Txt2[0]);			
	// $(".prod .n_title").html(Txt3[0]);			
	// $(".about .n_tltaer b").html(Txt1.substr(1));			
	// $(".news .n_tltaer b").html(Txt2.substr(1));			
	// $(".prod .n_tltaer b").html(Txt3.substr(1));

	console.log(Txt3)
});
 // var ss = s.substring(12, 17);