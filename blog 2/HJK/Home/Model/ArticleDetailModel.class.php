<?php
namespace Home\Model;
use Think\Model;
class ArticleDetailModel extends Model{
	public function new_article(){
		$res=$this->where(array('status'=>1))
		->field('id,title,category_id,create_time')
		->limit(6)
		->order('create_time desc')
		->select();
		//var_dump ($res);
		return $res;
	} 
	public function hot_article(){
		$res=$this->where(array('status'=>1))
		->field('id,title,category_id,create_time,hits')
		->limit(6)
		->order('hits desc')
		->select();
		return $res;
	}
	public function new_art(){
		$res=$this->where(array('status'=>1))
		->field('id,title,category_id,create_time,hits')
		->limit(6)
		->order('create_time desc')
		->select();
		return $res;
	}
	public function order_article(){
		$res=$this->where(array('status'=>1))
		->field('id,title,category_id,create_time,hits')
		->order('create_time desc')
		->select();
		return $res;
	}
	public function detail($id){
		$this->where(array('status'=>1,'id'=>$id))
			 ->setInc('hits',1);
		$res=$this->where(array('status'=>1,'id'=>$id))
		->select();
		//var_dump ($res);
		return $res;
	} 
	public function c_id($c_id){
		if ($_GET['p']) {
			$p=$_GET['p'];
		}else{
			$p=1;
		}
		//dump($p);
		
		$res=$this->where(array('status'=>1,'c_id'=>$c_id))
		->page($p,'2')
		->field('id,title,content,create_time,update_time,hits')
		->select();
		//var_dump ($res);
		return $res;
	}
	public function category_id($category_id){
		if ($_GET['p']) {
			$p=$_GET['p'];
		}else{
			$p=1;
		}
		$red=$this->where(array('status'=>1,'category_id'=>$category_id))
		->page($p,'2')
		->field('title,content,create_time,update_time,hits')
		->select();
		//var_dump($res);
		return $red;
	}
	public function pages($id){
		if($id<4){
			$res=$this->where(array('status'=>1,'c_id'=>$id))
		->field('title,content,create_time,update_time,hits')
		->select();
	}else{
		$res=$this->where(array('status'=>1,'category_id'=>$id))
		->field('title,content,create_time,update_time,hits')
		->select();
	}
		
		$count=count($res);
		// dump($res);
		// dump($count);
		$Page=new\Think\Page($count,'2');
		$Page->setconfig('first','首页');
		$Page->setconfig('prev','上一页');
		$Page->setconfig('next','下一页');
		$show=$Page->show();
		return $show;
	}
}