<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="style.css"/>
<script src="fucPic.js" type="text/javascript" language="javascript"></script>
<script src="jquery-1.3.1.js" type="text/javascript" language="javascript"></script>
<script>
jQuery.noConflict();
</script>
<title>动力无限 火车迷的家~</title>
</head>

<body>
<!--header begin-->
<div id="header">
	<div id="Logo"><img src="images/ps_web_h_001.jpg" alt="动力无限" /></div>	
    <!--Nav begin-->
    <div id="Nav">
        <ul>
        	<li>[</li>
            <li><a href="index.php" class="selected">首 页</a></li>
            <li><a href="date.php">动力资料</a></li>
            <li><a href="album.php">专辑介绍</a></li>
            <li><a href="http://bbs.powerstation.org.cn" target="_blank">歌迷论坛</a></li>
            <li><a href="about.php">关于无限</a></li>
            <li>]</li>
        </ul>
    </div>
    <!--Nav end-->
</div>
<!--header end-->
<div id="wrap">
    <!--login begin-->
    <div id="LoginBBS">
    	<p><img src="images/ps_web_007.gif" width="310" height="20" /></p>
		<span><img src="images/ps_web_005.gif" width="28" height="50" /></span>
    	<span class="login">
        <form action="/bbs/logging.php?action=login&amp;loginsubmit=yes" method="post">
    	用户名：<input name="username" type="text" class="txt" />
        &nbsp;密码：<input name="password" type="password" class="txt" />
        <input name="loginsubmit" type="submit" style=" background:url(images/ps_web_008.gif) no-repeat; color:#ccc; width:71px; height:20px; border:0; margin-top:1px; vertical-align:middle;" value="" />
        &nbsp;&nbsp;<a href="/bbs/register.php" target="_blank">论坛注册</a>
        &nbsp;&nbsp;<a href="/bbs/logging.php?action=login" target="_blank">忘记密码</a>
        </form></span>        
    </div>
    <!--login end-->
    
</html>
