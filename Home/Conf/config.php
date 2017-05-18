<?php
return array(
	'URL_CASE_INSENSITIVE'=>true,//url不区分大小写
  'URL_HTML_SUFFIX'=>'html|shtml|xml',//限制伪静态的后缀名
  'URL_ROUTER_ON'=>true,//开启URL路由项
  'URL_ROUTE_RULES'=>array(
    //规则判断
    // 'my'=>'index/index',//静态地址路由
    // ':id/:num'=>'index/index',//动态地址路由
    // 'my/:num'=>'index/index',//静态动态地址路由
    // 'my/:num\d'=>'index/index',//静态动态地址路由,num为纯数字

    // 'my/:num$'=>'index/index',//静态动态地址路由,num为最后
    //正则判断
    // '/^year\/(\d{4})\/(\d{2})\/(\d{2})/'=>'index/index?year=:1&month=:2&date=:3',

    //多变量
    //1
    // 'my/:year/:month/:date'=>'index/day',
    // 'my/:id\d'=>'index/index',
    // 'my/:num'=>'index/index',
    //2
    // 'my/:id\d$'=>'index/index',
    // 'my/:num$'=>'index/index',
    // 'my/:year/:month/:date$'=>'index/day',
    //正则
    '/^my\/(\d+)$/'=>'index/index?id=:1',
    '/^my\/(\w+)$/'=>'index/index?num=:1',
    '/^my\/(\d{4})\/(\d{2})\/(\d{2})$/'=>'index/day?year=:1&month=:2&date=:3',
  ),
);
?>
