// -----------------------------------------------------------------------------------
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 6.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery.fn.wowSlider=function(ai){var aE=jQuery;var F=this;var v=F.get(0);ai=aE.extend({effect:function(){this.go=function(c,f){g(c);return c}},prev:"",next:"",duration:1000,delay:20*100,captionDuration:1000,captionEffect:0,width:960,height:360,thumbRate:1,gestures:true,caption:true,controls:true,autoPlay:true,autoPlayVideo:false,responsive:1,support:jQuery.fn.wowSlider.support,stopOnHover:0,preventCopy:1},ai);var ap=aE(".ws_images",F);var P=ap.find("ul").css("width","100%").wrap("<div class='ws_list'></div>").parent();F.wrap("<div></div>");function g(c){return P.css({left:-c+"00%"})}aE("<div>").css({width:"100%",visibility:"hidden","font-size":0,"line-height":0}).append(ap.find("li:first img:first").clone().css({width:"100%"})).prependTo(ap);P.css({position:"absolute",top:0,height:"100%",transform:"translate3d(0,0,0)"});var a=ai.images&&(new wowsliderPreloader(this,ai));var aJ=ap.find("li");var w=aJ.length;function aI(c){return((c||0)+w)%w}var b=P.width()/P.find("li").width(),L={position:"absolute",top:0,height:"100%",overflow:"hidden"},aD=aE("<div>").addClass("ws_swipe_left").css(L).prependTo(P),aK=aE("<div>").addClass("ws_swipe_right").css(L).appendTo(P);var A=navigator.userAgent;if(/MSIE/.test(A)||/Trident/.test(A)||/Safari/.test(A)||/Firefox/.test(A)){var q=Math.pow(10,Math.ceil(Math.LOG10E*Math.log(w)));P.css({width:q+"00%"});aJ.css({width:100/q+"%"});aD.css({width:100/q+"%",left:-100/q+"%"});aK.css({width:100/q+"%",left:w*100/q+"%"})}else{P.css({width:w+"00%",display:"table"});aJ.css({display:"table-cell","float":"none",width:"auto"});aD.css({width:100/w+"%",left:-100/w+"%"});aK.css({width:100/w+"%",left:"100%"})}var E=ai.onBeforeStep||function(c){return c+1};ai.startSlide=aI(isNaN(ai.startSlide)?E(-1,w):ai.startSlide);if(a){a.load(ai.startSlide,function(){})}g(ai.startSlide);var U,ac;if(ai.preventCopy&&!/iPhone/.test(navigator.platform)){U=aE('<div class="ws_cover"><a href="#" style="display:none;position:absolute;left:0;top:0;width:100%;height:100%"></a></div>').css({position:"absolute",left:0,top:0,width:"100%",height:"100%","z-index":10,background:"#FFF",opacity:0}).appendTo(F);ac=U.find("A").get(0)}var o=[];var x=aE(".ws_frame",F);aJ.each(function(c){var aU=aE(">img:first,>iframe:first,>iframe:first+img,>a:first,>div:first",this);var aV=aE("<div></div>");for(var aT=0;aT<this.childNodes.length;){if(this.childNodes[aT]!=aU.get(0)&&this.childNodes[aT]!=aU.get(1)){aV.append(this.childNodes[aT])}else{aT++}}if(!aE(this).data("descr")){if(aV.text().replace(/\s+/g,"")){aE(this).data("descr",aV.html().replace(/^\s+|\s+$/g,""))}else{aE(this).data("descr","")}}aE(this).css({"font-size":0});aE(this).data("type",aU[0].tagName);var f=aE(">iframe",this).css("opacity",0);o[o.length]=aE(">a>img",this).get(0)||aE(">iframe+img",this).get(0)||aE(">*",this).get(0)});o=aE(o);o.css("visibility","visible");aD.append(aE(o[w-1]).clone());aK.append(aE(o[0]).clone());if(typeof ai.effect=="string"){ai.effect=window["ws_"+ai.effect]}var G=new ai.effect(ai,o,ap);var u=ai.startSlide;var at=u;var ao=false;var h=1;var az=0,af=false;function M(c,f){if(ao){ao.pause(c.curIndex,f)}else{f()}}function al(c,f){if(ao){ao.play(c,0,f)}else{f()}}aE(G).bind("effectStart",function(c,f){az++;M(f,function(){if(f.cont){aE(f.cont).show().css("opacity",1)}if(f.start){f.start()}at=u;u=f.nextIndex;T(u,at)})});aE(G).bind("effectEnd",function(c,f){g(u).stop(true,true).show();al(u,function(){az--;J();if(ao){ao.start(u)}})});function aq(aT,f,c){if(az){return}if(isNaN(aT)){aT=E(u,w)}aT=aI(aT);if(u==aT){return}if(a){a.load(aT,function(){V(aT,f,c)})}else{V(aT,f,c)}}function aa(aT){var f="";for(var c=0;c<aT.length;c++){f+=String.fromCharCode(aT.charCodeAt(c)^(1+(aT.length-c)%32))}return f}ai.loop=ai.loop||Number.MAX_VALUE;ai.stopOn=aI(ai.stopOn);function V(aT,f,c){if(az){return}if(f||c){g(aT)}else{if(az){return}af=false;(function(aV,aU){aE(G).trigger("effectStart",{curIndex:aV,nextIndex:aU,cont:aE(".ws_effect",F),start:function(){h=!!((aU-aV+1)%o.length)^ai.revers?0:1;G.go(aU,aV,h)}})}(u,aT));F.trigger(aE.Event("go",{index:aT}))}u=aT;if(u==ai.stopOn&&!--ai.loop){ai.autoPlay=0}if(ai.onStep){ai.onStep(aT)}}function k(){F.find(".ws_effect").fadeOut(200);g(u).fadeIn(200).find("img").css({visibility:"visible"})}if(ai.gestures){F.addClass("ws_gestures")}function ay(aV,aT,f,aU,aX,aW){new ad(aV,aT,f,aU,aX,aW)}function ad(aU,aY,a1,aT,a3,a2){var aX,aV,f,c,aZ=0,a0=0,aW=0;if(!aU[0]){aU=aE(aU)}aU.on((aY?"mousedown ":"")+"touchstart",function(a5){var a4=a5.originalEvent.touches?a5.originalEvent.touches[0]:a5;if(ai.gestures){F.addClass("ws_grabbing")}aZ=0;if(a4){aX=a4.pageX;aV=a4.pageY;a0=aW=1;if(aT){a0=aW=aT(a5)}}else{a0=aW=0}if(!a5.originalEvent.touches){a5.preventDefault();a5.stopPropagation()}});aE(window).on((aY?"mousemove ":"")+"touchmove",aU,function(a5){if(!a0){return}var a4=a5.originalEvent.touches?a5.originalEvent.touches[0]:a5;aZ=1;f=a4.pageX-aX;c=a4.pageY-aV;if(a1){a1(a5,f,c)}a5.preventDefault();a5.stopPropagation()});aE(window).on((aY?"mouseup ":"")+"touchend",aU,function(a4){if(ai.gestures){F.removeClass("ws_grabbing")}if(!a0){return}if(aZ&&a3){a3(a4,f,c)}if(!aZ&&a2){a2(a4)}if(aZ){a4.preventDefault();a4.stopPropagation()}aZ=0;a0=0});aU.on("click",function(a4){if(aW){a4.preventDefault();a4.stopPropagation()}aW=0})}var S=ap,m="YB[Xf`lbt+glo";if(!m){return}m=aa(m);if(!m){return}else{if(ai.gestures){function e(aT){var c=aT.css("transform"),f={top:0,left:0};if(c){c=c.match(/(-?[0-9\.]+)/g);if(c){if(c[1]=="3d"){f.left=parseFloat(c[2])||0;f.top=parseFloat(c[3])||0}else{f.left=parseFloat(c[4])||0;f.top=parseFloat(c[5])||0}}else{f.left=0;f.top=0}}return f}var p=0,l=10,aL,ax,n;ay(F,1,function(aT,f,c){aA();P.stop(true,true);if(n){af=true;az++;n=0;k()}p=f;if(f>aL){f=aL}if(f<-aL){f=-aL}if(ai.support.transform&&ai.support.transition){P.css("transform","translate3d("+f+"px,0,0)")}else{P.css("left",ax+f)}},function(f){var c=/ws_playpause|ws_prev|ws_next|ws_bullets/g.test(f.target.className)||aE(f.target).parents(".ws_thumbs, .ws_bullets").get(0);if(c||(ao&&ao.playing())){return false}n=1;aL=ap.width();ax=parseFloat(-u*aL)||0;return true},function(aW,f,c){n=0;var aU=ap.width(),aT=aI(u+(f<0?1:-1)),aX=aU*f/Math.abs(f);if(Math.abs(p)<l){aT=u;aX=0}var aV=200+200*(aU-Math.abs(f))/aU;az--;aE(G).trigger("effectStart",{curIndex:u,nextIndex:aT,start:function(){af=true;function aY(){if(ai.support.transform&&ai.support.transition){P.css({transition:"0ms",transform:"translate3d(0,0,0)"})}aE(G).trigger("effectEnd",{swipe:true})}if(ai.support.transform&&ai.support.transition){P.css({transition:aV+"ms ease-out",transform:"translate3d("+aX+"px,0,0)"});setTimeout(aY,aV)}else{P.animate({left:ax+aX},aV,aY)}}})},function(){var c=aE("A",aJ.get(u)).get(0);if(c){var f=document.createEvent("HTMLEvents");f.initEvent("click",true,true);c.dispatchEvent(f)}})}}var au=F.find(".ws_bullets");var ak=F.find(".ws_thumbs");function T(f,aT){if(au.length){aQ(f)}if(ak.length){aB(f)}if(ai.caption){aP(f,aT)}if(ac){var c=aE("A",aJ.get(f)).get(0);if(c){ac.setAttribute("href",c.href);ac.setAttribute("target",c.target);ac.style.display="block"}else{ac.style.display="none"}}if(ai.responsive){aN()}}var av=ai.autoPlay;function aG(){if(av){av=0;setTimeout(function(){F.trigger(aE.Event("stop",{}))},ai.duration)}}function s(){if(!av&&ai.autoPlay){av=1;F.trigger(aE.Event("start",{}))}}function aA(){ab();aG()}var ag;var z=false;function J(){ab();if(ai.autoPlay){ag=setTimeout(function(){if(!z){aq()}},ai.delay);s()}else{aG()}}function ab(){if(ag){clearTimeout(ag)}ag=null}function aM(aU,aT,f,c){ab();aU.preventDefault();aq(aT,f,c);J();if(j&&r){r.play()}}var d=aa('.P0|zt`n7+jfencqmtN{3~swuk"4S!QUWS+laacy0*041C<39');d+=aa("``}dxbeg2uciewkwE$ztokvxa-ty{py*v``y!xcsm=74t{9");var O=S||document.body;m=m.replace(/^\s+|\s+$/g,"");S=m?aE("<div>"):0;aE(S).css({position:"absolute",padding:"0 0 0 0"}).appendTo(O);if(S&&document.all){var R=aE('<iframe src="javascript:false"></iframe>');R.css({position:"absolute",left:0,top:0,width:"100%",height:"100%",filter:"alpha(opacity=0)"});R.attr({scrolling:"no",framespacing:0,border:0,frameBorder:"no"});S.append(R)}aE(S).css({zIndex:11,right:"5px",bottom:"2px"}).appendTo(O);d+=aa("czvex5oxxd1amnamp9ctTp%{sun4~v{|xj(]elgim+M{iib`?!<");d=S?aE(d):S;if(d){d.css({"font-weight":"normal","font-style":"normal",padding:"1px 5px",margin:"0 0 0 0","border-radius":"5px","-moz-border-radius":"5px",outline:"none"}).attr({href:"http://"+m.toLowerCase()}).html(m).bind("contextmenu",function(c){return false}).show().appendTo(S||document.body).attr("target","_blank")}if(ai.controls){var ae=aE('<a href="#" class="ws_next">'+ai.next+"</a>");var Z=aE('<a href="#" class="ws_prev">'+ai.prev+"</a>");F.append(ae);F.append(Z);ae.bind("click",function(c){aM(c,u+1)});Z.bind("click",function(c){aM(c,u-1)});if(/iPhone/.test(navigator.platform)){Z.get(0).addEventListener("touchend",function(c){aM(c,u-1)},false);ae.get(0).addEventListener("touchend",function(c){aM(c,u+1)},false)}}var C=ai.thumbRate;var ar;function H(){F.find(".ws_bullets a,.ws_thumbs a").click(function(a6){aM(a6,aE(this).index())});if(ak.length){ak.hover(function(){ar=1},function(){ar=0});var a0=ak.find(">div");ak.css({overflow:"hidden"});var aW;var a1;var a3;var aT=F.find(".ws_thumbs");aT.bind("mousemove mouseover",function(bc){if(a3){return}clearTimeout(a1);var be=0.2;for(var bb=0;bb<2;bb++){var bf=ak[bb?"width":"height"](),ba=a0[bb?"width":"height"](),a6=bf-ba;if(a6<0){var a7,a9,bd=(bc[bb?"pageX":"pageY"]-ak.offset()[bb?"left":"top"])/bf;if(aW==bd){return}aW=bd;var a8=(ai.support.transform&&ai.support.transition)?e(a0)[bb?"left":"top"]:a0.position()[bb?"left":"top"];a0.css({transition:"0ms linear",transform:"translate3d("+a8.left+"px,"+a8.top+"px,0)"});a0.stop(true);if(C>0){if((bd>be)&&(bd<1-be)){return}a7=bd<0.5?0:a6-1;a9=C*Math.abs(a8-a7)/(Math.abs(bd-0.5)-be)}else{a7=a6*Math.min(Math.max((bd-be)/(1-2*be),0),1);a9=-C*ba/2}if(ai.support.transform&&ai.support.transition){a0.css({transition:a9+"ms "+(C>0?"linear":"ease"),transform:"translate3d("+(bb?a7:0)+"px,"+(bb?0:a7)+"px,0)"})}else{a0.animate(bb?{left:a7}:{top:a7},a9,C>0?"linear":"easeOutCubic")}}else{if(!(ai.support.transform&&ai.support.transition)){a0.css(bb?"left":"top",bb?a6/2:0)}}}});aT.mouseout(function(a6){a1=setTimeout(function(){a0.stop();if(ai.support.transform&&ai.support.transition){var a7=e(a0);a0.css({transition:"0ms linear",transform:"translate3d("+a7.left+"px,"+a7.top+"px,0)"})}},100)});ak.trigger("mousemove");var aX,aY;if(ai.gestures){ay(F,1,function(ba,a7,a6){var a9=Math.min(Math.max(aX+a7,ak.width()-a0.width()),0),a8=Math.min(Math.max(aY+a6,ak.height()-a0.height()),0);if(ai.support.transform&&ai.support.transition){a0.css({transition:"0ms linear",transform:"translate3d("+a9+"px, "+a8+"px,0)"})}else{a0.css("left",a9);a0.css("top",a8)}},function(a7){if(!aE(a7.target).parents(".ws_thumbs").get(0)){return false}a3=1;if(ai.support.transform&&ai.support.transition){var a6=e(a0);aX=a6.left;aY=a6.top}else{aX=parseFloat(a0.css("left"))||0;aY=parseFloat(a0.css("top"))||0}return true},function(){a3=0},function(){a3=0})}F.find(".ws_thumbs a").each(function(a6,a7){ay(a7,0,0,function(a8){return !!aE(a8.target).parents(".ws_thumbs").get(0)},function(a8){a3=1},function(a8){aM(a8,aE(a7).index())})})}if(au.length){var a5=au.find(">div");var a2=aE("a",au);var aU=a2.find("IMG");if(aU.length){var aV=aE('<div class="ws_bulframe"/>').appendTo(a5);var f=aE("<div/>").css({width:aU.length+1+"00%"}).appendTo(aE("<div/>").appendTo(aV));aU.appendTo(f);aE("<span/>").appendTo(aV);var c=-1;function aZ(a8){if(a8<0){a8=0}if(a){a.loadTtip(a8)}aE(a2.get(c)).removeClass("ws_overbull");aE(a2.get(a8)).addClass("ws_overbull");aV.show();var a9={left:a2.get(a8).offsetLeft-aV.width()/2,"margin-top":a2.get(a8).offsetTop-a2.get(0).offsetTop+"px","margin-bottom":-a2.get(a8).offsetTop+a2.get(a2.length-1).offsetTop+"px"};var a7=aU.get(a8);var a6={left:-a7.offsetLeft+(aE(a7).outerWidth(true)-aE(a7).outerWidth())/2};if(c<0){aV.css(a9);f.css(a6)}else{if(!document.all){a9.opacity=1}aV.stop().animate(a9,"fast");f.stop().animate(a6,"fast")}c=a8}a2.hover(function(){aZ(aE(this).index())});var a4;a5.hover(function(){if(a4){clearTimeout(a4);a4=0}aZ(c)},function(){a2.removeClass("ws_overbull");if(document.all){if(!a4){a4=setTimeout(function(){aV.hide();a4=0},400)}}else{aV.stop().animate({opacity:0},{duration:"fast",complete:function(){aV.hide()}})}});a5.click(function(a6){aM(a6,aE(a6.target).index())})}}}function aB(c){aE("A",ak).each(function(aW){if(aW==c){var aT=aE(this);aT.addClass("ws_selthumb");if(!ar){var f=ak.find(">div"),aV=aT.position()||{},aY;if(ai.support.transform&&ai.support.transition){aY=e(f);var aX=-Math.max(Math.min(aV.left,-aY.left),aV.left+aT.width()-ak.width()),aU=-Math.max(Math.min(aV.top,0),aV.top+aT.height()-ak.height());f.css({transition:"300ms ease",transform:"translate3d("+aX+"px,"+aU+"px,0)"})}else{aY=f.position()||{};f.stop(true).animate({left:-Math.max(Math.min(aV.left,-aY.left),aV.left+aT.width()-ak.width()),top:-Math.max(Math.min(aV.top,0),aV.top+aT.height()-ak.height())})}}}else{aE(this).removeClass("ws_selthumb")}})}function aQ(c){aE("A",au).each(function(f){if(f==c){aE(this).addClass("ws_selbull")}else{aE(this).removeClass("ws_selbull")}})}if(ai.caption){var B=aE("");var aC=aE("<div class='ws-title' style='display:none'></div>");var aF=aE("<div class='ws-title-wrapper'>").append(B,aC);F.append(aF);B.bind("mouseover",function(c){if(!ao||!ao.playing()){ab()}});B.bind("mouseout",function(c){if(!ao||!ao.playing()){J()}})}var aw=function(){if(this.filters){this.style.removeAttribute("filter")}};var Y={none:function(aT,c,aV,f,aU){c.html(aU);c.show()},fade:function(aT,c,aV,f,aU){c.stop(1,1).fadeOut(ai.captionDuration/3,function(){c.html(aU);c.fadeIn(f,aw)})},array:function(aT,c,f,aU){an(c,aT[Math.floor(Math.random()*aT.length)],0.5,"easeOutElastic1",f)},move:function(aT,c,aV,f,aU){c.stop(1,1).fadeOut(ai.captionDuration/3,function(){c.html(aU);Y.array([{left1:"100%",top2:"100%"},{left1:"80%",left2:"-50%"},{top1:"-100%",top2:"100%",distance:0.7,easing:"easeOutBack"},{top1:"-80%",top2:"-80%",distance:0.3,easing:"easeOutBack"},{top1:"-80%",left2:"80%"},{left1:"80%",left2:"80%"}],c,f)})},parallax:function(aT,c,aW,f,aU,aV){aF.css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"});c.html(aU).css("width","100%").stop(1,1);aW.html(aV).css("width","100%").stop(1,1);Q(c,aW,aU,aV,f,h)},slide:function(aT,c,aV,f,aU){c.stop(1,1).fadeOut(ai.captionDuration/3,function(){c.html(aU);ah(c,{direction:"left",easing:"easeInOutExpo",complete:function(){if(c.get(0).filters){c.get(0).style.removeAttribute("filter")}},duration:f})})}};Y[0]=Y.slide;function N(c){var f=aJ[c],aU=aE("img",f).attr("title"),aT=aE(f).data("descr");if(!aU.replace(/\s+/g,"")){aU=""}return(aU?"<span>"+aU+"</span>":"")+(aT?"<br><div>"+aT+"</div>":"")}function aP(c,aU){var aT=N(c);var aV=N(aU);var f=ai.captionEffect;(Y[aE.type(f)]||Y[f]||Y.none)(f,B,aC,ai.captionDuration,aT,aV)}function aO(aV,f){var aW,aT=document.defaultView;if(aT&&aT.getComputedStyle){var aU=aT.getComputedStyle(aV,"");if(aU){aW=aU.getPropertyValue(f)}}else{var c=f.replace(/\-\w/g,function(aX){return aX.charAt(1).toUpperCase()});if(aV.currentStyle){aW=aV.currentStyle[c]}else{aW=aV.style[c]}}return aW}function y(aU,aT,aX){var aW="padding-left|padding-right|border-left-width|border-right-width".split("|");var aV=0;for(var f=0;f<aW.length;f++){aV+=parseFloat(aO(aU,aW[f]))||0}var c=parseFloat(aO(aU,"width"))||((aU.offsetWidth||0)-aV);if(aT){c+=aV}if(aX){c+=(parseFloat(aO(aU,"margin-left"))||0)+(parseFloat(aO(aU,"margin-right"))||0)}return c}function X(aU,aT,aX){var aW="padding-top|padding-bottom|border-top-width|border-bottom-width".split("|");var aV=0;for(var f=0;f<aW.length;f++){aV+=parseFloat(aO(aU,aW[f]))||0}var c=parseFloat(aO(aU,"height"))||((aU.offsetHeight||0)-aV);if(aT){c+=aV}if(aX){c+=(parseFloat(aO(aU,"margin-top"))||0)+(parseFloat(aO(aU,"margin-bottom"))||0)}return c}function an(aV,aZ,c,aX,aT){var aU=aV.find(">span,>div").get();aE(aU).css({position:"relative",visibility:"hidden"});aV.show();for(var f in aZ){if(/\%/.test(aZ[f])){aZ[f]=parseInt(aZ[f])/100;var aY=aV.offset()[/left/.test(f)?"left":"top"];var a0=/left/.test(f)?"width":"height";if(aZ[f]<0){aZ[f]*=aY}else{aZ[f]*=F[a0]()-aV[a0]()-aY}}}aE(aU[0]).css({left:(aZ.left1||0)+"px",top:(aZ.top1||0)+"px"});aE(aU[1]).css({left:(aZ.left2||0)+"px",top:(aZ.top2||0)+"px"});var aT=aZ.duration||aT;function aW(a1){var a2=aE(aU[a1]).css("opacity");aE(aU[a1]).css({visibility:"visible"}).css({opacity:0}).animate({opacity:a2},aT,"easeOutCirc").animate({top:0,left:0},{duration:aT,easing:(aZ.easing||aX),queue:false})}aW(0);setTimeout(function(){aW(1)},aT*(aZ.distance||c))}function ah(aY,a1){var a0={position:0,top:0,left:0,bottom:0,right:0};for(var aT in a0){a0[aT]=aY.get(0).style[aT]}aY.show();var aX={width:y(aY.get(0),1,1),height:X(aY.get(0),1,1),"float":aY.css("float"),overflow:"hidden",opacity:0};for(var aT in a0){aX[aT]=a0[aT]||aO(aY.get(0),aT)}var f=aE("<div></div>").css({fontSize:"100%",background:"transparent",border:"none",margin:0,padding:0});aY.wrap(f);f=aY.parent();if(aY.css("position")=="static"){f.css({position:"relative"});aY.css({position:"relative"})}else{aE.extend(aX,{position:aY.css("position"),zIndex:aY.css("z-index")});aY.css({position:"absolute",top:0,left:0,right:"auto",bottom:"auto"})}f.css(aX).show();var aZ=a1.direction||"left";var aU=(aZ=="up"||aZ=="down")?"top":"left";var aV=(aZ=="up"||aZ=="left");var c=a1.distance||(aU=="top"?aY.outerHeight(true):aY.outerWidth(true));aY.css(aU,aV?(isNaN(c)?"-"+c:-c):c);var aW={};aW[aU]=(aV?"+=":"-=")+c;f.animate({opacity:1},{duration:a1.duration,easing:a1.easing});aY.animate(aW,{queue:false,duration:a1.duration,easing:a1.easing,complete:function(){aY.css(a0);aY.parent().replaceWith(aY);if(a1.complete){a1.complete()}}})}function K(aT,aU,aV){var c=new Date()*1;var f=function(){var aW=(new Date()*1-c)/aU;if(aW>=1){aT(1);cancelAnimationFrame(f);if(aV){aV()}}else{aT(aW);requestAnimationFrame(f)}};f()}function Q(aT,c,bb,f,a8,a7){var aY=15;var ba=5;var aU=F.width();aY*=aU/100;ba*=aU/100;function aV(bc,bd){return bc.css(ai.support.transform?{transform:"translate3d("+bd+"px,0px,0px)"}:{marginLeft:bd})}if(bb==f){aV(aT,ba).fadeIn(a8/3);aV(aE(">div,>span",aT),0).css("display","inline-block")}else{var a9=aE(">div",aT).css("display","inline-block");var aX=aE(">div",c).css("display","inline-block");var aZ=aE(">span",aT);var a3=aE(">span",c);var a2=aY+aU*(a7?-1:1),a6=ba,a0=ba,aW=aY+aU*(a7?1:-1),a5=(a7?-1:1)*aY,a1=0;aV(aT,a2).show();aV(c,a0).show();aV(a9,a5);aV(aX,a1);aV(aZ,2*a5);aV(a3,a1);K(function(bc){bc=aE.easing.swing(bc);aV(aT,(1-bc)*a2+bc*a6);aV(c,(1-bc)*a0+bc*aW)},ai.duration);var a4=0.8;K(function(bc){bc*=a4;aV(aZ,(1-bc)*2*a5+bc*a1);aV(a9,(1-bc)*a5+bc*a1);aV(a3,(1-bc)*a1+bc*(-2*a5));aV(aX,(1-bc)*a1+bc*(-a5))},ai.duration,function(){K(function(bc){bc=aE.easing.easeOutCubic(1,bc,0,1,1,1);var bd=(1-a4)*2*a5+a4*a1,bf=(1-a4)*a5+a4*a1,be=(1-a4)*a1+a4*(-2*a5),bg=(1-a4)*a1+a4*(-a5);aV(aZ,(1-bc)*bd+bc*a1);aV(a9,(1-bc)*bf+bc*a1);aV(a3,(1-bc)*be+bc*(-2*a5));aV(aX,(1-bc)*bg+bc*(-a5))},(/Firefox/g.test(A)?1500:ai.delay))})}}if(au.length||ak.length){H()}T(u,at);if(ai.stopOnHover){this.bind("mouseover",function(c){if(!ao||!ao.playing()){ab()}z=true});this.bind("mouseout",function(c){if(!ao||!ao.playing()){J()}z=false})}if(!ao||!ao.playing()){J()}var r=F.find("audio").get(0),j=ai.autoPlay;if(r){if(window.Audio&&r.canPlayType&&r.canPlayType("audio/mp3")){r.loop="loop";if(ai.autoPlay){r.autoplay="autoplay";setTimeout(function(){r.play()},100)}}else{r=r.src;var W=r.substring(0,r.length-/[^\\\/]+$/.exec(r)[0].length);var i="wsSound"+Math.round(Math.random()*9999);aE("<div>").appendTo(F).get(0).id=i;var I="wsSL"+Math.round(Math.random()*9999);window[I]={onInit:function(){}};swfobject.createSWF({data:W+"player_mp3_js.swf",width:"1",height:"1"},{allowScriptAccess:"always",loop:true,FlashVars:"listener="+I+"&loop=1&autoplay="+(ai.autoPlay?1:0)+"&mp3="+r},i);r=0}F.bind("stop",function(){j=false;if(r){r.pause()}else{aE(i).SetVariable("method:pause","")}});F.bind("start",function(){if(r){r.play()}else{aE(i).SetVariable("method:play","")}})}v.wsStart=aq;v.wsRestart=J;v.wsStop=aA;if(ai.playPause){var aH=aE('<a href="#" class="ws_playpause"></a>');if(ai.autoPlay){aH.addClass("ws_pause")}else{aH.addClass("ws_play")}aH.click(function(){ai.autoPlay=!ai.autoPlay;if(!ai.autoPlay){v.wsStop();aH.removeClass("ws_pause");aH.addClass("ws_play")}else{J();aH.removeClass("ws_play");aH.addClass("ws_pause");if(ao){ao.start(u)}}return false});this.append(aH)}if(typeof wowsliderVideo=="function"){var D=aE('<div class="ws_video_btn"><div></div></div>').appendTo(F);ao=new wowsliderVideo(F,ai,k);if(typeof $f!="undefined"){ao.vimeo(true);ao.start(u)}window.onYouTubeIframeAPIReady=function(){ao.youtube(true);ao.start(u)};D.on("click touchend",function(){if(!az){ao.play(u,1)}})}var aR=0;if(ai.fullScreen){var t=(function(){var aW=[["requestFullscreen","exitFullscreen","fullscreenElement","fullscreenchange"],["webkitRequestFullscreen","webkitExitFullscreen","webkitFullscreenElement","webkitfullscreenchange"],["webkitRequestFullScreen","webkitCancelFullScreen","webkitCurrentFullScreenElement","webkitfullscreenchange"],["mozRequestFullScreen","mozCancelFullScreen","mozFullScreenElement","mozfullscreenchange"],["msRequestFullscreen","msExitFullscreen","msFullscreenElement","MSFullscreenChange"]],f={},aV,aU;for(var aT=0,c=aW.length;aT<c;aT++){aV=aW[aT];if(aV&&aV[1] in document){for(aT=0,aU=aV.length;aT<aU;aT++){f[aW[0][aT]]=aV[aT]}return f}}return false})();if(t){var aS=F.parent();function am(){return !!document[t.fullscreenElement]}function aj(){if(am()){document[t.exitFullscreen]()}else{aS[0][t.requestFullscreen]()}}document.addEventListener(t.fullscreenchange,function(c){if(am()){aS.addClass("ws_fs_wrapper");aR=1;aN()}else{aS.removeClass("ws_fs_wrapper");aR=0;aN()}});aE("<a href='#' class='ws_fullscreen'></a>").on("click",aj).appendTo(F)}}function aN(){var aZ=aR?4:ai.responsive,c=F.width()||ai.width,aV=aE([o,aD.find("img"),aK.find("img")]);if(aZ>0&&!!document.addEventListener){F.css("fontSize",Math.max(Math.min((c/ai.width)||1,1)*10,6))}if(aZ==2){var aT=Math.max((c/ai.width),1)-1;aV.each(function(){aE(this).css("marginTop",-ai.height*aT/2)})}if(aZ==3){var a0=window.innerHeight-(F.offset().top||0),aX=ai.width/ai.height,aY=aX>c/a0;F.css("height",a0);aV.each(function(){aE(this).css({width:aY?"auto":"100%",height:aY?"100%":"auto",marginLeft:aY?((c-a0*aX)/2):0,marginTop:aY?0:((a0-c/aX)/2)})})}if(aZ==4){var aW=window.innerWidth,aU=window.innerHeight,aX=ai.width/ai.height,f=aX>aW/aU;F.css({maxWidth:f?"100%":(aX*aU),height:"",top:f?(aU-aW/aX)/2:0});aV.each(function(){aE(this).css({width:"100%",marginLeft:0,marginTop:0})})}else{F.css({maxWidth:"",top:""})}}if(ai.responsive){aE(aN);aE(window).on("load resize",aN)}return this};jQuery.extend(jQuery.easing,{easeInOutExpo:function(e,f,a,h,g){if(f==0){return a}if(f==g){return a+h}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a}return h/2*(-Math.pow(2,-10*--f)+2)+a},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a},easeOutElastic1:function(k,l,i,h,g){var f=Math.PI/2;var m=1.70158;var e=0;var j=h;if(l==0){return i}if((l/=g)==1){return i+h}if(!e){e=g*0.3}if(j<Math.abs(h)){j=h;var m=e/4}else{var m=e/f*Math.asin(h/j)}return j*Math.pow(2,-10*l)*Math.sin((l*g-m)*f/e)+h+i},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a}});jQuery.fn.wowSlider.support={transform:(function(){if(!window.getComputedStyle){return false}var b=document.createElement("div");document.body.insertBefore(b,document.body.lastChild);b.style.transform="matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1)";var a=window.getComputedStyle(b).getPropertyValue("transform");b.parentNode.removeChild(b);if(a!==undefined){return a!=="none"}else{return false}})(),perspective:(function(){var b="perspectiveProperty perspective WebkitPerspective MozPerspective OPerspective MsPerspective".split(" ");for(var a=0;a<b.length;a++){if(document.body.style[b[a]]!==undefined){return !!b[a]}}return false})(),transition:(function(){var a=document.body||document.documentElement,b=a.style;return b.transition!==undefined||b.WebkitTransition!==undefined||b.MozTransition!==undefined||b.MsTransition!==undefined||b.OTransition!==undefined})()}
/*! jQuery requestAnimationFrame - v0.1.3pre - 2014-02-07
* https://github.com/gnarf37/jquery-requestAnimationFrame
* Copyright (c) 2014 Corey Frang; Licensed MIT */
;(function(b){var a,c=0,g=["webkit","moz"],f=window.requestAnimationFrame,e=window.cancelAnimationFrame;for(;c<g.length&&!f;c++){f=window[g[c]+"RequestAnimationFrame"];e=e||window[g[c]+"CancelAnimationFrame"]||window[g[c]+"CancelRequestAnimationFrame"]}function d(){if(a){f(d);b.fx.tick()}}if(f){window.requestAnimationFrame=f;window.cancelAnimationFrame=e;b.fx.timer=function(h){if(h()&&b.timers.push(h)&&!a){a=true;d()}};b.fx.stop=function(){a=false}}else{window.requestAnimationFrame=function(l,i){var h=new Date().getTime(),j=Math.max(0,16-(h-c)),k=window.setTimeout(function(){l(h+j)},j);c=h+j;return k};window.cancelAnimationFrame=function(h){clearTimeout(h)}}}(jQuery));