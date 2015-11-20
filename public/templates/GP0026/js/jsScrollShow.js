var scroller  = null;
var scrollbar = null;
window.onload = function () {
  scroller  = new jsScroller(document.getElementById("Scroller-1"), 440, 240);
  scrollbar = new jsScrollbar (document.getElementById("Scrollbar-Container"), scroller, false);
}
//改变图大小
function imgresize(thispic,P_w)
{
if(thispic.width>P_w){thispic.height=thispic.height*P_w/thispic.width;thispic.width=P_w;} 
}

//function makevisible(obj,num)
//  {
//   if (num==0)
//     obj.filters.Alpha.Opacity=100;
//   else
//  	 obj.filters.Alpha.Opacity=30;
//}
function makevisible(j,Icount)
{
	for (var i = 0; i <Icount+1; i++)
	{
		if (i==j)
		{
			document.getElementById("Sp"+i).style.filter="" ;
		}
		else
		{
		document.getElementById("Sp"+i).style.filter="Gray";
		}
	}
	 
}

function changePic(pic,i)
{
	document.getElementById("B_pic").src="proI/Product_images/b/"+pic;
//	document.getElementById("Sp"+i).filters.Alpha.Opacity=100;
}

function changePic2(pic,i)
{
	document.getElementById("B_pic").src="Media/Product_images/b/"+pic;
//	document.getElementById("Sp"+i).filters.Alpha.Opacity=100;
}






