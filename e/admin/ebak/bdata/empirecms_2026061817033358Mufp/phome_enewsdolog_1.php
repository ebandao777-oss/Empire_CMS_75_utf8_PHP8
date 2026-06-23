<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsdolog`;");
E_C("CREATE TABLE `phome_enewsdolog` (
  `logid` bigint(20) NOT NULL AUTO_INCREMENT,
  `logip` varchar(20) NOT NULL DEFAULT '',
  `logtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(30) NOT NULL DEFAULT '',
  `enews` varchar(30) NOT NULL DEFAULT '',
  `doing` varchar(255) NOT NULL DEFAULT '',
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`logid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsdolog` values('1',0x3132372e302e302e31,'2026-06-18 17:00:39',0x61646d696e,0x6c6f67696e,0x2d2d2d,'0',0x3339323334);");
E_D("replace into `phome_enewsdolog` values('2',0x3132372e302e302e31,'2026-06-18 17:00:51',0x61646d696e,0x536574456e657773,0x2d2d2d,'0',0x3339323334);");
E_D("replace into `phome_enewsdolog` values('3',0x3132372e302e302e31,'2026-06-18 17:01:27',0x61646d696e,0x5365744d6f7265436c617373,0x2d2d2d,'0',0x3433363030);");
E_D("replace into `phome_enewsdolog` values('4',0x3132372e302e302e31,'2026-06-18 17:02:14',0x61646d696e,0x456469744e657773,0x636c61737369643d33343c62723e69643d36393c62723e7469746c653de5b9bfe4b89ce4b8b9e99c9ee5b1b1e58f91e78eb0e5b7a8e59e8b26616d703b71756f743be99d92e9939ce5899126616d703b71756f743b28e7bb84e59bbe29,'1000010000000069',0x3433363030);");
E_D("replace into `phome_enewsdolog` values('5',0x3132372e302e302e31,'2026-06-18 17:02:51',0x61646d696e,0x456469744e657773,0x636c61737369643d33373c62723e69643d37383c62723e7469746c653de4b8ade59bbde794b7e4b992e7acac3136e6aca1e68da7e8b5b7e696afe99fa6e6809de69e97e69daf,'1000010000000078',0x3433363030);");
E_D("replace into `phome_enewsdolog` values('6',0x3132372e302e302e31,'2026-06-18 17:03:22',0x61646d696e,0x536574456e657773,0x2d2d2d,'0',0x3433363030);");

@include("../../inc/footer.php");
?>