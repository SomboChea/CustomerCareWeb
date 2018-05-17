/*
 Navicat Premium Data Transfer

 Source Server         : MYSQL
 Source Server Type    : MySQL
 Source Server Version : 100130
 Source Host           : localhost:3306
 Source Schema         : telmarketing

 Target Server Type    : MySQL
 Target Server Version : 100130
 File Encoding         : 65001

 Date: 17/05/2018 02:12:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_address
-- ----------------------------
DROP TABLE IF EXISTS `tbl_address`;
CREATE TABLE `tbl_address`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `dist_id` int(11) NOT NULL,
  `com_id` int(11) NOT NULL,
  `other_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pro_id`(`pro_id`) USING BTREE,
  INDEX `dist_id`(`dist_id`) USING BTREE,
  INDEX `com_id`(`com_id`) USING BTREE,
  INDEX `other_id`(`other_id`) USING BTREE,
  CONSTRAINT `tbl_address_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `tbl_location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_address_ibfk_2` FOREIGN KEY (`dist_id`) REFERENCES `tbl_location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_address_ibfk_3` FOREIGN KEY (`com_id`) REFERENCES `tbl_location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_address_ibfk_4` FOREIGN KEY (`other_id`) REFERENCES `tbl_location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_address
-- ----------------------------
INSERT INTO `tbl_address` VALUES (1, 1, 3, 7, 9);
INSERT INTO `tbl_address` VALUES (2, 2, 6, 8, 10);
INSERT INTO `tbl_address` VALUES (3, 1, 4, 7, 9);
INSERT INTO `tbl_address` VALUES (4, 2, 5, 8, 10);
INSERT INTO `tbl_address` VALUES (5, 1, 14, 15, 16);
INSERT INTO `tbl_address` VALUES (6, 17, 18, 19, 20);
INSERT INTO `tbl_address` VALUES (7, 17, 18, 19, 20);

-- ----------------------------
-- Table structure for tbl_kid
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kid`;
CREATE TABLE `tbl_kid`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) NULL DEFAULT NULL,
  `sex` smallint(6) NULL DEFAULT NULL,
  `dob` date NULL DEFAULT NULL,
  `order` smallint(6) NULL DEFAULT NULL,
  `mom_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tbl_kid_fk`(`mom_id`) USING BTREE,
  INDEX `tbl_kid_tbl_name_id_fk`(`name_id`) USING BTREE,
  CONSTRAINT `tbl_kid_fk` FOREIGN KEY (`mom_id`) REFERENCES `tbl_mom` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_kid_tbl_name_id_fk` FOREIGN KEY (`name_id`) REFERENCES `tbl_name` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_kid
-- ----------------------------
INSERT INTO `tbl_kid` VALUES (1, 3, 1, '2018-05-23', 4, 1);

-- ----------------------------
-- Table structure for tbl_location
-- ----------------------------
DROP TABLE IF EXISTS `tbl_location`;
CREATE TABLE `tbl_location`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_location
-- ----------------------------
INSERT INTO `tbl_location` VALUES (1, 'Phnom Penh');
INSERT INTO `tbl_location` VALUES (2, 'Siemreap');
INSERT INTO `tbl_location` VALUES (3, 'PP Dis1');
INSERT INTO `tbl_location` VALUES (4, 'PP Dis2');
INSERT INTO `tbl_location` VALUES (5, 'SR Dis1');
INSERT INTO `tbl_location` VALUES (6, 'SR Dis2');
INSERT INTO `tbl_location` VALUES (7, 'PP Dis1 Comm');
INSERT INTO `tbl_location` VALUES (8, 'SR Dis2 Com');
INSERT INTO `tbl_location` VALUES (9, 'PP Addr');
INSERT INTO `tbl_location` VALUES (10, 'SR Addr');
INSERT INTO `tbl_location` VALUES (14, 'Charmkamon');
INSERT INTO `tbl_location` VALUES (15, 'Toul Tom poung');
INSERT INTO `tbl_location` VALUES (16, '87');
INSERT INTO `tbl_location` VALUES (17, 'kampong cham');
INSERT INTO `tbl_location` VALUES (18, 'udon');
INSERT INTO `tbl_location` VALUES (19, 's');
INSERT INTO `tbl_location` VALUES (20, 'st 999');

-- ----------------------------
-- Table structure for tbl_mdata
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mdata`;
CREATE TABLE `tbl_mdata`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kid_id` int(11) NULL DEFAULT NULL,
  `pro_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `why` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `memo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `caller_id` int(11) NULL DEFAULT NULL,
  `call_status` smallint(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tbl_mdata_tbl_kid_id_fk`(`kid_id`) USING BTREE,
  INDEX `tbl_mdata_tbl_product_id_fk`(`pro_id`) USING BTREE,
  INDEX `tbl_mdata_tbl_user_id_fk`(`caller_id`) USING BTREE,
  CONSTRAINT `tbl_mdata_tbl_kid_id_fk` FOREIGN KEY (`kid_id`) REFERENCES `tbl_kid` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_mdata_tbl_product_id_fk` FOREIGN KEY (`pro_id`) REFERENCES `tbl_product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_mdata_tbl_user_id_fk` FOREIGN KEY (`caller_id`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbl_mom
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mom`;
CREATE TABLE `tbl_mom`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) NULL DEFAULT NULL,
  `create_at` datetime(0) NULL DEFAULT NULL,
  `expected_date` date NULL DEFAULT NULL,
  `tel_1` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tel_2` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fb` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `other` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `location_id` int(11) NULL DEFAULT NULL,
  `refer_id` int(11) NULL DEFAULT NULL,
  `status` smallint(6) NULL DEFAULT NULL,
  `logger_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tbl_mom_fk`(`name_id`) USING BTREE,
  INDEX `tbl_mom_tbl_location_id_fk`(`location_id`) USING BTREE,
  INDEX `tbl_mom_tbl_refer_id_fk`(`refer_id`) USING BTREE,
  INDEX `tbl_mom_tbl_user_id_fk`(`logger_id`) USING BTREE,
  CONSTRAINT `tbl_mom_fk` FOREIGN KEY (`name_id`) REFERENCES `tbl_name` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_mom_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `tbl_address` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_mom_tbl_refer_id_fk` FOREIGN KEY (`refer_id`) REFERENCES `tbl_refer` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_mom_tbl_user_id_fk` FOREIGN KEY (`logger_id`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_mom
-- ----------------------------
INSERT INTO `tbl_mom` VALUES (1, 2, '2018-05-19 01:34:25', NULL, '9876543', '3456789', 'Mail@mail.com', 'My Mom', 'Nothing', 7, 1, 1, 1);

-- ----------------------------
-- Table structure for tbl_name
-- ----------------------------
DROP TABLE IF EXISTS `tbl_name`;
CREATE TABLE `tbl_name`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `type_id` smallint(6) NULL DEFAULT NULL COMMENT '1: Source Name\r\n2: Name\r\n3: Mom\r\n4: Kid\r\n5: Other',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tbl_name_name_uindex`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_name
-- ----------------------------
INSERT INTO `tbl_name` VALUES (1, 'SL', NULL);
INSERT INTO `tbl_name` VALUES (2, 'Sensok', NULL);
INSERT INTO `tbl_name` VALUES (3, 'Calmet', NULL);
INSERT INTO `tbl_name` VALUES (4, 'SB', NULL);
INSERT INTO `tbl_name` VALUES (5, 'hello', NULL);
INSERT INTO `tbl_name` VALUES (6, 'dsds', NULL);
INSERT INTO `tbl_name` VALUES (7, 'dsd', NULL);

-- ----------------------------
-- Table structure for tbl_pregnent
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pregnent`;
CREATE TABLE `tbl_pregnent`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mom_id` int(11) NULL DEFAULT NULL,
  `pro_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `why` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `memo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `caller_id` int(11) NULL DEFAULT NULL,
  `call_status` smallint(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tbl_pregnent_tbl_mom_id_fk`(`mom_id`) USING BTREE,
  INDEX `tbl_pregnent_tbl_product_id_fk`(`pro_id`) USING BTREE,
  INDEX `tbl_pregnent_tbl_user_id_fk`(`caller_id`) USING BTREE,
  CONSTRAINT `tbl_pregnent_tbl_mom_id_fk` FOREIGN KEY (`mom_id`) REFERENCES `tbl_mom` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_pregnent_tbl_product_id_fk` FOREIGN KEY (`pro_id`) REFERENCES `tbl_product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_pregnent_tbl_user_id_fk` FOREIGN KEY (`caller_id`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbl_product
-- ----------------------------
DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE `tbl_product`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `info` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `owner` smallint(6) NULL DEFAULT 0,
  `level` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` smallint(6) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_product
-- ----------------------------
INSERT INTO `tbl_product` VALUES (1, 'Lesbin', 'For Kid', 1, '1', 1);

-- ----------------------------
-- Table structure for tbl_refer
-- ----------------------------
DROP TABLE IF EXISTS `tbl_refer`;
CREATE TABLE `tbl_refer`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) NULL DEFAULT NULL,
  `owner_id` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `tel_1` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tel_2` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `memo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `location_id` int(11) NULL DEFAULT NULL,
  `type_id` smallint(6) NULL DEFAULT NULL,
  `status` smallint(6) NULL DEFAULT 0,
  `logger_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tbl_refer_fk`(`name_id`) USING BTREE,
  INDEX `tbl_refer_fk2`(`owner_id`) USING BTREE,
  INDEX `tbl_refer_fk3`(`type_id`) USING BTREE,
  INDEX `tbl_refer_fk4`(`location_id`) USING BTREE,
  INDEX `tbl_refer_fk5`(`logger_id`) USING BTREE,
  CONSTRAINT `tbl_refer_fk` FOREIGN KEY (`name_id`) REFERENCES `tbl_name` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_refer_fk2` FOREIGN KEY (`owner_id`) REFERENCES `tbl_name` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_refer_fk3` FOREIGN KEY (`type_id`) REFERENCES `tbl_refer_type` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_refer_fk5` FOREIGN KEY (`logger_id`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_refer_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `tbl_address` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_refer
-- ----------------------------
INSERT INTO `tbl_refer` VALUES (1, 2, 3, '2018-05-16 01:24:54', '0987654', '765432', 'mail@mail.com', 'None', NULL, 3, 1, 0, NULL);
INSERT INTO `tbl_refer` VALUES (2, 6, 7, NULL, '2345', '6543', 'fake@fake.com', 'My Memo', NULL, 7, 2, 0, NULL);

-- ----------------------------
-- Table structure for tbl_refer_type
-- ----------------------------
DROP TABLE IF EXISTS `tbl_refer_type`;
CREATE TABLE `tbl_refer_type`  (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_refer_type
-- ----------------------------
INSERT INTO `tbl_refer_type` VALUES (1, 'Hospital / Clin');
INSERT INTO `tbl_refer_type` VALUES (2, 'Retail');
INSERT INTO `tbl_refer_type` VALUES (3, 'PC');
INSERT INTO `tbl_refer_type` VALUES (4, 'Other');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) NULL DEFAULT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `role_id` smallint(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tbl_user_username_uindex`(`username`) USING BTREE,
  INDEX `tbl_user_fk`(`name_id`) USING BTREE,
  CONSTRAINT `tbl_user_fk` FOREIGN KEY (`name_id`) REFERENCES `tbl_name` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 1, 'LS', '123', NULL, 2);

-- ----------------------------
-- View structure for viewaddress
-- ----------------------------
DROP VIEW IF EXISTS `viewaddress`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewaddress` AS SELECT
tbl_address.id AS Address_ID,
Getlocname(tbl_address.pro_id) AS Province,
Getlocname(tbl_address.dist_id) AS District,
Getlocname(tbl_address.com_id) AS Commune,
Getlocname(tbl_address.other_id) AS Address,
pro_id,
dist_id,
com_id,
other_id
FROM
tbl_address ;

-- ----------------------------
-- View structure for viewalert
-- ----------------------------
DROP VIEW IF EXISTS `viewalert`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewalert` AS select * from viewLastCall where CheckAlert(Expect_Call_Date,Status)=1 ;

-- ----------------------------
-- View structure for viewallcall
-- ----------------------------
DROP VIEW IF EXISTS `viewallcall`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewallcall` AS SELECT
	p.mom_id,
	name,
	p.created_at,
	p.call_status ,
	tel_1,
	tel_2,
	'tbl_pregnant' AS "table" 
FROM
	tbl_pregnent p
	inner join tbl_mom mum on p.mom_id=mum.id
	inner join tbl_name na on mum.name_id=na.id
	UNION
SELECT
	mom_id,
	name,
	m.created_at,
	m.call_status ,
	tel_1,
	tel_2,
	'tbl_mdata'  as "table"
FROM
	tbl_mdata m
	INNER JOIN tbl_kid k ON m.kid_id= k.id
	inner join tbl_mom mom on k.mom_id=mom.id
	inner join tbl_name na on mom.name_id=na.id ;

-- ----------------------------
-- View structure for viewkid
-- ----------------------------
DROP VIEW IF EXISTS `viewkid`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewkid` AS SELECT
tbl_kid.id,
GetName( tbl_kid.name_id) AS `name`,
if(tbl_kid.sex=1,"Male","Female") AS sex,
tbl_kid.dob,
tbl_kid.`order`,
tbl_kid.mom_id,
GetName( tbl_mom.name_id) Mom
FROM
tbl_kid
INNER JOIN tbl_mom ON tbl_kid.mom_id = tbl_mom.id ;

-- ----------------------------
-- View structure for viewlastcall
-- ----------------------------
DROP VIEW IF EXISTS `viewlastcall`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewlastcall` AS select 

max(p.id) as ID ,
GetName(max(m.id)) as Mom_name,
'(Pregnent)' as Kid_Name,
count(*) as Count , 
Convert(max(p.created_at),date) as CalledDate,
CheckExpectCall(max(m.expected_date),Count(*),'(Pregnent)',max(m.expected_date)) as Expect_Call_Date,
min(p.call_status) as Status

from tbl_pregnent  p
inner join tbl_mom m on m.id= p.mom_id
where p.call_status=1
GROUP BY mom_id


Union

select 
max(md.id) , 
GetName(max(m.id)) as Mom_name,
GetName(max(k.id)), 
count(*) as Count , 
convert(max(md.created_at),date) as CalledDate,
CheckExpectCall(max(md.created_at),Count(*),GetName(max(k.id)),k.dob)  ,
min(md.call_status)

from tbl_mdata md

inner join tbl_kid k on k.id=md.kid_id
inner join tbl_mom m on m.id=k.mom_id
where md.call_status=1
GROUP BY kid_id ;

-- ----------------------------
-- View structure for viewmom
-- ----------------------------
DROP VIEW IF EXISTS `viewmom`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewmom` AS SELECT
tbl_mom.id,
GetName( tbl_mom.name_id) as Mom_name,
tbl_mom.create_at,
tbl_mom.expected_date,
tbl_mom.tel_1,
tbl_mom.tel_2,
tbl_mom.email,
tbl_mom.fb,
tbl_mom.other,
tbl_mom.location_id,
tbl_mom.`status`,
tbl_mom.logger_id,
GetName( tbl_refer.name_id) as Source
FROM
tbl_mom
INNER JOIN tbl_refer ON tbl_mom.refer_id = tbl_refer.id ;

-- ----------------------------
-- View structure for viewproduct
-- ----------------------------
DROP VIEW IF EXISTS `viewproduct`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewproduct` AS SELECT
tbl_product.id,
tbl_product.`name`,
tbl_product.info,
GetName( tbl_product.`owner`) Owner,
tbl_product.`level`,
tbl_product.`status`
FROM
tbl_product ;

-- ----------------------------
-- View structure for viewrefers
-- ----------------------------
DROP VIEW IF EXISTS `viewrefers`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewrefers` AS SELECT
tbl_refer.id,
GetName( tbl_refer.name_id) as Name,
GetName( tbl_refer.owner_id) as Owner_Name,
tbl_refer.created_at,
tbl_refer.tel_1,
tbl_refer.tel_2,
tbl_refer.image,
tbl_refer.email,
tbl_refer.memo,
tbl_refer.type_id,
tbl_refer.logger_id,
tbl_refer.status,
tbl_refer.location_id,
tbl_refer_type.type

FROM
tbl_refer
INNER JOIN tbl_refer_type ON tbl_refer.type_id = tbl_refer_type.id ;

-- ----------------------------
-- View structure for viewusers
-- ----------------------------
DROP VIEW IF EXISTS `viewusers`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewusers` AS SELECT
tbl_user.id,
tbl_name.name,
tbl_user.username,
tbl_user.password,
tbl_user.created_at,
tbl_user.role_id

FROM
tbl_name
INNER JOIN tbl_user ON tbl_user.name_id = tbl_name.id ;

-- ----------------------------
-- Function structure for CheckAlert
-- ----------------------------
DROP FUNCTION IF EXISTS `CheckAlert`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `CheckAlert`(`expectdate` date,`status` int) RETURNS int(11)
BEGIN

declare alertdate  date ;
set alertdate= DATE_ADD(expectdate,INTERVAL-7 day);
	IF status = 0 then
		return 0;
	END if;
	IF expectdate=null then
		return 0;
	END if;

	IF CURDATE()>alertdate then
		return 1;
	END if;
	Return 0;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for CheckExpectCall
-- ----------------------------
DROP FUNCTION IF EXISTS `CheckExpectCall`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `CheckExpectCall`(
	`calldate`  datetime,
	`ct`  int,
	`kidname`  varchar(50),
	`kiddob` datetime
) RETURNS date
BEGIN
	#Routine body goes here...
	
	declare duration  int;
	declare expect  date;
	declare day_between int;
	declare month_between int ;
	set month_between= (select TIMESTAMPDIFF(month,kiddob,calldate));
	set day_between=  (select TIMESTAMPDIFF(day,kiddob,calldate));
	
	
	IF kidname = '(Pregnent)' then
		set expect=calldate;
	ELSE 		
			
		IF day_between<=7 THEN
						set duration=7;
			ELSEIF month_between=0 THEN
				set duration=DATEDIFF(kiddob, DATE_ADD(kiddob ,INTERVAL 1 MONTH));
			ELSEIF month_between<6 then
				set duration=DATEDIFF(kiddob, DATE_ADD(kiddob ,INTERVAL 6 MONTH));
			elseif month_between<11 then
				set duration=DATEDIFF(kiddob, DATE_ADD(kiddob ,INTERVAL 11 MONTH));
			elseif month_between<24 then
				set duration=DATEDIFF(kiddob, DATE_ADD(kiddob ,INTERVAL 24 MONTH));
			elseif month_between<35 then
				set duration=DATEDIFF(kiddob, DATE_ADD(kiddob ,INTERVAL 35 MONTH));
			ELSE
				set duration=DATEDIFF(kiddob, DATE_ADD(kiddob ,INTERVAL 48 MONTH));
				
		END IF;

			
-- 			set duration=(select CASE 
-- 			WHEN day_between<=7 THEN 8
-- 			When day_between>7 and month_between=0 Then DATEDIFF(kiddob, DATE_ADD(kiddob ,INTERVAL 1 MONTH))
-- 			when month_between<6 then DATEDIFF(kiddob,DATE_ADD(kiddob,INTERVAL 6 MONTH))
-- 			when 
-- 			end);
-- 	
		set expect=DATE_ADD(calldate ,INTERVAL -duration day);
	END if;

	return expect;
	END
;;
delimiter ;

-- ----------------------------
-- Function structure for Checkloc
-- ----------------------------
DROP FUNCTION IF EXISTS `Checkloc`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `Checkloc`(`addr` varchar(50)) RETURNS int(11)
BEGIN
	#Routine body goes here...
	DECLARE bool INT;
set bool=(select cast(addr as int));
IF bool>0 THEN
	return bool;
END IF;

SET bool = (SELECT id FROM tbl_location WHERE `name` = addr);
	IF (bool > 0) THEN 
		return bool;
	ELSE
		INSERT INTO tbl_location ( `name` )
		VALUES ( addr );
		return LAST_INSERT_ID();
	END IF;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetAddrID
-- ----------------------------
DROP FUNCTION IF EXISTS `GetAddrID`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `GetAddrID`(`province` varchar(50),`district` varchar(50),`commune` varchar(50),`addr` varchar(50)) RETURNS int(11)
BEGIN
	#Routine body goes here...
	Declare pid int;
	Declare did int;
	Declare cid int;
	Declare aid int;
	declare addrid int;
	
	set pid=(select Checkloc(province));
	set did=(select Checkloc(district));
	set cid=(select Checkloc(commune));
	set aid=(select Checkloc(addr));
	
	Insert into tbl_address( `pro_id`, `dist_id`, `com_id`, `other_id`) values(pid,did,cid,aid);
	SELECT LAST_INSERT_ID() INTO addrid;
	RETURN addrid;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for Getlocname
-- ----------------------------
DROP FUNCTION IF EXISTS `Getlocname`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `Getlocname`(`IDx` int) RETURNS varchar(50) CHARSET latin1
BEGIN
	#Routine body goes here...
	Declare locname varchar(255);
	set locname=(Select `name` from tbl_location where `id`=IDx);
	RETURN locname;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetName
-- ----------------------------
DROP FUNCTION IF EXISTS `GetName`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `GetName`(`name_id` int) RETURNS varchar(50) CHARSET latin1
BEGIN
	#Routine body goes here...

	RETURN IFNULL((Select name from tbl_name where id=name_id),"NUll");
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for insertBatchLocation
-- ----------------------------
DROP PROCEDURE IF EXISTS `insertBatchLocation`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertBatchLocation`(
IN pro VARCHAR(50),
IN dis VARCHAR(50),
IN com VARCHAR(50),
In addr VARCHAR(50)
)
BEGIN
	#Routine body goes here...

-- DECLARE id INT;

CALL insertlocation(pro, 0, @out_id);
CALL insertlocation(com, @out_id, @out_id);
CALL insertlocation(dis, @out_id, @out_id);
CALL insertlocation(addr, @out_id, @out_id);

SELECT @out_id;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for insertkid
-- ----------------------------
DROP PROCEDURE IF EXISTS `insertkid`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertkid`(
IN name_id INT,
IN sex SMALLINT,
IN dob DATE,
IN ord SMALLINT,
IN mom_id INT
)
BEGIN

	INSERT INTO tbl_kid(`name_id`, `sex`, `dob`, `order`, `mom_id`)
	VALUES(name_id, sex, dob, ord, mom_id);
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for insertlocation
-- ----------------------------
DROP PROCEDURE IF EXISTS `insertlocation`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertlocation`(IN location VARCHAR(50), IN refer_id INT, OUT out_id INT)
BEGIN

DECLARE bool INT;

SET bool = (SELECT id FROM tbl_location WHERE `name` = location);
	IF (bool > 0) THEN 
		SELECT bool INTO out_id;
	ELSE
		INSERT INTO tbl_location ( `name`, `refer_id` )
		VALUES ( location, refer_id );
		SELECT LAST_INSERT_ID() INTO out_id;
	END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for insertmom
-- ----------------------------
DROP PROCEDURE IF EXISTS `insertmom`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertmom`(
IN name_id INT,
IN exp_date DATE,
IN tel_1 VARCHAR(15),
IN tel_2 VARCHAR(15),
IN email VARCHAR(50),
IN fb VARCHAR(50),
IN logger_id INT,
IN refer_id INT,
IN location_id INT
)
BEGIN

	INSERT INTO tbl_mom(`name_id`, `created_at`, `expected_date`, `tel_1`, `tel_2`, `email`, `fb`, `logger_id`, `status`, `refer_id`, `location_id`)
	VALUES(name_id, now(), exp_date, tel_1, tel_2, email, fb, logger_id, 1, refer_id, location_id);
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for insertname
-- ----------------------------
DROP PROCEDURE IF EXISTS `insertname`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertname`( 
IN fullname VARCHAR(50)
)
BEGIN


	DECLARE idx INT;
	
	SET idx = ( SELECT `id` FROM tbl_name WHERE `name` = fullname );

	IF (idx>0) THEN
		SELECT idx AS id;
	ELSE
		INSERT INTO tbl_name(`name`) VALUES(fullname);
	  SELECT LAST_INSERT_ID() AS id;
	END IF;


END
;;
delimiter ;

-- ----------------------------
-- Function structure for NewProc
-- ----------------------------
DROP FUNCTION IF EXISTS `NewProc`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `NewProc`(`province` varchar(50),`district` varchar(50),`commune` varchar(50),`addr` varchar(50)) RETURNS int(11)
BEGIN
	#Routine body goes here...
	Declare pid int;
	RETURN 0;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ShowAddress
-- ----------------------------
DROP PROCEDURE IF EXISTS `ShowAddress`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ShowAddress`(IN `idx` int)
BEGIN
	#Routine body goes here...
	SELECT Province , District, Commune,Address from viewaddress WHERE Address_ID=idx;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ShowCommune
-- ----------------------------
DROP PROCEDURE IF EXISTS `ShowCommune`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ShowCommune`(IN `idx` int)
BEGIN
	#Routine body goes here...
	Select DISTINCT(Commune),com_id from viewaddress where dist_id=idx;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ShowDistrict
-- ----------------------------
DROP PROCEDURE IF EXISTS `ShowDistrict`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ShowDistrict`(IN `idx` int)
BEGIN
	#Routine body goes here...
	select DISTINCT(v.District),dist_id  from viewaddress v where pro_id=idx;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for ShowProvince
-- ----------------------------
DROP PROCEDURE IF EXISTS `ShowProvince`;
delimiter ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ShowProvince`()
BEGIN
	#Routine body goes here...
	select DISTINCT(pro_id) , Province from viewaddress;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
