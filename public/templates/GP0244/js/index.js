// JavaScript Document
////////////////////首页联动菜单//////////////////////////////////////
//<![CDaTa[
function showsub_a(id){
	for (j = 0;j<3;j++){
		document.getElementById("tab_a"+j).className = "bj_02";
		document.getElementById("sub_a"+j).style.display = "none";
	}
		document.getElementById("tab_a"+id).className = "bj_01";
		document.getElementById("sub_a"+id).style.display = "";
}
function showsub_b(id){
	for (k = 0;k<3;k++){
		document.getElementById("tab_b"+k).className = "bj_2";
		document.getElementById("sub_b"+k).style.display = "none";
	}
		document.getElementById("tab_b"+id).className = "bj_1";
		document.getElementById("sub_b"+id).style.display = "";
}
function showsub_c(id){
	for (l = 0;l<3;l++){
		document.getElementById("tab_c"+l).className = "bj_2";
		document.getElementById("sub_c"+l).style.display = "none";
	}
		document.getElementById("tab_c"+id).className = "bj_1";
		document.getElementById("sub_c"+id).style.display = "";
}
function showsub_d(id){
	for (m = 0;m<6;m++){
		document.getElementById("tab_d"+m).className = "bj_2";
		document.getElementById("sub_d"+m).style.display = "none";
	}
		document.getElementById("tab_d"+id).className = "bj_1";
		document.getElementById("sub_d"+id).style.display = "";
}
function showsub_e(id){
	for (n = 0;n<3;n++){
		document.getElementById("tab_e"+n).className = "bj_002";
		document.getElementById("sub_e"+n).style.display = "none";
	}
		document.getElementById("tab_e"+id).className = "bj_001";
		document.getElementById("sub_e"+id).style.display = "";
}
function showsub_f(id){
	for (o = 0;o<3;o++){
		document.getElementById("tab_f"+o).className = "bj_02";
		document.getElementById("sub_f"+o).style.display = "none";
	}
		document.getElementById("tab_f"+id).className = "bj_01";
		document.getElementById("sub_f"+id).style.display = "";
}
//]]>
/////////////////幻灯//////////////////////////////////////////////////////
function showpic_hd(fileurl,linkarr,picarr,textarr){
var files = "";
var links = "";
var texts = "";
for(i=1;i<picarr.length;i++){
  if(files=="") files = picarr[i];
  else files += "|"+picarr[i];
}
for(i=1;i<linkarr.length;i++){
  if(links=="") links = linkarr[i];
  else links += "|"+linkarr[i];
}
for(i=1;i<textarr.length;i++){
  if(texts=="") texts = textarr[i];
  else texts += "|"+textarr[i];
}
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="'+fileurl+'/images/bcastr3.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'">');
document.write('<embed src="'+fileurl+'/images/bcastr3.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>'); 

}


// jQuery(document).ready(function($) {
	
// 		$('#prizes .photos-content.enable').jCarouselLite({
// 			btnPrev: '#prizes a.photos-prev',
// 			btnNext: '#prizes a.photos-next',
// 			visible: 4,
// 			auto: 3000,
// 			speed: 1000
// 		}).css({visibility:"visible"});		
	
// });