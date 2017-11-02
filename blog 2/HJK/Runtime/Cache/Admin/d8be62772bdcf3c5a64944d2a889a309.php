<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta property="qc:admins" content="27761440017637452167636716450600075507556351645061516450"/> -->

	<title>张小窝</title>
	<link href="/blog 2/Public/asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" >

	<link href="/blog 2/Public/asset/global/css/reset.css" rel="stylesheet" type="text/css" />
	
	<link href="/blog 2/Public/asset/global/css/admin/admin.css" rel="stylesheet" type="text/css"/>
	
	<link href="/blog 2/Public/asset/global/css/admin/user.css" rel="stylesheet" type="text/css"/>
	

	
	
</head>
<body>
<div class="main-wrapper">
	<header class="navTop">
			<nav>
				<div class="logo pull-left">
					<a href="index.html">张小窝</a>
				</div>
				

				<ul class="user-login pull-right">
						
						<li><a href="<?php echo U('index/login');?>">登录</a></li>
						<!-- <li class="slip_register"><a href="javascript:;">注册</a></li> -->
				
						<li>
							<a href="javascript:;">
								<img class="user_img" src="/blog 2/Public/asset/global/img/pic01.jpg" alt="">
							</a>
						</li>

				</ul>

				<ul class="nav-item pull-right">
					<li>
						<a href="/blog 2/index.php?Home/index/index">回到首页</a>
					</li>
					<li>
						<a href="<?php echo U('index/user');?>">用户管理</a>
					</li>
					<li>
						<a href="<?php echo U('index/index');?>">博客管理</a>
					</li>
				</ul>
	
			</nav>
			
	</header>

	<div id="main">
		
	<div class="container">

		<div class="title"><a href="">个人信息</a></div>
		<div class="user">
			<form action="<?php echo U('Index/addUsers');?>" method="post" enctype="multipart/form-data">
				<table>
					<tr class="first">
						<td>登录ID</td>
						<td>用户名</td>
						<td>密码</td>
						<td>头像</td>
						<td>操作</td>
					</tr>
					<tr>
					

						<td><input type="text" value="" name="user_id"/>
						

						
						</td>
						<td><input type="text" value="" name="name"/></td>
						<td><input type="text" value="" name="password"/></td>
						<td><a href=""  class="img-bac file file-size">
						<input type="file" name="index_show" id="">上传头像</a></td>
						<td><input name="" class="submit" type="submit" value="提交"> </td>
						
					</tr>
				</table>
			</form>
		</div>

	</div>

	</div>
	
	
	<button class="back-to-top">返回顶部</button>	
</div>


<script src="/blog 2/Public/asset/plugins/jquery-3.1.1.js" type="text/javascript"></script>
<script type="text/javascript" src="/blog 2/Public/asset/plugins/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="/blog 2/Public/asset/global/js/main.js"></script>

<!-- <script type="text/javascript" src="/blog 2/Public/assets/pages/scripts/public.js"></script> -->


<!-- <script type="text/javascript">
    $(document).ready(function(){
        Public.init();
    })
</script>	 -->
</body>
</html>