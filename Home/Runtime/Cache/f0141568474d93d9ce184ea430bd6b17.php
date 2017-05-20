<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css//basic.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css//Home/login.css" />
    <script type="text/javascript" src="__PUBLIC__/Js/jquery-3.2.1.min.js"></script>
    <script>
      $(function(){
        $("img[title='login']").click(function(){
          $("form[name='myform']").submit();
        });
        $("img[title='register']").click(function(){
          window.location='__APP__/Register/reg';
        });
      });
    </script>
  </head>
  <body>
    <form name="myform" action="__URL__/dologin" method="post">
      用户名:<input type="text" name="username" value="">
      </br>
      密 &nbsp;&nbsp;码:<input type="password" name="password" value="">
      </br>
      验证码:<input type="text" name="code" value="">
      <img src="__APP__/Public/code" alt="图片出错" onclick="this.src=this.src"+"Math.random()">
      </br>
      <img src="__PUBLIC__/images/login.gif" alt="" title="login" class="submit">
      <img src="__PUBLIC__/images/register.gif" alt="" title="register" class="register">
    </form>
  </body>
</html>