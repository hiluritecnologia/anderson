"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[8321],{8321:(t,s,a)=>{a.r(s),a.d(s,{default:()=>n});const c={props:["user"],components:{},data:function(){return{bot_contracts:{},bot_contracts_count_running:{},bot_contracts_count_completed:{},bot_contracts_count_amount:{},profit:{},gnl,currency:{}}},methods:{goBack:function(){window.history.length>1?this.$router.go(-1):this.$router.push("/")},fetchData:function(){var t=this;this.$http.post("/user/fetch/bot").then((function(s){t.bot_contracts=s.data.bot_contracts,t.bot_contracts_count_running=s.data.bot_contracts_count_running,t.bot_contracts_count_completed=s.data.bot_contracts_count_completed,t.bot_contracts_count_amount=s.data.bot_contracts_count_amount,t.profit=s.data.profit,t.currency=s.data.currency})).catch((function(t){"nokyc"==t.response.data.message&&(window.location.href="/user/kyc")}))}},created:function(){this.fetchData()},mounted:function(){},destroyed:function(){},updated:function(){}};const n=(0,a(1900).Z)(c,(function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",[a("div",{staticClass:"row match-height"},[a("div",{staticClass:"col-lg-4 col-md-6 col-sm-12"},[a("div",{staticClass:"card card-congratulation-medal mh-22vh"},[a("div",{staticClass:"card-body"},[a("h5",[t._v(t._s(t.$t("Welcome"))+" 🎉 "+t._s(t.user.firstname))]),t._v(" "),a("router-link",{staticClass:"mt-3 btn btn-primary",attrs:{to:"/bot/BTC/USDT",type:"button"}},[t._v(t._s(t.$t("New Bot")))]),t._v(" "),a("img",{staticClass:"congratulation-medal",attrs:{src:"/images/illustration/badge.svg",alt:"Medal Pic"}})],1)])]),t._v(" "),a("div",{staticClass:"col-lg-4 col-md-6 col-sm-12"},[a("div",{staticClass:"row"},[a("div",{staticClass:"col"},[a("div",{staticClass:"card text-center"},[a("div",{staticClass:"card-body"},[t._m(0),t._v(" "),a("h2",{staticClass:"fw-bolder"},[t._v("\n                                "+t._s(t.bot_contracts_count_running)+"\n                            ")]),t._v(" "),a("p",{staticClass:"card-text"},[t._v("\n                                "+t._s(t.$t("Running Bots"))+"\n                            ")])])])]),t._v(" "),a("div",{staticClass:"col"},[a("div",{staticClass:"card text-center"},[a("div",{staticClass:"card-body"},[t._m(1),t._v(" "),a("h2",{staticClass:"fw-bolder"},[t._v("\n                                "+t._s(t.bot_contracts_count_completed)+"\n                            ")]),t._v(" "),a("p",{staticClass:"card-text"},[t._v("\n                                "+t._s(t.$t("Completed Bots"))+"\n                            ")])])])])])]),t._v(" "),a("div",{staticClass:"col-lg-4 col-md-6 col-sm-12"},[a("div",{staticClass:"row"},[a("div",{staticClass:"col"},[a("div",{staticClass:"card text-center"},[a("div",{staticClass:"card-body"},[t._m(2),t._v(" "),a("h2",{staticClass:"fw-bolder"},[t._v("\n                                "+t._s(t.bot_contracts_count_amount*t.currency.rate)+"\n                                "+t._s(t.currency.symbol)+"\n                            ")]),t._v(" "),a("p",{staticClass:"card-text"},[t._v("\n                                "+t._s(t.$t("Total Investment"))+"\n                            ")])])])]),t._v(" "),a("div",{staticClass:"col"},[a("div",{staticClass:"card text-center"},[a("div",{staticClass:"card-body"},[t._m(3),t._v(" "),t.profit>0?a("h2",{staticClass:"text-success"},[t._v("\n                                "+t._s(t.profit*t.currency.rate)+"\n                                "+t._s(t.currency.symbol)+"\n                            ")]):t.profit<0?a("h2",{staticClass:"fw-bolder text-danger"},[t._v("\n                                "+t._s(t.profit*t.currency.rate)+"\n                                "+t._s(t.currency.symbol)+"\n                            ")]):a("h2",{staticClass:"fw-bolder"},[t._v("\n                                "+t._s(t.profit*t.currency.rate)+"\n                                "+t._s(t.currency.symbol)+"\n                            ")]),t._v(" "),a("p",{staticClass:"card-text"},[t._v("\n                                "+t._s(t.$t("Total Profit/Lose"))+"\n                            ")])])])])])])]),t._v(" "),a("div",{staticClass:"row match-height"},[a("div",{staticClass:"col-12"},[a("div",{staticClass:"card"},[a("div",{staticClass:"card-header d-flex justify-content-between align-items-center"},[a("h4",{staticClass:"card-title"},[t._v(t._s(t.$t("Your Bots")))]),t._v(" "),a("div",{staticClass:"card-search"})]),t._v(" "),a("div",{staticClass:"table-responsive",staticStyle:{"max-height":"280px","overflow-y":"auto"}},[a("table",{staticClass:"table custom-data-bs-table"},[a("thead",{staticClass:"table-dark"},[a("tr",[a("th",{attrs:{scope:"col"}},[t._v(t._s(t.$t("Bot")))]),t._v(" "),a("th",{attrs:{scope:"col"}},[t._v(t._s(t.$t("Duration")))]),t._v(" "),a("th",{attrs:{scope:"col"}},[t._v(t._s(t.$t("Status")))]),t._v(" "),a("th",{attrs:{scope:"col"}},[t._v(t._s(t.$t("View")))])])]),t._v(" "),null!=t.bot_contracts&&t.bot_contracts.length>0?a("tbody",{key:t.bot_contracts.length},t._l(t.bot_contracts,(function(s,c){return a("tr",{key:c},[a("td",{staticClass:"d-flex flex-column",attrs:{"data-label":"Bot"}},[a("div",{staticClass:"fw-bold fs-4"},[t._v("\n                                        "+t._s(s.bot_name)+"\n                                    ")]),t._v(" "),a("small",{staticClass:"text-warning",staticStyle:{"margin-top":"4px"}},[t._v("("+t._s(s.symbol)+"/"+t._s(s.pair)+")")])]),t._v(" "),a("td",{attrs:{"data-label":"Duration"}},[a("div",[t._v("\n                                        "+t._s(t.$t("Start"))+":\n                                        "),a("span",{staticClass:"fw-bold"},[t._v(t._s(s.start_date))])]),t._v(" "),a("div",[t._v("\n                                        "+t._s(t.$t("End"))+":\n                                        "),a("span",{staticClass:"fw-bold"},[t._v(t._s(s.end_date))])])]),t._v(" "),a("td",{attrs:{"data-label":"Status"}},[1!=s.status?a("span",{staticClass:"badge bg-warning"},[t._v(t._s(t.$t("Running")))]):1==s.status?a("span",{staticClass:"badge bg-success"},[t._v(t._s(t.$t("Completed")))]):t._e()]),t._v(" "),a("td",{attrs:{"data-label":"View"}},[1!=s.status?a("router-link",{staticClass:"btn btn-icon btn-info btn-sm",attrs:{to:"/bot/"+s.symbol+"/"+s.pair,"data-bs-toggle":"tooltip","data-bs-placement":"top",title:"View"}},[a("i",{staticClass:"bi bi-display"})]):t._e()],1)])})),0):a("tbody",[a("tr",[a("td",{staticClass:"text-muted text-center",attrs:{colspan:"100%"}},[a("img",{attrs:{height:"128px",width:"128px",src:"https://assets.staticimg.com/pro/2.0.4/images/empty.svg",alt:""}}),t._v(" "),a("p",{},[t._v("\n                                        "+t._s(t.$t("No Data Found"))+"\n                                    ")])])])])])])])])])])}),[function(){var t=this.$createElement,s=this._self._c||t;return s("div",{staticClass:"avatar bg-light-info p-50 mb-1"},[s("div",{staticClass:"avatar-content"},[s("i",{staticClass:"bi bi-robot font-medium-5"})])])},function(){var t=this.$createElement,s=this._self._c||t;return s("div",{staticClass:"avatar bg-light-success p-50 mb-1"},[s("div",{staticClass:"avatar-content"},[s("i",{staticClass:"bi bi-check-lg font-medium-5"})])])},function(){var t=this.$createElement,s=this._self._c||t;return s("div",{staticClass:"avatar bg-light-info p-50 mb-1"},[s("div",{staticClass:"avatar-content"},[s("i",{staticClass:"bi bi-robot font-medium-5"})])])},function(){var t=this.$createElement,s=this._self._c||t;return s("div",{staticClass:"avatar bg-light-success p-50 mb-1"},[s("div",{staticClass:"avatar-content"},[s("i",{staticClass:"bi bi-check-lg font-medium-5"})])])}],!1,null,null,null).exports}}]);