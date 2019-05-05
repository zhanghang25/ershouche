<?php /* Smarty version 2.6.18, created on 2019-04-28 10:28:56
         compiled from m/supersearch.html */ ?>
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
	<script type="text/javascript">
    $(function() {
		$("#brand").selectOption('brand');
		$("#subbrand").selectOption('subbrand');
		$("#model").selectOption('model');
		$("#price").selectOption('price');
		$("#years").selectOption('years');
		$("#kilometre").selectOption('kilometre');
		$("#reback").live("click", function(){
			$("#superbox").show();
			$("#sub_option").hide();
		});
		$(".optionlist li a").live("click", function(){
			$("#superbox").show();
			$("#sub_option").hide();
			var idname = $(this).siblings('input[name=mod]').val();
			$("#"+idname+"").children("input[name="+idname+"]").val($(this).siblings('input[name=id]').val());
			$("#"+idname+"").children("span").text($(this).text());
		});
    })
	</script>
</head>
<body>
<div id="superbox">
	<div class="comnav clearfix">
		<a href="javascript:window.history.go(-1);" class="reback">返回</a>
		<a href="index.php" class="home">首页</a>
		筛选
	</div>
	<div class="supersearchbox">
		<form method="get" action="index.php?m=search">
		<input type="hidden" name="m" value="search">
		<ul>
			<li><a href="javascript:void(0);" id="model"><span class="all">不限</span><label>级别</label><input type="hidden" name="model" value=""></a></li>
			<li><a href="javascript:void(0);" id="brand"><span class="all">不限</span><label>品牌</label><input type="hidden" name="brand" value=""></a></li>
			<li><a href="javascript:void(0);" id="price"><span class="all">不限</span><label>价格</label><input type="hidden" name="price" value=""></a></li>
			<li><a href="javascript:void(0);" id="years"><span class="all">不限</span><label>车龄</label><input type="hidden" name="years" value=""></a></li>
			<li><a href="javascript:void(0);" id="kilometre"><span class="all">不限</span><label>里程</label><input type="hidden" name="kilometre" value=""></a></li>
		</ul>
		<div class="butdiv mt10"><input type="submit" value="开始搜索" class="button01"></div>
		</form>
	</div>
</div>
<div id="sub_option">
</div>
<!--底部--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "m/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--底部结束-->
</body>
</html>