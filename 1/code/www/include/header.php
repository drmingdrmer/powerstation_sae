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
<title>�������� ���Եļ�~</title>
</head>

<body>
<!--header begin-->
<div id="header">
	<div id="Logo"><img src="images/ps_web_h_001.jpg" alt="��������" /></div>	
    <!--Nav begin-->
    <div id="Nav">
        <ul>
        	<li>[</li>
            <li><a href="index.php" class="selected">�� ҳ</a></li>
            <li><a href="date.php">��������</a></li>
            <li><a href="album.php">ר������</a></li>
            <li><a href="http://bbs.powerstation.org.cn" target="_blank">������̳</a></li>
            <li><a href="about.php">��������</a></li>
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
    	�û�����<input name="username" type="text" class="txt" />
        &nbsp;���룺<input name="password" type="password" class="txt" />
        <input name="loginsubmit" type="submit" style=" background:url(images/ps_web_008.gif) no-repeat; color:#ccc; width:71px; height:20px; border:0; margin-top:1px; vertical-align:middle;" value="" />
        &nbsp;&nbsp;<a href="/bbs/register.php" target="_blank">��̳ע��</a>
        &nbsp;&nbsp;<a href="/bbs/logging.php?action=login" target="_blank">��������</a>
        </form></span>        
    </div>
    <!--login end-->
    
</html>
