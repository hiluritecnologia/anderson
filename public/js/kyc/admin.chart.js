/*! TokenLite v1.3.0 | Copyright by Softnio. */
!function(o){"use strict";var a,t="tknSale";0<o("#"+t).length&&(e=document.getElementById(t).getContext("2d"),a=new Chart(e,{type:"line",data:{labels:tnx_labels,datasets:[{label:"",tension:.4,backgroundColor:"transparent",borderColor:theme_color.base,pointBorderColor:theme_color.base,pointBackgroundColor:"#fff",pointBorderWidth:2,pointHoverRadius:6,pointHoverBackgroundColor:"#fff",pointHoverBorderColor:theme_color.base,pointHoverBorderWidth:2,pointRadius:6,pointHitRadius:6,data:tnx_data}]},options:{legend:{display:!1},maintainAspectRatio:!1,tooltips:{callbacks:{title:function(t,e){return"Date : "+e.labels[t[0].index]},label:function(t,e){return e.datasets[0].data[t.index]+" Tokens"}},backgroundColor:"#f2f4f7",titleFontSize:13,titleFontColor:theme_color.heading,titleMarginBottom:10,bodyFontColor:theme_color.text,bodyFontSize:14,bodySpacing:4,yPadding:15,xPadding:15,footerMarginTop:5,displayColors:!1},scales:{yAxes:[{ticks:{beginAtZero:!0,fontSize:12,fontColor:theme_color.text},gridLines:{color:"#e9edf3",tickMarkLength:0,zeroLineColor:"#e9edf3"}}],xAxes:[{ticks:{fontSize:12,fontColor:theme_color.text,source:"auto"},gridLines:{color:"transparent",tickMarkLength:20,zeroLineColor:"#e9edf3"}}]}}}),o(".token-sale-graph li a").on("click",function(t){t.preventDefault();var e=o(this),t=o(this).attr("href");o.get(t).done(t=>{a.data.labels=Object.values(t.chart.days_alt),a.data.datasets[0].data=Object.values(t.chart.data_alt),a.update(),e.parents(".token-sale-graph").find("a.toggle-tigger").text(e.text()),e.closest(".toggle-class").toggleClass("active")})}));var r,e="regStatistics";0<o("#"+e).length&&(n=document.getElementById(e).getContext("2d"),r=new Chart(n,{type:"bar",data:{labels:user_labels,datasets:[{label:"",lineTension:0,backgroundColor:theme_color.base,borderColor:theme_color.base,barThickness:.4,data:user_data}]},options:{legend:{display:!1},maintainAspectRatio:!1,tooltips:{callbacks:{title:function(t,e){return!1},label:function(t,e){return e.datasets[0].data[t.index]+" "}},backgroundColor:"#f2f4f7",bodyFontColor:theme_color.base,bodyFontSize:14,bodySpacing:5,yPadding:3,xPadding:10,footerMarginTop:10,displayColors:!1},scales:{yAxes:[{ticks:{beginAtZero:!0,fontSize:10,fontColor:theme_color.text},gridLines:{color:"transparent",tickMarkLength:0,zeroLineColor:"transparent"}}],xAxes:[{ticks:{fontSize:9,fontColor:theme_color.text,source:"auto"},gridLines:{color:"transparent",tickMarkLength:7,zeroLineColor:"transparent"}}]}}}),o(".reg-statistic-graph li a").on("click",function(t){t.preventDefault();var e=o(this),t=o(this).attr("href");o.get(t).done(t=>{r.data.labels=Object.values(t.chart.days_alt),r.data.datasets[0].data=Object.values(t.chart.data_alt),r.update(),e.parents(".reg-statistic-graph").find("a.toggle-tigger").text(e.text()),e.closest(".toggle-class").toggleClass("active")})})),window.pieColors={pieColor1:"#00d285",pieColor2:"#ffc100"};var n="phaseStatus";0<o("#"+n).length&&(n=document.getElementById(n).getContext("2d"),new Chart(n,{type:"doughnut",data:{labels:["Total Sold","Unsold Tokens"],datasets:[{lineTension:0,backgroundColor:[window.pieColors.pieColor1,window.pieColors.pieColor2],borderColor:"#fff",borderWidth:2,hoverBorderColor:"#fff",data:phase_data}]},options:{legend:{display:!1,labels:{boxWidth:10,fontColor:"#000"}},rotation:-1.6,cutoutPercentage:80,maintainAspectRatio:!1,tooltips:{callbacks:{title:function(t,e){return e.labels[t[0].index]},label:function(t,e){return e.datasets[0].data[t.index]+" "}},backgroundColor:"#f2f4f7",titleFontSize:13,titleFontColor:theme_color.heading,titleMarginBottom:10,bodyFontColor:theme_color.text,bodyFontSize:14,bodySpacing:4,yPadding:15,xPadding:15,footerMarginTop:5,displayColors:!1}}}))}(jQuery);