var TouchSlide=function(aV){aV=aV||{};var aU={slideCell:aV.slideCell||"#touchSlide",titCell:aV.titCell||".hd li",mainCell:aV.mainCell||".bd",effect:aV.effect||"left",autoPlay:aV.autoPlay||!1,delayTime:aV.delayTime||2000,interTime:aV.interTime||3000,defaultIndex:aV.defaultIndex||0,titOnClassName:aV.titOnClassName||"on",autoPage:aV.autoPage||!1,prevCell:aV.prevCell||".prev",nextCell:aV.nextCell||".next",pageStateCell:aV.pageStateCell||".pageState",pnLoop:"undefined "==aV.pnLoop?!0:aV.pnLoop,startFun:aV.startFun||null,endFun:aV.endFun||null,switchLoad:aV.switchLoad||null},aT=document.getElementById(aU.slideCell.replace("#",""));if(!aT){return !1}var aS=function(t,s){t=t.split(" ");var r=[];s=s||document;var q=[s];for(var p in t){0!=t[p].length&&r.push(t[p])}for(var p in r){if(0==q.length){return !1}var o=[];for(var n in q){if("#"==r[p][0]){o.push(document.getElementById(r[p].replace("#","")))}else{if("."==r[p][0]){for(var m=q[n].getElementsByTagName("*"),l=0;l<m.length;l++){var k=m[l].className;k&&-1!=k.search(new RegExp("\\b"+r[p].replace(".","")+"\\b"))&&o.push(m[l])}}else{for(var m=q[n].getElementsByTagName(r[p]),l=0;l<m.length;l++){o.push(m[l])}}}}q=o}return 0==q.length||q[0]==s?!1:q},aR=function(g,e){var i=document.createElement("div");i.innerHTML=e,i=i.children[0];var h=g.cloneNode(!0);return i.appendChild(h),g.parentNode.replaceChild(i,g),aK=h,i},aQ=function(d,c){!d||!c||d.className&&-1!=d.className.search(new RegExp("\\b"+c+"\\b"))||(d.className+=(d.className?" ":"")+c)},aP=function(d,c){!d||!c||d.className&&-1==d.className.search(new RegExp("\\b"+c+"\\b"))||(d.className=d.className.replace(new RegExp("\\s*\\b"+c+"\\b","g"),""))},aO=aU.effect,aN=aS(aU.prevCell,aT)[0],aM=aS(aU.nextCell,aT)[0],aL=aS(aU.pageStateCell)[0],aK=aS(aU.mainCell,aT)[0];if(!aK){return !1}var aj,ai,aJ=aK.children.length,aI=aS(aU.titCell,aT),aH=aI?aI.length:aJ,aG=aU.switchLoad,aF=parseInt(aU.defaultIndex),aE=parseInt(aU.delayTime),aD=parseInt(aU.interTime),aC="false"==aU.autoPlay||0==aU.autoPlay?!1:!0,aB="false"==aU.autoPage||0==aU.autoPage?!1:!0,aA="false"==aU.pnLoop||0==aU.pnLoop?!1:!0,az=aF,ay=null,ax=null,av=null,au=0,at=0,ar=0,aq=0,ap=/hp-tablet/gi.test(navigator.appVersion),ao="ontouchstart" in window&&!ap,an=ao?"touchstart":"mousedown",am=ao?"touchmove":"",al=ao?"touchend":"mouseup",ak=aK.parentNode.clientWidth,ah=aJ;if(0==aH&&(aH=aJ),aB){aH=aJ,aI=aI[0],aI.innerHTML="";var ag="";if(1==aU.autoPage||"true"==aU.autoPage){for(var af=0;aH>af;af++){ag+="<li>"+(af+1)+"</li>"}}else{for(var af=0;aH>af;af++){ag+=aU.autoPage.replace("$",af+1)}}aI.innerHTML=ag,aI=aI.children}"leftLoop"==aO&&(ah+=2,aK.appendChild(aK.children[0].cloneNode(!0)),aK.insertBefore(aK.children[aJ-1].cloneNode(!0),aK.children[0])),aj=aR(aK,'<div class="tempWrap" style="overflow:hidden; position:relative;"></div>'),aK.style.cssText="width:"+ah*ak+"px;position:relative;overflow:hidden;padding:0;margin:0;";for(var af=0;ah>af;af++){aK.children[af].style.cssText="display:table-cell;vertical-align:top;width:"+ak+"px"}var ae=function(){"function"==typeof aU.startFun&&aU.startFun(aF,aH)},ad=function(){"function"==typeof aU.endFun&&aU.endFun(aF,aH)},ac=function(e){var d=("leftLoop"==aO?aF+1:aF)+e,g=function(i){for(var h=aK.children[i].getElementsByTagName("img"),j=0;j<h.length;j++){h[j].getAttribute(aG)&&(h[j].setAttribute("src",h[j].getAttribute(aG)),h[j].removeAttribute(aG))}};if(g(d),"leftLoop"==aO){switch(d){case 0:g(aJ);break;case 1:g(aJ+1);break;case aJ:g(0);break;case aJ+1:g(1)}}},ab=function(){ak=aj.clientWidth,aK.style.width=ah*ak+"px";for(var d=0;ah>d;d++){aK.children[d].style.width=ak+"px"}var c="leftLoop"==aO?aF+1:aF;aa(-c*ak,0)};window.addEventListener("resize",ab,!1);var aa=function(e,d,g){g=g?g.style:aK.style,g.webkitTransitionDuration=g.MozTransitionDuration=g.msTransitionDuration=g.OTransitionDuration=g.transitionDuration=d+"ms",g.webkitTransform="translate("+e+"px,0)translateZ(0)",g.msTransform=g.MozTransform=g.OTransform="translateX("+e+"px)"},L=function(b){switch(aO){case"left":aF>=aH?aF=b?aF-1:0:0>aF&&(aF=b?0:aH-1),null!=aG&&ac(0),aa(-aF*ak,aE),az=aF;break;case"leftLoop":null!=aG&&ac(0),aa(-(aF+1)*ak,aE),-1==aF?(ax=setTimeout(function(){aa(-aH*ak,0)},aE),aF=aH-1):aF==aH&&(ax=setTimeout(function(){aa(-ak,0)},aE),aF=0),az=aF}ae(),av=setTimeout(function(){ad()},aE);for(var d=0;aH>d;d++){aP(aI[d],aU.titOnClassName),d==aF&&aQ(aI[d],aU.titOnClassName)}0==aA&&(aP(aM,"nextStop"),aP(aN,"prevStop"),0==aF?aQ(aN,"prevStop"):aF==aH-1&&aQ(aM,"nextStop")),aL&&(aL.innerHTML="<span>"+(aF+1)+"</span>/"+aH)};if(L(),aC&&(ay=setInterval(function(){aF++,L()},aD)),aI){for(var af=0;aH>af;af++){!function(){var b=af;aI[b].addEventListener("click",function(){clearTimeout(ax),clearTimeout(av),aF=b,L()})}()}}aM&&aM.addEventListener("click",function(){(1==aA||aF!=aH-1)&&(clearTimeout(ax),clearTimeout(av),aF++,L())}),aN&&aN.addEventListener("click",function(){(1==aA||0!=aF)&&(clearTimeout(ax),clearTimeout(av),aF--,L())});var F=function(d){clearTimeout(ax),clearTimeout(av),ai=void 0,ar=0;var c=ao?d.touches[0]:d;au=c.pageX,at=c.pageY,aK.addEventListener(am,f,!1),aK.addEventListener(al,aw,!1)},f=function(d){if(!ao||!(d.touches.length>1||d.scale&&1!==d.scale)){var c=ao?d.touches[0]:d;if(ar=c.pageX-au,aq=c.pageY-at,"undefined"==typeof ai&&(ai=!!(ai||Math.abs(ar)<Math.abs(aq))),!ai){switch(d.preventDefault(),aC&&clearInterval(ay),aO){case"left":(0==aF&&ar>0||aF>=aH-1&&0>ar)&&(ar=0.4*ar),aa(-aF*ak+ar,0);break;case"leftLoop":aa(-(aF+1)*ak+ar,0)}null!=aG&&Math.abs(ar)>ak/3&&ac(ar>-0?-1:1)}}},aw=function(b){0!=ar&&(b.preventDefault(),ai||(Math.abs(ar)>ak/10&&(ar>0?aF--:aF++),L(!0),aC&&(ay=setInterval(function(){aF++,L()},aD))),aK.removeEventListener(am,f,!1),aK.removeEventListener(al,aw,!1))};aK.addEventListener(an,F,!1)};

