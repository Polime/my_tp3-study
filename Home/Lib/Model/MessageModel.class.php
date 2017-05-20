<?php
  class MessageModel extends RelationModel{
    protected $_auto = array(
      // array(填充字段，填充内容,[填充条件，附加规则])
      array('time','time',1,'function'),
      array('uid','getid',1,'callback'),
    );
    //*关联模型
    protected $_link = array(
      'User'=>array(
        'mapping_type'=>BELONGS_TO,//映射关系
        'class_name'=>'User',//操纵的类名
        'foreign_key'=>'uid',
        'mapping_name'=>'user',
        'mapping_fields'=>'username',
        'as_fields'=>'username',
      ),
    );

    protected function getid(){
      return $_SESSION['id'];
    }
  }
 ?>
