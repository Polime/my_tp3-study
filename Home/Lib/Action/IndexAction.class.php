<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	    //  echo "hello world";
      echo "id=".$_GET['id']."</br>";
      echo "num=".$_GET['num'];
    }
    public function day(){
      echo "time=".$_GET['year']."年".$_GET['month']."月".$_GET['date']."日";
    }
    public function url(){
      //URL的生成
      // echo U("index/index");
      echo U("index/index",array('id'=>1,'name'=>'dd'),'shtml');
    }
}
