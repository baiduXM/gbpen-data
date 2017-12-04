window.onload=function()
{
	//使用说明。一级ul相对定位，二级ul绝对定位。二级ul的calss,block和none一定要。
	var oNav=document.getElementById("nav");
	var oUl=oNav.getElementsByTagName("ul")[0];
	var cont=parseInt((oNav.offsetWidth-oUl.children[0].offsetWidth)/2);//求导航的一半位置
	var oErji=null;//二级ul
	var sum=0;//存放二级ul的宽

	//循环一级li
	for(var i=0;i<oUl.children.length;i++)
	{
		//设置一级li等比宽度
		// oUl.children[i].style.width=oNav.offsetWidth/oUl.children.length+"px";
		//添加li鼠标滑入事件
		oUl.children[i].onmouseover=function()
		{
			//判断li底下是否有二级
		  	if (this.getElementsByTagName("ul")[0])
		  	{	
		  		//取出二级ul
				oErji=this.getElementsByTagName("ul")[0]; 
				//给ul添加class
				oErji.className="erji block";
				//获取每个二级li的宽度，计算出父级ul的宽度。
				var erli=oErji.children;
				for(var j=0; j<erli.length;j++)
				{
					sum+=erli[j].offsetWidth+1;
				};
				oErji.style.width =sum+"px";
				
				var liLeft=this.offsetLeft; //一级li的位置
				//判断一级li的位置，大于一半,在右侧
				if (liLeft>cont)
				{
					if ((sum/2) >= (oNav.offsetWidth-liLeft-this.offsetWidth/2))
					{
						//二级位置的一半，比一级li到右侧的距离大
						oErji.style.right=0;
					}else{
						oErji.style.left=liLeft+this.offsetWidth/2-sum/2+"px";
					};
				}else {
					//判断一级li的位置，大于一半,在左侧
					//二级ul的一半大于一级li的位置
					if ((sum/2) >= (liLeft+this.offsetWidth/2))
					{
						oErji.style.left=0;
					}else {
						oErji.style.left=liLeft+this.offsetWidth/2-sum/2+"px";
					};
				};
			};
		};
		oUl.children[i].onmouseout=function()
		{	
			sum=0;
			if (this.getElementsByTagName("ul")[0]) {
				var oErji=this.getElementsByTagName("ul")[0];
				oErji.className ="erji none";
			};
		};
	};
};
