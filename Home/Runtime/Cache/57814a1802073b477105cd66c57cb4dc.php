<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>reg</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/reg.css" />
    <script type="text/javascript" src="__PUBLIC__/Js/jquery-3.2.1.min.js"></script>

  </head>
  <body>
    <form name="myform" action="__URL__/dologin" method="post">
      用户名:<input type="text" name="username" value="">
      </br>
      密 &nbsp;&nbsp;码:<input type="password" name="password" value="">
      </br>
      确认密码:<input type="text" name="repassword" value="">
      性&nbsp;&nbsp;别:<input type="radio" name="sex" value="1">男
                      <input type="radio" name="sex" value="0">女
      <img src="__APP__/Public/code" alt="图片出错" onclick="this.src=this.src"+"Math.random()">
      </br>
      <img src="__PUBLIC__/images/register.gif" alt="" title="register" class="register">
      <img src="__PUBLIC__/images/reset.gif" alt="" title="reset" class="reset">
    </form>
  </body>
</html>