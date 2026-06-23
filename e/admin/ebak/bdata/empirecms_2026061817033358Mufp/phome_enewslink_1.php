<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslink`;");
E_C("CREATE TABLE `phome_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslink` values('1',0xe5b89de59bbde8bdafe4bbb6,0x687474703a2f2f7777772e70686f6d652e6e65742f696d672f6c696e6b2f656d70697265636d732e676966,0x687474703a2f2f7777772e70686f6d652e6e6574,'2006-09-13 14:28:57','0',0x3838,0x3331,0x5f626c616e6b,'0','',0xe5b89de59bbde8bdafe4bbb6,'1','0','0');");
E_D("replace into `phome_enewslink` values('2',0xe5b89de59bbde8bdafe4bbb6,0x687474703a2f2f7777772e70686f6d652e6e65742f696d672f6c696e6b2f656d70697265636d732e676966,0x687474703a2f2f7777772e70686f6d652e6e6574,'2006-09-13 14:30:14','0',0x3838,0x3331,0x5f626c616e6b,'0','',0xe5b89de59bbde8bdafe4bbb6,'1','0','0');");
E_D("replace into `phome_enewslink` values('3',0xe5b89de59bbde8bdafe4bbb6,0x687474703a2f2f7777772e70686f6d652e6e65742f696d672f6c696e6b2f656d70697265636d732e676966,0x687474703a2f2f7777772e70686f6d652e6e6574,'2006-09-13 14:30:32','0',0x3838,0x3331,0x5f626c616e6b,'0','',0xe5b89de59bbde8bdafe4bbb6,'1','0','0');");
E_D("replace into `phome_enewslink` values('4',0xe5b89de59bbde8bdafe4bbb6,0x687474703a2f2f7777772e70686f6d652e6e65742f696d672f6c696e6b2f656d70697265636d732e676966,0x687474703a2f2f7777772e70686f6d652e6e6574,'2006-09-13 14:30:50','0',0x3838,0x3331,0x5f626c616e6b,'0','',0xe5b89de59bbde8bdafe4bbb6,'1','0','0');");
E_D("replace into `phome_enewslink` values('5',0xe5b89de59bbde8bdafe4bbb6,0x687474703a2f2f7777772e70686f6d652e6e65742f696d672f6c696e6b2f656d70697265636d732e676966,0x687474703a2f2f7777772e70686f6d652e6e6574,'2006-09-13 14:31:50','0',0x3838,0x3331,0x5f626c616e6b,'0','',0xe5b89de59bbde8bdafe4bbb6,'1','0','0');");
E_D("replace into `phome_enewslink` values('6',0xe5b89de59bbde8bdafe4bbb6,0x687474703a2f2f7777772e70686f6d652e6e65742f696d672f6c696e6b2f656d70697265636d732e676966,0x687474703a2f2f7777772e70686f6d652e6e6574,'2006-09-13 14:32:07','0',0x3838,0x3331,0x5f626c616e6b,'0','',0xe5b89de59bbde8bdafe4bbb6,'1','0','0');");
E_D("replace into `phome_enewslink` values('7',0xe5b89de59bbde8bdafe4bbb6,0x687474703a2f2f7777772e70686f6d652e6e65742f696d672f6c696e6b2f656d70697265636d732e676966,0x687474703a2f2f7777772e70686f6d652e6e6574,'2006-09-13 14:32:24','0',0x3838,0x3331,0x5f626c616e6b,'0','',0xe5b89de59bbde8bdafe4bbb6,'1','0','0');");
E_D("replace into `phome_enewslink` values('8',0xe5b89de59bbd434d53e5ae98e696b9e7bd91e7ab99,'',0x687474703a2f2f7777772e70686f6d652e6e6574,'2008-05-08 18:13:24','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('9',0xe5b89de59bbd434d53e5ae98e696b9e8aebae59d9b,'',0x687474703a2f2f6262732e70686f6d652e6e6574,'2008-05-08 18:15:41','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('10',0xe5b89de59bbde7ab99e995bfe5b7a5e585b7,'',0x687474703a2f2f7777772e646f746f6f6c2e636e,'2008-05-08 18:15:56','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('11',0xe5b89de59bbd434d53e6a8a1e69dbfe4b88be8bdbd,'',0x687474703a2f2f7777772e70686f6d652e6e65742f7a792f74656d706c6174652f,'2008-05-08 18:18:35','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('12',0xe5b89de59bbd434d53e69599e7a88b,'',0x687474703a2f2f6262732e70686f6d652e6e65742f6c6973747468726561642d33352d636d732d706167652d302e68746d6c,'2008-05-08 18:19:19','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('13',0xe5b89de59bbde5a487e4bbbde78e8be4b88be8bdbd,'',0x687474703a2f2f7777772e70686f6d652e6e65742f6562616b323031302f,'2008-05-08 18:19:55','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `phome_enewslink` values('14',0xe5b89de59bbd434d53e794a8e688b7e6a188e4be8b,'',0x687474703a2f2f7777772e70686f6d652e6e65742f456d70697265434d532f55736572536974652f,'2008-05-08 18:22:11','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','0');");

@include("../../inc/footer.php");
?>