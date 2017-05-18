<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
  </head>
  <body>
    <form action="__URL__/do_login" method="post">
      用户名： <input type="text" name="username">
      <br/>
      密 &nbsp;&nbsp;码： <input type="password" name="password">
      <br/>
      <input type="submit" value="登录">
    </form>
  </body>
</html>