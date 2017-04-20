<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script>
      window.onload = function(){
        // alert(<?php echo ($data["sex"]); ?>);
        if(<?php echo ($data["sex"]); ?> == 0){
          // alert(<?php echo ($data["sex"]); ?>);
          document.getElementsByName('sex')[1].checked='checked';
        }else{
          document.getElementsByName('sex')[0].checked='checked';
        }
      }
    </script>
  </head>
  <body>
    <form action="__URL__/update" method="post">
      <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
      姓名：<input type="text" name="username" value="<?php echo ($data["username"]); ?>"><br>
      性别：男 <input type="radio" name="sex" value="1">
           女 <input type="radio" name="sex" value="0"><br>
      <input type="submit" name="" value="修改">
    </form>
  </body>
</html>