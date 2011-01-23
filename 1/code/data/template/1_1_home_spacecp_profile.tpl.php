<? if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_profile');
0
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/header.htm', 1293771182, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_header.htm', 1293771182, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_footer.htm', 1293771182, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_profile_nav.htm', 1293771182, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/seditor.htm', 1293771182, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_footer.htm', 1293771182, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/footer.htm', 1293771182, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/header_common.htm', 1293771182, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/common/simplesearchform.htm', 1293771182, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_header_name.htm', 1293771182, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
|| checktplrefresh('./template/default/home/spacecp_profile.htm', './template/default/home/spacecp_header_name.htm', 1293771182, '1', './data/template/1_1_home_spacecp_profile.tpl.php', './template/default', 'home/spacecp_profile')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=CHARSET?>" />
<title><? if(!empty($navtitle)) { ?><?=$navtitle?> - <? } if(empty($nobbname)) { ?> <?=$_G['setting']['bbname']?> - <? } ?> Powered by Discuz!</title>
<?=$_G['setting']['seohead']?>

<meta name="keywords" content="<? if(!empty($metakeywords)) { echo htmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<? if(!empty($metadescription)) { echo htmlspecialchars($metadescription); ?> <? } ?>,<?=$_G['setting']['bbname']?>" />
<meta name="generator" content="Discuz! <?=$_G['setting']['version']?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2010 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?=$_G['siteurl']?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?=STYLEID?>_common.css?<?=VERHASH?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?=STYLEID?>_home_spacecp.css?<?=VERHASH?>" /><? if($_G['uid'] && isset($_G['cookie']['extstyle'])) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?=$_G['cookie']['extstyle']?>/style.css" /><? } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?=$_G['style']['defaultextstyle']?>/style.css" /><? } ?><script type="text/javascript">var STYLEID = '<?=STYLEID?>', STATICURL = '<?=STATICURL?>', IMGDIR = '<?=IMGDIR?>', VERHASH = '<?=VERHASH?>', charset = '<?=CHARSET?>', discuz_uid = '<?=$_G['uid']?>', cookiepre = '<?=$_G['config']['cookie']['cookiepre']?>', cookiedomain = '<?=$_G['config']['cookie']['cookiedomain']?>', cookiepath = '<?=$_G['config']['cookie']['cookiepath']?>', showusercard = '<?=$_G['setting']['showusercard']?>', attackevasive = '<?=$_G['config']['security']['attackevasive']?>', disallowfloat = '<?=$_G['setting']['disallowfloat']?>', creditnotice = '<? if($_G['setting']['creditnotice']) { ?><?=$_G['setting']['creditnames']?><? } ?>', defaultstyle = '<?=$_G['style']['defaultextstyle']?>', REPORTURL = '<?=$_G['currenturl_encode']?>', SITEURL = '<?=$_G['siteurl']?>';</script>
<script src="<?=$_G['setting']['jspath']?>common.js?<?=VERHASH?>" type="text/javascript"></script><? if(defined('CURMODULE') && ($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') && (CURMODULE == 'index' || CURMODULE == 'forumdisplay' || CURMODULE == 'group')) { ?><?=$rsshead?><? } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { if($_G['basescript'] == 'forum' && !empty($_G['cookie']['widthauto']) && empty($_G['disabledwidthauto'])) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?=STYLEID?>_widthauto.css?<?=VERHASH?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<? } ?>
<script src="<?=$_G['setting']['jspath']?>forum.js?<?=VERHASH?>" type="text/javascript"></script>
<? } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?=$_G['setting']['jspath']?>home.js?<?=VERHASH?>" type="text/javascript"></script>
<? } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?=$_G['setting']['jspath']?>portal.js?<?=VERHASH?>" type="text/javascript"></script>
<? } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && ($_G['mod'] == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { ?>
<script src="<?=$_G['setting']['jspath']?>portal.js?<?=VERHASH?>" type="text/javascript"></script>
<? } if($_GET['diy'] == 'yes' && ($_G['mod'] == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { ?>
<link rel="stylesheet" type="text/css" href="data/cache/style_<?=STYLEID?>_css_diy.css?<?=VERHASH?>" />
<? } ?>
</head>

<body id="nv_<?=$_G['basescript']?>" class="pg_<?=CURMODULE?>" onkeydown="if(event.keyCode==27) return false;">
<? if(($_G['mod']!='topic' && $_G['group']['allowdiy'] && !empty($_G['style']['tplfile'])) || (!empty($_G['style']['tplfile']) && $_G['mod']=='topic' && (($_G['group']['allowaddtopic'] && $topic['uid']==$_G['uid']) || $_G['group']['allowmanagetopic']))) { ?>
<a id="diy-tg" href="javascript:openDiy();" title="打开 DIY 面板"><img src="<?=STATICURL?>image/diy/panel-toggle.png" alt="DIY" /></a>
<? } ?>
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<? if($_GET['diy'] == 'yes' && (CURMODULE == 'topic' || $_G['group']['allowdiy']) && !empty($_G['style']['tplfile'])) { include template('common/header_diy'); } if(empty($topic) || $topic['useheader']) { ?><?php echo adshow("headerbanner/wp a_h"); ?><div id="hd">
<div class="wp">
<div class="hdc cl">
<h2><a href="./" title="<?=$_G['setting']['bbname']?>"><?=BOARDLOGO?></a></h2>

<? if($_G['uid']) { ?>
<div id="um">
<div class="avt y"><a href="home.php?mod=space&amp;uid=<?=$_G['uid']?>" c="34"><?php echo avatar($_G[uid],small); ?></a></div>
<p>
<strong><a href="home.php?mod=space&amp;uid=<?=$_G['uid']?>" class="vwmy" target="_blank" title="访问我的空间"><?=$_G['member']['username']?></a></strong>
<? if($_G['group']['allowinvisible']) { ?>
<span id="loginstatus" class="xg1">
<a href="member.php?mod=switchstatus" title="切换在线状态" onclick="ajaxget(this.href, 'loginstatus');doane(event);">
<? if($_G['member']['invisible']) { ?>
隐身
<? } else { ?>
在线
<? } ?>
</a>
</span>
<? } ?>
<span class="pipe">|</span><span id="usersetup" class="showmenu" onmouseover="showMenu(this.id);"><a href="home.php?mod=spacecp">设置</a></span>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1']; ?>
<span class="pipe">|</span><a href="home.php?mod=space&amp;do=notice" id="myprompt"<? if($_G['member']['newprompt']) { ?> class="new"<? } ?>>提醒<? if($_G['member']['newprompt']) { ?>(<?=$_G['member']['newprompt']?>)<? } ?></a><span id="myprompt_check"></span>
<span class="pipe">|</span><a href="home.php?mod=space&amp;do=pm" id="pm_ntc"<? if($_G['member']['newpm']) { ?> class="new"<? } ?>>短消息<? if($_G['member']['newpm']) { ?>(<?=$_G['member']['newpm']?>)<? } ?></a>
<span class="pipe">|</span><a href="home.php?mod=space&amp;do=friend">好友</a> <? if($_G['setting']['regstatus'] > 1) { ?><a href="home.php?mod=spacecp&amp;ac=invite" class="xg1">邀请</a> <? } if($_G['setting']['taskon']) { ?>
<span class="pipe">|</span>
<? if(empty($_G['cookie']['taskdoing_'.$_G['uid']])) { ?>
<a href="home.php?mod=task&amp;item=new">任务</a>
<? } else { ?>
<a href="home.php?mod=task&amp;item=doing" id="task_ntc" class="new">进行中的任务</a>
<? } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2']; if($_G['group']['allowmanagearticle'] || $_G['group']['allowdiy'] || $_G['group']['allowauthorizedblock'] || $_G['group']['allowauthorizedarticle']) { ?>
<span class="pipe">|</span><a href="portal.php?mod=portalcp">门户管理</a>
<? } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
<span class="pipe">|</span><a href="forum.php?mod=modcp&amp;fid=<?=$_G['fid']?>" target="_blank"><?=$_G['setting']['navs']['2']['navname']?>管理</a>
<? } if($_G['uid'] && ($_G['group']['radminid'] == 1 || $_G['member']['allowadmincp'])) { ?>
<span class="pipe">|</span><a href="admin.php" target="_blank">管理中心</a>
<? } ?>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?=FORMHASH?>">退出</a>
</p>
<p><?php $upgradecredit = $_G['uid'] && $_G['group']['grouptype'] == 'member' && $_G['group']['groupcreditslower'] != 999999999 ? $_G['group']['groupcreditslower'] - $_G['member']['credits'] : false; ?>积分: <a href="home.php?mod=spacecp&amp;ac=credit"><?=$_G['member']['credits']?></a><? if(is_array($_G['setting']['extcredits'])) foreach($_G['setting']['extcredits'] as $extcreditid => $extcredit) { if(empty($extcredit['hiddeninheader'])) { ?> , <?=$extcredit['img']?><?=$extcredit['title']?>: <a href="home.php?mod=spacecp&amp;ac=credit" id="hcredit_<?=$extcreditid?>"><? echo getuserprofile('extcredits'.$extcreditid);; ?></a> <?=$extcredit['unit']?><? } } ?> , 用户组: <a href="home.php?mod=spacecp&amp;ac=usergroup"<? if($upgradecredit !== 'false') { ?> id="g_upmine" class="xi2" onmouseover="showMenu({'ctrlid':this.id, 'pos':'21'});"<? } ?>><?=$_G['group']['grouptitle']?></a>
</p>
</div>
<? } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<p>
<strong><a id="loginuser" class="noborder"><?=$_G['cookie']['loginuser']?></a></strong>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href);hideWindow('register');">激活</a>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?=FORMHASH?>">退出</a>
</p>
<? } else { include template('member/login_simple'); } ?>
</div>

<? if(!IS_ROBOT) { ?>
<div id="qmenu_menu" class="p_pop" style="display: none; zoom: 1;">
<? if($_G['uid']) { ?>
<ul><? if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?=$nav['code']?></li>
<? } } ?>
</ul>
<? if(!empty($_G['style']['extstyle'])) { ?>
<div class="sslct cl">
<? if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onclick="extstyle('')" title="默认"><i>&nbsp;</i></span><? } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onclick="extstyle('<?=$extstyle['0']?>')" title="<?=$extstyle['1']?>"><i style='background:<?=$extstyle['2']?>'>&nbsp;</i></span>
<? } ?>
</div>
<? } } else { ?>
<p class="reg_tip">
<a href="member.php?mod=<?=$_G['setting']['regname']?>" onclick="showWindow('register', this.href)" class="xi2">注册新用户，开通自己的个人中心</a>
</p>
<? } if($_G['basescript'] == 'forum' && empty($_G['disabledwidthauto'])) { ?>
<ul class="wslct">
<li><a href="javascript:;" onclick="widthauto(this)"><? if(empty($_G['cookie']['widthauto'])) { ?>切换到宽版<? } else { ?>切换到窄版<? } ?></a></li>
</ul>
<? } ?>
</div>
<? } ?>

