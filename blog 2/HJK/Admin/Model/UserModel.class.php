<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
	public function getUser(){
		$res = $this->where(array('status'=>1,'id'=>array('gt',-1)))
		->field('user_id,name,id,password')
        // ->field('dt.id,dt.name,dt.user_name,dt.password,ac.name')
       
        //dump($res);
        ->select();
		return $res;

	}

public function add_user($arr)
{

        

        $u = M('User');
        $res = $u->where(array('status'=>1))
       
        ->select();
        //dump($res);
      
        return $this->add($arr);

}
public function edit_user($id,$arr){
	$u = M('User');
	//dump($id);
	return $this->where(array('status'=>1,'id'=>$id))->save($arr);
	

}
public function getUsers($id)
{
	//dump($id);
   return $this->where(array('status'=>1,'id'=>$id))
   ->find();
   
}

	}