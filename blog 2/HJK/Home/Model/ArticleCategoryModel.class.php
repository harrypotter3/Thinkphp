<?php
namespace Home\Model;
use Think\Model;
class ArticleCategoryModel extends Model{
	public function category1(){
		$array=M("ArticleCategory")
		->Where(array('status'=>1))
		->select ();//显示
		//var_dump($a);
		foreach ($array as $key => $value) {
			if ($value['pid']==0) {
				foreach ($array as $k => $v) {
					if ($v['pid']==$value['id']) {
						$value['child'][]=$v;
					}

				}
				$arr[]=$value;
			}
		}
		return $arr;
		//var_dump($arr);
		}
}



	