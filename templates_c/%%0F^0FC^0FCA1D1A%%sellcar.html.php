<?php /* Smarty version 2.6.18, created on 2019-05-05 10:44:58
         compiled from m/sellcar.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title><?php echo $this->_tpl_vars['setting']['keywords']; ?>
-<?php echo $this->_tpl_vars['setting']['sitename']; ?>
</title>
	<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/css/page.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/jquery.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/search.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/templates/m/js/jquery.textRemindAuto-1.0.js"></script>
	<script type="text/javascript">
    $(function() {
		$("#brand").selectOption('brand');
		$("#subbrand").selectOption('subbrand');
		$(".optionlist li a").live("click", function(){
			$("#superbox").show();
			$("#sub_option").hide();
			var idname = $(this).siblings('input[name=mod]').val();
			$("#"+idname+"").children("input[name="+idname+"]").val($(this).siblings('input[name=id]').val());
			$("#"+idname+"").children("span").text($(this).text());
		});
		$("#reback").live("click", function(){
			$("#superbox").show();
			$("#sub_option").hide();
		});
		$(".tel").textRemindAuto();
		$("form").submit(function(){
			if($("input[name='brand']").val() == ""){
				alert("请选择品牌！");
				$("input[name='brand']").focus();
				return false;
			}
			if($("input[name='subbrand']").val() == ""){
				alert("请选择车系！");
				$("input[name='subbrand']").focus();
				return false;
			}
			if($("input[name='p_tel']").val() == "" ||  $("input[name='p_tel']").val() == "手机号"){
				alert("请填写手机号！");
				$("input[name='p_tel']").focus();
				return false;
			}
		})
    })
	</script>
</head>
<body>
<div id="superbox">
	<div class="comnav clearfix">
	<a href="javascript:window.history.go(-1);" class="reback">返回</a>
	<a href="index.php" class="home">首页</a>
	卖车
	</div>
	<div class="pl20 pr20 pt20">
		<div class="selltelbox">
			<p>拨打卖车热线登记卖车</p>
			<p>卖车热线：<span class="orange01"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</span></p>
		</div>
	</div>
	<div class="supersearchbox">
		<form method="post" action="index.php?m=sellcar">
		<ul>
			<li><a href="javascript:void(0);" id="brand"><span class="all">不限</span><label>品牌</label><input type="hidden" name="brand" value=""></a></li>
		</ul>
		<div class="mt10"><input name="p_tel" type="text" size="30" class="tel inp01" value="手机号"/></div>
		<div class="butdiv mt10"><input type="submit" value="提交卖车" class="button01"><input type="hidden" name="action" value="sellcar"></div>
		</form>
	</div>
</div>
<div id="sub_option">
</div>
<!--底部结束-->
</body>
</html>