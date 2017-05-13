/** 接口说明
 *
 *	btnPrev		string	上一个按钮的选择器, 比如 btnPrev: ".prev"
 *	btnNext		string	下一个按钮的选择器, 比如 btnNext: ".next"
 *	btnGo		array	自定义滚动位置,类似幻灯片效果置,有选项卡,按照数组顺序,依次为按钮1按钮2按钮N,如以下,选择器为1的按钮是第一个按钮：[".1", ".2"]
 *	mouseWheel	bool	鼠标滑是否可以轮控制上下滚动,可选：false,true,默认false
 *	auto		int		指定多少秒内容定期自动滚动。默认为空(null),是不滚动,如果设定的,单位为毫秒,如1秒为1000
 *	speed		int		滑动的速度,可以尝试800 1000 1500,设置成0将删除效果
 *	easing		string	缓冲效果名称,如：easing: "bounceout",需要jquery中的easing pluin（缓冲插件实现）,只适用于jq1.2
 *	vertical	bool	是否垂直滚动,可选：false,true,默认false
 *	circular	bool	是否循环滚动,默认为true,如果为false,滚动到最后一个将停止滚动
 *	visible		int		可见数量,可以为小数，如2.5为2.5个li
 *	start		int		开始的地方,默认是0
 *	scroll		int		每次滚动的li数量
 *	beforeStart	func	滚动开始时回调的函数,可以传入对象参数 beforeStart: function(a) { alert("开始的对象是:" + a)}
 *	afterEnd	func	滚动结束时回调的函数,使用方法同上
 *
 */

(function($) {
    $.fn.jCarouselLite = function(o) {
        o = $.extend({
            btnPrev: null, btnNext: null, btnGo: null, mouseWheel: false, auto: null, speed: 200, easing: null, vertical: false, circular: true, visible: 3, start: 0, scroll: 1, beforeStart: null, play: true,
            afterEnd: null
        }, o || {});
        return this.each(function() {
            var b = false, animCss = o.vertical ? 'top' : 'left', sizeCss = o.vertical ? 'height' : 'width';
            var c = $(this), ul = $(' > ul', c), tLi = $(' > li', ul), tl = tLi.size(), v = o.visible;
            benle(c);
			if(o.btnPrev) {
				benle(o.btnPrev);
			}
			if(o.btnNext) {
				benle(o.btnNext);
			}
			if(o.btnGo) {
				benle($.isArray(o.btnGo) ? o.btnGo.join(',') : o.btnGo);
			}
            if (o.circular) {
                ul.prepend(tLi.slice(tl - v - 1 + 1).clone()).append(tLi.slice(0, v).clone());
                o.start += v
            }
            var f = $(' > li', ul), itemLength = f.size(), curr = o.start; c.css('visibility', 'visible');
            f.css({ overflow: 'hidden', float: o.vertical ? 'none' : 'left' });
            ul.css({ margin: 0, padding: 0, position: 'relative', 'list-style-type': 'none', 'z-index': 1 });
            c.css({ overflow: 'hidden', position: 'relative', 'z-index': 2, left: 0 });
            var g = o.vertical ? f.outerHeight(true) : f.outerWidth(true);
            var h = g * itemLength;
            var j = g * v;
            ul.css(sizeCss, h + 'px').css(animCss, -(curr * g));
            c.css(sizeCss, j + 'px');
            if (o.btnPrev) $(o.btnPrev).click(function() {
                return go(curr - o.scroll)
            });
            if (o.btnNext) $(o.btnNext).click(function() {
                return go(curr + o.scroll)
            });
            if (o.btnGo) $.each(o.btnGo, function(i, a) {
                $(a).click(function() { return go(o.circular ? o.visible + i : i) })
            });
            if (o.mouseWheel && c.mousewheel) c.mousewheel(function(e, d) {
                return d > 0 ? go(curr - o.scroll) : go(curr + o.scroll)
            });
            if (o.auto) {
                setInterval(AutoPlay, o.auto + o.speed);
            }
			if (!o.circular) {
				if(tl <= v) {
					$(o.btnPrev + ',' + o.btnNext).removeClass('disabled').addClass('disabled');
				} else {
					$(o.btnPrev + ',' + o.btnNext).removeClass('disabled');
					$((curr == 0 && o.btnPrev) || (curr + o.scroll == itemLength && o.btnNext) || []).addClass('disabled');
				}
			}
			function benle(elem) {
				$(elem).bind({
					'mouseenter': function() {
						if (o.play) {
							o.play = false;
						}
					},
					'mouseleave': function() {
						if (!o.play) {
							o.play = true;
						}
					}
				});
			}
            function vis() {
                return f.slice(curr).slice(0, v)
            };
            function AutoPlay() { if (o.play) { go(curr + o.scroll); } };
            function go(a) {
                if (!b) {
                    if (o.beforeStart) o.beforeStart.call(this, vis());
                    if (o.circular) {
                        if (a <= o.start - v - 1) {
                            ul.css(animCss, -((itemLength - (v * 2)) * g) + 'px');
                            curr = a == o.start - v - 1 ? itemLength - (v * 2) - 1 : itemLength - (v * 2) - o.scroll
                        }
                        else if (a >= itemLength - v + 1) {
                            ul.css(animCss, -((v) * g) + 'px');
                            curr = a == itemLength - v + 1 ? v + 1 : v + o.scroll
                        }
                        else
                            curr = a
                    }
                    else {
						curr = a < 0 ? 0 : a > itemLength - v ? itemLength - v : a;
                    }
                    b = true;
                    ul.animate(animCss == 'left' ? { left: -(curr * g)} : { top: -(curr * g) }, o.speed, o.easing, function() {
                        if (o.afterEnd) o.afterEnd.call(this, vis()); b = false
                    });
                    if (!o.circular) {
                        $(o.btnPrev + ',' + o.btnNext).removeClass('disabled');
                        $((curr == 0 && o.btnPrev) || (curr + o.scroll == itemLength && o.btnNext) || []).addClass('disabled');
                    }
                } return false
            }
        })
    };
})(jQuery);