<div id="nv">
<a href="<? if($_G['uid']) { ?>home.php<? } else { ?>javascript:;<? } ?>" id="qmenu" onmouseover="showMenu(this.id)">我的中心</a>
<ul><?php $mnid = getcurrentnav(); if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <? if($mnid == $nav['navid']) { ?>class="a" <? } ?><?=$nav['nav']?>></li><? } } ?>
</ul>
</div>
<? if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><? if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> <? if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
 <li><?=$module['url']?></li>
 <? } } ?>
</ul>
<? } ?>
<?=$_G['setting']['menunavs']?>
<div id="mu" class="cl">
<? if($_G['setting']['subnavs']) { if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
<ul class="cl <? if($mnid == $navid) { ?>current<? } ?>" id="snav_<?=$navid?>" style="display:<? if($mnid != $navid) { ?>none<? } ?>">
<?=$subnav?>
</ul>
<? } } } ?>
</div><?php echo adshow("subnavbanner/a_mu"); ?></div>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header']; } ?>

<div id="wp" class="wp"><div id="pt" class="bm cl"><? if($_G['setting']['search']) { ?><?php $slist = array(); if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?
$slist[forumfid] = <<<EOF
<li><input type="radio" id="mod_curform" class="pr" name="mod" value="curforum" checked="checked" /><label for="mod_curform" title="搜索本版">搜索本版</label></li>
EOF;
?><? } if($_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?
$slist[portal] = <<<EOF
<li><input type="radio" id="mod_article" class="pr" name="mod" value="portal"
EOF;
 if(CURSCRIPT == 'portal') { 
$slist[portal] .= <<<EOF
 checked="checked"
EOF;
 } 
$slist[portal] .= <<<EOF
 /><label for="mod_article" title="搜索文章">文章</label></li>
EOF;
?><? } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?
$slist[forum] = <<<EOF
<li><input type="radio" id="mod_thread" class="pr" name="mod" value="forum"
EOF;
 if(CURSCRIPT == 'forum' && !$_G['fid']) { 
$slist[forum] .= <<<EOF
 checked="checked"
EOF;
 } 
