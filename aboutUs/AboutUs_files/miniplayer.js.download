(function(g){var window=this;'use strict';var upb=function(a,b){g.U.call(this,{I:"button",Ma:["ytp-miniplayer-expand-watch-page-button","ytp-button","ytp-miniplayer-button-top-left"],W:{title:"{{title}}","data-tooltip-target-id":"ytp-miniplayer-expand-watch-page-button","aria-keyshortcuts":"i","data-title-no-tooltip":"{{data-title-no-tooltip}}"},V:[{I:"svg",W:{height:"24px",version:"1.1",viewBox:"0 0 24 24",width:"24px"},V:[{I:"g",W:{fill:"none","fill-rule":"evenodd",stroke:"none","stroke-width":"1"},V:[{I:"g",W:{transform:"translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "},
V:[{I:"path",W:{d:"M19,19 L5,19 L5,5 L12,5 L12,3 L5,3 C3.89,3 3,3.9 3,5 L3,19 C3,20.1 3.89,21 5,21 L19,21 C20.1,21 21,20.1 21,19 L21,12 L19,12 L19,19 Z M14,3 L14,5 L17.59,5 L7.76,14.83 L9.17,16.24 L19,6.41 L19,10 L21,10 L21,3 L14,3 Z",fill:"#fff","fill-rule":"nonzero"}}]}]}]}]});this.J=a;this.Sa("click",this.onClick,this);this.updateValue("title",g.MU(a,"Expand","i"));this.update({"data-title-no-tooltip":"Expand"});g.ub(this,g.GU(b.Dc(),this.element))},vpb=function(a){g.U.call(this,{I:"div",
S:"ytp-miniplayer-ui"});this.pg=!1;this.player=a;this.T(a,"minimized",this.Dh);this.T(a,"onStateChange",this.wR)},wpb=function(a){g.xV.call(this,a);
this.B=new g.TK(this);this.j=new vpb(this.player);this.j.hide();g.qU(this.player,this.j.element,4);a.rg()&&(this.load(),g.qu(a.getRootNode(),"ytp-player-minimized",!0))};
g.w(upb,g.U);upb.prototype.onClick=function(){this.J.Ra("onExpandMiniplayer")};g.w(vpb,g.U);g.k=vpb.prototype;
g.k.jO=function(){this.tooltip=new g.WX(this.player,this);g.L(this,this.tooltip);g.qU(this.player,this.tooltip.element,4);this.tooltip.scale=.6;this.hd=new g.dW(this.player);g.L(this,this.hd);this.vk=new g.U({I:"div",S:"ytp-miniplayer-scrim"});g.L(this,this.vk);this.vk.Ea(this.element);this.T(this.vk.element,"click",this.mJ);var a=new g.U({I:"button",Ma:["ytp-miniplayer-close-button","ytp-button"],W:{"aria-label":"Close"},V:[g.uG()]});g.L(this,a);a.Ea(this.vk.element);this.T(a.element,"click",this.Ip);
a=new upb(this.player,this);g.L(this,a);a.Ea(this.vk.element);this.qv=new g.U({I:"div",S:"ytp-miniplayer-controls"});g.L(this,this.qv);this.qv.Ea(this.vk.element);this.T(this.qv.element,"click",this.mJ);var b=new g.U({I:"div",S:"ytp-miniplayer-button-container"});g.L(this,b);b.Ea(this.qv.element);a=new g.U({I:"div",S:"ytp-miniplayer-play-button-container"});g.L(this,a);a.Ea(this.qv.element);var c=new g.U({I:"div",S:"ytp-miniplayer-button-container"});g.L(this,c);c.Ea(this.qv.element);this.aZ=new g.iX(this.player,
this,!1);g.L(this,this.aZ);this.aZ.Ea(b.element);b=new g.hX(this.player,this);g.L(this,b);b.Ea(a.element);this.nextButton=new g.iX(this.player,this,!0);g.L(this,this.nextButton);this.nextButton.Ea(c.element);this.Hj=new g.PX(this.player,this);g.L(this,this.Hj);this.Hj.Ea(this.vk.element);this.Sc=new g.nX(this.player,this);g.L(this,this.Sc);g.qU(this.player,this.Sc.element,4);this.TI=new g.U({I:"div",S:"ytp-miniplayer-buttons"});g.L(this,this.TI);g.qU(this.player,this.TI.element,4);a=new g.U({I:"button",
Ma:["ytp-miniplayer-close-button","ytp-button"],W:{"aria-label":"Close"},V:[g.uG()]});g.L(this,a);a.Ea(this.TI.element);this.T(a.element,"click",this.Ip);a=new g.U({I:"button",Ma:["ytp-miniplayer-replay-button","ytp-button"],W:{"aria-label":"Close"},V:[g.Zua()]});g.L(this,a);a.Ea(this.TI.element);this.T(a.element,"click",this.T8);this.T(this.player,"presentingplayerstatechange",this.Xd);this.T(this.player,"appresize",this.Lb);this.T(this.player,"fullscreentoggled",this.Lb);this.Lb()};
g.k.show=function(){this.yf=new g.cu(this.yw,null,this);this.yf.start();this.pg||(this.jO(),this.pg=!0);0!==this.player.getPlayerState()&&g.U.prototype.show.call(this);this.Sc.show();this.player.unloadModule("annotations_module")};
g.k.hide=function(){this.yf&&(this.yf.dispose(),this.yf=void 0);g.U.prototype.hide.call(this);this.player.rg()||(this.pg&&this.Sc.hide(),this.player.loadModule("annotations_module"))};
g.k.ya=function(){this.yf&&(this.yf.dispose(),this.yf=void 0);g.U.prototype.ya.call(this)};
g.k.Ip=function(){this.player.stopVideo();this.player.Ra("onCloseMiniplayer")};
g.k.T8=function(){this.player.playVideo()};
g.k.mJ=function(a){if(a.target===this.vk.element||a.target===this.qv.element)g.QL(this.player.Tb())?this.player.pauseVideo():this.player.playVideo()};
g.k.Dh=function(){g.qu(this.player.getRootNode(),"ytp-player-minimized",this.player.rg())};
g.k.Ye=function(){this.Sc.Hc();this.Hj.Hc()};
g.k.yw=function(){this.Ye();this.yf&&this.yf.start()};
g.k.Xd=function(a){g.VG(a.state,32)&&this.tooltip.hide()};
g.k.Lb=function(){g.zX(this.Sc,0,this.player.qb().getPlayerSize().width,!1);g.oX(this.Sc)};
g.k.wR=function(a){this.player.rg()&&(0===a?this.hide():this.show())};
g.k.Dc=function(){return this.tooltip};
g.k.Mg=function(){return!1};
g.k.wg=function(){return!1};
g.k.nm=function(){return!1};
g.k.iK=function(){};
g.k.rq=function(){};
g.k.bz=function(){};
g.k.pn=function(){return null};
g.k.BH=function(){return null};
g.k.AN=function(){return new g.we(0,0)};
g.k.Qk=function(){return new g.Ar(0,0,0,0)};
g.k.handleGlobalKeyDown=function(){return!1};
g.k.handleGlobalKeyUp=function(){return!1};
g.k.Kw=function(a,b,c,d,e){var f=0,h=d=0,l=g.Or(a);if(b){c=g.lu(b,"ytp-prev-button")||g.lu(b,"ytp-next-button");var m=g.lu(b,"ytp-play-button"),n=g.lu(b,"ytp-miniplayer-expand-watch-page-button");c?f=h=12:m?(b=g.Mr(b,this.element),h=b.x,f=b.y-12):n&&(h=g.lu(b,"ytp-miniplayer-button-top-left"),f=g.Mr(b,this.element),b=g.Or(b),h?(h=8,f=f.y+40):(h=f.x-l.width+b.width,f=f.y-20))}else h=c-l.width/2,d=25+(e||0);b=this.player.qb().getPlayerSize().width;e=f+(e||0);l=g.me(h,0,b-l.width);e?(a.style.top=e+"px",
a.style.bottom=""):(a.style.top="",a.style.bottom=d+"px");a.style.left=l+"px"};
g.k.showControls=function(){};
g.k.Xp=function(){};
g.k.fm=function(){return!1};
g.k.vF=function(){};
g.k.bB=function(){};
g.k.Fr=function(){};
g.k.Er=function(){};
g.k.Ou=function(){};
g.k.Ms=function(){};
g.k.cF=function(){};g.w(wpb,g.xV);g.k=wpb.prototype;g.k.onVideoDataChange=function(){if(this.player.getVideoData()){var a=this.player.getVideoAspectRatio(),b=16/9;a=a>b+.1||a<b-.1;g.qu(this.player.getRootNode(),"ytp-rounded-miniplayer-not-regular-wide-video",a)}};
g.k.create=function(){g.xV.prototype.create.call(this);this.B.T(this.player,"videodatachange",this.onVideoDataChange);this.onVideoDataChange()};
g.k.wl=function(){return!1};
g.k.load=function(){this.player.hideControls();this.j.show()};
g.k.unload=function(){this.player.showControls();this.j.hide()};g.wV("miniplayer",wpb);})(_yt_player);
