<?php
// 数据配置
define('APP_SAFECODE','PMgUG3ss86');
define('DB_HOST','localhost');
define('DB_PORT','3306');
define('DB_NAME','hlwjxit');
define('DB_USER','root');
define('DB_PASSWORD','root');
define('DB_PREFIX','c_');
define('DB_ENGINE_NAME','mysql');

// 多语切换配置
define('LANG_ON',false);//开启多语切换，true 为开启
define('DEFAULT_LANG','zh-cn');//默认中文
define('LANG_LIST','zh-cn,en-us');// 允许切换的语言列表 用逗号分隔
define('VAR_LANGUAGE','l');// 默认语言切换变量
define('WEB_DIR','/');

// 路由配置
define('URL_ROUTER_ON',false);// 开启路由
define('URL_MODE',0); // 定义路由类型，选择值：0，原生字符串 1，伪静态字符串
define('URL_PATHINFO',1); // 说明：0 /，1 index.php/
define('URL_SEPAPARATOR','_'); // 伪静态时，字符串分隔符
define('URL_EXT','.html'); // 伪静态时结尾的扩展名
?>