<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
	// public function checkLogin($user){
	// 	$userinfo=$this->where(array('status'=>1,'name'=>$user['name'],'password'=>$user['password']))->find();
	// 	session('name',$userinfo['name']);
	// 	session('password',$userinfo['password']);
	// 	//var_dump(session'name');
	// 	cookie('name',$userinfo['name']);  //设置cookie
	// 	cookie('password',$userinfo['password'],3600); // 指定cookie保存时间
	// 	return $userinfo;
	// }
	   
		protected $_validate = array (//protected,数据名定义,&_validate自动验证；
			array('name','checkName','用户名不存在',1,'callback',4) , 
			//array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
			array('password','checkPassword','密码输入错误',1,'callback',4) , 
			array('verify','check_verify','验证码错误',1,'callback',4) , 
			//array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
			
			);
		 protected $_auto = array (    //$_auto自动完成；     
		  
		   array('login_last_time','time',4,'function')
		);
		public function checkName(){
			$data['name']=$_POST['name'];
			$ckN=$this->where(array('status'=>1,'name'=>$data['name']))
			->find();
			if($ckN){
				return true;
			}else{
				return false;
			}
		}
		public function checkPassword(){
			$data['name']=$_POST['name'];
			$data['password']=$_POST['password'];
			$ckP=$this->where(array('status'=>1,'name'=>$data['name'],'password'=>$data['password']))
			->find();
			if($ckP){
				session('name',$ckP['name']);
				session('password',$ckP['password']);
				cookie('name',$ckP['name'],3600);
				cookie('password',$ckP['password'],3600);
				return true;
			}else{
				return false;
			}
		}
		 
}