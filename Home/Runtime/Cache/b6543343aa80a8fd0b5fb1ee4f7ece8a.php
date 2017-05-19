<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <style media="screen">
      *{
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <table border='1' width='500'>
      <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
          <td><a href="__URL__/info?id=<?php echo ($v["id"]); ?>"><?php echo ($v["username"]); ?></a></td>
        </tr><?php endforeach; endif; ?>
    </table>
  </body>
</html>