var TouchSlide1=function(aV){aV=aV||{};var aU={slideCell:aV.slideCell||"#touchSlide",titCell:aV.titCell||".hd li",mainCell:aV.mainCell||".bd",effect:aV.effect||"left",autoPlay:aV.autoPlay||!1,delayTime:aV.delayTime||2000,interTime:aV.interTime||3000,defaultIndex:aV.defaultIndex||0,titOnClassName:aV.titOnClassName||"on",autoPage:aV.autoPage||!1,prevCell:aV.prevCell||".prev",nextCell:aV.nextCell||".next",pageStateCell:aV.pageStateCell||".pageState",pnLoop:"undefined "==aV.pnLoop?!0:aV.pnLoop,startFun:aV.startFun||null,endFun:aV.endFun||null,switchLoad:aV.switchLoad||null},aT=document.getElementById(aU.slideCell.replace("#",""));if(!aT){return !1}var aS=function(t,s){t=t.split(" ");var r=[];s=s||document;var q=[s];for(var p in t){0!=t[p].length&&r.push(t[p])}for(var p in r){if(0==q.length){return !1}var o=[];for(var n in q){if("#"==r[p][0]){o.push(document.getElementById(r[p].replace("#","")))}else{if("."==r[p][0]){for(var m=q[n].getElementsByTagName("*"),l=0;l<m.length;l++){var k=m[l].className;k&&-1!=k.search(new RegExp("\\b"+r[p].replace(".","")+"\\b"))&&o.push(m[l])}}else{for(var m=q[n].getElementsByTagName(r[p]),l=0;l<m.length;l++){o.push(m[l])}}}}q=o}return 0==q.length||q[0]==s?!1:q},aR=function(g,e){var i=document.createElement("div");i.innerHTML=e,i=i.children[0];var h=g.cloneNode(!0);return i.appendChild(h),g.parentNode.replaceChild(i,g),aK=h,i},aQ=function(d,c){!d||!c||d.className&&-1!=d.className.search(new RegExp("\\b"+c+"\\b"))||(d.className+=(d.className?" ":"")+c)},aP=function(d,c){!d||!c||d.className&&-1==d.className.search(new RegExp("\\b"+c+"\\b"))||(d.className=d.className.replace(new RegExp("\\s*\\b"+c+"\\b","g"),""))},aO=aU.effect,aN=aS(aU.prevCell,aT)[0],aM=aS(aU.nextCell,aT)[0],aL=aS(aU.pageStateCell)[0],aK=aS(aU.mainCell,aT)[0];if(!aK){return !1}var aj,ai,aJ=aK.children.length,aI=aS(aU.titCell,aT),aH=aI?aI.length:aJ,aG=aU.switchLoad,aF=parseInt(aU.defaultIndex),aE=parseInt(aU.delayTime),aD=parseInt(aU.interTime),aC="false"==aU.autoPlay||0==aU.autoPlay?!1:!0,aB="false"==aU.autoPage||0==aU.autoPage?!1:!0,aA="false"==aU.pnLoop||0==aU.pnLoop?!1:!0,az=aF,ay=null,ax=null,av=null,au=0,at=0,ar=0,aq=0,ap=/hp-tablet/gi.test(navigator.appVersion),ao="ontouchstart" in window&&!ap,an=ao?"touchstart":"mousedown",am=ao?"touchmove":"",al=ao?"touchend":"mouseup",ak=aK.parentNode.clientWidth,ah=aJ;if(0==aH&&(aH=aJ),aB){aH=aJ,aI=aI[0],aI.innerHTML="";var ag="";if(1==aU.autoPage||"true"==aU.autoPage){for(var af=0;aH>af;af++){ag+="<li>"+(af+1)+"</li>"}}else{for(var af=0;aH>af;af++){ag+=aU.autoPage.replace("$",af+1)}}aI.innerHTML=ag,aI=aI.children}"leftLoop"==aO&&(ah+=2,aK.appendChild(aK.children[0].cloneNode(!0)),aK.insertBefore(aK.children[aJ-1].cloneNode(!0),aK.children[0])),aj=aR(aK,'<div class="tempWrap" style="overflow:hidden; position:relative;"></div>'),aK.style.cssText="width:"+ah*ak+"px;position:relative;overflow:hidden;padding:0;margin:0;";for(var af=0;ah>af;af++){aK.children[af].style.cssText="display:table-cell;vertical-align:top;width:"+ak+"px"}var ae=function(){"function"==typeof aU.startFun&&aU.startFun(aF,aH)},ad=function(){"function"==typeof aU.endFun&&aU.endFun(aF,aH)},ac=function(e){var d=("leftLoop"==aO?aF+1:aF)+e,g=function(i){for(var h=aK.children[i].getElementsByTagName("img"),j=0;j<h.length;j++){h[j].getAttribute(aG)&&(h[j].setAttribute("src",h[j].getAttribute(aG)),h[j].removeAttribute(aG))}};if(g(d),"leftLoop"==aO){switch(d){case 0:g(aJ);break;case 1:g(aJ+1);break;case aJ:g(0);break;case aJ+1:g(1)}}},ab=function(){ak=aj.clientWidth,aK.style.width=ah*ak+"px";for(var d=0;ah>d;d++){aK.children[d].style.width=ak+"px"}var c="leftLoop"==aO?aF+1:aF;aa(-c*ak,0)};window.addEventListener("resize",ab,!1);var aa=function(e,d,g){g=g?g.style:aK.style,g.webkitTransitionDuration=g.MozTransitionDuration=g.msTransitionDuration=g.OTransitionDuration=g.transitionDuration=d+"ms",g.webkitTransform="translate("+e+"px,0)translateZ(0)",g.msTransform=g.MozTransform=g.OTransform="translateX("+e+"px)"},L=function(b){switch(aO){case"left":aF>=aH?aF=b?aF-1:0:0>aF&&(aF=b?0:aH-1),null!=aG&&ac(0),aa(-aF*ak,aE),az=aF;break;case"leftLoop":null!=aG&&ac(0),aa(-(aF+1)*ak,aE),-1==aF?(ax=setTimeout(function(){aa(-aH*ak,0)},aE),aF=aH-1):aF==aH&&(ax=setTimeout(function(){aa(-ak,0)},aE),aF=0),az=aF}ae(),av=setTimeout(function(){ad()},aE);for(var d=0;aH>d;d++){aP(aI[d],aU.titOnClassName),d==aF&&aQ(aI[d],aU.titOnClassName)}0==aA&&(aP(aM,"nextStop"),aP(aN,"prevStop"),0==aF?aQ(aN,"prevStop"):aF==aH-1&&aQ(aM,"nextStop")),aL&&(aL.innerHTML="<span>"+(aF+1)+"</span>/"+aH)};if(L(),aC&&(ay=setInterval(function(){aF++,L()},aD)),aI){for(var af=0;aH>af;af++){!function(){var b=af;aI[b].addEventListener("click",function(){clearTimeout(ax),clearTimeout(av),aF=b,L()})}()}}aM&&aM.addEventListener("click",function(){(1==aA||aF!=aH-1)&&(clearTimeout(ax),clearTimeout(av),aF++,L())}),aN&&aN.addEventListener("click",function(){(1==aA||0!=aF)&&(clearTimeout(ax),clearTimeout(av),aF--,L())});var F=function(d){clearTimeout(ax),clearTimeout(av),ai=void 0,ar=0;var c=ao?d.touches[0]:d;au=c.pageX,at=c.pageY,aK.addEventListener(am,f,!1),aK.addEventListener(al,aw,!1)},f=function(d){if(!ao||!(d.touches.length>1||d.scale&&1!==d.scale)){var c=ao?d.touches[0]:d;if(ar=c.pageX-au,aq=c.pageY-at,"undefined"==typeof ai&&(ai=!!(ai||Math.abs(ar)<Math.abs(aq))),!ai){switch(d.preventDefault(),aC&&clearInterval(ay),aO){case"left":(0==aF&&ar>0||aF>=aH-1&&0>ar)&&(ar=0.4*ar),aa(-aF*ak+ar,0);break;case"leftLoop":aa(-(aF+1)*ak+ar,0)}null!=aG&&Math.abs(ar)>ak/3&&ac(ar>-0?-1:1)}}},aw=function(b){0!=ar&&(b.preventDefault(),ai||(Math.abs(ar)>ak/10&&(ar>0?aF--:aF++),L(!0),aC&&(ay=setInterval(function(){aF++,L()},aD))),aK.removeEventListener(am,f,!1),aK.removeEventListener(al,aw,!1))};aK.addEventListener(an,F,!1)};