$slist[forum] .= <<<EOF
 /><label for="mod_thread" title="搜索{$_G['setting']['navs']['2']['navname']}">{$_G['setting']['navs']['2']['navname']}</label></li>
EOF;
?><? } if($_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?
$slist[blog] = <<<EOF
<li><input type="radio" id="mod_blog" class="pr" name="mod" value="blog"
EOF;
 if(CURSCRIPT == 'home' && $do != 'album') { 
$slist[blog] .= <<<EOF
 checked="checked"
EOF;
 } 
$slist[blog] .= <<<EOF
 /><label for="mod_blog" title="搜索日志">日志</label></li>
EOF;
?><? } if($_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?
$slist[album] = <<<EOF
<li><input type="radio" id="mod_album" class="pr" name="mod" value="album"
EOF;
 if(CURSCRIPT == 'home' && $do == 'album') { 
$slist[album] .= <<<EOF
 checked="checked"
EOF;
 } 
$slist[album] .= <<<EOF
 /><label for="mod_album" title="搜索相册">相册</label></li>
EOF;
?><? } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?
$slist[group] = <<<EOF
<li><input type="radio" id="mod_group" class="pr" name="mod" value="group"
EOF;
 if(CURSCRIPT == 'group' || $_G['basescript']=='group') { 
$slist[group] .= <<<EOF
 checked="checked"
EOF;
 } 
$slist[group] .= <<<EOF
 /><label for="mod_group" title="搜索{$_G['setting']['navs']['3']['navname']}">{$_G['setting']['navs']['3']['navname']}</label></li>
