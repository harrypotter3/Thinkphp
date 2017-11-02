<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
	//导航组装
	public function verify(){
		ob_clean();
		$Verify =     new \Think\Verify();
		$Verify->fontSize = 20;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->entry();
		
		


		
	}
	//  function check_verify($code, $id = ''){
	// 	$verify = new \Think\Verify();
	// 	$code = I('get_code');
	// 	if ($_SESSION['verify'] = md5($_POST['verify']))
	// 	{
 //    	 return $Verify->check($code, $id);
 //    	}
 //    	else
 //    	{
 //    	 	$this->error('验证码错误！');

 //    	}

	// 	//var_dump(check_verify($code));
	// }
	
	public function _initialize(){
		Parent::category();
	}
	public function index(){
		$article=D('ArticleDetail');
		$n_article=$article->new_article();
		$h_article=$article->hot_article();
		$this->assign('new_article',$n_article);
		$this->assign('hot_article',$h_article);
		if(isset($_COOKIE['name'])&&!$_SESSION['name']){
			$name=cookie('name');
			$password=cookie('password');
			session('name',$name);
			session('password',$password);
			$this->redirect('Index/index');
		}
		$this->display();
	}
	public function category(){
		$article=D('ArticleDetail');
		$c_id=I('c_id');
		$category_id=I('category_id');
		$res=$article->c_id($c_id);
		$red=$article->category_id($category_id);
		$this->assign('category_id',$category_id);
		if ($c_id) {
			$res=$article->c_id($c_id);
			$this->assign('content',$res);
			$page=$article->pages($c_id);
			//dump($page);
			$this->assign('pages',$page);
		}else{
			$red=$article->category_id($category_id);
			$page=$article->pages($category_id);
			//dump($page);
			$this->assign('pages',$page);
			$this->assign('content',$red);
		}
		$n_art=$article->new_art();
		$o_article=$article->order_article();
		$this->assign('new_art',$n_art);
		$this->assign('order_article',$o_article);
		$this->display();
	}
	public function detail(){
		$article=D('ArticleDetail');
		$id=I('id');
		$res=$article->detail($id);
		$this->assign('detail',$res);
		$this->display();
	}
	public function login(){
		$this->display();
	}
	public function logins(){
		$users=D('User');
		// $user['name']=$_POST['name'];
		// $user['password']=$_POST['password'];
		// $res = $users->checkLogin($user);
		// if($res){
		// 	return $this->success('登陆成功','index/index');
		// }else{
		// 	return $this->error('用户名或密码错误');
		// }

		// $this->display();
		if(!$users->create($_POST,4)){
			return $this->error($users->getError());
		}else{
			$data['name']=$_POST['name'];
			$data['password']=$_POST['password'];
			$users->where(array('status'=>1,'name'=>$date['name'],'password'=>$data['password']))->save();
			return $this->success('登陆成功','Index/index');
		}

	}
	public function logout(){
		if(session('name')){
			session('[destroy]'); 
			cookie('name',null);
			cookie('password',null);
			return $this->success('用户已安全退出');
		}else{
			return $this->error('退出失败');
		}

	}
}