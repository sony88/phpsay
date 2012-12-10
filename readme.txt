感谢您选择 PhpSay 2.1 !

官方网站 http://www.phpsay.com

官方社区 http://www.phpsay.net

安装环境需求：PHP >= 5.0; MYSQL >= 5.0

phpSay实现伪静态的URl重写规则如下：
	RewriteRule ^(.*)/category-([0-9]+)-([0-9]+)\.html\?*(.*)$ $1/category\.php\?cid=$2&page=$3&$4
	RewriteRule ^(.*)/bar-([0-9]+)-([0-9]+)\.html\?*(.*)$ $1/forum\.php\?fid=$2&page=$3&$4
	RewriteRule ^(.*)/topic-([0-9]+)-([0-9]+)\.html\?*(.*)$ $1/topic\.php\?tid=$2&page=$3&$4
	RewriteRule ^(.*)/member-([0-9]+)\.html\?*(.*)$ $1/member\.php\?uid=$2&$3

全新安装指南：

1. 上传所有程序（update.php除外），将 database 目录所有文件设为可写，将 _cache 及 attachment(含子目录) 目录设为可写，将 ./admin/_cache 及 ./admin/_ban 目录设为可写，将 ./admin/include/config.php 设为可写。
2. 运行 install.php 安装！
3. 安装成功后别忘了删除 install.php 文件！
4. 进入系统管理后台进行相关设置。


升级至2.1指南：

1. 上传所有程序（install.php除外）。注意 database 目录下的 config_mysql.php 和 admin/include/ 目录下的 config.php 无需覆盖
2. 运行updata.php
3. 删除updata.php
4. 进入系统管理后台进行相关设置。

如有疑问，请访问官方讨论吧 http://www.phpsay.net

PhpSay 官方QQ群：7678919 （可容纳200人，每天清人）

商业版本：888元人民币   （联系QQ 22295955，本QQ不提供免费的技术支持 ）