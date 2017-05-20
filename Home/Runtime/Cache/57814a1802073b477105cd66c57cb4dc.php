<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>reg</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/reg.css" />
    <script type="text/javascript" src="__PUBLIC__/Js/jquery-3.2.1.min.js"></script>
    <script>
      $(function(){
        var error = new Array();
        $("input[name='username']").blur(function(){
          var username = $(this).val();
          $.get('__URL__/checkName',{'username':username},function(data){
            if(data == "不允许"){
              error['username'] = 1;
              $("input[name='username']").after("<p id='umessage' style='color:red'>用户已经注册</p>")
            }else{
              error['username'] = 0;
              $("#umessage").remove();
            }
          });
        });
        //提交表单
        $("img[title='register']").click(function(){
          if(error['username'] == 1){
            return false;
          }else{
            $("form[name='myform']").submit();
          }
        });
      });
    </script>
  </head>
  <body>
    <form name="myform" action="__URL__/doReg" method="post">
      用 户 名:&nbsp;<input type="text" name="username" value="">
      </br>
      密 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:<input type="password" name="password" value="">
      </br>
      确认密码:<input type="password" name="repassword" value="">
      </br>
      性 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别:
      <input type="radio" name="sex" value="1" class="radios">男
      <input type="radio" name="sex" value="1" class="radios">女
      </br>
      验 证 码:&nbsp;<input type="text" name="code" value="">
      <img src='__APP__/Public/code?w=30&h=30' onclick='this.src=this.src'+"?"+'Math.random()'>
      </br>
      <img src="__PUBLIC__/images/register.gif" alt="" title="register" class="register">
      <img src="__PUBLIC__/images/reset.gif" alt="" title="reset" class="reset">
    </form>
  </body>
</html>