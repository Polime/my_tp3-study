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
    //编写search方法，实现搜索
    public function search(){
      // var_dump($_POST);
      //获取POST的数据，根据数据组装查询的条件，根据条件从数据库中获取数据，返回个页面遍历
      if(isset($_POST['username']) && $_POST['username'] !=null){
      $where['username'] = array('like',"%{$_POST['username']}%");
    }
      if(isset($_POST['sex']) && $_POST['sex'] != null){
      $where['sex'] = array('eq',$_POST['sex']);
    }
      $n = M('User');
      $arr = $n->where($where)->select();
      $this->assign('$data',$arr);
      $this->display('index');
    }
    public function demo(){
      $n = M('User');
      $arr = $n->order(array('id'=>'asc'))->limit(1,5)->field(array('username'=>'name','sex'=>'s'))->select();
      // $arr = $n->order("id")->limit("2")->select();
      var_dump($arr);
      // $this->display();
      $this->show("abc");
    }
  }
 ?>
