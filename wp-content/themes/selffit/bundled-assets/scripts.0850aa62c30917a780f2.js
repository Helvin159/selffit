!function(e){function t(t){for(var i,l,o=t[0],a=t[1],c=t[2],u=0,p=[];u<o.length;u++)l=o[u],Object.prototype.hasOwnProperty.call(r,l)&&r[l]&&p.push(r[l][0]),r[l]=0;for(i in a)Object.prototype.hasOwnProperty.call(a,i)&&(e[i]=a[i]);for(h&&h(t);p.length;)p.shift()();return n.push.apply(n,c||[]),s()}function s(){for(var e,t=0;t<n.length;t++){for(var s=n[t],i=!0,o=1;o<s.length;o++){var a=s[o];0!==r[a]&&(i=!1)}i&&(n.splice(t--,1),e=l(l.s=s[0]))}return e}var i={},r={0:0},n=[];function l(t){if(i[t])return i[t].exports;var s=i[t]={i:t,l:!1,exports:{}};return e[t].call(s.exports,s,s.exports,l),s.l=!0,s.exports}l.m=e,l.c=i,l.d=function(e,t,s){l.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:s})},l.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},l.t=function(e,t){if(1&t&&(e=l(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var s=Object.create(null);if(l.r(s),Object.defineProperty(s,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)l.d(s,i,function(t){return e[t]}.bind(null,i));return s},l.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return l.d(t,"a",t),t},l.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},l.p="/wp-content/themes/selffit/bundled-assets/";var o=window.webpackJsonp=window.webpackJsonp||[],a=o.push.bind(o);o.push=t,o=o.slice();for(var c=0;c<o.length;c++)t(o[c]);var h=a;n.push([2,1]),s()}([,function(e,t,s){},function(e,t,s){"use strict";s.r(t);s(1);var i=s(0),r=s.n(i);new class{constructor(){this.openButton=r()(".searchBtn"),this.closeButton=r()("#closeOverlay"),this.searchOverlay=r()("#searchOverlay"),this.searchBar=r()(".searchBar"),this.loadingDiv=r()("#loading"),this.resultsDiv=r()("#searchResults"),this.events(),this.isOverlayOpen=!1,this.isSpinnerVisible=!1,this.typingTimer,this.prevValue}events(){this.openButton.on("click",this.openOverlay.bind(this)),this.closeButton.on("click",this.closeOverlay.bind(this)),r()(document).on("keydown",this.keyCloser.bind(this)),this.searchBar.on("keyup",this.typingLogic.bind(this))}typingLogic(){this.searchBar.val()!=this.prevValue&&(clearTimeout(this.typingTimer),this.searchBar.val()?(this.isSpinnerVisible||(this.resultsDiv.html('<div class="loadingContainer"><div class="box"></div><div class="box"></div><div>'),this.isSpinnerVisible=!0),this.typingTimer=setTimeout(this.getResults.bind(this),2e3)):(this.resultsDiv.html(""),this.isSpinnerVisible=!1)),this.prevValue=this.searchBar.val()}getResults(){r.a.getJSON("http://self-fit.local/wp-json/wp/v2/product?search="+this.searchBar.val(),e=>{this.resultsDiv.html(`\n            <div class="container p-5">\n                <h1>Search Results</h1>\n            </div>\n            <div class="row">\n                <div class="col-md-12">\n                    <h3>Productos</h3><br>\n                    <div class="row">\n                        ${e.map(e=>`\n                        <div class="col-md-3 my-2 text-center">\n                            <h4 class="poiret"><span><a href="${e.link}">${e.title.rendered}</a></span></h4>\n                        </div>`)} \n                    </div>\n                </div>  \n                   \n            </div>\n            `)})}keyCloser(e){27!=e.keyCode||this.isOverlayOpen||r()("input, textarea").is(":focus")||this.closeOverlay()}openOverlay(){this.searchOverlay.addClass("overlayOn"),r()("html").addClass("noScroll"),this.isOverlayOpenc=!0}closeOverlay(){this.searchOverlay.removeClass("overlayOn"),r()("html").removeClass("noScroll"),this.isOverlayOpen=!1}}}]);