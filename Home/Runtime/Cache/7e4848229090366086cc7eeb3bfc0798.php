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
    <?php if(is_array($name)): $i = 0; $__LIST__ = $name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); echo ($vo["username"]); ?>-<?php echo ($vo["sex"]); ?></br><?php endforeach; endif; else: echo "" ;endif; ?> -->

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
    <!-- switch语句 -->
    <!-- <?php switch($number): case "1": ?>一个和尚挑水吃<?php break;?>
      <?php case "2": ?>两个和尚抬水吃<?php break;?>
      <?php case "3": ?>三个和尚没水吃<?php break;?>
      <?php default: ?>
      这里是默认值<?php endswitch;?> -->

    <!-- <table border="1" width="500px"> -->
      <!-- <?php $__FOR_START_911339091__=0;$__FOR_END_911339091__=10;for($j=$__FOR_START_911339091__;$j < $__FOR_END_911339091__;$j+=2){ ?><tr>
          <td>
            <?php echo ($j); ?> <! 默认$i为循环数,name改变循环数的名字 -->
          <!-- </td>
          <td>abc</td>
        </tr><?php } ?>
      <?php $__FOR_START_566450724__=10;$__FOR_END_566450724__=0;for($i=$__FOR_START_566450724__;$i > $__FOR_END_566450724__;$i+=-2){ ?><! 倒序输出 -->
        <!-- <tr>
          <td>
            <?php echo ($i); ?>
          </td>
          <td>abc</td>
        </tr><?php } ?> -->
    <!-- </table> -->

    <!-- <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v); ?></br><?php endforeach; endif; else: echo "" ;endif; ?> -->
    <!-- <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><! 偏移量和输出长度 -->
      <!-- <?php echo ($v); ?></br><?php endforeach; endif; else: echo "" ;endif; ?>  -->
    <!-- <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><! 输出二维数组 -->
      <!-- <?php echo ($v["username"]); ?></br><?php endforeach; endif; else: echo "" ;endif; ?> -->

    <!-- <?php if(is_array($list)): foreach($list as $key=>$v): echo ($key); echo ($v); ?></br><?php endforeach; endif; ?> -->
    <table border="1" width="500px">
      <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
          <td><?php echo ($v["id"]); ?></td>
          <td><?php echo ($v["username"]); ?></td>
          <td><?php echo ($v["password"]); ?></td>
          <?php if($v["sex"] == 1): ?><td>男</td>
            <?php else: ?>
            <td>女</td><?php endif; ?>
        </tr><?php endforeach; endif; ?>
    </table>

  </body>
</html>