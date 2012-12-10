<?php
include "D:/wamp/www/phpsay/class/phpSayTemplateExtensions/rewrite_category.php";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="keywords" content="创建贴吧, <?php
echo $_obj['siteName'];
?>
, PhpSay, 贴吧, 说吧" /><meta name="description" content="创建贴吧, 分类目录, <?php
echo $_obj['siteName'];
?>
, PhpSay, 贴吧, 说吧" /><title>创建贴吧_<?php
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
?></dl></li></ul><div id="mask" class="mask"></div></form></div><div class="k"></div> <div id="main"><div class="guid"><a href="./"><?php
echo $_obj['siteName'];
?>
</a> &gt; <b>创建<?php
if (!empty($_obj['searchWord'])){
?><span style="color:red"><?php
echo $_obj['searchWord'];
?>
</span><?php
}
?>吧</b></div><div id="B"><div id="L"><div class="nameleft">吧目录</div><div class="nameleftcont"><ul><?php
if (!empty($_obj['category'])){
if (!is_array($_obj['category']))
$_obj['category']=array(array('category'=>$_obj['category']));
$_tmp_arr_keys=array_keys($_obj['category']);
if ($_tmp_arr_keys[0]!='0')
$_obj['category']=array(0=>$_obj['category']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['category'] as $rowcnt=>$v) {
if (is_array($v)) $category=$v; else $category=array();
$category['ROWVAL']=$v;
$category['ROWCNT']=$rowcnt;
$category['ROWBIT']=$rowcnt%2;
$_obj=&$category;
?><li><a href="<?php
echo phpsay_rewrite_category($_obj['cid']);
?>
"><?php
echo $_obj['name'];
?>
</a></li><?php
}
$_obj=$_stack[--$_stack_cnt];}
?></ul></div><div class="k"></div></div><div id="R"><div class="nameset">创建<?php
if (!empty($_obj['searchWord'])){
?><span style="color:red"><?php
echo $_obj['searchWord'];
?>
</span><?php
}
?>吧</div><div class="namecont"><form name="newForm" id="newForm" onsubmit="return false;"><table width="90%" align="center" cellpadding="4" cellspacing="4" style="padding:20px 10px;"><tr><td></td><td height="30" valign="top"><?php
if ($_obj['createAllow'] == "1"){
?><?php
if (!empty($_obj['searchWord'])){
?>恭喜您发现了新大陆，您是第一个到达“<span style="color:red"><?php
echo $_obj['searchWord'];
?>
</span>”吧的人！（创建新吧需审核）<?php
} else {
?>吧成功创建并审核通过后，希望您以后常来这里和其他网友交流，您还可以申请当吧主。<?php
}
?><?php
} else {
?><?php
if (!empty($_obj['searchWord'])){
?>“<span style="color:red"><?php
echo $_obj['searchWord'];
?>
</span>”吧不存在，<u>系统当前禁止创建新吧！</u><?php
} else {
?><span style="color:red">系统当前禁止创建新吧！</span><?php
}
?><?php
}
?></td></tr><tr><td align="right" width="13%">吧 名 称：</td><td><input type="text" name="bar" id="bar" class="bar_inp" value="<?php
echo $_obj['searchWord'];
?>
" maxlength="15"<?php
if ($_obj['createAllow'] != "1"){
?> disabled<?php
}
?> /></td></tr><tr><td align="right" valign="top">吧 简 介：</td><td>不超过90个字<br><textarea name="intro" id="intro" class="bar_inp" rows="8" cols=""<?php
if ($_obj['createAllow'] != "1"){
?> disabled<?php
}
?>></textarea></td></tr><tr><td></td><td><input type="button" value="申请创建" <?php
if ($_obj['createAllow'] == "1"){
?>onclick="create();"<?php
} else {
?>disabled<?php
}
?> class="btn_login"></td></tr></table></form></div></div></div></div><div class="k"></div><div id="footer" class="center blue" style="padding:10px 0 4px 0;">Powered by <a href="http://www.phpsay.com" target="_blank"><?php
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