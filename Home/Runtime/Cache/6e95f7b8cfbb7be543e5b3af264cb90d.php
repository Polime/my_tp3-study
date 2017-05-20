<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>top</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
  </head>
  <body>
    <h1>(⊙x⊙)留言板系统</h1>
    <p>欢迎你<?php echo (session('username')); ?><a href="__APP__/Login/dologout" target="_top">退出</a> </p>
  </body>
</html>