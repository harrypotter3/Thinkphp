<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function category(){
		$abc=D("ArticleCategory")->category1();
		$this->assign('name',session('name'));
		$this->assign('category',$abc);
	}
}