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

		<div class="title"><a href="">博客管理</a></div>
		<table>
			<tr class="first">
				<td>分类</td>
				<td>标题</td>
				<td>内容</td>
				<td>发布时间</td>
				<td>操作</td>
			</tr>
			<?php if(is_array($detail)): $i = 0; $__LIST__ = $detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo['name']); ?></td>
				<td><?php echo (mb_substr($vo['title'],0,5,'utf-8')); ?></td>
				<td><?php echo (mb_substr(strip_tags(html_entity_decode($vo['content'])),0,5,'utf-8')); ?></td>
				<td><?php echo (date("Y-m-d",$vo['create_time'])); ?></td>
				<td>2017.3.14</td>
				<td>
					<a href="<?php echo U('index/addBlog');?>" class="add">添加</a>
					<a href="<?php echo U('Index/editBlog',array('id'=>$vo['id']));?>" class="edit">编辑</a>
					<a href="<?php echo U('Index/delBlog',array('id'=>$vo['id']));?>" class="del">删除</a>
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<div class="page">
			<?php echo ($page); ?>
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