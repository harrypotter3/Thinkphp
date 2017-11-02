<?php
namespace Admin\Model;
use Think\Model;
class ArticlecategoryModel extends Model 
{
	public function getType(){
		return $this->where(array('status'=>1,'id'=>array('gt',3)))
		->field('name,id')
		->select();

	}
    // public function getContent(){
    //     return $this->where(array('status'=>1,'id'=>array('gt',3)))
    //     ->field('name,id')
    //     ->select();

    // }
 	
//     

	
	
}
