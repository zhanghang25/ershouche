<?php /* Smarty version 2.6.18, created on 2015-10-21 19:30:22
         compiled from admin/news_category_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/common.js"></script>
</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=news_category&a=add" class="add">添加分类</a></li>
			</ul>
		</div>
	</div>
	<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=news_category" method="post" name="form">
	<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
	<tr><th width="30">选择</th><th width="30">ID</th><th width="60">排序</th><th align="left">名称</th><th align="center">操作</th></tr>
	<?php echo $this->_tpl_vars['sortlist']; ?>

	<tr>
		<td colspan="5" class="buttontd">
			<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
			<a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=news_category&a=bulksort','更新排序');" title="请选择后操作">更新排序</a>
		</td>
	</tr>
	</table>
	</form>
</div>
</body>
</html>