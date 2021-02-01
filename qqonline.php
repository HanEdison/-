
<div id="floatTools"  class="rides-cs" style="height:205px; ">
  <div class="floatL">
  	<a id="aFloatTools_Show" class="btnOpen" title="查看在线客服" style="top:20px;display:block" href="javascript:void(0);">展开</a>
  	<a id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" style="top:20px;display:none" href="javascript:void(0);">收缩</a>
  </div>
  <div id="divFloatToolsView" class="floatR" style="display: none;height:200px;width: 140px;font-size:16px;">
    <div class="cn">
      <h3 class="titZx">在线客服</h3>
      <ul>
        <li><span>张老师</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=158923668&site=qq&menu=yes"><img border="0" src="http://demo.lanrenzhijia.com/2014/service1031/images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li><span>罗老师</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=41331974&site=qq&menu=yes"><img border="0" src="http://demo.lanrenzhijia.com/2014/service1031/images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li><span>黄老师</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=41281666&site=qq&menu=yes"><img border="0" src="http://demo.lanrenzhijia.com/2014/service1031/images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
      </ul>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
<script>
	$(function(){
		$("#aFloatTools_Show").click(function(){
			$('#divFloatToolsView').animate({width:'show',opacity:'show'},100,function(){$('#divFloatToolsView').show();});
			$('#aFloatTools_Show').hide();
			$('#aFloatTools_Hide').show();				
		});
		$("#aFloatTools_Hide").click(function(){
			$('#divFloatToolsView').animate({width:'hide', opacity:'hide'},100,function(){$('#divFloatToolsView').hide();});
			$('#aFloatTools_Show').show();
			$('#aFloatTools_Hide').hide();	
		});
	});
</script>
