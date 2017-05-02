<?php
  class PublicAction extends Action{
    function code(){
      import('ORG.Util.image');
      image::buildImageVerify();
    }
  }
 ?>
