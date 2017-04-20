<?php
  class UserAction extends Action{
    public function index(){
      // echo "你好";
      $n = M('User');
      $arr = $n->select();
      // var_dump($arr);
      $this->assign('data',$arr);
      $this->display();
    }
    public function del(){
      $n = M('user');
      $id = $_GET['id'];
      $count = $n->delete($id);
      if($count){
        $this->success('数据删除成功');
      }else{
        $this->error('数据删除是失败');
      }
    }
    //显示修改页面
    public function modefy(){
      $id = $_GET['id'];
      $n = M('User');
      $arr = $n->find($id);
      $this->assign('data',$arr);
      $this->display();
    }
    //修改数据
    public function update(){
      $n = M('User');
      $data['id'] = $_POST['id'];
      $data['username'] = $_POST['username'];
      $data['sex'] = $_POST['sex'];
      $count = $n->save($data);
      if($count){
        $this->success('数据修改成功','index');
      }else{
        $this->error('数据修改失败');
      }
    }
    //添加页面
    public function add(){
      $this->display();
    }
    public function creat(){
      $n = M('User');
      $n->username=$_POST['username'];
      $n->sex=$_POST['sex'];
      $count = $n->add();
      if($count>0){
        $this->success('数据添加成功','index');
      }else{
        $this->error('数据添加失败');
      }
    }
  }
 ?>
