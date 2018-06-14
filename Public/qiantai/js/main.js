//电脑端和手机端头部搜索预览框引用
$("#arrcity").click(function(){
  $(this).suggest(citys,{
      hot_list:commoncitys,dataContainer:'#arrcity_3word',attachObject:'#suggest',
   });
});
$("#mobilearrcity").click(function(){
  $(this).suggest(citys,{
      hot_list:commoncitys,dataContainer:'#arrcity_3word',attachObject:'#mobilesuggest',
   });
});
// $(function(){
//             $("#arrcity").suggest(citys,{
//                 hot_list:commoncitys,dataContainer:'#arrcity_3word',attachObject:'#suggest',
//             });
//              $("#mobilearrcity").suggest(citys,{
//                 hot_list:commoncitys,dataContainer:'#arrcity_3word',attachObject:'#mobilesuggest',
//             });
// });
window.onload=window.onresize=function(){
      // ios下头部固定方案防止头部随着页面上拉滚动
      var scrollable = document.getElementById("scrollable");
      new ScrollFix(scrollable);
      //手机端头部下拉框宽度和输入框宽度一致
		  var width=document.getElementById('mobilearrcity').offsetWidth;
		  document.getElementById('mobilesuggest').style.width=width+"px";
		  document.getElementById('mobilesuggest').style.top=0+"px";
      //控制电脑端的搜索预览框距离顶部的高度
      document.getElementById('suggest').style.top=50+"px";
}