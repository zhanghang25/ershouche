<?php /* Smarty version 2.6.18, created on 2015-10-21 19:29:58
         compiled from admin/add_ad.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="admin/kindeditor/themes/default/default.css" />
<script type="text/javascript" src="static/js/jquery.js"></script>
<script type="text/javascript" src="static/js/lhgcalendar/lhgcalendar.min.js"></script>
<script charset="utf-8" src="admin/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="admin/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/laydate/laydate.js"></script>
<script type="text/javascript">
	$(function() {
		//表单验证
		$(".adform").Validform({
			tiptype:3
		});
		$('#adtype').change(function(){
			if($("#adtype").val()==1){
				$('#pic').show();
			}
			else{
				$('#pic').hide();
			}
		});
		//日历控件
		$('#start_time').calendar();
		$('#end_time').calendar();
	});
	KindEditor.ready(function(K) {
		var editor = K.editor({
			uploadJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload',
			fileManagerJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload_manager',
			allowFileManager : true
		});
		K('#image1').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					imageUrl : K('#url1').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#url1').val(url);
						editor.hideDialog();
					}
				});
			});
		});
	});
</script>
</head>
<body>
<div class="colorarea01">
<div class="search clearfix">
	<div class="searchL">
		<ul class="menulist">
			<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=ad&a=list" class="list">广告管理</a></li>
		</ul>
	</div>
</div>
<form name="form1" class="adform" id="channelform" method="post" enctype="multipart/form-data" action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=ad">
	<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
		<tr>
			<th>广告名称：</th>
			<td><select name="adtype" id="adtype">
				<?php echo $this->_tpl_vars['selectadtype']; ?>

				</select>
			</td>
		</tr>
		<tr>
			<th>广告名称：</th>
			<td><input name="name" type="text"  size="30" value="<?php echo $this->_tpl_vars['ad']['name']; ?>
" datatype="s" nullmsg="请填写广告名称！"/></td>
		</tr>
		<tr>
		<tr>
			<th>链接地址：</th>
			<td><input name="url" type="text"  size="30" value="<?php echo $this->_tpl_vars['ad']['url']; ?>
" datatype="url"/></td>
		</tr>
		<tr>
			<th>链接说明：</th>
			<td><input name="url_note" type="text" size="30" value="<?php echo $this->_tpl_vars['ad']['url_note']; ?>
" /></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" width="100%"  class="maintable" id="pic" <?php if ($this->_tpl_vars['ad']['adtype'] == 1): ?><?php else: ?>style="display:none;"<?php endif; ?>>
	<tr>
		<th>缩略图：</th>
		<td><input type="text" name="pic" id="url1" value="<?php echo $this->_tpl_vars['ad']['pic']; ?>
" />
			<input type="button" id="image1" value="选择图片" />
		</td>
	</tr>
	<tr>
		<th>尺寸：</th>
		<td>宽
			<input type="text" name="picwidth" size="5" value="<?php echo $this->_tpl_vars['ad']['picwidth']; ?>
">
			px * 高
			<input type="text" name="picheight" size="5" value="<?php echo $this->_tpl_vars['ad']['picheight']; ?>
">
			px </td>
	</tr>
	</table>
	<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
		<tr>
			<th>开始时间：</th>
			<td><input id="start_time" type="text" readonly="" size="20" value="<?php echo $this->_tpl_vars['ad']['starttime']; ?>
" name="starttime" class="laydate-icon" onclick="laydate()">
			</td>
		</tr>
		<tr>
			<th>结束时间：</th>
			<td><input type="text" name="endtime" id="end_time" value="<?php echo $this->_tpl_vars['ad']['endtime']; ?>
" size="20" readonly='' class="laydate-icon" onclick="laydate()">
			</td>
		</tr>
		<tr>
			<th>状态：</th>
			<td><input type="checkbox" name="isshow" value="1" <?php if ($this->_tpl_vars['ad']['isshow'] == 1 || $this->_tpl_vars['ac'] == 'add'): ?>checked<?php endif; ?>> 启用 </td>
		</tr>
		<tr>
			<th></th>
			<td><div class="buttons">
				<input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
				<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
				<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['ad']['id']; ?>
">
				</div>
			</td>
		</tr>
	</table>
	</div>
</form>
</body>
</html>