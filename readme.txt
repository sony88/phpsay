��л��ѡ�� PhpSay 2.1 !

�ٷ���վ http://www.phpsay.com

�ٷ����� http://www.phpsay.net

��װ��������PHP >= 5.0; MYSQL >= 5.0

phpSayʵ��α��̬��URl��д�������£�
	RewriteRule ^(.*)/category-([0-9]+)-([0-9]+)\.html\?*(.*)$ $1/category\.php\?cid=$2&page=$3&$4
	RewriteRule ^(.*)/bar-([0-9]+)-([0-9]+)\.html\?*(.*)$ $1/forum\.php\?fid=$2&page=$3&$4
	RewriteRule ^(.*)/topic-([0-9]+)-([0-9]+)\.html\?*(.*)$ $1/topic\.php\?tid=$2&page=$3&$4
	RewriteRule ^(.*)/member-([0-9]+)\.html\?*(.*)$ $1/member\.php\?uid=$2&$3

ȫ�°�װָ�ϣ�

1. �ϴ����г���update.php���⣩���� database Ŀ¼�����ļ���Ϊ��д���� _cache �� attachment(����Ŀ¼) Ŀ¼��Ϊ��д���� ./admin/_cache �� ./admin/_ban Ŀ¼��Ϊ��д���� ./admin/include/config.php ��Ϊ��д��
2. ���� install.php ��װ��
3. ��װ�ɹ��������ɾ�� install.php �ļ���
4. ����ϵͳ�����̨����������á�


������2.1ָ�ϣ�

1. �ϴ����г���install.php���⣩��ע�� database Ŀ¼�µ� config_mysql.php �� admin/include/ Ŀ¼�µ� config.php ���踲��
2. ����updata.php
3. ɾ��updata.php
4. ����ϵͳ�����̨����������á�

�������ʣ�����ʹٷ����۰� http://www.phpsay.net

PhpSay �ٷ�QQȺ��7678919 ��������200�ˣ�ÿ�����ˣ�

��ҵ�汾��888Ԫ�����   ����ϵQQ 22295955����QQ���ṩ��ѵļ���֧�� ��