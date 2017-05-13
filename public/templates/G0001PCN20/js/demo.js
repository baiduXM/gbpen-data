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
		var currentProgress = 0;
		var progressSteps = 1 / 7;
		var slide5_h = $('#slide5').outerHeight();
		var slide6_h = $('#slide6').outerHeight();
		var window_h = $(window).height();

		jarallax.setDefault('.container', {
			opacity: 0,
			display: 'none'
		})
		jarallax.setDefault('#home', {
			opacity: 1,
			display: 'block'
		})
		jarallax.setDefault('#slide1', {
			opacity: 1,
			display: 'block'
		})

		jarallax.addAnimation('#home', [{
            progress: '0',
            opacity: '1',
			display: 'block'
        }, {
            progress: '14',
            opacity: '.5',
			display: 'block'
        }, {
            progress: '15',
            opacity: '0',
			display: 'none'
        }, {
            progress: '100%',
            opacity: '0',
			display: 'none'
        }]);

		//progress参数对应的是导航描点 box_inner 
		jarallax.addAnimation('#slide1', [{
            progress: '0',
            display: 'block',
            opacity: '1',
            top: '736px'
        }, {
            progress: '14',
            display: 'block',
            opacity: '1',
            top: '200px'
        }, {
            progress: '28',
            display: 'block',
            opacity: '0',
            top: '-2000px'
        }, {
            progress: '100',
            display: 'block',
            opacity: '0',
            top: '-5000px'
        }]);
        jarallax.addAnimation('#slide2', [{
            progress: '0',
            display: 'block',
            opacity: '0',
            top: '736px'
        }, {
            progress: '14',
            display: 'block',
            opacity: '.5',
            top: '736px'
        }, {
            progress: '28',
            display: 'block',
            opacity: '1',
            top: '200px'
        }, {
            progress: '43',
            display: 'block',
            opacity: '0',
            top: '-1000px'
        }, {
            progress: '100',
            display: 'block',
            opacity: '0',
            top: '-5000px'
        }]);
        jarallax.addAnimation('#slide3', [{
            progress: '14',
            display: 'block',
            opacity: '0',
            top: '2000px'
        }, {
            progress: '28',
            display: 'block',
            opacity: '1',
            top: '800px'
        }, {
            progress: '43',
            display: 'block',
            opacity: '1',
            top: '50px'
        }, {
            progress: '57',
            display: 'block',
            opacity: '0',
            top: '-1000px'
        }, {
            progress: '100',
            display: 'block',
            opacity: '0',
            top: '-5000px'
        }]);
        jarallax.addAnimation('#slide4', [{
            progress: '43',
            display: 'block',
            opacity: '0',
            top: '1000px'
        }, {
            progress: '57',
            display: 'block',
            opacity: '1',
            top: '0px'
        }, {
            progress: '71',
            display: 'block',
            opacity: '0',
            top: '-1000px'
        }, {
            progress: '100',
            display: 'block',
            opacity: '0',
            top: '-5000px'
        }]);
        jarallax.addAnimation('#slide5', [{
            progress: '57',
            display: 'block',
            opacity: '1',
            top: '2000px'
        }, {
            progress: '71',
            display: 'block',
            opacity: '1',
            top: '0px'
        }, {
            progress: '86',
            display: 'block',
            opacity: '1',
            top: Math.floor(window_h - slide6_h - slide5_h) + 'px'
        }, {
            progress: '100',
            display: 'block',
            opacity: '1',
            top: Math.floor(window_h - slide6_h - slide5_h) + 'px'
        }]);
        jarallax.addAnimation('#slide6', [{
            progress: '57',
            display: 'block',
            opacity: '0',
            top: '3000px'
        },{
            progress: '71',
            display: 'block',
            opacity: '1',
            top: Math.floor(window_h - slide6_h) + 'px'
        }, {
            progress: '86',
            display: 'block',
            opacity: '1',
            top: Math.floor(window_h - slide6_h) + 'px'
        }, {
            progress: '100',
            display: 'block',
            opacity: '1',
            top: Math.floor(window_h - slide6_h) + 'px'
        }]);

		if (window.chrome) {
			$('.banner li').css('background-size', '100% 100%');
		}

		$('.banner').unslider({
			arrows: false,
			fluid: true,
			dots: true
		});

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
			var xhr = new XMLHttpRequest();
			if("withCredentials" in xhr){
				valid = telvalid(telephone.val()) && words_deal(content.val());
				if(valid){
					var xhrdata = 'name=' + username.val() +'&telephone=' + telephone.val()
								+ '&content=' + content.val() + '&ajax=1';
					
					xhr.onload = function(){
						var data = $.parseJSON(xhr.responseText);
					 	if(!data['err']){//提交成功,则重置表单值为空
						  	$('#username').val("");
						  	$('#phone').val("");
						  	$('#info').val("");
						  	$('#errmsg').html("提交成功！我们会尽快给您回复！");
						  }else{//提交失败，则显示错误信息
						  	$('#errmsg').html(data[msg]);			  	
						  };
					};
					xhr.timeout = 30000;//设置超时时间为30秒
					xhr.ontimeout = function () {
						alert("请求超时...");
					}
					xhr.onerror = function () {
						alert("发生错误...");
					}
					xhr.open('POST', url, true);
					xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
					xhr.send(xhrdata);	
				}
			}else{
				valid = telvalid(telephone.val()) && words_deal(content.val(),1500);

				if(valid){
					$.getJSON(url+'?callback=?',{ 
						name: username.val(), 
						telephone: telephone.val(),
						content:content.val(),
						ajax:"1"
					},function(data){
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
			}						
			
		});
		return false;
	}	

	init();
	feedback();
});