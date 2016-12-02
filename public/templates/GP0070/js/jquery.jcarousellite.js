

;(function($) {
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



    $('#prizes .photos-content.enable').jCarouselLite({
            btnPrev: '#prizes a.photos-prev',
            btnNext: '#prizes a.photos-next',
            visible: 3,
            auto: 3000,
            speed: 1000
        }).css({visibility:"visible"});
