<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_flash_data_1`;");
E_C("CREATE TABLE `phome_ecms_flash_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` char(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_flash_data_1` values('1','50','','0','5','0','0','');");
E_D("replace into `phome_ecms_flash_data_1` values('2','50','','0','5','0','0','');");
E_D("replace into `phome_ecms_flash_data_1` values('3','50','','0','5','0','0','');");
E_D("replace into `phome_ecms_flash_data_1` values('4','50','','0','5','0','0','');");
E_D("replace into `phome_ecms_flash_data_1` values('5','50','','0','5','0','0','');");
E_D("replace into `phome_ecms_flash_data_1` values('6','50','','0','5','0','0','');");
E_D("replace into `phome_ecms_flash_data_1` values('7','51','','0','5','0','0','');");
E_D("replace into `phome_ecms_flash_data_1` values('8','51','','0','5','0','0','');");
E_D("replace into `phome_ecms_flash_data_1` values('9','51','','0','5','0','0','');");
E_D("replace into `phome_ecms_flash_data_1` values('10','51','','0','5','0','0','');");
E_D("replace into `phome_ecms_flash_data_1` values('11','51','','0','5','0','0','');");
E_D("replace into `phome_ecms_flash_data_1` values('12','51','','0','5','0','0','');");

@include("../../inc/footer.php");
?>