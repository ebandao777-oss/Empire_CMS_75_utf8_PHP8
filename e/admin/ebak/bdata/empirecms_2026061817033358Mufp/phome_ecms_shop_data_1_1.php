<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_shop_data_1`;");
E_C("CREATE TABLE `phome_ecms_shop_data_1` (
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
E_D("replace into `phome_ecms_shop_data_1` values('1','46','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('2','46','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('3','46','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('4','46','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('5','46','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('6','46','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('7','47','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('8','47','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('9','47','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('10','47','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('11','47','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('12','47','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('13','48','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('14','48','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('15','48','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('16','48','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('17','48','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('18','48','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('19','49','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('20','49','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('21','49','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('22','49','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('23','49','','1','7','0','0','');");
E_D("replace into `phome_ecms_shop_data_1` values('24','49','','1','7','0','0','');");

@include("../../inc/footer.php");
?>