<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="__URL__/creat" method="post">
      姓名:<input type="text" name="username" value=""><br>
      性别:男<input type="radio" name="sex" value="1">
           女<input type="radio" name="sex" value="2"><br>
      <input type="submit" value="添加">
    </form>
  </body>
</html>