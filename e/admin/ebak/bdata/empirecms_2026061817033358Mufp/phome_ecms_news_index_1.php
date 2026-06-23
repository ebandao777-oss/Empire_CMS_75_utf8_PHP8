<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('1','35','1','1355124441','1355124441','1355124441','1');");
E_D("replace into `phome_ecms_news_index` values('2','35','1','1355124442','1355124442','1355124442','1');");
E_D("replace into `phome_ecms_news_index` values('3','35','1','1355124443','1355124443','1355124443','1');");
E_D("replace into `phome_ecms_news_index` values('4','35','1','1355124444','1355124444','1355124444','1');");
E_D("replace into `phome_ecms_news_index` values('5','35','1','1355124445','1355124445','1355124445','1');");
E_D("replace into `phome_ecms_news_index` values('6','35','1','1355124446','1355124446','1355124446','1');");
E_D("replace into `phome_ecms_news_index` values('7','35','1','1355124447','1355124447','1355124447','1');");
E_D("replace into `phome_ecms_news_index` values('8','35','1','1355124448','1355124448','1355124448','1');");
E_D("replace into `phome_ecms_news_index` values('9','35','1','1355124449','1355124449','1355124449','1');");
E_D("replace into `phome_ecms_news_index` values('10','35','1','1355124450','1355124450','1355124450','1');");
E_D("replace into `phome_ecms_news_index` values('11','35','1','1355124451','1355124451','1355124451','1');");
E_D("replace into `phome_ecms_news_index` values('12','35','1','1355124452','1355124452','1355124452','1');");
E_D("replace into `phome_ecms_news_index` values('13','35','1','1355124453','1355124453','1355124453','1');");
E_D("replace into `phome_ecms_news_index` values('14','35','1','1355124454','1355124454','1355124454','1');");
E_D("replace into `phome_ecms_news_index` values('15','35','1','1355124455','1355124455','1355124455','1');");
E_D("replace into `phome_ecms_news_index` values('61','34','1','1355124501','1355124501','1355124501','1');");
E_D("replace into `phome_ecms_news_index` values('62','34','1','1355124502','1355124502','1355124502','1');");
E_D("replace into `phome_ecms_news_index` values('63','34','1','1355124503','1355124503','1355124503','1');");
E_D("replace into `phome_ecms_news_index` values('64','34','1','1355124504','1355124504','1355124504','1');");
E_D("replace into `phome_ecms_news_index` values('65','34','1','1355124505','1355124505','1355124505','1');");
E_D("replace into `phome_ecms_news_index` values('66','34','1','1355124506','1355124506','1355124506','1');");
E_D("replace into `phome_ecms_news_index` values('67','34','1','1355124507','1355124507','1355124507','1');");
E_D("replace into `phome_ecms_news_index` values('68','34','1','1355124508','1355124508','1355124508','1');");
E_D("replace into `phome_ecms_news_index` values('69','34','1','1355124509','1355124509','1781773334','1');");
E_D("replace into `phome_ecms_news_index` values('70','35','1','1355124510','1355124510','1355124510','1');");
E_D("replace into `phome_ecms_news_index` values('71','37','1','1355124511','1355124511','1355124511','1');");
E_D("replace into `phome_ecms_news_index` values('72','35','1','1355124512','1355124512','1355124512','1');");
E_D("replace into `phome_ecms_news_index` values('73','36','1','1355124513','1355124513','1355124513','1');");
E_D("replace into `phome_ecms_news_index` values('74','36','1','1355124514','1355124514','1355124514','1');");
E_D("replace into `phome_ecms_news_index` values('75','36','1','1355124515','1355124515','1355124515','1');");
E_D("replace into `phome_ecms_news_index` values('76','36','1','1355124516','1355124516','1355124516','1');");
E_D("replace into `phome_ecms_news_index` values('77','37','1','1355124517','1355124517','1355124517','1');");
E_D("replace into `phome_ecms_news_index` values('78','37','1','1355124518','1355124518','1781773371','1');");

@include("../../inc/footer.php");
?>