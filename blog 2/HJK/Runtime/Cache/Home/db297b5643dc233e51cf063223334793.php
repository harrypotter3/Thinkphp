<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta property="qc:admins" content="27761440017637452167636716450600075507556351645061516450"/> -->

	<title>张小窝</title>
	<link href="/blog 2/Public/asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" >

	<link href="/blog 2/Public/asset/global/css/reset.css" rel="stylesheet" type="text/css" />
	
	<link href="/blog 2/Public/asset/global/css/frameset.css" rel="stylesheet" type="text/css"/>
	
	<link href="/blog 2/Public/asset/global/css/detail.css" rel="stylesheet" type="text/css"/>

	
</head>
<body>
<div class="main-wrapper">
	<header class="navTop">
			<nav>
				<div class="logo">
					<a href="index.html">张小窝</a>
				</div>
				<ul class="user-login">
					<?php if(empty($name)): ?><li><a href="<?php echo U('index/login');?>">登录</a></li>
						<?php else: ?>
						<!-- <li class="slip_register"><a href="javascript:;">注册</a></li> -->
						<li>欢迎您<b><?php echo ($name); ?></b></li>
						<a href="<?php echo U('Index/logout');?>"><li>注销</li></a>
						<li>
							<a href="javascript:;">
								<img class="user_img" src="/blog 2/Public/asset/global/img/pic01.jpg" alt="">
							</a>
						</li>

						<!-- <li><a href="/blog 2/index.php?Admin/index/index">后台管理</a></li> -->
						<li><a href="<?php echo U('Admin/index/index');?>">后台管理</a></li><?php endif; ?>
				</ul>

				<ul class="top-nav">
					<li class="active"><a href="<?php echo U('index/index');?>">首页</a></li>
				<!--显示数据,加在li之前-->
					<?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(empty($vo['child'])): else: ?>
					<li class="nav-item">
						<a href="<?php echo U('index/category',array('c_id'=>$vo['id']));?>"><?php echo ($vo['name']); ?>
						</a>
						<div class="submenu">
							<ul>
								<?php if(is_array($vo['child'])): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('index/category',array('category_id'=>$v['id']));?>"><?php echo ($v['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
						
						
						
					</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					
					<!-- <li id="sidebar_trigger"><a href="#">侧栏菜单</a></li> -->
				</ul>

				
			
			</nav>
			
	</header>

	<div id="main">
		
	<div class="detail">
		<div class="content"><!--Start  -->
			<div class="content-wrapper">
			<?php if(is_array($detail)): $i = 0; $__LIST__ = $detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$de): $mod = ($i % 2 );++$i;?><div class="article-info">编辑于<?php echo (date('Y-m-d h:i:s',$de['create_time'])); ?> | 浏览： <?php echo ($de['hits']); ?></div>
			
			<article>
				<h1><?php echo ($de['title']); ?></h1>
				<div>
					<?php echo ($de['content']); ?>
				</div>
			
				</article><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div><!--End  -->
	</div>

	</div>
		
	<footer><!--Start  -->
		<ul class="share-group">
			<li>item1</li>
			<li>item2</li>
			<li>item3</li>
			<li>item4</li>
			<li>item5</li>
		</ul>
		<div class="copy">
			&copy HYMarlene - 2017
		</div>
	</footer><!--End  -->

	<div class="mask">
		<div id="sidebar">
			<ul>
				<li><a href="">item1</a></li>
				<li><a href="">item2</a></li>
				<li><a href="">item3</a></li>
				<li><a href="">item4</a></li>
				<li><a href="">item5</a></li>
			</ul>
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