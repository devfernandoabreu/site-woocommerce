!function(n,o,f){var a,c,i,l,r,p,e,s,u,t=n.locoConf,d=n.locoScope,h=d.po.ref.init(d,t),v=o.getElementById("loco-po");function g(){r.length&&(p.push([i,l]),c.push(r),r=[]),i=null}function m(t){return f('<ol class="msgcat"></ol>').attr("start",t).appendTo(a)}function x(t){e!==t&&(f("#loco-content")[t?"removeClass":"addClass"]("loco-invalid"),e=t)}a=v,c=d.fulltext.init(),r=[],p=[],s=!(e=!0),(u=f(a).find("li")).each(function(t,e){var n,o=f(e);o.find("span.po-none").length?g():(l=t,null==i&&(i=t),(n=o.find(".po-text").text())&&(r=r.concat(n.replace(/\\[ntvfab\\"]/g," ").split(" "))))}),g(),d.watchtext(f(a.parentNode).find("form.loco-filter")[0].q,function(t){t?function(t){var e,n,o,i=c.find(t),l=-1,r=i.length;if(f("ol",a).remove(),r){for(;++l<r;)for(o=m((e=(n=p[i[l]])[0])+1);e<=n[1];e++)o.append(u[e]);x(!0)}else x(!1),m(0).append(f("<li></li>").text(d.l10n._("Nothing matches the text filter")));s=!0,b()}(t):s&&(x(!0),s=!1,f("ol",a).remove(),m(1).append(u),b())}),f(v).removeClass("loco-loading");var C,y,b=(y=v.clientHeight-2,function(){var t=function(t,e){for(var n=t.offsetTop||0;(t=t.offsetParent)&&t!==e;)n+=t.offsetTop||0;return n}(v,o.body),e=n.innerHeight-t-20;C!==e&&(v.style.height=e<y?String(e)+"px":"",C=e)});b(),f(n).resize(b),f(v).click(function(t){var e=t.target;if(e.hasAttribute("href"))return t.preventDefault(),h.load(e.textContent),!1})}(window,document,jQuery);