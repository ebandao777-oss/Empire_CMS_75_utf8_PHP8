<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_info_index`;");
E_C("CREATE TABLE `phome_ecms_info_index` (
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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_info_index` values('1','11','1','1355124448','1355124448','1355124448','1');");
E_D("replace into `phome_ecms_info_index` values('2','11','1','1355124449','1355124449','1355124449','1');");
E_D("replace into `phome_ecms_info_index` values('3','11','1','1355124450','1355124450','1355124450','1');");
E_D("replace into `phome_ecms_info_index` values('4','12','1','1355124451','1355124451','1355124451','1');");
E_D("replace into `phome_ecms_info_index` values('5','12','1','1355124452','1355124452','1355124452','1');");
E_D("replace into `phome_ecms_info_index` values('6','12','1','1355124453','1355124453','1355124453','1');");
E_D("replace into `phome_ecms_info_index` values('7','14','1','1355124454','1355124454','1355124454','1');");
E_D("replace into `phome_ecms_info_index` values('8','15','1','1355124455','1355124455','1355124455','1');");
E_D("replace into `phome_ecms_info_index` values('9','15','1','1355124456','1355124456','1355124456','1');");
E_D("replace into `phome_ecms_info_index` values('10','18','1','1355124457','1355124457','1355124457','1');");
E_D("replace into `phome_ecms_info_index` values('11','18','1','1355124458','1355124458','1355124458','1');");
E_D("replace into `phome_ecms_info_index` values('12','18','1','1355124459','1355124459','1355124459','1');");
E_D("replace into `phome_ecms_info_index` values('13','19','1','1355124460','1355124460','1355124460','1');");
E_D("replace into `phome_ecms_info_index` values('14','19','1','1355124461','1355124461','1355124461','1');");
E_D("replace into `phome_ecms_info_index` values('15','19','1','1355124462','1355124462','1355124462','1');");
E_D("replace into `phome_ecms_info_index` values('16','20','1','1355124463','1355124463','1355124463','1');");
E_D("replace into `phome_ecms_info_index` values('17','20','1','1355124464','1355124464','1355124464','1');");
E_D("replace into `phome_ecms_info_index` values('18','20','1','1355124465','1355124465','1355124465','1');");
E_D("replace into `phome_ecms_info_index` values('19','20','1','1355124466','1355124466','1355124466','1');");
E_D("replace into `phome_ecms_info_index` values('20','23','1','1355124467','1355124467','1355124467','1');");
E_D("replace into `phome_ecms_info_index` values('21','23','1','1355124468','1355124468','1355124468','1');");
E_D("replace into `phome_ecms_info_index` values('22','23','1','1355124469','1355124469','1355124469','1');");
E_D("replace into `phome_ecms_info_index` values('23','23','1','1355124470','1355124470','1355124470','1');");
E_D("replace into `phome_ecms_info_index` values('24','23','1','1355124471','1355124471','1355124471','1');");
E_D("replace into `phome_ecms_info_index` values('25','25','1','1355124472','1355124472','1355124472','1');");
E_D("replace into `phome_ecms_info_index` values('26','25','1','1355124473','1355124473','1355124473','1');");
E_D("replace into `phome_ecms_info_index` values('27','25','1','1355124474','1355124474','1355124474','1');");
E_D("replace into `phome_ecms_info_index` values('28','25','1','1355124475','1355124475','1355124475','1');");
E_D("replace into `phome_ecms_info_index` values('29','25','1','1355124476','1355124476','1355124476','1');");
E_D("replace into `phome_ecms_info_index` values('30','26','1','1355124477','1355124477','1355124477','1');");
E_D("replace into `phome_ecms_info_index` values('31','28','1','1355124478','1355124478','1355124478','1');");
E_D("replace into `phome_ecms_info_index` values('32','28','1','1355124479','1355124479','1355124479','1');");
E_D("replace into `phome_ecms_info_index` values('33','28','1','1355124480','1355124480','1355124480','1');");
E_D("replace into `phome_ecms_info_index` values('34','28','1','1355124481','1355124481','1355124481','1');");
E_D("replace into `phome_ecms_info_index` values('35','29','1','1355124482','1355124482','1355124482','1');");
E_D("replace into `phome_ecms_info_index` values('36','29','1','1355124483','1355124483','1355124483','1');");
E_D("replace into `phome_ecms_info_index` values('37','29','1','1355124484','1355124484','1355124484','1');");
E_D("replace into `phome_ecms_info_index` values('38','31','1','1355124485','1355124485','1355124485','1');");
E_D("replace into `phome_ecms_info_index` values('39','31','1','1355124486','1355124486','1355124486','1');");
E_D("replace into `phome_ecms_info_index` values('40','31','1','1355124487','1355124487','1355124487','1');");
E_D("replace into `phome_ecms_info_index` values('41','12','1','1355124488','1355124488','1355124488','1');");

@include("../../inc/footer.php");
?>