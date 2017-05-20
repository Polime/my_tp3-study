<?php
  class LoginAction extends Action{
    public function login(){
      $this->display();
    }
    public function dologin(){
      //接受值
      //判断用户在数据库中是否存在
      //如果存在允许登录
      //不存在显示错误信息
      $username = $_POST['username'];
      $password = $_POST['password'];
      $code = $_POST['code'];
      if(md5($code) != $_SESSION['code']){
        $this->error('验证码错误');
      }else{
        $user = M('User');
        $where['username'] = $username;
        $where['password'] = $password;
        // $count = $user->where($where)->count();
        $arr = $user->field('id')->where($where)->find();
        // if($count>0){
        //   $_SESSION['username'];
        //   $this->success('登录成功',U('Index/index'));
        // }else{
        //   $this->error('用户不存在');
        // }
        if($arr){
          $_SESSION['username']=$username;
          $_SESSION['id'] = $arr['id'];
          $this->success('登录成功',U('Index/index'));
        }else{
          $this->error('用户不存在');
        }
      }
    }
    //退出
    public function dologout(){
      $_SESSION=array();
      if(isset($_COOKIE[session_name()])){//判断cookie内是否设置session_name
        //
        setcookie(session_name(),'',time()-1,'/');//session_name赋值为空，时间过期，传值有效
      }
      session_destroy();
      $this->redirect('Index/index');
    }
  }
 ?>
