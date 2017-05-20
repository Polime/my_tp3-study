<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
	     //判断用户是否登录过，通过session判断
      $this->display();
    }
    public function top(){
      // $this->assign('name',$_SESSION['name']);
      $this->display();
    }
    public function left(){
      //获取message表中的所有数据
      $message = D('Message');
      import('ORG.Util.Page');// 导入分页类
      $count = $message->count();//获取数据总数
      $page = new Page($count,3);//每页显示几条数据
      $page->setConfig('header','条信息');
      $show = $page->show();//返回分页信息
      $arr = $message->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
      // foreach ($arr as $v) {
      //   $id = $v['uid'];
      //   $user = M('User');
      //   $arr_user[] = $user->field('username')->find($id);
      // }
      $this->assign('list',$arr);
      $this->assign('show',$show);

      $this->display();
    }
    public function right(){
      $this->display();
    }
}
