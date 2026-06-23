<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_info_data_1`;");
E_C("CREATE TABLE `phome_ecms_info_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `mycontact` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_info_data_1` values('1','11','','1','9','0','0','',0x746573744070686f6d652e6e6574,0x7171313233313233,'');");
E_D("replace into `phome_ecms_info_data_1` values('2','11','','1','9','0','0','',0x746573744070686f6d652e6e6574,0x7171313233313233,'');");
E_D("replace into `phome_ecms_info_data_1` values('3','11','','0','9','0','0','',0x746573744070686f6d652e6e6574,0x7171313233313233,'');");
E_D("replace into `phome_ecms_info_data_1` values('4','12','','1','9','0','0','',0x746573744070686f6d652e6e6574,0x736464646464646464,'');");
E_D("replace into `phome_ecms_info_data_1` values('5','12','','1','9','0','0','',0x40617364662e636f6d,0x737373737373,'');");
E_D("replace into `phome_ecms_info_data_1` values('6','12','','1','9','0','0','',0x303040617364662e636f6d,0x7366776666,0x7366777267);");
E_D("replace into `phome_ecms_info_data_1` values('7','14','','1','9','0','0','',0x406263642e636f6d,0x64646464737765,0x64656565656565656565);");
E_D("replace into `phome_ecms_info_data_1` values('8','15','','1','9','0','0','',0x646f6d6740,0x6464646464646464646464,0x736565656565656565);");
E_D("replace into `phome_ecms_info_data_1` values('9','15','','1','9','0','0','',0x303040617364662e636f6d,0x6464776565656565656565,0x646567667367);");
E_D("replace into `phome_ecms_info_data_1` values('10','18','','1','9','0','0','',0x406263642e636f6d,0x64646464737765,0x30303030);");
E_D("replace into `phome_ecms_info_data_1` values('11','18','','1','9','0','0','',0x303040617364662e636f6d,0x73646767676767676767,0x646567676767676767);");
E_D("replace into `phome_ecms_info_data_1` values('12','18','','1','9','0','0','',0x303040617364662e636f6d,0x6464646464646464646464,0x30303030);");
E_D("replace into `phome_ecms_info_data_1` values('13','19','','1','9','0','0','',0x303040617364662e636f6d,0x64646464737765,0x646567667367);");
E_D("replace into `phome_ecms_info_data_1` values('14','19','','1','9','0','0','',0x303030,0x64646464,0x646464646464646464);");
E_D("replace into `phome_ecms_info_data_1` values('15','19','','1','9','0','0','',0x303040617364662e636f6d,0x6464646464646464646464,0x646567667367);");
E_D("replace into `phome_ecms_info_data_1` values('16','20','','1','9','0','0','',0x303040617364662e636f6d,0x6464646464646464646464,0x646567667367);");
E_D("replace into `phome_ecms_info_data_1` values('17','20','','1','9','0','0','',0x303040617364662e636f6d,0x6464776565656565656565,0x646567676767676767);");
E_D("replace into `phome_ecms_info_data_1` values('18','20','','1','9','0','0','',0x313131406263642e636f6d,0x64646464737765,0x64656565656565656565);");
E_D("replace into `phome_ecms_info_data_1` values('19','20','','1','9','0','0','',0x6275737561406475612e6464,0x7171313233313233,0x646567667367);");
E_D("replace into `phome_ecms_info_data_1` values('20','23','','1','9','0','0','',0x6275737561406475612e6464,0x7171313233313233,0x646464646464646464);");
E_D("replace into `phome_ecms_info_data_1` values('21','23','','1','9','0','0','',0x313131406263642e636f6d,0x6464776565656565656565,0x64656565656565656565);");
E_D("replace into `phome_ecms_info_data_1` values('22','23','','1','9','0','0','',0x303040617364662e636f6d,0x6464646464646464646464,0x64656565656565656565);");
E_D("replace into `phome_ecms_info_data_1` values('23','23','','1','9','0','0','',0x6275737561406475612e6464,0x64646464737765,0x646567667367);");
E_D("replace into `phome_ecms_info_data_1` values('24','23','','1','9','0','0','',0x6275737561406475612e6464,0x64646464737765,0x30303030);");
E_D("replace into `phome_ecms_info_data_1` values('25','25','','1','9','0','0','',0x303040617364662e636f6d,0x64646464,0x64656565656565656565);");
E_D("replace into `phome_ecms_info_data_1` values('26','25','','1','9','0','0','',0x313131406263642e636f6d,0x6464646464646464646464,0x64656565656565656565);");
E_D("replace into `phome_ecms_info_data_1` values('27','25','','1','9','0','0','',0x313131406263642e636f6d,0x6464776565656565656565,0x646567667367);");
E_D("replace into `phome_ecms_info_data_1` values('28','25','','1','9','0','0','',0x303040617364662e636f6d,0x6464646464646464646464,0x30303030);");
E_D("replace into `phome_ecms_info_data_1` values('29','25','','1','9','0','0','',0x303030,0x6464646464646464646464,0x64656565656565656565);");
E_D("replace into `phome_ecms_info_data_1` values('30','26','','1','9','0','0','',0x303030,0x6464646464646464646464,0x646464646464646464);");
E_D("replace into `phome_ecms_info_data_1` values('31','28','','1','9','0','0','',0x303040617364662e636f6d,0x64646464737765,0x646464646464646464);");
E_D("replace into `phome_ecms_info_data_1` values('32','28','','1','9','0','0','',0x303040617364662e636f6d,0x64646464737765,0x646464646464646464);");
E_D("replace into `phome_ecms_info_data_1` values('33','28','','1','9','0','0','',0x406263642e636f6d,0x64646464737765,0x646464646464646464);");
E_D("replace into `phome_ecms_info_data_1` values('34','28','','1','9','0','0','',0x6275737561406475612e6464,0x64646464737765,0x646464646464646464);");
E_D("replace into `phome_ecms_info_data_1` values('35','29','','1','9','0','0','',0x646f616d676440666666,0x64646464,0x64656565656565656565);");
E_D("replace into `phome_ecms_info_data_1` values('36','29','','1','9','0','0','',0x6c6f402e6363,0x6464776565656565656565,0x646b75616267);");
E_D("replace into `phome_ecms_info_data_1` values('37','29','','1','9','0','0','',0x62757364647561406475612e6464,0x6464646464,0x64646464646464646464);");
E_D("replace into `phome_ecms_info_data_1` values('38','31','','1','9','0','0','',0x6461656464644031323333,0x646466776567,0x64656772796868);");
E_D("replace into `phome_ecms_info_data_1` values('39','31','','1','9','0','0','',0x303040617364662e636f6d,0x6464646464,0x64656565656565656565);");
E_D("replace into `phome_ecms_info_data_1` values('40','31','','1','9','0','0','',0x303040617364662e636f6d,0x6464646464,0x646567676767676767);");
E_D("replace into `phome_ecms_info_data_1` values('41','12','','1','9','0','0','',0x303040617364662e636f6d,0x7366776666,0x7366777267);");

@include("../../inc/footer.php");
?>