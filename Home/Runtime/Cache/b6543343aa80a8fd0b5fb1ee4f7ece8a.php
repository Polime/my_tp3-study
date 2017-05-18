<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <style media="screen">
      #daohang{
        height: 100px;
        background-color: #abcdef;
        font-size: 60px;
      }
      *{
        text-decoration: none;
        color: black;
      }
    </style>
  </head>
  <body>
    <div class="" id="daohang">
      <?php if(is_array($list)): foreach($list as $key=>$c): ?><a href="__APP__/city/<?php echo ($c["name"]); ?>"><?php echo ($c["name"]); ?>|</a><?php endforeach; endif; ?>
    </div>

  </body>
</html>