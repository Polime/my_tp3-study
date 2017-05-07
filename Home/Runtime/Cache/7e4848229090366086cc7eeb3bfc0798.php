<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="__PUBLIC__/css/test.css" type="text/css"> -->
    <title></title>
    <!-- <script src="__PUBLIC__/js/test.js"> -->
    <!-- <script type="text/javascript" src="/Public/js/test.js"></script>默认PUBLIC路径
    <link rel="stylesheet" type="text/css" href=".///css/test.css" />其他路径 -->
    <!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/test.css" /> -->
    </script>
  </head>
  <body>
    <!-- hello <?php echo ($name); ?>
    <?php if(is_array($name)): $i = 0; $__LIST__ = $name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>----<?php echo ($vo["username"]); ?>---<?php echo ($vo["sex"]); ?></br><?php endforeach; endif; else: echo "" ;endif; ?> -->

    <!-- <?php if($sex == "男"): ?>调用分支判断
      男人是泥巴做的
      <?php else: ?>
      女人是水做的<?php endif; ?> -->

    <!-- <?php if($age < 18): ?>if语句
      未成年
      <?php elseif($age == 18): ?>
      青春年少
      <?php else: ?>
      成年<?php endif; ?> -->

    <?php switch($number): case "1": ?>一个和尚挑水吃<?php break;?>
      <?php case "2": ?>两个和尚抬水吃<?php break;?>
      <?php case "3": ?>三个和尚没水吃<?php break;?>
      <?php default: ?>
      这里是默认值<?php endswitch;?>

  </body>
</html>