<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
      // echo "I'm ThinkPHP";
      // $n = new Model('User');//调用数据表
  //查找数据
      // $n = M('User');
      // $arr = $n->select();
      // $arr = $n->find(2);
      // $arr = $n->where('id=2')->getfield('username');
      // var_dump($arr);
      // $name = $arr[0]['username'];
      // var_dump($arr);
      // $this->assign('name',$arr);
      //普通查询
      // $data['id']=9;
      // $data['username']='dan';
      // $data['_logic']='or';//逻辑为OR
      //表达式查询
      // $data['id']=array('GT',6);//GT-大于，LT-小于，EQ-等于，EGT-大于等于，ELT-小于等于，NEQ-不等于
      // $data['username'] = array('notlike','%da%');//模糊查询
      // $data['username'] = array('like',array('%da%','%2%'),'and');//and操作
      // $data['id'] = array('notbetween',array(7,10));
      // $data['id'] = array('notin',array(7,10));
      //区间查询
      // $data['id'] = array(array('gt',4),array('lt',9),'or');//默认是AND
      // $data['username'] = array(array('like','%c%'),array('like','%2%'),'or');//默认是AND

      // var_dump($n->where($data)->select());

      //统计查询
      // $data['username'] = array('like','%2');
      // $c = $n->where($data)->count();
      // $c = $n->max('id');
      // $c = $n->min('id');
      // $c = $n->avg('id');
      // echo $c;
      //sql直接查询
      // $n = M();
      // $reselt = $n->query("select * from tb_user where id = 6");//返回数组集或bool
      // $reselt = $n->execute("update tb_user set username='dan3' where username='dan2'");//返回影响行数或bool
      // var_dump($reselt);
  //增加数据
      // $n->id=3;
      // $n->username='dandan';
      // $n->sex=1;
      // $n->add("name=dan","sex=1");
  //删除数据
      // $n->id=3;
      // $n->delete();
      // $n->delete(1);
      // $n->where('id=2')->delete();
  //更新数据
      // $name['id']=4;
      // $name['username']='dand';
      // $n->save($name);
      // $this->display('index2');//访问同级下的index2文件
      // $this->display('./Public/error.html','utf-8','text/xml');//访问public文件夹下的test文件
      // $content = $this->fetch('Public:error');
      // var_dump($content);
      // $this->display($content);
      $content = "dan";
      $this->assign('name','$content');
    }
    public function show(){
      // echo "欢迎你".$_GET['name']."年龄".$_GET['age'];
      // $this->display();
      // $this->show('<b>加粗</b>');

    }
}
