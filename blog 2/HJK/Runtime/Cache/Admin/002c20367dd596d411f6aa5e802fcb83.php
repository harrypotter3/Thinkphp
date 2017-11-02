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

		<div class="title"><a href="">添加文章</a></div>
		<div style="width:860px; margin: 30px auto;">
			<form action="<?php echo U('Index/addBlogs');?>" method="post">
				<select name="category_id" id="" class="editselesort">
				<?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value ="<?php echo ($vo['id']); ?>"><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<input type="text" name="title" class="edittitle" placeholder="博客标题:" style="width:97.5%;" />
				<textarea id="content1" name="content" placeholder="博客内容" >
				<?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value ="<?php echo ($vo['id']); ?>"><?php echo ($vo['res']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</textarea>
				<input type="submit" class="editsubmit" value="提交" />
			</form>
		</div>

	</div>
	<script type="text/javascript" src="/blog 2/Public/asset/plugins/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/blog 2/Public/asset/plugins/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript" src="/blog 2/Public/asset/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
	<script type="text/javascript">
		UE.getEditor('content1',{initialFrameWidth:850,
			initialFrameHeight:200,
			elementPathEnabled: false, //删除元素路径
      		wordCount: false    //删除字数统计
		});

	</script>

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