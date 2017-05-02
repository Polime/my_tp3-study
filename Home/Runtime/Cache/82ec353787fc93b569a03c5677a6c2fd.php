<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" href="__CSS__/login.css" type="text/css">
    <script type="text/javascript" src="__JS__/login.js"></script>
  </head>
  <body>
    <form class="" action="__URL__/dologin" method="post" name="myform">
      用户名：<input type="text" name="username" value=""> <br>
      密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" name="password" value=""> <br>
      验证码：<input type="text" name="code" value="">
      <img src="__APP__/Public/code" alt="图片出错!" onclick='this.src=this.src+"?"+Math.random()'><!-- 点击换验证码 -->
      <br>
      <br>
      <!-- <input type="submit" name="" value="提交"> -->
      <img src="__PUBLIC__/images/login.jpg" alt="" onclick="sub()">
    </form>
  </body>
</html>