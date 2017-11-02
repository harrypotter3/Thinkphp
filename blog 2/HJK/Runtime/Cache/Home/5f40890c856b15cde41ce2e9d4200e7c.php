<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta property="qc:admins" content="27761440017637452167636716450600075507556351645061516450"/> -->

	<title>张小窝</title>
	<link href="/blog 2/Public/asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" >

	<link href="/blog 2/Public/asset/global/css/reset.css" rel="stylesheet" type="text/css" />
	
	<link href="/blog 2/Public/asset/global/css/frameset.css" rel="stylesheet" type="text/css"/>
	
	<link href="/blog 2/Public/asset/global/css/list.css" rel="stylesheet" type="text/css"/>


	
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
		

	<div class="in-index">
		<div class="container">	
			<div class="left">
			<?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cont): $mod = ($i % 2 );++$i;?><div class="time-line">
				
					<div class="time-line-text">
						<div class="title">
							<h2>
								<a href="<?php echo U('index/detail',array('id'=>$cont['id']));?>"><?php echo ($cont['title']); ?></a>
							</h2>
						</div>
						<div class="content">
							<?php echo (mb_substr($cont['content'],0,300,'utf-8')); ?>...<!--截取文章长度-->
						</div>
						<div class="tips pull-right">
							<span class="time">
								<i class="icon-timeline"></i>
								<?php echo (date('Y-m-d h:i:s',$cont['create_time'])); ?>
							</span>
							<span class="ready">
								<a href="<?php echo U('index/detail',array('id'=>$cont['id']));?>">
								<i class="icon-timeline"></i>
									阅读全文
								</a>
							</span>
							<span class="comment">
								<a href="">
									<i class="icon-timeline"></i>
									评论
								</a>
							</span>
						</div>		
					</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				
		<div class="page">
                        <ul>
                            <?php echo ($pages); ?>
                        </ul>
                    </div>
	</div>
			<div class="pull-right">
				   <div class="time-line">
		                        <div class="time-line-text">
		                            <div class="title">
		                                <h2>近期文章</h2>
		                            </div>
									<?php if(is_array($new_art)): $i = 0; $__LIST__ = $new_art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ne): $mod = ($i % 2 );++$i;?><div class="content">
		                                <ul>
		                                        <li>
		                                            <div class="con-title">
		                                                <a href="<?php echo U('index/detail',array('id'=>$ne['id']));?>"><?php echo ($ne['title']); ?></a>
		                                                <span class="pull-right"><?php echo (date('Y-m-d',$ne['create_time'])); ?> </span>
		                                            </div>
		                                        </li>
		                                </ul>
		                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
		                        </div>
		                    </div>
				<div class="time-line">
					<div class="time-line-text">
						<div class="title">
							<h2>文章归档</h2>
						</div>
						<div class="content">
							<ul class="blog-time-line">
								<li><a href="">· 二零一七年 · 一月</a></li>
								<li><a href="">· 二零一七年 · 二月</a></li>
								<li><a href="">· 二零一七年 · 三月</a></li>
								<li><a href="">· 二零一七年 · 四月</a></li>
								<li><a href="">· 二零一七年 · 五月</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
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