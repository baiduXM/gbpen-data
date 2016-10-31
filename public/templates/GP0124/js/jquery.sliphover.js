/**
 * sliphover v2.0.5
 * require jquery 1.7+
 * MIT License
 * for more info pls visit :https://github.com/wayou/SlipHover
 */

;
(function($, window, document, undefined) {

    // Create the defaults once
    var pluginName = "sliphover",
        defaults = {
            target: 'img', //覆盖将附加的元素
            caption: 'title', //悬停时将显示的标题
            duration: 'fast', //指定动画将持续多久的时间
            fontColor: '#fff',
            textAlign: 'center', //显示标题左，中心或右
            verticalMiddle: true, //显示标题垂直的中间或不
            backgroundColor: 'rgba(0,0,0,.7)', //指定背景颜色和不透明度使用RGBA
            backgroundColorAttr: null, //指定的属性与背景颜色值和不透明度使用RGBA
            reverse: false, //反方向
            height: '100%', //指定覆盖的高度
            withLink: true //如果图像是一个链接覆盖包裹会点击，设置虚假无效点击
        };

    function SlipHover(element, options) {
        this.element = element;
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.version = 'v2.0.5';
        this.init();
    }

    SlipHover.prototype = {
        init: function() {

            //禁用触摸设备
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                return;
            }

            var that = this,
                target = this.settings.target;

            //每次鼠标进入时，创建覆盖容器
            $(this.element).off('mouseenter.sliphover', target).on('mouseenter.sliphover', target, function(event) {
                //fix #9 https://github.com/wayou/SlipHover/issues/9
                //用它代替event.target有时event.target不是我们想要获取正确的目标
                //http://stackoverflow.com/questions/9838137/event-target-jquery-on-mousedown-up-is-not-giving-the-dom-specified-by-selecto
                var $element = $(this),
                    $overlayContainer = that.createContainer($element);

                $overlayContainer.off('mouseenter.sliphover mouseleave.sliphover').on('mouseenter.sliphover mouseleave.sliphover', function(event) {
                    //if (!$overlayContainer) return;
                    var direction = that.getDirection($(this), event);

                    //check if reverse option is on
                    direction = that.settings.reverse ? direction = (direction + 2) % 4 : direction;

                    if (event.type === 'mouseenter') {
                        //检查前一覆盖是否仍然存在之前，我们创建它
                        var $overlay = $overlayContainer.find('.sliphover-overlay');
                        if (!$overlay.length) {
                            $overlay = that.createOverlay(that, direction, $element);
                            //将覆盖放在容器中
                            $(this).html($overlay);
                        }
                        that.slideIn(that, $overlay);
                    } else {
                        //基于方向滑动
                        that.removeOverlay(that, $(this), direction);
                    }
                });
            });
        },
        createContainer: function($element) {
            //获取目标的属性
            var top = $element.offset().top,
                left = $element.offset().left,
                //border = parseFloat($element.css("border-left-width")),
                width = $element.outerWidth(),
                height = $element.outerHeight();
            zIndex = $element.css("z-index");
            var $overlayContainer = $('<div>', {
                class: 'sliphover-container'
            }).css({
                width: width,
                height: height,
                position: 'absolute',
                overflow: 'hidden',
                top: top,
                left: left,
                borderRadius: $element.css('border-radius'), //如果目标有一个圆形的边界，这将使覆盖更美好
                zIndex: zIndex == +zIndex ? (zIndex + 1) : 999 // 如果目标z-index不数然后用999
            });

            $('body').append($overlayContainer);

            return $overlayContainer;
        },
        createOverlay: function(instance, direction, $element) {

            var bottom, left, $overlay, $overlayColor, content, $targetAParent;

            switch (direction) {
                case 0:
                    //from top
                    left = 0;
                    bottom = '100%';
                    break;
                case 1:
                    //from right
                    left = '100%';
                    bottom = 0;
                    break;
                case 2:
                    //from bottom
                    left = 0;
                    bottom = '-100%';
                    break;
                case 3:
                    //from left
                    left = '-100%';
                    bottom = 0;
                    break;
                default:
                    window.console.error('error when get direction of the mouse');
            };

            //如果我们想要显示的内容垂直中间，我们需要把内容放到div和显示单元格的样式设置
            if (instance.settings.verticalMiddle) {
                content = $('<div>').css({
                    display: 'table-cell',
                    verticalAlign: 'middle'
                }).html($element.attr(instance.settings.caption));
            } else {
                content = $element.attr(instance.settings.caption);
            }
            $targetAParent = $element.parent('a');
            if ($targetAParent.length && instance.settings.withLink) {
                var url = $targetAParent.attr('href'),
                target=$targetAParent.attr('target');//fix issue#17
                $overlay = $('<a>', {
                    class: 'sliphover-overlay',
                    href: url || '#',
                    target: target||'_self'
                }).css({
                    textDecoration: 'none'
                });
            } else {
                $overlay = $('<div>', {
                    class: 'sliphover-overlay'
                });
            }

            $overlayColor = instance.settings.backgroundColorAttr ?
              $element.attr(instance.settings.backgroundColorAttr) : instance.settings.backgroundColor;

            $overlay.css({
                width: '100%',
                height: instance.settings.height,
                position: 'absolute',
                left: left,
                bottom: bottom,
                display: instance.settings.verticalMiddle ? 'table' : 'inline',
                textAlign: instance.settings.textAlign,
                color: instance.settings.fontColor,
                backgroundColor: $overlayColor
            })
                .html(content);
            return $overlay;
        },
        slideIn: function(instance, $overlay) {
            $overlay.stop().animate({
                left: 0,
                bottom: 0
            }, instance.settings.duration);
        },
        removeOverlay: function(instance, $overlayContainer, direction) {
            var finalState,
                $overlay = $overlayContainer.find('.sliphover-overlay');

            switch (direction) {
                case 0: //to top
                    finalState = {
                        bottom: '100%',
                        left: 0
                    };
                    break;
                case 1: //to right
                    finalState = {
                        bottom: 0,
                        left: '100%'
                    };
                    break;
                case 2: //to bottom
                    finalState = {
                        bottom: '-100%',
                        left: 0
                    };
                    break;
                case 3: //to left
                    finalState = {
                        bottom: 0,
                        left: '-100%'
                    };
                    break;
                default:
                    window.console.error('error when get direction of the mouse');
            };

            //slide out
            $overlay.stop().animate(finalState, instance.settings.duration, function() {
                $overlayContainer.remove();
            });
        },
        getDirection: function($target, event) {
            //reference: http://stackoverflow.com/questions/3627042/jquery-animation-for-a-hover-with-mouse-direction
            var w = $target.width(),
                h = $target.height(),
                x = (event.pageX - $target.offset().left - (w / 2)) * (w > h ? (h / w) : 1),
                y = (event.pageY - $target.offset().top - (h / 2)) * (h > w ? (w / h) : 1),
                direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
            return direction;
        }
    };

    $.fn[pluginName] = function(options) {
        this.each(function() {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new SlipHover(this, options));
            }
        });

        // chain jQuery functions
        return this;
    };

})(jQuery, window, document);