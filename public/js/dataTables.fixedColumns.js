/*!
   Copyright 2010-2020 SpryMedia Ltd.

 This source file is free software, available under the following license:
   MIT license - http://datatables.net/license/mit

 This source file is distributed in the hope that it will be useful, but
 WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details.

 For details please refer to: http://www.datatables.net
 FixedColumns 3.3.1
 ©2010-2020 SpryMedia Ltd - datatables.net/license
*/
var $jscomp=$jscomp||{};$jscomp.scope={};$jscomp.findInternal=function(c,e,g){c instanceof String&&(c=String(c));for(var q=c.length,k=0;k<q;k++){var u=c[k];if(e.call(g,u,k,c))return{i:k,v:u}}return{i:-1,v:void 0}};$jscomp.ASSUME_ES5=!1;$jscomp.ASSUME_NO_NATIVE_MAP=!1;$jscomp.ASSUME_NO_NATIVE_SET=!1;$jscomp.SIMPLE_FROUND_POLYFILL=!1;
$jscomp.defineProperty=$jscomp.ASSUME_ES5||"function"==typeof Object.defineProperties?Object.defineProperty:function(c,e,g){c!=Array.prototype&&c!=Object.prototype&&(c[e]=g.value)};$jscomp.getGlobal=function(c){c=["object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global,c];for(var e=0;e<c.length;++e){var g=c[e];if(g&&g.Math==Math)return g}throw Error("Cannot find global object");};$jscomp.global=$jscomp.getGlobal(this);
$jscomp.polyfill=function(c,e,g,q){if(e){g=$jscomp.global;c=c.split(".");for(q=0;q<c.length-1;q++){var k=c[q];k in g||(g[k]={});g=g[k]}c=c[c.length-1];q=g[c];e=e(q);e!=q&&null!=e&&$jscomp.defineProperty(g,c,{configurable:!0,writable:!0,value:e})}};$jscomp.polyfill("Array.prototype.find",function(c){return c?c:function(c,g){return $jscomp.findInternal(this,c,g).v}},"es6","es3");
(function(c){"function"===typeof define&&define.amd?define(["jquery","datatables.net"],function(e){return c(e,window,document)}):"object"===typeof exports?module.exports=function(e,g){e||(e=window);g&&g.fn.dataTable||(g=require("datatables.net")(e,g).$);return c(g,e,e.document)}:c(jQuery,window,document)})(function(c,e,g,q){var k=c.fn.dataTable,u,p=function(a,b){var d=this;if(this instanceof p){if(b===q||!0===b)b={};var h=c.fn.dataTable.camelToHungarian;h&&(h(p.defaults,p.defaults,!0),h(p.defaults,
    b));a=(new c.fn.dataTable.Api(a)).settings()[0];this.s={dt:a,iTableColumns:a.aoColumns.length,aiOuterWidths:[],aiInnerWidths:[],rtl:"rtl"===c(a.nTable).css("direction")};this.dom={scroller:null,header:null,body:null,footer:null,grid:{wrapper:null,dt:null,left:{wrapper:null,head:null,body:null,foot:null},right:{wrapper:null,head:null,body:null,foot:null}},clone:{left:{header:null,body:null,footer:null},right:{header:null,body:null,footer:null}}};if(a._oFixedColumns)throw"FixedColumns already initialised on this table";
    a._oFixedColumns=this;a._bInitComplete?this._fnConstruct(b):a.oApi._fnCallbackReg(a,"aoInitComplete",function(){d._fnConstruct(b)},"FixedColumns")}else alert("FixedColumns warning: FixedColumns must be initialised with the 'new' keyword.")};c.extend(p.prototype,{fnUpdate:function(){this._fnDraw(!0)},fnRedrawLayout:function(){this._fnColCalc();this._fnGridLayout();this.fnUpdate()},fnRecalculateHeight:function(a){delete a._DTTC_iHeight;a.style.height="auto"},fnSetRowHeight:function(a,b){a.style.height=
        b+"px"},fnGetPosition:function(a){var b=this.s.dt.oInstance;if(c(a).parents(".DTFC_Cloned").length){if("tr"===a.nodeName.toLowerCase())return a=c(a).index(),b.fnGetPosition(c("tr",this.s.dt.nTBody)[a]);var d=c(a).index();a=c(a.parentNode).index();return[b.fnGetPosition(c("tr",this.s.dt.nTBody)[a]),d,b.oApi._fnVisibleToColumnIndex(this.s.dt,d)]}return b.fnGetPosition(a)},fnToFixedNode:function(a,b){var d;b<this.s.iLeftColumns?d=c(this.dom.clone.left.body).find("[data-dt-row="+a+"][data-dt-column="+
        b+"]"):b>=this.s.iRightColumns&&(d=c(this.dom.clone.right.body).find("[data-dt-row="+a+"][data-dt-column="+b+"]"));return d&&d.length?d[0]:(new c.fn.dataTable.Api(this.s.dt)).cell(a,b).node()},_fnConstruct:function(a){var b=this;if("function"!=typeof this.s.dt.oInstance.fnVersionCheck||!0!==this.s.dt.oInstance.fnVersionCheck("1.8.0"))alert("FixedColumns "+p.VERSION+" required DataTables 1.8.0 or later. Please upgrade your DataTables installation");else if(""===this.s.dt.oScroll.sX)this.s.dt.oInstance.oApi._fnLog(this.s.dt,
        1,"FixedColumns is not needed (no x-scrolling in DataTables enabled), so no action will be taken. Use 'FixedHeader' for column fixing when scrolling is not enabled");else{this.s=c.extend(!0,this.s,p.defaults,a);a=this.s.dt.oClasses;this.dom.grid.dt=c(this.s.dt.nTable).parents("div."+a.sScrollWrapper)[0];this.dom.scroller=c("div."+a.sScrollBody,this.dom.grid.dt)[0];this._fnColCalc();this._fnGridSetup();var d,h=!1;c(this.s.dt.nTableWrapper).on("mousedown.DTFC",function(a){0===a.button&&(h=!0,c(g).one("mouseup",
        function(){h=!1}))});c(this.dom.scroller).on("mouseover.DTFC touchstart.DTFC",function(){h||(d="main")}).on("scroll.DTFC",function(a){!d&&a.originalEvent&&(d="main");if("main"===d||"key"===d)0<b.s.iLeftColumns&&(b.dom.grid.left.liner.scrollTop=b.dom.scroller.scrollTop),0<b.s.iRightColumns&&(b.dom.grid.right.liner.scrollTop=b.dom.scroller.scrollTop)});var f="onwheel"in g.createElement("div")?"wheel.DTFC":"mousewheel.DTFC";if(0<b.s.iLeftColumns)c(b.dom.grid.left.liner).on("mouseover.DTFC touchstart.DTFC",
        function(){h||"key"===d||(d="left")}).on("scroll.DTFC",function(a){!d&&a.originalEvent&&(d="left");"left"===d&&(b.dom.scroller.scrollTop=b.dom.grid.left.liner.scrollTop,0<b.s.iRightColumns&&(b.dom.grid.right.liner.scrollTop=b.dom.grid.left.liner.scrollTop))}).on(f,function(a){d="left";b.dom.scroller.scrollLeft-="wheel"===a.type?-a.originalEvent.deltaX:a.originalEvent.wheelDeltaX});if(0<b.s.iRightColumns)c(b.dom.grid.right.liner).on("mouseover.DTFC touchstart.DTFC",function(){h||"key"===d||(d="right")}).on("scroll.DTFC",
        function(a){!d&&a.originalEvent&&(d="right");"right"===d&&(b.dom.scroller.scrollTop=b.dom.grid.right.liner.scrollTop,0<b.s.iLeftColumns&&(b.dom.grid.left.liner.scrollTop=b.dom.grid.right.liner.scrollTop))}).on(f,function(a){d="left";b.dom.scroller.scrollLeft-="wheel"===a.type?-a.originalEvent.deltaX:a.originalEvent.wheelDeltaX});c(e).on("resize.DTFC",function(){b._fnGridLayout.call(b)});var m=!0,l=c(this.s.dt.nTable);l.on("draw.dt.DTFC",function(){b._fnColCalc();b._fnDraw.call(b,m);m=!1}).on("key-focus.dt.DTFC",
        function(){d="key"}).on("column-sizing.dt.DTFC",function(){b._fnColCalc();b._fnGridLayout(b)}).on("column-visibility.dt.DTFC",function(a,c,d,f,h){if(h===q||h)b._fnColCalc(),b._fnGridLayout(b),b._fnDraw(!0)}).on("select.dt.DTFC deselect.dt.DTFC",function(a,c,d,f){"dt"===a.namespace&&b._fnDraw(!1)}).on("position.dts.dt.DTFC",function(a,d){b.dom.grid.left.body&&c(b.dom.grid.left.body).find("table").eq(0).css("top",d);b.dom.grid.right.body&&c(b.dom.grid.right.body).find("table").eq(0).css("top",d)}).on("destroy.dt.DTFC",
        function(){l.off(".DTFC");c(b.dom.scroller).off(".DTFC");c(e).off(".DTFC");c(b.s.dt.nTableWrapper).off(".DTFC");c(b.dom.grid.left.liner).off(".DTFC "+f);c(b.dom.grid.left.wrapper).remove();c(b.dom.grid.right.liner).off(".DTFC "+f);c(b.dom.grid.right.wrapper).remove()});this._fnGridLayout();this.s.dt.oInstance.fnDraw(!1)}},_fnColCalc:function(){var a=this,b=0,d=0;this.s.aiInnerWidths=[];this.s.aiOuterWidths=[];c.each(this.s.dt.aoColumns,function(h,f){f=c(f.nTh);if(f.filter(":visible").length){var m=
        f.outerWidth();if(0===a.s.aiOuterWidths.length){var l=c(a.s.dt.nTable).css("border-left-width");m+="string"===typeof l&&-1===l.indexOf("px")?1:parseInt(l,10)}a.s.aiOuterWidths.length===a.s.dt.aoColumns.length-1&&(l=c(a.s.dt.nTable).css("border-right-width"),m+="string"===typeof l&&-1===l.indexOf("px")?1:parseInt(l,10));a.s.aiOuterWidths.push(m);a.s.aiInnerWidths.push(f.width());h<a.s.iLeftColumns&&(b+=m);a.s.iTableColumns-a.s.iRightColumns<=h&&(d+=m)}else a.s.aiInnerWidths.push(0),a.s.aiOuterWidths.push(0)});
        this.s.iLeftWidth=b;this.s.iRightWidth=d},_fnGridSetup:function(){var a=this._fnDTOverflow();this.dom.body=this.s.dt.nTable;this.dom.header=this.s.dt.nTHead.parentNode;this.dom.header.parentNode.parentNode.style.position="relative";var b=c('<div class="DTFC_ScrollWrapper" style="position:relative; clear:both;"><div class="DTFC_LeftWrapper" style="position:absolute; top:0; left:0;" aria-hidden="true"><div class="DTFC_LeftHeadWrapper" style="position:relative; top:0; left:0; overflow:hidden;"></div><div class="DTFC_LeftBodyWrapper" style="position:relative; top:0; left:0; height:0; overflow:hidden;"><div class="DTFC_LeftBodyLiner" style="position:relative; top:0; left:0; overflow-y:scroll;"></div></div><div class="DTFC_LeftFootWrapper" style="position:relative; top:0; left:0; overflow:hidden;"></div></div><div class="DTFC_RightWrapper" style="position:absolute; top:0; right:0;" aria-hidden="true"><div class="DTFC_RightHeadWrapper" style="position:relative; top:0; left:0;"><div class="DTFC_RightHeadBlocker DTFC_Blocker" style="position:absolute; top:0; bottom:0;"></div></div><div class="DTFC_RightBodyWrapper" style="position:relative; top:0; left:0; height:0; overflow:hidden;"><div class="DTFC_RightBodyLiner" style="position:relative; top:0; left:0; overflow-y:scroll;"></div></div><div class="DTFC_RightFootWrapper" style="position:relative; top:0; left:0;"><div class="DTFC_RightFootBlocker DTFC_Blocker" style="position:absolute; top:0; bottom:0;"></div></div></div></div>')[0],
        d=b.childNodes[0],h=b.childNodes[1];this.dom.grid.dt.parentNode.insertBefore(b,this.dom.grid.dt);b.appendChild(this.dom.grid.dt);this.dom.grid.wrapper=b;0<this.s.iLeftColumns&&(this.dom.grid.left.wrapper=d,this.dom.grid.left.head=d.childNodes[0],this.dom.grid.left.body=d.childNodes[1],this.dom.grid.left.liner=c("div.DTFC_LeftBodyLiner",b)[0],b.appendChild(d));if(0<this.s.iRightColumns){this.dom.grid.right.wrapper=h;this.dom.grid.right.head=h.childNodes[0];this.dom.grid.right.body=h.childNodes[1];
        this.dom.grid.right.liner=c("div.DTFC_RightBodyLiner",b)[0];h.style.right=a.bar+"px";var f=c("div.DTFC_RightHeadBlocker",b)[0];f.style.width=a.bar+"px";f.style.right=-a.bar+"px";this.dom.grid.right.headBlock=f;f=c("div.DTFC_RightFootBlocker",b)[0];f.style.width=a.bar+"px";f.style.right=-a.bar+"px";this.dom.grid.right.footBlock=f;b.appendChild(h)}this.s.dt.nTFoot&&(this.dom.footer=this.s.dt.nTFoot.parentNode,0<this.s.iLeftColumns&&(this.dom.grid.left.foot=d.childNodes[2]),0<this.s.iRightColumns&&(this.dom.grid.right.foot=
        h.childNodes[2]));this.s.rtl&&c("div.DTFC_RightHeadBlocker",b).css({left:-a.bar+"px",right:""})},_fnGridLayout:function(){var a=this,b=this.dom.grid;c(b.wrapper).width();var d=this.s.dt.nTable.parentNode.offsetHeight,h=this.s.dt.nTable.parentNode.parentNode.offsetHeight,f=this._fnDTOverflow(),m=this.s.iLeftWidth,l=this.s.iRightWidth,g="rtl"===c(this.dom.body).css("direction"),e=function(b,d){f.bar?a._firefoxScrollError()?34<c(b).height()&&(b.style.width=d+f.bar+"px"):b.style.width=d+f.bar+"px":(b.style.width=
        d+20+"px",b.style.paddingRight="20px",b.style.boxSizing="border-box")};f.x&&(d-=f.bar);b.wrapper.style.height=h+"px";0<this.s.iLeftColumns&&(h=b.left.wrapper,h.style.width=m+"px",h.style.height="1px",g?(h.style.left="",h.style.right=0):(h.style.left=0,h.style.right=""),b.left.body.style.height=d+"px",b.left.foot&&(b.left.foot.style.top=(f.x?f.bar:0)+"px"),e(b.left.liner,m),b.left.liner.style.height=d+"px",b.left.liner.style.maxHeight=d+"px");0<this.s.iRightColumns&&(h=b.right.wrapper,h.style.width=
        l+"px",h.style.height="1px",this.s.rtl?(h.style.left=f.y?f.bar+"px":0,h.style.right=""):(h.style.left="",h.style.right=f.y?f.bar+"px":0),b.right.body.style.height=d+"px",b.right.foot&&(b.right.foot.style.top=(f.x?f.bar:0)+"px"),e(b.right.liner,l),b.right.liner.style.height=d+"px",b.right.liner.style.maxHeight=d+"px",b.right.headBlock.style.display=f.y?"block":"none",b.right.footBlock.style.display=f.y?"block":"none")},_fnDTOverflow:function(){var a=this.s.dt.nTable,b=a.parentNode,c={x:!1,y:!1,bar:this.s.dt.oScroll.iBarWidth};
        a.offsetWidth>b.clientWidth&&(c.x=!0);a.offsetHeight>b.clientHeight&&(c.y=!0);return c},_fnDraw:function(a){this._fnGridLayout();this._fnCloneLeft(a);this._fnCloneRight(a);null!==this.s.fnDrawCallback&&this.s.fnDrawCallback.call(this,this.dom.clone.left,this.dom.clone.right);c(this).trigger("draw.dtfc",{leftClone:this.dom.clone.left,rightClone:this.dom.clone.right})},_fnCloneRight:function(a){if(!(0>=this.s.iRightColumns)){var b,c=[];for(b=this.s.iTableColumns-this.s.iRightColumns;b<this.s.iTableColumns;b++)this.s.dt.aoColumns[b].bVisible&&
    c.push(b);this._fnClone(this.dom.clone.right,this.dom.grid.right,c,a)}},_fnCloneLeft:function(a){if(!(0>=this.s.iLeftColumns)){var b,c=[];for(b=0;b<this.s.iLeftColumns;b++)this.s.dt.aoColumns[b].bVisible&&c.push(b);this._fnClone(this.dom.clone.left,this.dom.grid.left,c,a)}},_fnCopyLayout:function(a,b,d){for(var h=[],f=[],m=[],l=0,g=a.length;l<g;l++){var e=[];e.nTr=c(a[l].nTr).clone(d,!1)[0];for(var w=0,n=this.s.iTableColumns;w<n;w++)if(-1!==c.inArray(w,b)){var k=c.inArray(a[l][w].cell,m);-1===k?(k=
        c(a[l][w].cell).clone(d,!1)[0],f.push(k),m.push(a[l][w].cell),e.push({cell:k,unique:a[l][w].unique})):e.push({cell:f[k],unique:a[l][w].unique})}h.push(e)}return h},_fnClone:function(a,b,d,h){var f=this,m,l,e=this.s.dt;if(h){c(a.header).remove();a.header=c(this.dom.header).clone(!0,!1)[0];a.header.className+=" DTFC_Cloned";a.header.style.width="100%";b.head.appendChild(a.header);var g=this._fnCopyLayout(e.aoHeader,d,!0);var k=c(">thead",a.header);k.empty();var n=0;for(m=g.length;n<m;n++)k[0].appendChild(g[n].nTr);
        e.oApi._fnDrawHead(e,g,!0)}else{g=this._fnCopyLayout(e.aoHeader,d,!1);var p=[];e.oApi._fnDetectHeader(p,c(">thead",a.header)[0]);n=0;for(m=g.length;n<m;n++){var t=0;for(k=g[n].length;t<k;t++)p[n][t].cell.className=g[n][t].cell.className,c("span.DataTables_sort_icon",p[n][t].cell).each(function(){this.className=c("span.DataTables_sort_icon",g[n][t].cell)[0].className})}}this._fnEqualiseHeights("thead",this.dom.header,a.header);"auto"==this.s.sHeightMatch&&c(">tbody>tr",f.dom.body).css("height","auto");
        null!==a.body&&(c(a.body).remove(),a.body=null);a.body=c(this.dom.body).clone(!0)[0];a.body.className+=" DTFC_Cloned";a.body.style.paddingBottom=e.oScroll.iBarWidth+"px";a.body.style.marginBottom=2*e.oScroll.iBarWidth+"px";null!==a.body.getAttribute("id")&&a.body.removeAttribute("id");c(">thead>tr",a.body).empty();c(">tfoot",a.body).remove();var u=c("tbody",a.body)[0];c(u).empty();if(0<e.aiDisplay.length){m=c(">thead>tr",a.body)[0];for(l=0;l<d.length;l++){var v=d[l];var r=c(e.aoColumns[v].nTh).clone(!0)[0];
            r.innerHTML="";k=r.style;k.paddingTop="0";k.paddingBottom="0";k.borderTopWidth="0";k.borderBottomWidth="0";k.height=0;k.width=f.s.aiInnerWidths[v]+"px";m.appendChild(r)}c(">tbody>tr",f.dom.body).each(function(a){a=!1===f.s.dt.oFeatures.bServerSide?f.s.dt.aiDisplay[f.s.dt._iDisplayStart+a]:a;var b=f.s.dt.aoData[a].anCells||c(this).children("td, th"),e=this.cloneNode(!1);e.removeAttribute("id");e.setAttribute("data-dt-row",a);for(l=0;l<d.length;l++)v=d[l],0<b.length&&(r=c(b[v]).clone(!0,!0)[0],r.removeAttribute("id"),
            r.setAttribute("data-dt-row",a),r.setAttribute("data-dt-column",v),e.appendChild(r));u.appendChild(e)})}else c(">tbody>tr",f.dom.body).each(function(a){r=this.cloneNode(!0);r.className+=" DTFC_NoData";c("td",r).html("");u.appendChild(r)});a.body.style.width="100%";a.body.style.margin="0";a.body.style.padding="0";e.oScroller!==q&&(m=e.oScroller.dom.force,b.forcer?b.forcer.style.height=m.style.height:(b.forcer=m.cloneNode(!0),b.liner.appendChild(b.forcer)));b.liner.appendChild(a.body);this._fnEqualiseHeights("tbody",
            f.dom.body,a.body);if(null!==e.nTFoot){if(h){null!==a.footer&&a.footer.parentNode.removeChild(a.footer);a.footer=c(this.dom.footer).clone(!0,!0)[0];a.footer.className+=" DTFC_Cloned";a.footer.style.width="100%";b.foot.appendChild(a.footer);g=this._fnCopyLayout(e.aoFooter,d,!0);b=c(">tfoot",a.footer);b.empty();n=0;for(m=g.length;n<m;n++)b[0].appendChild(g[n].nTr);e.oApi._fnDrawHead(e,g,!0)}else for(g=this._fnCopyLayout(e.aoFooter,d,!1),b=[],e.oApi._fnDetectHeader(b,c(">tfoot",a.footer)[0]),n=0,m=g.length;n<
        m;n++)for(t=0,k=g[n].length;t<k;t++)b[n][t].cell.className=g[n][t].cell.className;this._fnEqualiseHeights("tfoot",this.dom.footer,a.footer)}b=e.oApi._fnGetUniqueThs(e,c(">thead",a.header)[0]);c(b).each(function(a){v=d[a];this.style.width=f.s.aiInnerWidths[v]+"px"});null!==f.s.dt.nTFoot&&(b=e.oApi._fnGetUniqueThs(e,c(">tfoot",a.footer)[0]),c(b).each(function(a){v=d[a];this.style.width=f.s.aiInnerWidths[v]+"px"}))},_fnGetTrNodes:function(a){for(var b=[],c=0,e=a.childNodes.length;c<e;c++)"TR"==a.childNodes[c].nodeName.toUpperCase()&&
    b.push(a.childNodes[c]);return b},_fnEqualiseHeights:function(a,b,d){if("none"!=this.s.sHeightMatch||"thead"===a||"tfoot"===a){var e=b.getElementsByTagName(a)[0];d=d.getElementsByTagName(a)[0];a=c(">"+a+">tr:eq(0)",b).children(":first");a.outerHeight();a.height();e=this._fnGetTrNodes(e);b=this._fnGetTrNodes(d);var f=[];d=0;for(a=b.length;d<a;d++){var g=e[d].offsetHeight;var k=b[d].offsetHeight;g=k>g?k:g;"semiauto"==this.s.sHeightMatch&&(e[d]._DTTC_iHeight=g);f.push(g)}d=0;for(a=b.length;d<a;d++)b[d].style.height=
        f[d]+"px",e[d].style.height=f[d]+"px"}},_firefoxScrollError:function(){if(u===q){var a=c("<div/>").css({position:"absolute",top:0,left:0,height:10,width:50,overflow:"scroll"}).appendTo("body");u=a[0].clientWidth===a[0].offsetWidth&&0!==this._fnDTOverflow().bar;a.remove()}return u}});p.defaults={iLeftColumns:1,iRightColumns:0,fnDrawCallback:null,sHeightMatch:"semiauto"};p.version="3.3.1";k.Api.register("fixedColumns()",function(){return this});k.Api.register("fixedColumns().update()",function(){return this.iterator("table",
    function(a){a._oFixedColumns&&a._oFixedColumns.fnUpdate()})});k.Api.register("fixedColumns().relayout()",function(){return this.iterator("table",function(a){a._oFixedColumns&&a._oFixedColumns.fnRedrawLayout()})});k.Api.register("rows().recalcHeight()",function(){return this.iterator("row",function(a,b){a._oFixedColumns&&a._oFixedColumns.fnRecalculateHeight(this.row(b).node())})});k.Api.register("fixedColumns().rowIndex()",function(a){a=c(a);return a.parents(".DTFC_Cloned").length?this.rows({page:"current"}).indexes()[a.index()]:
    this.row(a).index()});k.Api.register("fixedColumns().cellIndex()",function(a){a=c(a);if(a.parents(".DTFC_Cloned").length){var b=a.parent().index();b=this.rows({page:"current"}).indexes()[b];a=a.parents(".DTFC_LeftWrapper").length?a.index():this.columns().flatten().length-this.context[0]._oFixedColumns.s.iRightColumns+a.index();return{row:b,column:this.column.index("toData",a),columnVisible:a}}return this.cell(a).index()});k.Api.registerPlural("cells().fixedNodes()","cell().fixedNode()",function(){return this.iterator("cell",
    function(a,b,c){return a._oFixedColumns?a._oFixedColumns.fnToFixedNode(b,c):this.cell(b,c).node()},1)});c(g).on("init.dt.fixedColumns",function(a,b){if("dt"===a.namespace){a=b.oInit.fixedColumns;var d=k.defaults.fixedColumns;if(a||d)d=c.extend({},a,d),!1!==a&&new p(b,d)}});c.fn.dataTable.FixedColumns=p;return c.fn.DataTable.FixedColumns=p});
