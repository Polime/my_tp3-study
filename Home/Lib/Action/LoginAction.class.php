<?php
  class LoginAction extends Action{
    function index(){
      $this->display();
    }
    function dologin(){
      //获取用户名和密码等，与数据库中比对，有该用户允许登录
      // dump($_SESSION);
      $username = $_POST['username'];
      $password = $_POST['password'];
      $code = $_POST['code'];
      if($_SESSION['verify'] != md5($code)){
        $this->error('验证码错误');
      }
      $m = M('User');
      $where['username'] = $username;
      $where['password'] = $password;
      $i = $m->where($where)->count();
      if($i > 0){
        $this->redirect('User/index');
      }else{
        $this->error('该用户不存在');
      }
    }
  }
?>
