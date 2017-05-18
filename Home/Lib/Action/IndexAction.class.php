<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
      $city = M('City');
      $arr = $city->select();
      $this->assign('list',$arr);
	    $this->display();
    }
}
