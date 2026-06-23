<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_flash_index`;");
E_C("CREATE TABLE `phome_ecms_flash_index` (
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_flash_index` values('1','50','1','1355124444','1355124444','1355124444','1');");
E_D("replace into `phome_ecms_flash_index` values('2','50','1','1355124445','1355124445','1355124445','1');");
E_D("replace into `phome_ecms_flash_index` values('3','50','1','1355124446','1355124446','1355124446','1');");
E_D("replace into `phome_ecms_flash_index` values('4','50','1','1355124447','1355124447','1355124447','1');");
E_D("replace into `phome_ecms_flash_index` values('5','50','1','1355124448','1355124448','1355124448','1');");
E_D("replace into `phome_ecms_flash_index` values('6','50','1','1355124449','1355124449','1355124449','1');");
E_D("replace into `phome_ecms_flash_index` values('7','51','1','1355124450','1355124450','1355124450','1');");
E_D("replace into `phome_ecms_flash_index` values('8','51','1','1355124451','1355124451','1355124451','1');");
E_D("replace into `phome_ecms_flash_index` values('9','51','1','1355124452','1355124452','1355124452','1');");
E_D("replace into `phome_ecms_flash_index` values('10','51','1','1355124453','1355124453','1355124453','1');");
E_D("replace into `phome_ecms_flash_index` values('11','51','1','1355124454','1355124454','1355124454','1');");
E_D("replace into `phome_ecms_flash_index` values('12','51','1','1355124455','1355124455','1355124455','1');");

@include("../../inc/footer.php");
?>