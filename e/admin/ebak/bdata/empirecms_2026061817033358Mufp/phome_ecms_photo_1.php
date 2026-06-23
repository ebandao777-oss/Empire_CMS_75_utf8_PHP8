<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_photo`;");
E_C("CREATE TABLE `phome_ecms_photo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` varchar(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titleurl` varchar(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` varchar(80) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` varchar(120) NOT NULL DEFAULT '',
  `eckuid` int(11) NOT NULL DEFAULT '0',
  `picurl` varchar(200) NOT NULL DEFAULT '',
  `picsay` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_photo` values('1','52','0','29','0','0','',0x3133353531323434333931,'1',0x61646d696e,'0','1','1','0','0','0','0','1355124443','1355124443','1','0','0','',0x2f70686f746f2f6d696e6778696e672f31333535313234343339312e68746d6c,'1','1','1',0xe58898e88ba5e88bb1,0xe58898e88ba5e88bb15be59bbee99b865d,'1355124443',0x2f74657374646174612f64656d6f7069632f70686f746f2f6c72792f73352e6a7067,'0','',0xe58898e88ba5e88bb1e59bbee99b86);");
E_D("replace into `phome_ecms_photo` values('2','53','0','8','0','0','',0x3133353531323434333932,'1',0x61646d696e,'0','1','1','0','0','0','0','1355124444','1355124444','1','0','0','',0x2f70686f746f2f66656e676a696e672f31333535313234343339322e68746d6c,'1','1','1',0xe58c97e6b5b7e98193,0xe697a5e69cace58c97e6b5b7e98193e7a9bae6b094e4b8ade79a84e6b7a1e6b7a1e79a84e88ab1e9a699,'1355124444',0x2f74657374646174612f64656d6f7069632f70686f746f2f64742f73312e6a7067,'0',0x2f74657374646174612f64656d6f7069632f70686f746f2f64742f312e6a7067,0xe38080e38080e5ada6e7949fe697b6e4bba3e79a84e69c80e5908ee4b880e4b8aae69a91e58187efbc8ce7bb88e4ba8ee8b88fe4b88ae4ba86e6a2a6e683b3e4b8ade79a84e58c97e6b5b7e98193e3808220e38080e38080e590ace8afb4e58c97e6b5b7e98193e79a84e6bb91e99baaefbc8ce4b99fe590ace8afb4e58c97e6b5b7e98193e79a84e6b5b7e9b29ce38082e4bd86e698afe59ca8e982a339e5a4a9e79a84e69184e5bdb1e69785e7a88be4b8adefbc8ce58db4e8aea9e68891e8a781e588b0e4ba86e58c97e6b5b7e98193e79a84e58fa6e4b880e7a78de7be8ee4b8bde38082e8bf99e4b8aae4b89ce696b9e79a84e699aee7bd97e697bae696afefbc8ce88ab1e59ba2e994a6e7b087e79a84e889b3e4b8bde88ab1e6b5b7efbc8ce9ab98e4bd8ee8b5b7e4bc8fe79a84e4b898e999b5e59cb0efbc8ce695b4e78987e79a84e7868fe8a1a3e88d89e88ab1e59badefbc8ce5b0b1e8bf9ee7a9bae6b094e4b8ade4b99fe983bde58585e6bba1e4ba86e6b7a1e6b7a1e79a84e88ab1e9a699e38082e4b88de7aea1e4bb8ee593aae4b8aae8a792e5baa6e79c8befbc8ce8bf99e9878ce983bde5ae9be5a682e4babae997b4e4bb99e5a283e4b880e888ace38082e58c97e6b5b7e98193e79a84e5a48fe5a4a9e5b8b8e5b8b8e4bc9ae4b88be99ba8efbc8ce4bd86e99ba8e8bf87e5bda9e899b9e69bb4e58aa0e5a29ee6b7bbe4ba86e7aba5e8af9de888ace79a84e6b094e681afe38082e99abee680aae5898de697a5e69cace69184e5bdb1e5a4a7e5b888e5898de794b0e79c9fe5b1b1e59ca8e98080e4bc91e5908ee4bc9ae683b3e8a681e4bd8fe59ca8e58c97e6b5b7e98193e38082);");
E_D("replace into `phome_ecms_photo` values('3','53','0','3','0','0','',0x3133353531323434333933,'1',0x61646d696e,'0','0','1','0','0','0','0','1355124445','1355124445','1','0','0','',0x2f70686f746f2f66656e676a696e672f31333535313234343339332e68746d6c,'1','1','1',0xe9a9ace5b094e4bba3e5a4ab,0xe9a9ace5b094e4bba3e5a4ab5be58d95e59bbe5d,'1355124445',0x2f74657374646174612f64656d6f7069632f70686f746f2f64742f73322e6a7067,'0',0x2f74657374646174612f64656d6f7069632f70686f746f2f64742f322e6a7067,0xe38080e38080e4b880e6a0b7e698afe7bb86e8bdafe79a84e6b299e6bba9efbc8ce4b880e6a0b7e698afe6b885e6be88e79a84e6b5b7e6b0b4efbc8ce4b880e6a0b7e698afe9808fe6988ee79a84e998b3e58589efbc8ce4b880e6a0b7e698afe88ab1e78eafefbc8ce4b880e6a0b7e698afe7ac91e99da5e280a6e280a6e58db3e4bdbfe69c89e8bf99e4b988e5a49ae79a84e79bb8e5908cefbc8ce69292e890bde59ca8e88b8de88cabe5a4a7e6b5b7e4b88ae58d83e4b887e4b8aae5b29be5b1bfefbc8ce58db4e4be9de697a7e59084e69c89e7be8ee4b8bde38081e59084e69c89e680a7e6a0bce3808220e38080e38080e4bda0e79a84e5bf83e4b8adefbc8ce6808ee6a0b7e79a84e5b29be5b1bfe6898de698afe69c80e7be8ee4b8bde6b5aae6bcabe79a84efbc9fe698afe58d97e5a4aae5b9b3e6b48be79a84e783ade5b8a6e9a38ee68385e38081e8bf98e698afe6b593e6b593e7bcb1e7bbbbe79a84e788b1e790b4e6b5b7e9a38eefbc9fe5bfabe8b79fe99a8fe68891e4bbace4b880e8b5b7e79585e6b8b8e590a7efbc8120);");
E_D("replace into `phome_ecms_photo` values('4','53','0','2','0','0','',0x3133353531323434333934,'1',0x61646d696e,'0','1','1','0','0','0','0','1355124446','1355124446','1','0','0','',0x2f70686f746f2f66656e676a696e672f31333535313234343339342e68746d6c,'1','1','1',0xe6b5b7e5b29b,0xe585a8e79083e69c80e6b5aae6bcabe6b5b7e5b29b5be59bbee99b865d,'1355124446',0x2f74657374646174612f64656d6f7069632f70686f746f2f6c6d68642f7469746c657069632e6a7067,'0','',0xe585a8e79083e69c80e6b5aae6bcabe6b5b7e5b29be7ae80e4bb8b);");
E_D("replace into `phome_ecms_photo` values('5','54','0','0','0','0','',0x3133353531323434333935,'1',0x61646d696e,'0','1','1','0','0','0','0','1355124447','1355124447','1','0','0','',0x2f70686f746f2f646f6e676d616e2f31333535313234343339352e68746d6c,'1','1','1',0xe781abe5bdb1e5bf8de88085,0xe781abe5bdb1e5bf8de880855be58d95e59bbe5d,'1355124447',0x2f74657374646174612f64656d6f7069632f70686f746f2f64742f73332e6a7067,'0',0x2f74657374646174612f64656d6f7069632f70686f746f2f64742f332e6a7067,0xe781abe5bdb1e5bf8de88085);");
E_D("replace into `phome_ecms_photo` values('6','52','0','3','0','0','',0x3133353531323434333936,'1',0x61646d696e,'0','1','1','0','0','0','0','1355124448','1355124448','1','0','0','',0x2f70686f746f2f6d696e6778696e672f31333535313234343339362e68746d6c,'1','1','1',0xe58898e5beb7e58d8e,0xe58898e5beb7e58d8e5be59bbee99b865d,'1355124448',0x2f74657374646174612f64656d6f7069632f70686f746f2f6c64682f73312e6a7067,'0','',0xe58898e5beb7e58d8e5be59bbee99b865d);");
E_D("replace into `phome_ecms_photo` values('7','52','0','16','0','0','',0x3133353531323434333937,'1',0x61646d696e,'0','1','1','0','0','0','0','1355124449','1355124449','1','0','0','',0x2f70686f746f2f6d696e6778696e672f31333535313234343339372e68746d6c,'1','1','1',0xe5ae8be685a7e4b994,0xe5ae8be685a7e4b9945be59bbee99b865d,'1355124449',0x2f74657374646174612f64656d6f7069632f70686f746f2f7368712f7469746c657069632e6a7067,'0','',0xe5ae8be685a7e4b9945be59bbee99b865d);");

@include("../../inc/footer.php");
?>