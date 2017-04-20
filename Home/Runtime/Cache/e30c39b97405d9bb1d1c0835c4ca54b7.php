<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script>
      function jump(){
        window.location="__URL__/add";
      }
    </script>
  </head>
  <body>
    <table border='1' width='500' align=center>
      <tr>
        <th>id</th>
        <th>username</th>
        <th>sex</th>
        <th>操作</th>
      </tr>
      <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$no): $mod = ($i % 2 );++$i;?><tr>
          <td><?php echo ($no["id"]); ?></td>
          <td><?php echo ($no["username"]); ?></td>
          <td><?php echo ($no["sex"]); ?></td>
          <td><a href="__URL__/del/id/<?php echo ($no["id"]); ?>">删除</a>
            |<a href="__URL__/modefy/id/<?php echo ($no["id"]); ?>">修改</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
    <center>
      <button onclick="jump()">添加用户</button>
    </center>
  </body>
</html>