window.onload=function()
{
	//使用说明。一级ul相对定位，二级ul绝对定位。二级ul的calss,block和none一定要。
	var oNav=document.getElementById("inner_nav");
	var oUl=oNav.getElementsByTagName("ul")[0];
	var cont=parseInt((oNav.offsetWidth-oUl.children[0].offsetWidth)/2);//求导航的一半位置
	var oErji=null;//二级ul
	var sum=0;//存放二级ul的宽
	

	//循环一级li
	for(var i=0;i<oUl.children.length;i++)
	{
		//设置一级li等比宽度
		oUl.children[i].style.width=oNav.offsetWidth/oUl.children.length+"px";
		//添加li鼠标滑入事件
		oUl.children[i].onmouseover=function()
		{
			//判断li底下是否有二级
		  	if (this.getElementsByTagName("ul")[0])
		  	{	
		  		//取出二级ul
				oErji=this.getElementsByTagName("ul")[0]; 
				//给ul添加class
				oErji.className="secul block";


				var erli=oErji.children;
				for(var j=0; j<erli.length;j++)
				{
					sum+=erli[j].offsetWidth+4;
				};
				oErji.style.width =sum+"px";
				var liLeft=this.offsetLeft; //一级li的位置
				var liRight=this.offsetLeft+this.offsetWidth;


				if(sum>oNav.offsetWidth){
					oErji.style.width=oNav.offsetWidth+"px";
					oErji.style.height="60px";
				}
				//获取每个二级li的宽度，计算出父级ul的宽度。
				var height=oErji.offsetHeight;
		  		//$(".location").css("margin-top",height+20+"px");
		  		$(".location").stop().animate({"margin-top":height+20+"px"},200);



				//判断一级li的位置，大于一半,在右侧
				if (liLeft>cont)
				{
					if ((sum/2) >= (oNav.offsetWidth-liLeft-this.offsetWidth/2))
					{
						//二级位置的一半，比一级li到右侧的距离大
						if(liRight==oNav.offsetWidth){
							oErji.style.right=0;
						}else{
							oErji.style.right=-(oNav.offsetWidth-liRight);
						}
						
					}else{
						//oErji.style.left=liLeft-(sum-this.offsetWidth)/2+"px";
						var left=-(sum-this.offsetWidth)/2+"px";
						//oErji.style.left=-(sum-this.offsetWidth)/2+"px";
						if((-left)>liLeft){
							oErji.style.left=-liLeft;
						}else{
							oErji.style.left=left;
						}
					};
				}else {
					//判断一级li的位置，大于一半,在左侧
					//二级ul的一半大于一级li的位置
					if ((sum/2) >= (liLeft+this.offsetWidth/2))
					{
						if(liLeft==0){
							oErji.style.left=0;
						}else{
							oErji.style.left=-liLeft;
						}
					}else {
						//oErji.style.left=liLeft-(sum-this.offsetWidth)/2+"px";
						var left=-(sum-this.offsetWidth)/2+"px";
						//oErji.style.left=-(sum-this.offsetWidth)/2+"px";
						if((-left)>liLeft){
							oErji.style.left=-liLeft;
						}else{
							oErji.style.left=left;
						}
					};
				};
			};
		};
		oUl.children[i].onmouseout=function()
		{	
			sum=0;
			if (this.getElementsByTagName("ul")[0]) {
				var oErji=this.getElementsByTagName("ul")[0];
				oErji.className ="secul none";
			};
		  	//$(".location").css("margin-top","50px");
		  	$(".location").stop().animate({"margin-top":"50px"},200);
		};
	};
};
