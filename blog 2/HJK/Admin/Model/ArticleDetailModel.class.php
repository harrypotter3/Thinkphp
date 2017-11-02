<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Model;
use Think\Model;
class ArticleDetailModel extends Model {
    protected $_validate = array(
        array('title','require','请输入标题'),
        array('content','require','请输入内容'),
        );
    public function getDetail(){
    	$p = $_GET['p']?$_GET['p']:1;
        $res = $this
        ->alias("dt")
        ->join("blog_article_category AS ac ON ac.id = dt.category_id")
        ->where(array('dt.status'=>1))
        ->field('dt.title,dt.content,dt.create_time,dt.c_id,dt.id,ac.name')
        ->page($p,6)
        ->order("create_time desc")
        ->select();
       // $count = count($res);
       // $arr = array($res,$count);//数组取出统计数据
       //var_dump($arr);
        //var_dump($res);
        return $res;
    }
    public function getDetailCount()
    {
    	$res = $this
        ->alias("dt")
        ->join("blog_article_category AS ac ON ac.id = dt.category_id")
        ->where(array('dt.status'=>1))
        ->field('dt.title,dt.content,dt.create_time,dt.c_id,dt.id,ac.name')
        
        ->order("create_time desc")
        ->select();
//var_dump($res);
        return count($res);
    }
    public function getPage($count)
    {
    	$page = new \Think\Page($count,6);
    	$show = $page->show();
    	return $show;
    }
    public function add_blog($arr){
        if($arr['title']==''||$arr['content']==''){
            return false;
        }
        
        //var_dump($res['category_id']);
        $ac = M('ArticleCategory');
        $res = $ac->where(array('status'=>1,'id'=>$arr['category_id']))
        ->field('pid')
        ->find();
       // $res = $this
       //  ->alias('dt')
       //  ->where(array('status'=>1))
       //  ->join('blog_article_category AS ac ON ac.id='.$arr['category_id'])
       //  ->field('ac.id')
       //  ->find();
        //var_dump($res);
        $res['c_id'] = $res['pid'];//category关联并取到东西
        return $this->add($arr);
}
public function getEdit($id)
{
   return $this->where(array('status'=>1,'id'=>$id))
   ->find();
}
public function edit_blog($id,$arr)
{
   return $this->where(array('status'=>1,'id'=>$id))->save($arr);

}
public function del_blog($id)
{
  return $this->where(array('status'=>1,'id'=>$id))->delete();
}

        
       // $res = $this->create();
       // $this->add($res);
        
       //  var_dump($res);
       //  return $res;

    
    	//$this->create();
    	//add($data='',$options=array(),$replace=false);
    
    
}