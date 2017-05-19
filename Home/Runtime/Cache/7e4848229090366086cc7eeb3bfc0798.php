<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <script src="__PUBLIC__/Js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $('button').bind('click',function(){
          $.get('__URL__/getAjax',function(jdata){
            if(jdata.status == 1){
              $('div#did').html(jdata.data);
            }
          });
        });
      });
    </script>
  </head>
  <body>
    <div style="height:100px;background:yellow" id="did"></div>
    <button type="button" name="button">点击</button>
    <script type="text/javascript">
      document.write(new Date);
    </script>

  </body>
</html>