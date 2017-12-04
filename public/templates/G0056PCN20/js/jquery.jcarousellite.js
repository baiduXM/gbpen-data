/** �ӿ�˵��
 *
 *	btnPrev		string	��һ����ť��ѡ����, ���� btnPrev: ".prev"
 *	btnNext		string	��һ����ť��ѡ����, ���� btnNext: ".next"
 *	btnGo		array	�Զ������λ��,���ƻõ�ƬЧ����,��ѡ�,��������˳��,����Ϊ��ť1��ť2��ťN,������,ѡ����Ϊ1�İ�ť�ǵ�һ����ť��[".1", ".2"]
 *	mouseWheel	bool	��껬�Ƿ�����ֿ������¹���,��ѡ��false,true,Ĭ��false
 *	auto		int		ָ�����������ݶ����Զ�������Ĭ��Ϊ��(null),�ǲ�����,����趨��,��λΪ����,��1��Ϊ1000
 *	speed		int		�������ٶ�,���Գ���800 1000 1500,���ó�0��ɾ��Ч��
 *	easing		string	����Ч������,�磺easing: "bounceout",��Ҫjquery�е�easing pluin��������ʵ�֣�,ֻ������jq1.2
 *	vertical	bool	�Ƿ�ֱ����,��ѡ��false,true,Ĭ��false
 *	circular	bool	�Ƿ�ѭ������,Ĭ��Ϊtrue,���Ϊfalse,���������һ����ֹͣ����
 *	visible		int		�ɼ�����,����ΪС������2.5Ϊ2.5��li
 *	start		int		��ʼ�ĵط�,Ĭ����0
 *	scroll		int		ÿ�ι�����li����
 *	beforeStart	func	������ʼʱ�ص��ĺ���,���Դ��������� beforeStart: function(a) { alert("��ʼ�Ķ�����:" + a)}
 *	afterEnd	func	��������ʱ�ص��ĺ���,ʹ�÷���ͬ��
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