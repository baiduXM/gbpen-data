$(document).ready(function() {
	
	//新闻详细页滚动条
	var scroller  = null;
	var scrollbar = null;
	window.onload = function () {
	  scroller  = new jsScroller(document.getElementById("Scroller-1"), 895, 450);
	  scrollbar = new jsScrollbar (document.getElementById("Scrollbar-Container"), scroller, false);
	};

	
});