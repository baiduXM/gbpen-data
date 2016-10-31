$(document).ready(function() {
	load();
	setTimeout("cloud()", 1500);
	setTimeout("theme()", 2300);
	setTimeout("light()", 4800);
	$(".head").wrap('<header id="header"></header>');
});

function load(){
	$(".road").animate({width:"100%"}, 600,"linear",function(){
		$(".grass").css("display","block").animate({bottom:"209px"}, 300,function(){
			$(".city").animate({left:"0px"}, 600);
			$(".hill").animate({right:"0px"}, 600);
		});
	});
};
function cloud(){
	$(".cloud li:eq(0)").animate({left:"382px"}, 800,function(){
		$(this).animate({left:"0px"}, 3979,"linear",function(){
			$(this).css({left:"100%"}).animate({left:"0px"}, 20000,"linear",function(){
				$(this).css({left:"100%"});
			});
			setInterval(function(){
				$(".cloud li:eq(0)").animate({left:"0px"}, 20000,"linear",function(){
					$(this).css({left:"100%"})
				});
			}, 20000);
		});
	});
	$(".cloud li:eq(1)").animate({left:"1287px"}, 800,function(){
		$(this).animate({left:"0px"}, 13406,"linear",function(){
			$(this).css({left:"100%"}).animate({left:"0px"}, 20000,"linear",function(){
				$(this).css({left:"100%"});
			});
			setInterval(function(){
				$(".cloud li:eq(1)").animate({left:"0px"}, 20000,"linear",function(){
					$(this).css({left:"100%"})
				});
			}, 20000);
		});
	});
	$(".cloud li:eq(2)").animate({left:"520px"}, 800,function(){
		$(this).animate({left:"100%"}, 14583,"linear",function(){
			$(this).css({left:"0px"}).animate({left:"100%"}, 20000,"linear",function(){
				$(this).css({left:"0px"});
			});
			setInterval(function(){
				$(".cloud li:eq(2)").animate({left:"100%"}, 20000,"linear",function(){
					$(this).css({left:"0px"})
				});
			}, 20000);
		});
	});
};
function theme(){
	$(".plane li.plane-01").css({filter:"Alpha(opacity=100)"}).animate({left:"0px",opacity:"1"}, 1500,function(){
		$(this).find('i').addClass('magnify');
	});
	$(".plane li.plane-02").css({filter:"Alpha(opacity=100)"}).animate({left:"19px",opacity:"1"}, 1500);
};
function light(){
	$("#ray,#shadow").css({filter:"Alpha(opacity=100)"}).animate({opacity:"1"}, 800,function(){
		$(this).removeClass('skew');
	})
	$(".cat").animate({left:"478px"}, 1000,function(){
		$(this).find('i').css({filter:"Alpha(opacity=100)",opacity:"1"}).addClass('change1');
		setTimeout("change()", 500);
	});
};
function change(){
	$(".cat").find('i').removeClass('change1').addClass('change2');
	$(".man").css({filter:"Alpha(opacity=100)"}).animate({opacity:"1",right:"533px"}, 1000,function(){
		$("#header").animate({top:"20px"}, 250,function(){
			$(this).animate({top:"0px"}, 100,function(){
				$(this).addClass('swing')
			})
		});
	});
};