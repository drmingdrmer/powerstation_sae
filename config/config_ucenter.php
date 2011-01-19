<?php


define('UC_CONNECT', 'mysql');

define('UC_DBHOST', 'w.rdc.sae.sina.com.cn:3307');
define('UC_DBUSER', SAE_ACCESSKEY);
define('UC_DBPW', SAE_SECRETKEY);
define('UC_DBNAME', 'app_'.$_SERVER['HTTP_APPNAME']);
define('UC_DBCHARSET', 'utf8');
define('UC_DBTABLEPRE', '`'.'app_'.$_SERVER['HTTP_APPNAME'].'`.dzx_ucenter_');
define('UC_DBCONNECT', 0);

define('UC_CHARSET', 'utf-8');
define('UC_KEY', 'l4y6ubt27av6G3i2XcSfK52dzca8Eds5Cf80cfGcT4y0sfF4j39fh2Efl1C4gaTe');
define('UC_API', 'http://'.$_SERVER['HTTP_APPNAME'].'.sinaapp.com/uc_server');
define('UC_APPID', '1');
define('UC_IP', '');
define('UC_PPP', 20);
?>