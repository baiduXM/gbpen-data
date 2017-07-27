jQuery(document).ready(function($) {
		// 无限加载按钮
	var ajaxlist = function(selector) {
		if (!$(this).data('nexturl')) {
            $(selector + ' #more').hide();
			$(selector + ' #less_more').show();
		}
		var _this = this, thisTEXT = $(this).text();


		$(this).text('');
		smartyAJAX($(this).data('nexturl'), selector, function(data) {
			var _data = $('<div>' + data);
			$(selector + ' ul').append(_data.find('ul').html());
			$(selector + ' #more').data('nexturl', _data.find('#more').data('nexturl'));
		
			$(_this).html(thisTEXT);
		});
		return false;
	}
	// var pagenem = 1;
	$('.newlist #more').click(function() {//console.log(123)
		ajaxlist.call(this, ".newlist");
	// 	$.get('./loadmoredata.json?page='+pagenem,function(data){
	// 		var getinfo = data.data;
	// 		$.each(getinfo,function(i,j){console.log(11)
 // var _html = '';
 // _html +="<li>\
 //          <div class="date">\
 //             <dl>'+j.name+'</dl>\
 //             <dt>{$article.pubtimestamp|date_format:'%Y'}</dt>\
 //          </div>\
 //          <a href="{$article.link}">\
 //            <h2>{$article.title}</h2>\
 //            <span>{$article.description}</span>\
 //          </a>\
 //        </li>" ;
 // pagenem++;

	// 		});
	// 	})
	});
	$('.prod #more').click(function() {
		ajaxlist.call(this, ".prod");
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

