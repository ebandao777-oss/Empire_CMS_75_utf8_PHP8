<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_photo_index`;");
E_C("CREATE TABLE `phome_ecms_photo_index` (
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_photo_index` values('1','52','1','1355124443','1355124443','1355124443','1');");
E_D("replace into `phome_ecms_photo_index` values('2','53','1','1355124444','1355124444','1355124444','1');");
E_D("replace into `phome_ecms_photo_index` values('3','53','1','1355124445','1355124445','1355124445','1');");
E_D("replace into `phome_ecms_photo_index` values('4','53','1','1355124446','1355124446','1355124446','1');");
E_D("replace into `phome_ecms_photo_index` values('5','54','1','1355124447','1355124447','1355124447','1');");
E_D("replace into `phome_ecms_photo_index` values('6','52','1','1355124448','1355124448','1355124448','1');");
E_D("replace into `phome_ecms_photo_index` values('7','52','1','1355124449','1355124449','1355124449','1');");

@include("../../inc/footer.php");
?>