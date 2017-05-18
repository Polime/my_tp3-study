<?php
  class EmptyAction extends Action{
    function index(){
    // $this->show("<p>该方法不存在</p><a></a>");
    $city = M('City');
    $arr = $city->select();
    $this->assign('list',$arr);
    $name = MODULE_NAME;
    $this->display('city/'.$name);
    }
  }
 ?>
