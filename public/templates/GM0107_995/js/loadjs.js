jQuery(document).ready(function($) {
	
	// 无限加载按钮
	var ajaxlist = function(selector) {
		if (!$(this).data('nexturl')) {
            $(selector + '#more').hide();
			$(selector + '#less_more').show();
		}
		var _this = this, thisTEXT = $(this).text();
		// var _loading = buttonLoading(this, {bgcolor:'transparent'});
		$(this).text('');
		smartyAJAX($(this).data('nexturl'), selector, function(data) {
			var _data = $('<div>' + data);
			$(selector + ' ul').append(_data.find('ul').html());
			$(selector + ' #more').data('nexturl', _data.find('#more').data('nexturl'));
			// _loading.remove();
			$(_this).html(thisTEXT);
		});
		return false;
	}


	$('.newlist #more').click(function() {
		ajaxlist.call(this, ".newlist");
	});
	$('.pro-list #more').click(function() {
		ajaxlist.call(this, ".pro-list");
	});
	$('.list-imgtxt #more').click(function() {
		ajaxlist.call(this, ".list-imgtxt");
	});	
});

function smartyAJAX (url, selector, callback) {
	var callback = typeof callback === 'function' ? callback : function(){};
	$.get(url, function(data) {
		var body = /<body[^>]*>([\s\S]*?)<\/body>/gi.exec(data),
			_bodyContent = $('<div>' + body[1]);
		var listContent = _bodyContent.find(selector).html();
		var listData = typeof jSmart === 'undefined' ? listContent : (new jSmart(listContent)).fetch(PREVIEW_CONFIG);
		callback(listData);
	}, 'html');
}