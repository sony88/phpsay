<?php
include "D:/wamp/www/phpsay/class/phpSayTemplateExtensions/rewrite_topic.php";
include "D:/wamp/www/phpsay/class/phpSayTemplateExtensions/rewrite_forum.php";
include "D:/wamp/www/phpsay/class/phpSayTemplateExtensions/rewrite_member.php";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="keywords" content="帖子搜索, <?php
echo $_obj['siteName'];
?>
, PhpSay, 贴吧, 说吧" /><meta name="description" content="帖子搜索, 分类目录, <?php
echo $_obj['siteName'];
?>
, PhpSay, 贴吧, 说吧" /><title>搜索_<?php
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
</a> &gt; <b>站内搜索</b></div><div id="B"><div class="nameset">找到相关数据<?php
echo $_obj['searchArr']['TopicNum'];
?>
条，用时<?php
echo $_obj['searchTime'];
?>
秒</div><div class="namecont"><table width="100%" align="center" cellpadding="0" cellspacing="1"><tr class="tr1"><td class="td1" width="*">标题</td><td class="td1" width="14%">贴吧</td><td class="td1" width="13%">作者</td><td class="td1" width="10%" align="center">回复/查看</td><td class="td1" width="13%" align="right">最后发表</td></tr><?php
if (!empty($_obj['searchArr']['Topic'])){
if (!is_array($_obj['searchArr']['Topic']))
$_obj['searchArr']['Topic']=array(array('Topic'=>$_obj['searchArr']['Topic']));
$_tmp_arr_keys=array_keys($_obj['searchArr']['Topic']);
if ($_tmp_arr_keys[0]!='0')
$_obj['searchArr']['Topic']=array(0=>$_obj['searchArr']['Topic']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['searchArr']['Topic'] as $rowcnt=>$v) {
if (is_array($v)) $Topic=$v; else $Topic=array();
$Topic['ROWVAL']=$v;
$Topic['ROWCNT']=$rowcnt;
$Topic['ROWBIT']=$rowcnt%2;
$_obj=&$Topic;
?><tr><td class="td2"><a href="<?php
echo phpsay_rewrite_topic($_obj['tid']);
?>
" target="_blank"><?php
echo $_obj['subject'];
?>
</a></td><td class="td2"><a href="<?php
echo phpsay_rewrite_forum($_obj['fid']);
?>
" target="_blank"><?php
echo $_obj['fname'];
?>
</a></td><td class="td2"><?php
if ($_obj['authorid'] > "0"){
?><a href="<?php
echo phpsay_rewrite_member($_obj['authorid']);
?>
" target="_blank"><?php
echo $_obj['author'];
?>
</a><?php
} else {
?><?php
echo $_obj['author'];
?>
<?php
}
?><br><?php
echo $_obj['dateline'];
?>
</td><td class="td2" align="center"><?php
echo $_obj['replies'];
?>
 / <?php
echo $_obj['views'];
?>
</td><td class="td2" align="right"><?php
echo $_obj['lasttime'];
?>
<br><?php
if ($_obj['lastauthorid'] > "0"){
?>by <a href="<?php
echo phpsay_rewrite_member($_obj['lastauthorid']);
?>
" target="_blank"><?php
echo $_obj['lastauthor'];
?>
</a><?php
} else {
?>by <u><?php
echo $_obj['lastauthor'];
?>
</u><?php
}
?></td></tr><tr class="td3"><td colspan="5"></td></tr><?php
}
$_obj=$_stack[--$_stack_cnt];}
?><tr><td colspan="5" class="td4"><?php
if (!empty($_obj['searchArr']['Page']['pageList'])){
?><?php
echo $_obj['searchArr']['Page']['pageList'];
?>
<?php
} else {
?><b>1</b><?php
}
?></td></tr></table></div></div></div><div class="k"></div><div id="footer" class="center blue" style="padding:10px 0 4px 0;">Powered by <a href="http://www.phpsay.com" target="_blank"><?php
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