// 电话号码格式校验
// 号码格式：11位手机号码,3-4位区号，7-8位直播号码，1－4位分机号
// 校验正确返回ture，校验失败返回false
function telvalid(val) {
	var reg = /((\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$)/;
	
	if(!reg.test(val)){
		return false;
		
	}else{
		return true;
	}
	
}

// 字符输入校验，至少输入10个字节的字符
function words_deal(objval,max){
    var len = objval.replace(/[^\x00-\xff]/g, "**").length;
    if(len < 10){
        return false;
    }else{
    	if(max && len > max){
    		return false;
    	}
    	return true;
    }
}


$(function($) {
	init = function() {
		jarallax = new Jarallax(new ControllerScroll(true));
		var currentProgress = 0,
			progressSteps = 1 / 5,
			home_h = $('#home').outerHeight(),
			slide1_h = $('#slide1').outerHeight(),
			slide5_h = $('#slide5').outerHeight(),
			slide6_h = $('#slide6').outerHeight(),
			window_h = $(window).height();

		jarallax.setDefault('.container', {
			opacity: 0,
			display: 'none'
		})
		jarallax.setDefault('#home', {
			opacity: 1,
			display: 'block'
		})

		jarallax.addAnimation('#home', [{
			progress: '0',
			opacity: '1',
			top: '0%'
		}, {
			progress: '10',
			opacity: '.8',
			top: '-45%'
		}, {
			progress: '20',
			opacity: '0',
			top: '-200%'
		}]);

		//progress参数对应的是导航描点 box_inner 
		jarallax.addAnimation('#slide1', [{
			progress: '0',
			display: 'block',
			opacity: '1',
			top: Math.floor(home_h) + 'px'
		}, {
			progress: '10',
			display: 'block',
			opacity: '1',
			top: Math.floor(home_h * .3) + 'px'
		}, {
			progress: '20',
			display: 'block',
			opacity: '1',
			top: Math.floor(slide1_h) * -1.8 + 'px'
		}]);
		jarallax.addAnimation('.dots', [{
			progress: '0',
			bottom: '220px'
		}, {
			progress: '10',
			bottom: '350px'
		}, {
			progress: '20',
			bottom: '400px'
		}]);
		jarallax.addAnimation('.box_inner', [{
			progress: '0',
			top: '225px'
		}, {
			progress: '10',
			top: '180px'
		}, {
			progress: '20',
			top: '-300px'
		}]);


		var animation = jarallax.addAnimation('#slide2', [{
			progress: '0',
			display: 'block',
			opacity: '.5',
			top: '150%'
		}, {
			progress: '10',
			display: 'block',
			opacity: '.5',
			top: '75%'
		}, {
			progress: '20',
			display: 'block',
			opacity: '1',
			top: '20%'
		}, {
			progress: '30',
			display: 'block',
			opacity: '.5',
			top: '-30%'
		}, {
			progress: '40',
			display: 'block',
			opacity: '0',
			top: '-200%'
		}]);

		jarallax.addAnimation('#slide3', [{
			progress: '10',
			display: 'block',
			opacity: '0.6',
			top: '200%'
		}, {
			progress: '20',
			display: 'block',
			opacity: '1',
			top: '75%'
		}, {
			progress: '30',
			display: 'block',
			opacity: '1',
			top: '0%'
		}, {
			progress: '40',
			display: 'block',
			opacity: '1',
			top: '-200%'
		}]);


		jarallax.addAnimation('#slide4', [{
			progress: '20',
			display: 'block',
			opacity: '.1',
			top: '200%'
		}, {
			progress: '30',
			display: 'block',
			opacity: '.8',
			top: '60%'
		}, {
			progress: '40',
			display: 'block',
			opacity: '1',
			top: '-20%'
		}, {
			progress: '50',
			display: 'block',
			opacity: '.8',
			top: '-200%'
		}]);

		jarallax.addAnimation('#slide5', [{
			progress: '30',
			display: 'block',
			opacity: '1',
			top: Math.floor(window_h * 2) + 'px'
		}, {
			progress: '40',
			display: 'block',
			opacity: '1',
			top: Math.floor(window_h * .95) + 'px'
		}, {
			progress: '50',
			display: 'block',
			opacity: '1',
			top: '0px'
		}, {
			progress: '60',
			display: 'block',
			opacity: '1',
			top: Math.floor(window_h - slide6_h - slide5_h) + 'px'
		}]);


		jarallax.addAnimation('#slide6', [{
			progress: '40',
			display: 'block',
			opacity: '.6',
			top: Math.floor(window_h * .9) + 'px'
		}, {
			progress: '50',
			display: 'block',
			opacity: '.6',
			top: Math.floor(window_h - slide6_h) + 'px'
		}, {
			progress: '60',
			display: 'block',
			opacity: '1',
			top: Math.floor(window_h - slide6_h) + 'px'
		}]);



		$('#slide1').css({
			opacity: 1,
			display: 'block'
		});


		if (window.chrome) {
			$('.banner li').css('background-size', '100% 100%');
		}

		$('.banner').unslider({
			arrows: false,
			fluid: true,
			dots: true
		});

		//  Find any element starting with a # in the URL
		//  And listen to any click events it fires
		$('a[href^="#"]').click(function() {
			//  Find the target element
			var target = $($(this).attr('href'));

			//  And get its position
			var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

			//  jQuery will return false if there's no element
			//  and your code will throw errors if it tries to do .offset().left;
			if (pos) {
				//  Scroll the page
				$('html, body').animate({
					scrollTop: pos.top,
					scrollLeft: pos.left
				}, 1000);
			}

			//  Don't let them visit the url, we'll scroll you there
			return false;
		});

		// var GoSquared = {acct: 'GSN-396664-U'};
		// 

		var left_able = false;

		//导航滚动事件控制
	    $(window).scroll( function() { 
	        var left_nav = $(".fixed_nav"),
	        l_h = left_nav.height(),
	        w_h = $(window).height(),
	        lw_h = l_h - w_h;     
	        
	        if (lw_h > 0) {
	            if ($(document).scrollTop() < lw_h) {
	              left_nav.css({
	                  position: 'absolute',
	                  top: 0
	              });
	            } else if ($(document).scrollTop() >= lw_h) {
	              left_nav.css({
	                  position: 'fixed',
	                  top: -lw_h + 'px'
	              });
	            }
	        }

	        $('.container').css('left', -$(document).scrollLeft());	        
	        
	        if($(window).width() <= 1200){
	        	left_nav.css({
	        		left: -$(document).scrollLeft(),
	        		marginLeft: 0
	        	});
	        	left_able = true;
	        }
	        
	    });
		
		$(window).resize(function(event) {
			var left_nav = $(".fixed_nav");
			if(left_able && $(window).width() > 1200 && $(window).width() <1366){
	        	left_nav.css({
	        		left: 0,
	        		marginLeft: 0
	        	});
	        }
	        else if(left_able && $(window).width() > 1366){
	        	left_nav.css({
	        		left: '50%',
	        		marginLeft: '-600px'
	        	});
	        }
		});


	}

	// 验证
	function validfun () {			
		var valid = false;	
		var telcheck  = false;
		var wordscheck = false;
		var telephone = $('#phone');
		var content = $('#info');
		telephone.blur(function(event) {
			$('#errmsg').html("");
			telcheck  = telvalid(telephone.val());
			if(telcheck){
				$('span.telmsg').html("");
			}else{

				$('span.telmsg').html("号码格式错误，请输入11位手机号码,3-4位区号，7-8位直播号码，1－4位分机号！")
			}
			if(typeof XMLHttpRequest === "function"){
				valid = telcheck && words_deal(content.val());
			}else{
				valid = telcheck && words_deal(content.val(),1500);
			}
			
		});
		telephone.keydown(function(e) {
			var ev = document.all ? window.event : e;
   			if(ev.keyCode==13) {
				telcheck  = telvalid(telephone.val());
				if(telcheck){
					$('span.telmsg').html("");
					content.focus();
				}else{
					$('span.telmsg').html("号码格式错误，请输入11位手机号码,3-4位区号，7-8位直播号码，1－4位分机号！")
				}
				if(typeof XMLHttpRequest === "function"){
					valid = telcheck && words_deal(content.val());
				}else{
					valid = telcheck && words_deal(content.val(),1500);
				}
			}
		});
		content.blur(function(event) {
			$('#errmsg').html("");
			if(typeof XMLHttpRequest === "function"){
				wordscheck = words_deal(content.val());
				if(wordscheck){
					$('span.infomsg').html("");
				}else{
					$('span.infomsg').html("至少输入10个字符！")
				}
				valid = telvalid(telephone.val()) && wordscheck;
			}else{
				wordscheck = words_deal(content.val(),1500);
				if(wordscheck){
					$('span.infomsg').html("");
				}else{
					$('span.infomsg').html("请输入10到1500个字符！")
				}
				valid = telvalid(telephone.val()) && wordscheck;
			}
		});
		content.keydown(function(e) {			
			var ev = document.all ? window.event : e;
	   		if(ev.keyCode==13) {

				if(typeof XMLHttpRequest === "function"){
					wordscheck = words_deal(content.val());
					if(wordscheck){
						$('span.infomsg').html("");
					}else{
						$('span.infomsg').html("至少输入10个字符！")
					}
					valid = telvalid(telephone.val()) && wordscheck;
				}else{
					wordscheck = words_deal(content.val(),1500);
					if(wordscheck){
						$('span.infomsg').html("");
					}else{
						$('span.infomsg').html("请输入10到1500个字符！")
					}
					valid = telvalid(telephone.val()) && wordscheck;
				}
   			}
		});
		return valid;
	}



	function feedback() {
		var valid = validfun();	
		var url = $('#f').attr("action");
		var username = $('#username');
		var telephone = $('#phone');
		var content = $('#info');
		username.keydown(function(e) {			
			var ev = document.all ? window.event : e;
	   		if(ev.keyCode==13) {
	   			telephone.focus();
	   		}
		});

		$('#feedback_smt').click(function(event) {
			$('#errmsg').html("");
			// var xhr = new XMLHttpRequest();
			// if("withCredentials" in xhr){
			// 	valid = telvalid(telephone.val()) && words_deal(content.val());
			// 	if(valid){
			// 		var xhrdata = 'name=' + username.val() +'&telephone=' + telephone.val()
			// 					+ '&content=' + content.val() + '&ajax=1';
					
			// 		xhr.onload = function(){
			// 			var data = $.parseJSON(xhr.responseText);
			// 		 	if(!data['err']){//提交成功,则重置表单值为空
			// 			  	$('#username').val("");
			// 			  	$('#phone').val("");
			// 			  	$('#info').val("");
			// 			  	$('#errmsg').html("提交成功！我们会尽快给您回复！");
			// 			  }else{//提交失败，则显示错误信息
			// 			  	$('#errmsg').html(data[msg]);			  	
			// 			  };
			// 		};
			// 		xhr.open('POST', url, true);
			// 		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			// 		xhr.send(xhrdata);	
			// 	}
			// }else{
			// 	valid = telvalid(telephone.val()) && words_deal(content.val(),1500);
			// 	if(valid){
			// 		$.getJSON(url,{ 
			// 			name: username.val(), 
			// 			telephone: telephone.val(),
			// 			content:content.val(),
			// 			ajax:"1",
			// 			callback: ""
			// 		},function(data){
			// 			console.log(data);
			// 		  if (!data.err) {//提交成功,则重置表单值为空
			// 		  	$('#username').val("");
			// 		  	$('#phone').val("");
			// 		  	$('#info').val("");
			// 		  	$('#errmsg').html("提交成功！我们会尽快给您回复！");
			// 		  }else{//提交失败，则显示错误信息
			// 		  	$('#errmsg').html(data.msg);			  	
			// 		  };
			// 		});	
			// 	}						
			// }
			valid = telvalid(telephone.val()) && words_deal(content.val(),1500);
			if(valid){
				$.getJSON(url,{ 
					name: username.val(), 
					telephone: telephone.val(),
					content:content.val(),
					ajax:"1",
					callback: ""
				},function(data){
					console.log(data);
				  if (!data.err) {//提交成功,则重置表单值为空
				  	$('#username').val("");
				  	$('#phone').val("");
				  	$('#info').val("");
				  	$('#errmsg').html("提交成功！我们会尽快给您回复！");
				  }else{//提交失败，则显示错误信息
				  	$('#errmsg').html(data.msg);			  	
				  };
				});	
			}						
			
		});
		return false;
	}	

	init();
	feedback();


	// 首页轮滚图文本处理
	var editWord = function() {
			this.subinfo = function() {
				var Arr_key = this.info.split('|');
				this.contentword = Arr_key[0];
				this.keyword = Arr_key[1];
				this.Engword = Arr_key[2];
			}, this.init = function() {
				var _this = this;
				this.Engword = this.Engword || '';
				$('.banner ul li').each(function() {
					_this.info = $(this).find('.EditInfo').val();
					_this.subinfo();
					_this.fill($(this));
				});
			}, this.fill = function(current) {
				// 英文填充
				if (this.Engword) {
					var ThisEngword = this.Engword.split(' ');
					var _div = '';
					for (var i = 1; i < ThisEngword.length; i++) {
						_div += '<span>' + ThisEngword[i] + '</span>'
					}
					current.find('.description .yellow').html(ThisEngword[0] + _div);
				}
				if (!this.contentword || !this.keyword) {
					console.log('请填写轮滚图简介文本或者关键字！');
				} else {
					if (this.keyword.length > 3) {
						console.log('关键字字数应少于两个字！');
					} else {
						// 简介文本填充
						current.find('.description .p').append(this.contentword);
						// 关键字填充
						current.find('.shap_inner .txt_b').append(this.keyword[0]);
						current.find('.shap_inner .txt_s').prepend(this.keyword[1]);
					}
				}
			}
			this.init();
		}();


});