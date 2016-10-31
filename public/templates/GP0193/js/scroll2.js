$(document).ready(function() {
	
	//产品详细页滚动条
	var scroller  = null;
	var scrollbar = null;
	window.onload = function () {
	  scroller  = new jsScroller(document.getElementById("Scroller-2"), 560, 250);
	  scrollbar = new jsScrollbar (document.getElementById("Scrollbar-Container2"), scroller, false);
	}
	
});