EOF;
?><? } ?><?
$slist[user] = <<<EOF
<li><input type="radio" id="mod_user" class="pr" name="mod" value="user" /><label for="mod_user" title="搜索用户">用户</label></li>
EOF;
?>
<? if($slist) { ?>
<div id="sc" class="y">
<form id="scform" method="post" autocomplete="off" onsubmit="searchFocus($('srchtxt'))" action="<?=$_G['siteurl']?>search.php?searchsubmit=yes" target="_blank">
<input type="hidden" name="formhash" value="<?=FORMHASH?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?=$_G['fid']?>" />
<table cellspacing="0" cellpadding="0">
<tr>
<td><a href="search.php" target="_blank" id="sctype" class="showmenu" onclick="showMenu(this.id);return false;">搜索</a></td>
<td><input type="text" name="srchtxt" id="srchtxt" class="px z" value="请输入搜索内容" autocomplete="off" onfocus="searchFocus(this);" onblur="searchBlur(this);" /></td>
<td><button id="search_submit" name="searchsubmit" type="submit" value="true" class="xw1">搜索</button></td>
</tr>
</table>
<div id="sctype_menu" class="p_pop cl" style="display: none">
<ul><? echo implode('', $slist);; ?></ul>
</div>
</form>
<script type="text/javascript">initSearchmenu();</script>
</div>
<? } } ?><div class="z">
<a href="./" class="nvhm" title="首页"><?=$_G['setting']['bbname']?></a> <em>&rsaquo;</em>
<a href="home.php"><?=$_G['setting']['navs']['4']['navname']?></a> <em>&rsaquo;</em>
<a href="home.php?mod=spacecp">设置</a> <em>&rsaquo;</em><? if($actives['profile']) { ?>
个人资料
<? } elseif($actives['verify']) { ?>
认证
<? } elseif($actives['avatar']) { ?>
修改头像
<? } elseif($actives['credit']) { ?>
积分
<? } elseif($actives['usergroup']) { ?>
用户组
<? } elseif($actives['privacy']) { ?>
隐私筛选
<? } elseif($actives['sendmail']) { ?>
邮件提醒
<? } elseif($actives['password']) { ?>
密码安全
<? } elseif($actives['plugin']) { ?>
<?=$_G['setting']['plugins'][$pluginkey][$_G['gp_id']]['name']?>
<? } ?></div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt"><? if($actives['profile']) { ?>
个人资料
<? } elseif($actives['verify']) { ?>
认证
<? } elseif($actives['avatar']) { ?>
修改头像
<? } elseif($actives['credit']) { ?>
积分
<? } elseif($actives['usergroup']) { ?>
用户组
<? } elseif($actives['privacy']) { ?>
隐私筛选
<? } elseif($actives['sendmail']) { ?>
邮件提醒
<? } elseif($actives['password']) { ?>
密码安全
<? } elseif($actives['plugin']) { ?>
<?=$_G['setting']['plugins'][$pluginkey][$_G['gp_id']]['name']?>
<? } ?></h1>
<!--don't close the div here--><? if($validate) { ?>
<p class="tbmu mbm">管理员否决了你的注册申请，请完善注册原因，重新提交申请</p>
<form action="member.php?mod=regverify" method="post" autocomplete="off">
<input type="hidden" value="<?=FORMHASH?>" name="formhash" />
<table summary="个人资料" cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th>否决原因</th>
<td><?=$validate['remark']?></td>
<td>&nbsp;</td>
</tr>
<tr>
<th>注册原因</th>
<td><input type="text" class="px" name="regmessagenew" value="" /></td>
<td>&nbsp;</td>
</tr>
<tr>
<th>&nbsp;</th>
<td colspan="2">
<button type="submit" name="verifysubmit" value="true" class="pn pnp" /><strong>重新提交申请</strong></button>
</td>
</tr>
</table>
</div></div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">设置</h2>
<ul>
<li<?=$actives['avatar']?>><a href="home.php?mod=spacecp&amp;ac=avatar">修改头像</a></li>
<li<?=$actives['profile']?>><a href="home.php?mod=spacecp&amp;ac=profile">个人资料</a></li>
<? if($_G['setting']['verify']['enabled'] || $_G['setting']['my_app_status'] && $_G['setting']['videophoto']) { ?>
<li<?=$actives['verify']?>><a href="<? if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<? } else { ?>home.php?mod=spacecp&ac=videophoto<? } ?>">认证</a></li>
<? } ?>
<li<?=$actives['credit']?>><a href="home.php?mod=spacecp&amp;ac=credit">积分</a></li>
<li<?=$actives['usergroup']?>><a href="home.php?mod=spacecp&amp;ac=usergroup">用户组</a></li>
<li<?=$actives['privacy']?>><a href="home.php?mod=spacecp&amp;ac=privacy">隐私筛选</a></li>
<? if($_G['setting']['sendmailday']) { ?><li<?=$actives['sendmail']?>><a href="home.php?mod=spacecp&amp;ac=sendmail">邮件提醒</a></li><? } ?>
<li<?=$actives['password']?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">密码安全</a></li>
<? if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<? if($_G['gp_id'] == $id) { ?> class="a"<? } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?=$id?>"><?=$module['name']?></a></li><? } } } ?>
</ul>
</div></div>
<? } else { if($operation == 'password') { ?>
<p class="tbmu mbm">你必须填写原密码才能修改下面的资料</p>
<form action="home.php?mod=spacecp&amp;ac=profile" method="post" autocomplete="off" onsubmit="return profilecheck()">
<input type="hidden" value="<?=FORMHASH?>" name="formhash" />
<table summary="个人资料" cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th><strong class="rq" title="必填">*</strong>旧密码</th>
<td><input type="password" name="oldpassword" id="oldpassword" class="px" /></td>
</tr>
<tr>
<th>新密码</th>
<td>
<input type="password" name="newpassword" id="newpassword" class="px" />
<p class="d">如不需要更改密码，此处请留空</p>
</td>
</tr>
<tr>
<th>确认新密码</th>
<td>
<input type="password" name="newpassword2" id="newpassword2"class="px" />
<p class="d">如不需要更改密码，此处请留空</p>
</td>
</tr>
<tr id="contact"<? if($_G['gp_from'] == 'contact') { ?> style="background-color: <?=SPECIALBG?>;"<? } ?>>
<th>Email</th>
<td>
<input type="text" name="emailnew" id="emailnew" value="<?=$space['email']?>" class="px" />
<p class="d">
<? if($space['emailstatus']) { ?>
<img src="<?=IMGDIR?>/mail_active.png" alt="已验证" class="vm" /> <span class="xi1">当前邮箱已经验证激活</span>
<? } else { ?>
<img src="<?=IMGDIR?>/mail_inactive.png" alt="未验证" class="vm" /> <span class="xi1">邮箱等待验证中...</span><br />
								系统已经向该邮箱发送了一封验证激活邮件，请查收邮件，进行验证激活。<br>
								如果没有收到验证邮件，你可以更换一个邮箱，或者<a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password&amp;resend=1" class="xi2">重新接收验证邮件</a>
<? } ?>
</p>
<? if($_G['setting']['regverify'] == 1 && (($_G['group']['grouptype'] == 'member' && $_G['adminid'] == 0) || $_G['groupid'] == 8)) { ?><p class="d">!如更改地址，系统将修改你的密码并重新验证其有效性，请慎用</p><? } ?>
</td>
</tr>

<tr>
<th>安全提问</th>
<td>
<select name="questionidnew" id="questionidnew">
<option value="" selected>保持原有的安全提问和答案</option>
<option value="0">无安全提问</option>
<option value="1">母亲的名字</option>
<option value="2">爷爷的名字</option>
<option value="3">父亲出生的城市</option>
<option value="4">你其中一位老师的名字</option>
<option value="5">你个人计算机的型号</option>
<option value="6">你最喜欢的餐馆名称</option>
<option value="7">驾驶执照最后四位数字</option>
</select>
<p class="d">如果你启用安全提问，登录时需填入相应的项目才能登录</p>
</td>
</tr>

<tr>
<th>回答</th>
<td>
<input type="text" name="answernew" id="answernew" class="px" />
<p class="d">如你设置新的安全提问，请在此输入答案</p>
</td>
</tr>
<? if(checkperm('seccode') && ($secqaacheck || $seccodecheck)) { ?><?php $sectpl = '<tr><th><sec></th><td><sec><p class="d"><sec></p></td>'; include template('common/seccheck'); } ?>
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="pwdsubmit" value="true" class="pn pnp" /><strong>保存</strong></button></td>
</tr>
</table>
<input type="hidden" name="passwordsubmit" value="true" />
</form>
<? } else { ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_profile_top'])) echo $_G['setting']['pluginhooks']['spacecp_profile_top']; ?><ul class="tb cl">
<? if($operation != 'verify') { ?>
<li <?=$opactives['base']?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=base">基本资料</a></li>
<li <?=$opactives['contact']?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=contact">联系方式</a></li>
<li <?=$opactives['edu']?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=edu">教育情况</a></li>
<li <?=$opactives['work']?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=work">工作情况</a></li>
<li <?=$opactives['info']?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=info">个人信息</a></li>
<li <?=$opactives['bbs']?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=bbs"><?=$_G['setting']['navs']['2']['navname']?>信息</a></li>
<? if($_G['setting']['allowspacedomain'] && $_G['setting']['domain']['root']['home'] && checkperm('domainlength')) { ?>
<li <?=$opactives['domain']?>><a href="home.php?mod=spacecp&amp;ac=domain">我的空间域名</a></li>
<? } } else { if($_G['setting']['verify']) { if(is_array($_G['setting']['verify'])) foreach($_G['setting']['verify'] as $vid => $verify) { if($verify['available']) { ?>
<li <?=$opactives['verify'.$vid]?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=verify&amp;vid=<?=$vid?>"><?=$verify['title']?></a></li>
<? } } } if($_G['setting']['my_app_status'] && $_G['setting']['videophoto']) { ?>
<li <?=$opactives['videophoto']?>><a href="home.php?mod=spacecp&amp;ac=videophoto">视频认证</a></li>
<? } } if(!empty($_G['setting']['plugins']['spacecp_profile'])) { if(is_array($_G['setting']['plugins']['spacecp_profile'])) foreach($_G['setting']['plugins']['spacecp_profile'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<? if($_G['gp_id'] == $id) { ?> class="a"<? } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;op=profile&amp;id=<?=$id?>"><?=$module['name']?></a></li><? } } } ?>
</ul><? if($vid) { ?>
<p class="tbms mtm"><? if($showbtn) { ?>以下信息通过审核后将不能再次修改,提交后请耐心等待核查！<? } else { ?>恭喜您，您的认证审核通过，您已不能对下面的资料做相关修改。<? } ?></p>
<? } ?>
<iframe id="frame_profile" name="frame_profile" style="display: none"></iframe>
<form action="<? if($operation != 'plugin') { ?>home.php?mod=spacecp&ac=profile&op=<?=$operation?><? } else { ?>home.php?mod=spacecp&ac=plugin&op=profile&id=<?=$_G['gp_id']?><? } ?>" method="post" enctype="multipart/form-data" autocomplete="off"<? if($operation != 'plugin') { ?> target="frame_profile"<? } ?>>
<input type="hidden" value="<?=FORMHASH?>" name="formhash" />
<? if($_G['gp_vid']) { ?>
<input type="hidden" value="<?=$_G['gp_vid']?>" name="vid" />
<? } ?>
<table cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th>用户名</th>
<td><?=$_G['member']['username']?></td>
<td>&nbsp;</td>
</tr><? if(is_array($settings)) foreach($settings as $key => $value) { if($value['available']) { ?>
<tr>
<th id="th_<?=$key?>"><? if($value['required']) { ?><strong class="rq" title="必填">*</strong><? } ?><?=$value['title']?></th>
<td id="td_<?=$key?>">
<?=$htmls[$key]?>
</td>
<td class="p">
<? if($value['showinthread'] || $vid) { ?>
<input type="hidden" name="privacy[<?=$key?>]" value="3" />
<? } else { ?>
<select name="privacy[<?=$key?>]">
<option value="0"<? if($privacy[$key] == "0") { ?> selected="selected"<? } ?>>公开</option>
<option value="1"<? if($privacy[$key] == "1") { ?> selected="selected"<? } ?>>好友可见</option>
<option value="3"<? if($privacy[$key] == "3") { ?> selected="selected"<? } ?>>保密</option>
</select>
<? } ?>
</td>
</tr>
<? } } if($operation == 'bbs') { if($allowcstatus) { ?>
<tr>
<th id="th_customstatus">自定义头衔</th>
<td id="td_customstatus"><input type="text" value="<?=$space['customstatus']?>" name="customstatus" id="customstatus" class="px" /></td>
<td>&nbsp;</td>
</tr>
<? } if($_G['group']['maxsigsize']) { ?>
<tr>
<th id="th_sightml">个人签名</th>
<td id="td_sightml">
<div class="tedt">
<div class="bar">
<span class="y"><a href="javascript:;" onclick="$('signhtmlpreview').innerHTML = bbcode2html($('sightmlmessage').value)">预览</a></span>
<? if($_G['group']['allowsigbbcode']) { if($_G['group']['allowsigimgcode']) { ?><?php $seditor = array('sightml', array('bold', 'color', 'img', 'link', 'smilies')); } else { ?><?php $seditor = array('sightml', array('bold', 'color', 'link', 'smilies')); } ?><div class="fpd">
<? if(in_array('bold', $seditor['1'])) { ?>
<a href="javascript:;" title="文字加粗" class="fbld"<? if(empty($seditor['2'])) { ?> onclick="seditor_insertunit('<?=$seditor['0']?>', '[b]', '[/b]')"<? } ?>>B</a>
<? } if(in_array('color', $seditor['1'])) { ?>
<a href="javascript:;" title="设置文字颜色" class="fclr" id="<?=$seditor['0']?>forecolor"<? if(empty($seditor['2'])) { ?> onclick="showColorBox(this.id, 2, '<?=$seditor['0']?>');doane(event)"<? } ?>>Color</a>
<? } if(in_array('img', $seditor['1'])) { ?>
<a id="<?=$seditor['0']?>img" href="javascript:;" title="图片" class="fmg"<? if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?=$seditor['0']?>', 'img')"<? } ?>>Image</a>
<? } if(in_array('link', $seditor['1'])) { ?>
<a id="<?=$seditor['0']?>url" href="javascript:;" title="添加链接" class="flnk"<? if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?=$seditor['0']?>', 'url')"<? } ?>>Link</a>
<? } if(in_array('quote', $seditor['1'])) { ?>
<a id="<?=$seditor['0']?>quote" href="javascript:;" title="引用" class="fqt"<? if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?=$seditor['0']?>', 'quote')"<? } ?>>Quote</a>
<? } if(in_array('code', $seditor['1'])) { ?>
<a id="<?=$seditor['0']?>code" href="javascript:;" title="代码" class="fcd"<? if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?=$seditor['0']?>', 'code')"<? } ?>>Code</a>
<? } if(in_array('smilies', $seditor['1'])) { ?>
<a href="javascript:;" class="fsml" id="<?=$seditor['0']?>sml"<? if(empty($seditor['2'])) { ?> onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"<? } ?>>Smilies</a>
<? if(empty($seditor['2'])) { ?>
<script src="data/cache/common_smilies_var.js?<?=VERHASH?>" type="text/javascript" reload="1"></script>
<script type="text/javascript" reload="1">smilies_show('<?=$seditor['0']?>smiliesdiv', <?=$_G['setting']['smcols']?>, '<?=$seditor['0']?>');</script>
<? } } ?>
</div><? } ?>
</div>
<div class="area">
<textarea rows="3" cols="80" name="sightml" id="sightmlmessage" class="pt" onkeydown="ctrlEnter(event, 'profilesubmitbtn');"><?=$space['sightml']?></textarea>
</div>
</div>
<div id="signhtmlpreview"></div>
<script src="<?=$_G['setting']['jspath']?>bbcode.js?<?=VERHASH?>" type="text/javascript"></script>
<script type="text/javascript">var forumallowhtml = 0,allowhtml = 0,allowsmilies = 0,allowbbcode = parseInt('<?=$_G['group']['allowsigbbcode']?>'),allowimgcode = parseInt('<?=$_G['group']['allowsigimgcode']?>');var DISCUZCODE = [];DISCUZCODE['num'] = '-1';DISCUZCODE['html'] = [];</script>
</td>
<td>&nbsp;</td>
</tr>
<? } ?>
<tr>
<th id="th_timeoffset">时区</th>
<td id="td_timeoffset"><?php $timeoffset = array(
		'9999' => '使用系统默认',
		'-12' => '(GMT -12:00) 埃尼威托克岛, 夸贾林环礁',
		'-11' => '(GMT -11:00) 中途岛, 萨摩亚群岛',
		'-10' => '(GMT -10:00) 夏威夷',
		'-9' => '(GMT -09:00) 阿拉斯加',
		'-8' => '(GMT -08:00) 太平洋时间(美国和加拿大), 提华纳',
		'-7' => '(GMT -07:00) 山区时间(美国和加拿大), 亚利桑那',
		'-6' => '(GMT -06:00) 中部时间(美国和加拿大), 墨西哥城',
		'-5' => '(GMT -05:00) 东部时间(美国和加拿大), 波哥大, 利马, 基多',
		'-4' => '(GMT -04:00) 大西洋时间(加拿大), 加拉加斯, 拉巴斯',
		'-3.5' => '(GMT -03:30) 纽芬兰',
		'-3' => '(GMT -03:00) 巴西利亚, 布宜诺斯艾利斯, 乔治敦, 福克兰群岛',
		'-2' => '(GMT -02:00) 中大西洋, 阿森松群岛, 圣赫勒拿岛',
		'-1' => '(GMT -01:00) 亚速群岛, 佛得角群岛 [格林尼治标准时间] 都柏林, 伦敦, 里斯本, 卡萨布兰卡',
		'0' => '(GMT) 卡萨布兰卡，都柏林，爱丁堡，伦敦，里斯本，蒙罗维亚',
		'1' => '(GMT +01:00) 柏林, 布鲁塞尔, 哥本哈根, 马德里, 巴黎, 罗马',
		'2' => '(GMT +02:00) 赫尔辛基, 加里宁格勒, 南非, 华沙',
		'3' => '(GMT +03:00) 巴格达, 利雅得, 莫斯科, 奈洛比',
		'3.5' => '(GMT +03:30) 德黑兰',
		'4' => '(GMT +04:00) 阿布扎比, 巴库, 马斯喀特, 特比利斯',
		'4.5' => '(GMT +04:30) 坎布尔',
		'5' => '(GMT +05:00) 叶卡特琳堡, 伊斯兰堡, 卡拉奇, 塔什干',
		'5.5' => '(GMT +05:30) 孟买, 加尔各答, 马德拉斯, 新德里',
		'5.75' => '(GMT +05:45) 加德满都',
		'6' => '(GMT +06:00) 阿拉木图, 科伦坡, 达卡, 新西伯利亚',
		'6.5' => '(GMT +06:30) 仰光',
		'7' => '(GMT +07:00) 曼谷, 河内, 雅加达',
		'8' => '(GMT +08:00) 北京, 香港, 帕斯, 新加坡, 台北',
		'9' => '(GMT +09:00) 大阪, 札幌, 首尔, 东京, 雅库茨克',
		'9.5' => '(GMT +09:30) 阿德莱德, 达尔文',
		'10' => '(GMT +10:00) 堪培拉, 关岛, 墨尔本, 悉尼, 海参崴',
		'11' => '(GMT +11:00) 马加丹, 新喀里多尼亚, 所罗门群岛',
		'12' => '(GMT +12:00) 奥克兰, 惠灵顿, 斐济, 马绍尔群岛'); ?><select name="timeoffset"><? if(is_array($timeoffset)) foreach($timeoffset as $key => $desc) { ?><option value="<?=$key?>"<? if($key==$space['timeoffset']) { ?> selected="selected"<? } ?>><?=$desc?></option>
<? } ?>
</select>
<p class="mtn">当前时间 : <?php echo dgmdate($_G[timestamp]); ?></p>
<p class="d">如果发现当前显示的时间与你本地时间相差几个小时，那么你需要更改自己的时区设置。</p>
</td>
<td>&nbsp;</td>
</tr>
<? } elseif($operation == 'contact') { ?>
<tr>
<th id="th_sightml">Email</th>
<td id="td_sightml"><?=$space['email']?>&nbsp;(<a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password&amp;from=contact#contact">修改</a>)</td>
<td>&nbsp;</td>
</tr>
<? } if($operation == 'plugin') { ?><?php include(template($_G['gp_id'])); } if($showbtn) { ?>
<tr>
<th>&nbsp;</th>
<td colspan="2">
<input type="hidden" name="profilesubmit" value="true" />
<button type="submit" name="profilesubmitbtn" id="profilesubmitbtn" value="true" class="pn pnp" /><strong>保存</strong></button>
<span id="submit_result" class="rq"></span>						
</td>
</tr>
<? } ?>
</table>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_profile_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_profile_bottom']; ?>
</form>
<script type="text/javascript">
function show_error(fieldid, extrainfo) {
var elem = $('th_'+fieldid);
if(elem) {
elem.className = "rq";
fieldname = elem.innerHTML;
extrainfo = (typeof extrainfo == "string") ? extrainfo : "";
$('submit_result').innerHTML = " 请检查资料项 " + fieldname + extrainfo;
}
}
function show_success() {
showDialog('资料更新成功!', 'notice', '提示信息', null, 0);
setTimeout(function(){
top.window.location.href = top.window.location.href;
}, 3000);
}
</script>
<? } ?>
</div>
</div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">设置</h2>
<ul>
<li<?=$actives['avatar']?>><a href="home.php?mod=spacecp&amp;ac=avatar">修改头像</a></li>
<li<?=$actives['profile']?>><a href="home.php?mod=spacecp&amp;ac=profile">个人资料</a></li>
<? if($_G['setting']['verify']['enabled'] || $_G['setting']['my_app_status'] && $_G['setting']['videophoto']) { ?>
<li<?=$actives['verify']?>><a href="<? if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<? } else { ?>home.php?mod=spacecp&ac=videophoto<? } ?>">认证</a></li>
<? } ?>
<li<?=$actives['credit']?>><a href="home.php?mod=spacecp&amp;ac=credit">积分</a></li>
<li<?=$actives['usergroup']?>><a href="home.php?mod=spacecp&amp;ac=usergroup">用户组</a></li>
<li<?=$actives['privacy']?>><a href="home.php?mod=spacecp&amp;ac=privacy">隐私筛选</a></li>
<? if($_G['setting']['sendmailday']) { ?><li<?=$actives['sendmail']?>><a href="home.php?mod=spacecp&amp;ac=sendmail">邮件提醒</a></li><? } ?>
<li<?=$actives['password']?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">密码安全</a></li>
<? if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<? if($_G['gp_id'] == $id) { ?> class="a"<? } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?=$id?>"><?=$module['name']?></a></li><? } } } ?>
</ul>
</div></div>
<? } ?>
</div>	</div>
<? if(empty($topic) || ($topic['usefooter'])) { ?><?php $focusid = getfocus_rand($_G[basescript]); if($focusid !== null) { ?><?php $focus = $_G['cache']['focus']['data'][$focusid]; ?><div class="focus" id="sitefocus">
<h3 class="flb">
<em><? if($_G['cache']['focus']['title']) { ?><?=$_G['cache']['focus']['title']?><? } else { ?>站长推荐<? } ?></em>
<span><a href="javascript:;" onclick="setcookie('nofocus_<?=$focusid?>', 1, 86400);$('sitefocus').style.display='none'" class="flbc" title="关闭">关闭</a></span>
</h3>
<hr class="l" />
<div class="detail">
<h4><a href="<?=$focus['url']?>" target="_blank"><?=$focus['subject']?></a></h4>
<p>
<? if($focus['image']) { ?>
<a href="<?=$focus['url']?>" target="_blank"><img src="<?=$focus['image']?>" onload="thumbImg(this, 1)" _width="58" _height="58" /></a>
<? } ?>
<?=$focus['summary']?>
</p>
</div>
<hr class="l" />
<a href="<?=$focus['url']?>" class="moreinfo" target="_blank">查看</a>
</div>
<? } ?><?php echo adshow("footerbanner/wp a_f/1"); ?><?php echo adshow("footerbanner/wp a_f/2"); ?><?php echo adshow("footerbanner/wp a_f/3"); ?><?php echo adshow("float/a_fl/1"); ?><?php echo adshow("float/a_fr/2"); ?><?php echo adshow("couplebanner/a_fl a_cb/1"); ?><?php echo adshow("couplebanner/a_fr a_cb/2"); ?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer']; ?>
<div id="ft" class="wp cl">
<div id="flk" class="y">
<p><?php $fnavcount=0; if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver'))) { ?><?=$nav['code']?><span class="pipe">|</span><? } } ?>
<strong><a href="<?=$_G['setting']['siteurl']?>" target="_blank"><?=$_G['setting']['sitename']?></a></strong>
<? if($_G['setting']['icp']) { ?>( <a href="http://www.miitbeian.gov.cn/" target="_blank"><?=$_G['setting']['icp']?></a> )<? } if($_G['setting']['statcode']) { ?><?=$_G['setting']['statcode']?><? } ?>				
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink']; ?>
</p>
<p class="xs0">
GMT<?=$_G['timenow']['offset']?>, <?=$_G['timenow']['time']?>
<span id="debuginfo">
<? if(debuginfo()) { ?>, Processed in <?=$_G['debuginfo']['time']?> second(s), <?=$_G['debuginfo']['queries']?> queries
<? if($_G['gzipcompress']) { ?>, Gzip On<? } if($_G['memory']) { ?>, <? echo ucwords($_G['memory']); ?> On<? } ?>.
<? } ?>
</span>
</p>
</div>
<div id="frt">
<p>Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em><?=$_G['setting']['version']?></em><? if(!empty($_G['setting']['boardlicensed'])) { ?> <a href="http://license.comsenz.com/?pid=1&amp;host=<?=$_SERVER['HTTP_HOST']?>" target="_blank">Licensed</a><? } ?></p>
<p class="xs0">&copy; 2001-2010 <a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a></p>
</div><?php updatesession(); ?></div>
<? } ?>

<ul id="usersetup_menu" class="p_pop" style="display:none;">
<li><a href="home.php?mod=spacecp&amp;ac=avatar">修改头像</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=profile">个人资料</a></li>
<? if($_G['setting']['verify']['enabled'] || $_G['setting']['my_app_status'] && $_G['setting']['videophoto']) { ?>
<li><a href="<? if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<? } else { ?>home.php?mod=spacecp&ac=videophoto<? } ?>">认证</a></li>
<? } ?>
<li><a href="home.php?mod=spacecp&amp;ac=credit">积分</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=usergroup">用户组</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=privacy">隐私筛选</a></li>
<? if($_G['setting']['sendmailday']) { ?>
<li><a href="home.php?mod=spacecp&amp;ac=sendmail">邮件提醒</a></li>
<? } ?>
<li><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">密码安全</a></li>
<? if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<? if($_G['gp_id'] == $id) { ?> class="a"<? } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?=$id?>"><?=$module['name']?></a></li><? } } } ?>
</ul>

<? if($upgradecredit !== false) { ?>
<div id="g_upmine_menu" class="g_up" style="display:none;">
<div class="crly">
积分 <?=$_G['member']['credits']?>, 距离下一级还需 <?=$upgradecredit?> 积分
</div>
<div class="mncr"></div>
</div>
<? } if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?=$_G['timestamp']?>" type="text/javascript"></script>
<? } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?=$_G['timestamp']?>" type="text/javascript"></script>
<? } } if($_GET['diy'] == 'yes' && ($_G['mod'] == 'topic' || $_G['group']['allowdiy']) && (empty($do) || $do != 'index') && !empty($_G['style']['tplfile'])) { ?>
<script src="<?=$_G['setting']['jspath']?>common_diy.js?<?=VERHASH?>" type="text/javascript"></script>
<script src="<?=$_G['setting']['jspath']?>portal_diy.js?<?=VERHASH?>" type="text/javascript"></script>
<? } if($_GET['diy'] == 'yes' && $space['self'] && $_G['mod'] == 'space' && $do == 'index') { ?>
<script src="<?=$_G['setting']['jspath']?>common_diy.js?<?=VERHASH?>" type="text/javascript"></script>
<script src="<?=$_G['setting']['jspath']?>space_diy.js?<?=VERHASH?>" type="text/javascript"></script>
<? } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_G['gp_do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<? } ?><?php output(); ?></body>
</html>