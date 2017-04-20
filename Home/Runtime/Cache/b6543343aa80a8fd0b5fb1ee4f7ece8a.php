<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- hello <?php echo ($name); ?> -->
    <?php if(is_array($name)): $i = 0; $__LIST__ = $name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>----<?php echo ($vo["username"]); ?>---<?php echo ($vo["sex"]); ?></br><?php endforeach; endif; else: echo "" ;endif; ?>
  </body>
</html>