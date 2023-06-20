$(document).ready((function(){}));let loadInfosInitied=!1;function loadLeftInfosIsInitied(){return loadInfosInitied}function loadLeftInfosCoin(e,r,o="CCCAGG"){return"NOT_INIT"!=e.toUpperCase()&&"NOT_INIT"!=r.toUpperCase()&&(clearTimeout(TimeoutOrderListGraph),TimeoutOrderListGraph=null,updateOrderGraphList(e,r,o),$("header[leftinfoisp]").attr("leftinfoisp")!=o+":"+e+r&&(orderBookData={bids:{},asks:{}},$.each($(".infoscurrencylf-orderbook").find("> div"),(function(){$(this).html("")})),$(".dash-orderlistpassed-lst").html(""),loadInfosInitied=!0,void $.post($("body").attr("hrefapp")+"/app/modules/dashboard/src/actions/loadLeftInfosCoin.php",{symbol:e,currency:r,market:o}).done((function(t){$(".infoscurrencylf").html(t),addSubscribtion(e,r,2,o),subscribeStreamerCallback((function(t){if($("[leftinfoisp]").attr("leftinfoisp")!=t.MARKET.toUpperCase()+":"+t.FROMSYMBOL+t.TOSYMBOL)return!1;if(t.FROMSYMBOL==e&&r==t.TOSYMBOL&&o.toLowerCase()==t.MARKET.toLowerCase()){_highlightNumber(KRformatNumber(t.PRICE,t.PRICE>1?2:5),$("span.infoscurrencylf-price-cp"));var s=t.CHANGE24HOUR.match(/(.)[\d\.]+/g);null!=s&&$(".infoscurrencylf-price-evolv").html(KRformatNumber(s,s>1?2:5).toString().replace(" ","")+" ("+KRformatNumber(t.CHANGE24HOURPCT,2)+"%)"),$(".infoscurrencylf-range-infos-low").html(KRformatNumber(t.LOW24HOUR,t.LOW24HOUR>1?2:5)),$(".infoscurrencylf-range-infos-high").html(KRformatNumber(t.HIGH24HOUR,t.HIGH24HOUR>1?2:5));let e=0;if(t.HIGH24HOUR>t.LOW24HOUR){let r=t.HIGH24HOUR-t.LOW24HOUR;e=100-Math.abs((t.PRICE-t.LOW24HOUR-r)/r*100)}$(".infoscurrencylf-range-bar > div").css("width",e+"%")}}),2),$(".wtchl").hasClass("wtchl-lowd")&&loadLeftInfosMoreDetails()})).fail((function(){showAlert("Oops","Fail to load left infos coin","error")}))))}function loadLeftInfosMoreDetails(){$(".detailsside-lc").addClass("wtchl-lowd"),$(".infoscurrencylf").addClass("infoscurrencylf-moredetails"),startLeftInfosOrderBookSync($("[leftinfois-makr]").attr("leftinfois-makr"),$("[leftinfois-makr]").attr("leftinfois-symbol"),$("[leftinfois-makr]").attr("leftinfois-currency"))}function hideLeftInfosMoreDetails(){$(".detailsside-lc").removeClass("wtchl-lowd"),$(".infoscurrencylf").removeClass("infoscurrencylf-moredetails"),stopLeftInfosOrderBookSync(),$(".infoscurrencylf-orderbook").find("section").html(""),$(".dash-orderlistpassed-lst").html("")}function startLeftInfosOrderBookSync(e="binance",r="ETH",o="BTC"){stopLeftInfosOrderBookSync(),updateLeftInfosOrderBook(e,r,o)}function stopLeftInfosOrderBookSync(){clearTimeout(orderBookLeftInfosTO),orderBookLeftInfosTO=null}function updateOrderGraphList(e,r,o){loadOrderGraphList(e,r,o)}function updateLeftInfosOrderBook(e="binance",r="ETH",o="BTC"){stopLeftInfosOrderBookSync(),$(".detailsside-lc").hasClass("wtchl-lowd")||"true"==$(".infoscurrencylf-orderbook-coin").attr("ob-force")?$.get($("body").attr("hrefapp")+"/app/modules/dashboard/src/actions/getOrderBook.php",{market:e,symbol:r,currency:o}).done((function(t){let s=jQuery.parseJSON(t);_changeLeftInfosOrderBook("bids",s.bids),_changeLeftInfosOrderBook("asks",s.asks),"binance"==e.toLowerCase()?_startBinanceSocketOrderBook(r,o):orderBookLeftInfosTO=setTimeout((function(){updateLeftInfosOrderBook(e,r,o)}),2500)})).fail((function(){showAlert("Oops","Fail to load order book list (404, 505)","error")})):stopLeftInfosOrderBookSync()}function sortOnKeys(e){var r=[];for(var o in e)r[r.length]=o;r.sort();for(var t={},s=0;s<r.length;s++)t[r[s]]=e[r[s]];return t}orderBookLeftInfosTO=null;let orderBookData={bids:{},asks:{}};function _changeLeftInfosOrderBook(e="bids",r=null,o=!0){let t=$('section[orderbook-side="'+e+'"]');$(".infoscurrencylf-orderbook-coin").length>0&&(t=$('.infoscurrencylf-orderbook-coin section[orderbook-side="'+e+'"]'));$.each(r,(function(r,o){0==parseFloat(o[1]).toFixed(6)?(t.find('div[orderbook-side-p="'+parseFloat(o[0]).toFixed(6)+'"]').remove(),delete orderBookData[e][parseFloat(o[0]).toFixed(6)]):orderBookData[e][parseFloat(o[0]).toFixed(6)]=parseFloat(o[1]).toFixed(6)}));let s={};$.each(Object.keys(orderBookData[e]).sort(),(function(r,o){s[o]=orderBookData[e][o]})),orderBookData[e]=s;let i=0;$.each(orderBookData[e],(function(e,r){i+=parseFloat(r)})),oldKey=null;let d=0;return $.each(orderBookData[e],(function(e,r){if(d+=parseFloat(r),t.find('div[orderbook-side-p="'+e+'"]').length>0)t.find('div[orderbook-side-p="'+e+'"]').find("li[orderbook-i='amount']").html(parseFloat(r).toFixed(6)),t.find('div[orderbook-side-p="'+e+'"]').find("li[orderbook-i='sum']").html(KRformatNumber(d,3)),t.find('div[orderbook-side-p="'+e+'"]').find("div").css("width",d/i*100/1.5+"%");else{let o=$("<div orderbook-side-p='"+e+"' orderbook-side-ps='"+r+"'><ul><li orderbook-i='amount'>"+r+"</li><li orderbook-i='sum'>"+KRformatNumber(d,3)+"</li><li>"+KRformatNumber(e,6)+"</li></ul><div style='width:"+d/i*100/1.5+"%;'></div></div>");$('[name="price_limit"]').length>0&&o.off("click").click((function(){$('[name="price_limit"]').val(e),reloadTotalAmount()})),0==t.find("div").length||null==oldKey?t.append(o):oldKey>r?t.find('div[orderbook-side-p="'+oldKey+'"]').before(o):t.find('div[orderbook-side-p="'+oldKey+'"]').after(o)}oldKey=e})),!1}let TimeoutOrderListGraph=null;function loadOrderGraphList(e,r,o=null){clearTimeout(TimeoutOrderListGraph),TimeoutOrderListGraph=null,$.each($(".dash-orderlistpassed-lst").find("> li"),(function(){$(this).attr("orderlist-pair")!=e+""+r&&$(this).remove()})),$.get($("body").attr("hrefapp")+"/app/modules/trade/src/actions/getOrderList.php",{symbol:e,currency:r,market:o}).done((function(t){let s=jQuery.parseJSON(t);1==s.error?showAlert("Oops",s.msg,"error"):(s.native=1==s.native,applyOrderGraphList(s.orders,s.show_market),TimeoutOrderListGraph=setTimeout((function(){updateOrderGraphList(e,r,o)}),2500),$(".dash-orderlistpassed-pairname").html(" - "+(s.show_market?"":s.market+" - ")+s.pair))})).fail((function(){showAlert("Oops","Fail to load order list graph","error")}))}function applyOrderGraphList(e,r=!1){$.each(e,(function(e,o){if(0==$("header[leftinfoisp]").length)return!1;if(-1==$("header[leftinfoisp]").attr("leftinfoisp").indexOf(":"+o.symbol+o.currency))return!1;if($('[orderlist-i="'+o.id+'"]').length>0)return!0;let t=new Date(1e3*o.date),s=o.currency,i=KRformatNumber(o.amount,8)+" "+o.symbol,d=KRformatNumber(o.usd_amount,8)+" "+o.currency;"BUY"==o.side&&(i=KRformatNumber(o.amount,8)+" "+o.currency,d=KRformatNumber(o.usd_amount,8)+" "+o.symbol,s=o.symbol);let a=$("<li orderlist-i='"+o.id+"' orderlist-pair='"+o.symbol+o.currency+"'> <div>"+(t.getDate()<10?"0"+t.getDate():t.getDate())+"/"+(t.getMonth()+1<10?"0"+(t.getMonth()+1):t.getMonth()+1)+"/"+t.getFullYear()+" "+(t.getHours()<10?"0"+t.getHours():t.getHours())+":"+(t.getMinutes()<10?"0"+t.getMinutes():t.getMinutes())+":"+(t.getSeconds()<10?"0"+t.getSeconds():t.getSeconds())+"</div> <div>"+o.symbol+"/"+o.currency+"</div><div>"+o.type.toUpperCase()+"</div>"+(r?"":"<div>"+o.exchange+"</div>")+" <div class='"+("BUY"==o.side?"dash-orderlistpassed-lst-cgreen":"dash-orderlistpassed-lst-cred")+"'>"+o.side+"</div><div>"+i+"</div> <div>"+d+"</div> <div>"+KRformatNumber(o.fees,8)+" "+s+"</div> <div>"+KRformatNumber(("BUY"==o.side?o.amount:o.usd_amount)-o.fees,8)+" "+s+"</div> <div>"+o.evolv+"</div><div>"+("0"==o.status?"<input type='button' onclick='_cancelOrder(\""+o.id+"\");return false;' class='btn btn-exsmall btn-grey' value='Cancel'/>":"")+"</div></li>");a.off("click").click((function(){showOrderInfos(o.id_encrypted)})),$(".dash-orderlistpassed-lst").prepend(a)}))}function toggleClassOrderGraphList(){}function _toggleOrderGraphList(e=!1){e||$(".dash-orderlistpassed").toggleClass("dash-orderlistpassed-hide"),$(".dash-orderlistpassed").hasClass("dash-orderlistpassed-hide")||$(".dash-orderlistpassed").hasClass("dash-orderlistpassed-layer")?($(".dashboard").removeClass("orderlist-shown-graph"),updateUserSettings("orderlist_show","false")):($(".dashboard").addClass("orderlist-shown-graph"),updateUserSettings("orderlist_show","true")),checkGraphResize()}function _toggleLayerOrderGraphList(e=!1){if(e||$(".dash-orderlistpassed").toggleClass("dash-orderlistpassed-layer"),$(".dash-orderlistpassed").hasClass("dash-orderlistpassed-hide"))return!1;$(".dash-orderlistpassed").hasClass("dash-orderlistpassed-layer")?($(".dashboard").removeClass("orderlist-shown-graph"),updateUserSettings("orderlist_layer","true")):($(".dashboard").addClass("orderlist-shown-graph"),updateUserSettings("orderlist_layer","false")),checkGraphResize()}function _toogleLeftSide(){$(".leftside").toggleClass("leftside-hide"),$(".leftside").hasClass("leftside-hide"),$(".leftside > .leftside-hide-controller").html(""),checkGraphResize()}let socketBinanceBookOrder=null;function _startBinanceSocketOrderBook(e,r,o=""){socketBinanceBookOrder=new WebSocket("wss://stream.binance.com:9443/ws/"+e.toLowerCase()+r.toLowerCase()+"@depth"+o),socketBinanceBookOrder.onmessage=function(e){let r=jQuery.parseJSON(e.data);_changeLeftInfosOrderBook("asks",r.a,!1),_changeLeftInfosOrderBook("bids",r.b,!1)}}
