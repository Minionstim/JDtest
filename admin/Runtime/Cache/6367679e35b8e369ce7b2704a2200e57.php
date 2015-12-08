<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>后台管理首页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="__ROOT__/public/css/admin.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <!-- 包含头 -->
<script type="text/javascript">
  function logout()
  {
	  if(confirm("是否退出登陆？"))
	  {
		  window.location = "__APP__/Index/index";
	  }
  }

</script>
<div class="headDiv">
  <div class="headDiv1">京东商城后台管理</div>
  <div class="headDiv2"><img src="__ROOT__/public/images/image6.gif"></div>
</div>
<div class="headDiv3">&nbsp;</div>

    <!-- 当前位置 -->
    <div class="locationDiv">:后台管理:添加产品</div>
    <!-- 正文内容 -->
    <div class="contentDiv">
      <div class="leftDiv"><script type="text/javascript" src="__ROOT__/public/js/dtree.js"></script>
<script type="text/javascript">
  function hello()
  {
	  d = new dTree('d','__ROOT__/public');
	  d.add(1,-1,"后台管理","");
	  
	  d.add(2,1,"重新登陆","javascript:logout()");
//	  if(<?php echo ($role["addnum"]); ?>==1||<?php echo ($role["addnun"]); ?>==0){
	  d.add(3,1,"栏目管理");
	  d.add(31,3,"添加栏目","__APP__/Index/add");
	  d.add(32,3,"修改栏目","__APP__/Index/change");
//	  }
	  d.add(4,1,"文章管理");
	  d.add(41,4,"添加分类","__APP__/AddType/index");
	  d.add(42,4,"修改分类","__APP__/ChangeType/index");
	  
	  d.add(5,1,"用户管理","");
	  d.add(51,5,"添加用户","__APP__/AddUser/index");
	  d.add(6,1,"返回首页","__APP__/Index/index");
	  
	  document.write(d);
  }
  
  hello();
</script></div>
      <div class="rightDiv">
<form enctype="multipart/form-data" action="__APP__/Product/save" method="post">
<table border="1" align="center" bgcolor="gray">
	<tr>
		<td>标题</td>
		<td><input type="hidden" name="cateid" value="<?php echo ($_GET['cid']); ?>"/><input type="text" name="title"/></td>
	</tr>
	<tr>
		<td>图片</td>
		<td><input type="file" multiple="multiple" name="upload[]"/></td>
	</tr>
	<tr>
		<td>内容</td>
		<td><textarea cols="50" rows="6" name="content"></textarea></td>
	</tr>
	<tr>
		<td>规格</td>
		<td><textarea cols="50" rows="6" name="guige"></textarea></td>
	</tr>
	<tr>
		<td>品牌</td>
		<td><input type="text" name="brand"/></td>
	</tr>
	<tr>
		<td>市场价格</td>
		<td><input type="text" name="price"/></td>
	</tr>
	<tr>
		<td>会员价格</td>
		<td><input type="text" name="userprice"/></td>
	</tr>
	<tr>
		<td>库存量</td>
		<td><input type="text" name="num"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="提交"/></td>
	</tr>
</table>
</form>

     </div>
    </div>
  </body>
</html>