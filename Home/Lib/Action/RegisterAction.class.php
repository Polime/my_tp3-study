<?php
  class RegisterAction extends Action{
    public function reg(){
      $this->display();
    }
    //检查用户是否注册过
    public function checkName(){
      $username = $_GET['username'];
      $user = M('User');
      $where['username'] = $username;
      $count = $user->where($where)->count();
      if($count){
        echo "不允许";
      }else{
        echo "允许";
      }
    }
    //注册
    public function doReg(){
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        // $repassword = $_POST['repassword'];
        // $sex = $_POST['sex'];
        if($password == $repassword){
          $user = D('User');
          if(!$user->creat()){
            $this->error($user->getError());
          }
          // $data['username'] = $username;
          // $data['password'] = $password;
          // $data['sex'] = $sex;
          $lastid = $user->add();
          if($lastid){
              $this->redirect('Index/index');
          }else{
            $this->error('注册失败');
          }

        }
    }

  }
 ?>
