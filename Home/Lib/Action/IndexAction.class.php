<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    // public function index(){
	  //    $user = M('User');
    //    $arr = $user->select();
    //    $this->assign('list',$arr);
    //    $this->display();
    // }
    // public function info(){
    //   $id = $_GET['id'];
    //   $user = M('User');
    //   $arr = $user->find($id);
    //   if($arr){
    //     // $this->success('Bing');
    //     $this->assign('list',$arr);
    //     $this->display();
    //   }else{
    //     // $this->error('Bong');
    //     $this->redirect('User/test','',5,'页面正在跳转');
    //   }
    // }
    public function index(){
      $this->display();
    }
    public function getAjax(){
      $this->ajaxReturn('这里是数据','信息','1');
    }
}
