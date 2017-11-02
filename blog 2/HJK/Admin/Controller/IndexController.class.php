<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends BaseController {

  static $articleDetail;
  public function _initialize(){
    parent::_initialize();
    self::$articleDetail = D("ArticleDetail");
  }

    public function Index(){
        $ad=D("ArticleDetail");
        $res=$ad->getDetail();
       
        $count = $ad->getDetailCount();
        $show = $ad->getPage($count);
        // $c_id=I('c_id');
        // $category_id=I('category_id');
        // $res=$article->c_id($c_id);
        //  $ac = D('ArticleCategory');
        // $red=$ad->getcategory();
        // $count = $ad->getCategoryCount();
        // $show = $ad->add_blog($count);
        // $this->assign('category',$red);
        //var_dump($res);
       
        //$count = $ad->getCategoryCount();
       
        $this->assign("page",$show);
        dump(123);
        dump($res[0]['id']);
        
        $this->assign("detail",$res);
        $this->display();
    }
    public function showNav()
    {

    }
    public function addBlog()
    {
        $ac = D('ArticleCategory');
        $res = $ac->getType();
        $this->assign('type',$res);
        //var_dump($res);
        $this->display();
    }
    public function editBlog(){
      $dt = D('ArticleDetail');
       //var_dump($dt);
       //dump(123);
      $id = I('id');
      dump($id);

      $arr = $dt->getEdit($id);

      $this->assign('edit',$arr);
      $this->display();

    }

     public function addBlogs()
    
    {
        $dt = D("ArticleDetail");
        $arr = $dt->create();
        //var_dump($arr);
         //$ad=D("ArticleDetail");

        $res = $dt->add_blog($arr);
        if ($arr['title']==''||$arr['content']!=='') {
          
        
        if($arr)
        {
              if($res)
            {
              return $this->success('success','Index/index');
            }else
            {
              return $this->error('wrong','Index/index');
            }
            
        }else
        {
          return $this->error($dt->getError());
        }
}
        //var_dump($res);
        // if ($res) {
        //   return $this->success('hello','Index/index');
        // }
        // else{
        //   return $this->error('新增失败');
        // }
        
    }
    public function editBlogs()
    {

      $dt = D("ArticleDetail");
      $arr = $dt->create();
      $id = $_GET['id'];//需要通过get方法获取id
     $res= $dt->edit_Blog($id,$arr);
     //dump($id);
     if($res)
            {
              return $this->success('success',U('Index/index'));
            }else
            {
              return $this->error('wrong',U('Index/index'));
            }

      
      //dump($res);
    }
    
  //   public function index(){
		// $this->display();
  //   }

    public function user(){
      $res = D("User");
      $dt = $res->getUser($arr);
      $this->assign('user',$dt);
      //dump($res);
		$this->display();
    }
    public function editUser(){
      $dt = D('User');
       //var_dump($dt);
       //dump(123);
      $id = I('id');
      dump($id);

      $arr = $dt->getUsers($id);
      //dump(123);
      dump($arr);
      $this->assign('user',$arr);
      $this->display();
      }
       public function editUsers()
    {

      $dt = D("User");
      $arr = $dt->create();
      $id = $_GET['id'];//需要通过get方法获取id
      //dump($id);
     $res= $dt->edit_user($id,$arr);
     //dump($id);
     if($res)
            {
              return $this->success('success',U('Index/user'));
            }else
            {
              return $this->error('wrong',U('Index/user'));
            }

      
      //dump($res);
    }
    
   
   
    public function addUsers(){
      $dt = D("User");
        $arr = $dt->create();
        //var_dump($arr);
         //$ad=D("ArticleDetail");

        $res = $dt->add_user($arr);
        if($arr)
        {
              if($res)
            {
              return $this->success('success',U('Index/user'));
            }

    }
  }
  public function delBlog()
  {
    $id = I('id');
    $ad = D("ArticleDetail");
    $res = $ad->del_blog($id);
    if ($res) {
      $this->success('seccess',U('Index/index'));
    }
    else{
      $this->error('wrong',U('Index/index'));
    }
  }
    
  //   public function editBlog(){
		// $this->display();
  //   }
   
  //   public function editUser(){
		// $this->display();
  //   }   
}
