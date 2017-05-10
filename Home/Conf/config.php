<?php
return array(
	//'配置项'=>'配置值'
  'URL_PATHINFO_DEPR' => '/',//修改URL的分隔符
  'TMPL_L_DELIM'=>'<{',//修改左定界符
  'TMPL_R_DELIM'=>'}>',//修改右定界符
  // 'DB_TYPE'=>'mysql',//设计数据库类型
  // 'DB_HOST'=>'localhost',//设置主机
  // 'DB_NAME'=>'phptest',//设置数据库名
  // 'DB_USER'=>'root',//设置用户root
  // 'DB_PWD'=>'root',//设置密码
  // 'DB_PORT'=>'3306',//设置端口号
  'DB_PREFIX'=>'tb_',//设置表前缀
  //运用DSN方法进行配置
  'DB_DSN'=>'mysql://root:root@localhost:3306/phptest',//使用DSN方式配置数据库信息
  'SHOW_PAGE_TRACE'=>true,//开启页面trace
  'TMPL_TEMPLATE_SUFFIX'=>'.html',
  // 'TMPL_FILE_DEPR'=>'_',//修改模板文件目录层次
  // 'DEFAULT_THEME'=>'my',//设置默认模板主题
  // 'TMOL_DETECT_THEME'=>true,//自动侦测模板主题
  // 'THEME_LIST'=>''//支持的模板主题列表
  'TMPL_PARSE_STRING'=>array(
    '__CSS__'=>__ROOT__.'/Public/CSS',
    '__JS__'=>__ROOT__.'/Public/JS',
  ),//配置CSS和JS的路径，添加自己的模板变量规则
  'LAYOUT_ON'=>true,
  //开启模板渲染
);
?>
