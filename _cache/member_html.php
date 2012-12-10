<?php
include "D:/wamp/www/phpsay/class/phpSayTemplateExtensions/rewrite_member.php";
include "D:/wamp/www/phpsay/class/phpSayTemplateExtensions/avatar.php";
include "D:/wamp/www/phpsay/class/phpSayTemplateExtensions/rewrite_forum.php";
include "D:/wamp/www/phpsay/class/phpSayTemplateExtensions/rewrite_topic.php";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="keywords" content="<?php
echo $_obj['memberArr']['name'];
?>
, 用户资料, <?php
echo $_obj['siteName'];
?>
, PhpSay, 贴吧, 说吧" /><meta name="description" content="<?php
echo $_obj['memberArr']['name'];
?>
, 用户资料, <?php
echo $_obj['siteName'];
?>
, PhpSay, 贴吧, 说吧" /><title><?php
echo $_obj['memberArr']['name'];
?>
_用户资料_<?php
echo $_obj['siteName'];
?>
</title><link rel="stylesheet" type="text/css" href="./css/w3c.css" /><link rel="stylesheet" type="text/css" href="./css/bar.css" /><link rel="stylesheet" type="text/css" href="./css/thickbox.css" /><script type="text/javascript" src="./js/jquery.js"></script><script type="text/javascript" src="./js/thickbox.js"></script><script type="text/javascript" src="./js/phpsay.js"></script></head><body><div id="header"><div class="k"></div><form name="searchForm" method="get" action="./search.php" onsubmit="return SearchSubmit(this)"><ul class="search"><li><a href="./"><img src="./images/slogo.gif" alt="" title="到首页" border="0" class="logo ft_l" /></a></li><li style="margin-top:9px;"><input type="text" id="kw" name="wd" maxlength="100" value="<?php
echo $_obj['searchWord'];
?>
" class="s disableAutoComplete" /><br /><label for="proto1"><input type="radio"<?php
if ($_obj['searchType'] == "1"){
?> checked="checked"<?php
}
?> value="1" name="tb" id="proto1" />进入吧</label><label for="proto2"><input type="radio"<?php
if ($_obj['searchType'] == "2"){
?> checked="checked"<?php
}
?> value="2" name="tb" id="proto2" />帖子</label><label for="proto3"><input type="radio"<?php
if ($_obj['searchType'] == "3"){
?> checked="checked"<?php
}
?> value="3" name="tb" id="proto3" />作者</label></li><li style="margin-top:9px;"><input type="submit" value="搜 索" class="bt" /></li><li style="margin-top:9px;"><dl><?php
if ($_obj['loginArr']['state'] == "1"){
?><?php
if ($_obj['loginArr']['group'] == "6"){
?><dd><a href="./admin.php" target="_blank">系统管理</a></dd><?php
}
?><dd><a href="./profile.php" target="_top">个人中心</a></dd><dd><a href="./login.php?do=logout" target="_top">退出</a></dd><?php
} else {
?><dd><a href="./register.php?height=216&width=296&modal=true" class="thickbox">注册</a></dd><dd><a href="./login.php?height=142&width=308" class="thickbox" title="登录到<?php
echo $_obj['siteName'];
?>
">登录</a></dd><dd><a href="./recoverpass.php?height=175&width=282&modal=true" class="thickbox">忘记密码</a></dd><?php
}
?></dl></li></ul><div id="mask" class="mask"></div></form></div><div class="k"></div><div id="main"><div class="guid"><a href="./"><?php
echo $_obj['siteName'];
?>
</a> &gt; <a href="<?php
echo phpsay_rewrite_member($_obj['memberArr']['uid']);
?>
"><?php
echo $_obj['memberArr']['name'];
?>
</a></div><div id="B"><div id="L"><div class="nameleft">用户信息</div><div class="nameleftcont"> <table width="100%" cellspacing="0" cellpadding="0"><tr><td rowspan="2" width="45" align="right"><img src="<?php
echo phpsay_avatar($_obj['memberArr']['uid']);
?>
" alt="头像" title="<?php
echo $_obj['memberArr']['name'];
?>
" style="border:1px solid #b2d0ea;width:40px;height:40px" /></td><td height="25" align="left">&nbsp;&nbsp;<?php
echo $_obj['memberArr']['name'];
?>
</td></tr><tr><td height="25" align="left">&nbsp;&nbsp;<?php
echo $_obj['groupArr']['name'];
?>
</td></tr><tr><td colspan="2" height="25" align="left">&nbsp;&nbsp;&nbsp;&nbsp;用户积分：<?php
echo $_obj['memberArr']['integral'];
?>
</td></tr><tr><td colspan="2" height="25" align="left">&nbsp;&nbsp;&nbsp;&nbsp;注册时间：<?php
echo $_obj['memberArr']['regdate'];
?>
</td></tr><tr><td colspan="2" height="25" align="left">&nbsp;&nbsp;&nbsp;&nbsp;上次登录：<?php
echo $_obj['memberArr']['lastdate'];
?>
</td></tr></table></div><?php
if (!empty($_obj['userManage'])){
?><div class="nameleft2">管理的吧</div><div class="nameleft2cont"><ul><?php
if (!empty($_obj['userManage'])){
if (!is_array($_obj['userManage']))
$_obj['userManage']=array(array('userManage'=>$_obj['userManage']));
$_tmp_arr_keys=array_keys($_obj['userManage']);
if ($_tmp_arr_keys[0]!='0')
$_obj['userManage']=array(0=>$_obj['userManage']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['userManage'] as $rowcnt=>$v) {
if (is_array($v)) $userManage=$v; else $userManage=array();
$userManage['ROWVAL']=$v;
$userManage['ROWCNT']=$rowcnt;
$userManage['ROWBIT']=$rowcnt%2;
$_obj=&$userManage;
?><li><a href="<?php
echo phpsay_rewrite_forum($_obj['fid']);
?>
" target="_blank"><?php
echo $_obj['fname'];
?>
</a></li><?php
}
$_obj=$_stack[--$_stack_cnt];}
?></ul></div><?php
}
?><div class="k"></div></div><div id="R"><div class="nameset"><?php
echo $_obj['memberArr']['name'];
?>
最近发表的主题</div><div class="namecont"><table width="100%" cellspacing="0" cellpadding="0"><tr class="tr1"><td class="td1" width="60%">主题</td><td width="15%">发表时间</td><td width="10%">回复 / 查看</td></tr><?php
if (!empty($_obj['authorTopic'])){
if (!is_array($_obj['authorTopic']))
$_obj['authorTopic']=array(array('authorTopic'=>$_obj['authorTopic']));
$_tmp_arr_keys=array_keys($_obj['authorTopic']);
if ($_tmp_arr_keys[0]!='0')
$_obj['authorTopic']=array(0=>$_obj['authorTopic']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['authorTopic'] as $rowcnt=>$v) {
if (is_array($v)) $authorTopic=$v; else $authorTopic=array();
$authorTopic['ROWVAL']=$v;
$authorTopic['ROWCNT']=$rowcnt;
$authorTopic['ROWBIT']=$rowcnt%2;
$_obj=&$authorTopic;
?><tr><td class="td2"><a href="<?php
echo phpsay_rewrite_topic($_obj['tid']);
?>
" target="_blank"><?php
echo $_obj['title'];
?>
</a></td><td><?php
echo $_obj['dateline'];
?>
</td><td><?php
echo $_obj['replies'];
?>
 / <?php
echo $_obj['views'];
?>
</td></tr><tr class="td3"><td colspan="3"></td></tr><?php
}
$_obj=$_stack[--$_stack_cnt];}
?><tr><td colspan="3" class="td2" align="center"><a href="<?php
echo $_stack[0]['siteCatalog'];
?>
search.php?wd=<?php
echo $_obj['memberArr']['name'];
?>
&tb=4&id=<?php
echo $_obj['memberArr']['uid'];
?>
">查看更多由<?php
echo $_obj['memberArr']['name'];
?>
发表的主题&gt;&gt;&gt;</a></td></tr></table></div><div class="nameset" style="margin-top:10px;"><?php
echo $_obj['memberArr']['name'];
?>
最近回复的帖子</div><div class="namecont"><table width="100%" cellspacing="0" cellpadding="0"><tr class="tr1"><td class="td1" width="60%">回复主题</td><td width="15%">回复时间</td><td width="10%">顶 / 砸 / 飘过</td></tr><?php
if (!empty($_obj['authorReply'])){
if (!is_array($_obj['authorReply']))
$_obj['authorReply']=array(array('authorReply'=>$_obj['authorReply']));
$_tmp_arr_keys=array_keys($_obj['authorReply']);
if ($_tmp_arr_keys[0]!='0')
$_obj['authorReply']=array(0=>$_obj['authorReply']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['authorReply'] as $rowcnt=>$v) {
if (is_array($v)) $authorReply=$v; else $authorReply=array();
$authorReply['ROWVAL']=$v;
$authorReply['ROWCNT']=$rowcnt;
$authorReply['ROWBIT']=$rowcnt%2;
$_obj=&$authorReply;
?><tr><td class="td2"><a href="<?php
echo $_stack[0]['siteCatalog'];
?>
redirect.php?pid=<?php
echo $_obj['pid'];
?>
" target="_blank"><?php
echo $_obj['subject'];
?>
</a></td><td><?php
echo $_obj['dateline'];
?>
</td><td><?php
echo $_obj['up'];
?>
 / <?php
echo $_obj['down'];
?>
 / <?php
echo $_obj['wave'];
?>
</td></tr><tr class="td3"><td colspan="3"></td></tr><?php
}
$_obj=$_stack[--$_stack_cnt];}
?></table></div></div></div></div><div class="k"></div><div id="footer" class="center blue" style="padding:10px 0 4px 0;">Powered by <a href="http://www.phpsay.com" target="_blank"><?php
echo $_obj['codeName'];
?>
</a> <?php
echo $_obj['codeVersion'];
?>
, Copyright &copy; 2006～2010 <a href="http://www.phpsay.com" target="_blank">PHPSay.com</a> 版权所有<?php
if (!empty($_obj['siteIcp'])){
?> <a href="http://www.miibeian.gov.cn/" target="_blank"><?php
echo $_obj['siteIcp'];
?>
</a><?php
}
?><script type="text/javascript"> var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-6933823-13']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();</script></div></body></html>