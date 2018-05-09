/*
 Navicat Premium Data Transfer

 Source Server         : MYSQL
 Source Server Type    : MySQL
 Source Server Version : 100128
 Source Host           : localhost:3306
 Source Schema         : telmarketing

 Target Server Type    : MySQL
 Target Server Version : 100128
 File Encoding         : 65001

 Date: 09/05/2018 19:50:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_kid
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kid`;
CREATE TABLE `tbl_kid`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  `sex` smallint(6) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `order` smallint(6) DEFAULT NULL,
  `mom_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tbl_kid_fk`(`mom_id`) USING BTREE,
  INDEX `tbl_kid_tbl_name_id_fk`(`name_id`) USING BTREE,
  CONSTRAINT `tbl_kid_fk` FOREIGN KEY (`mom_id`) REFERENCES `tbl_mom` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_kid_tbl_name_id_fk` FOREIGN KEY (`name_id`) REFERENCES `tbl_name` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_kid
-- ----------------------------
INSERT INTO `tbl_kid` VALUES (2, 12, 1, '2018-05-02', 1, 1);

-- ----------------------------
-- Table structure for tbl_location
-- ----------------------------
DROP TABLE IF EXISTS `tbl_location`;
CREATE TABLE `tbl_location`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `refer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbl_mdata
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mdata`;
CREATE TABLE `tbl_mdata`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kid_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `created_at` datetime(0) DEFAULT NULL,
  `why` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `memo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `caller_id` int(11) DEFAULT NULL,
  `call_status` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tbl_mdata_tbl_kid_id_fk`(`kid_id`) USING BTREE,
  INDEX `tbl_mdata_tbl_product_id_fk`(`pro_id`) USING BTREE,
  INDEX `tbl_mdata_tbl_user_id_fk`(`caller_id`) USING BTREE,
  CONSTRAINT `tbl_mdata_tbl_kid_id_fk` FOREIGN KEY (`kid_id`) REFERENCES `tbl_kid` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_mdata_tbl_product_id_fk` FOREIGN KEY (`pro_id`) REFERENCES `tbl_product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_mdata_tbl_user_id_fk` FOREIGN KEY (`caller_id`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_mdata
-- ----------------------------
INSERT INTO `tbl_mdata` VALUES (2, 2, NULL, '2018-05-20 18:15:51', NULL, NULL, 4, 1);

-- ----------------------------
-- Table structure for tbl_mom
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mom`;
CREATE TABLE `tbl_mom`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  `create_at` datetime(0) DEFAULT NULL,
  `expected_date` date DEFAULT NULL,
  `tel_1` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tel_2` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fb` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `other` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `refer_id` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `logger_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tbl_mom_fk`(`name_id`) USING BTREE,
  INDEX `tbl_mom_tbl_location_id_fk`(`location_id`) USING BTREE,
  INDEX `tbl_mom_tbl_refer_id_fk`(`refer_id`) USING BTREE,
  INDEX `tbl_mom_tbl_user_id_fk`(`logger_id`) USING BTREE,
  CONSTRAINT `tbl_mom_fk` FOREIGN KEY (`name_id`) REFERENCES `tbl_name` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_mom_tbl_location_id_fk` FOREIGN KEY (`location_id`) REFERENCES `tbl_location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_mom_tbl_refer_id_fk` FOREIGN KEY (`refer_id`) REFERENCES `tbl_refer` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_mom_tbl_user_id_fk` FOREIGN KEY (`logger_id`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_mom
-- ----------------------------
INSERT INTO `tbl_mom` VALUES (1, 12, NULL, '2018-05-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for tbl_name
-- ----------------------------
DROP TABLE IF EXISTS `tbl_name`;
CREATE TABLE `tbl_name`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type_id` smallint(6) DEFAULT NULL COMMENT '1: Source Name\r\n2: Name\r\n3: Mom\r\n4: Kid\r\n5: Other',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tbl_name_name_uindex`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_name
-- ----------------------------
INSERT INTO `tbl_name` VALUES (12, 'dsdsd', 1);
INSERT INTO `tbl_name` VALUES (13, '$request->fullname', NULL);
INSERT INTO `tbl_name` VALUES (14, 'dsdsds', NULL);
INSERT INTO `tbl_name` VALUES (15, 'Sombo', NULL);
INSERT INTO `tbl_name` VALUES (16, 'fdfdf', NULL);
INSERT INTO `tbl_name` VALUES (17, 'sd', NULL);

-- ----------------------------
-- Table structure for tbl_pregnent
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pregnent`;
CREATE TABLE `tbl_pregnent`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mom_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `created_at` datetime(0) DEFAULT NULL,
  `why` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `memo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `caller_id` int(11) DEFAULT NULL,
  `call_status` smallint(6) DEFAULT NULL,
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
  `name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `info` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `owner` smallint(6) DEFAULT 0,
  `level` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbl_refer
-- ----------------------------
DROP TABLE IF EXISTS `tbl_refer`;
CREATE TABLE `tbl_refer`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `created_at` datetime(0) DEFAULT NULL,
  `tel_1` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tel_2` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `memo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `type_id` smallint(6) DEFAULT NULL,
  `status` smallint(6) DEFAULT 0,
  `logger_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tbl_refer_fk`(`name_id`) USING BTREE,
  INDEX `tbl_refer_fk2`(`owner_id`) USING BTREE,
  INDEX `tbl_refer_fk3`(`type_id`) USING BTREE,
  INDEX `tbl_refer_fk4`(`location_id`) USING BTREE,
  INDEX `tbl_refer_fk5`(`logger_id`) USING BTREE,
  CONSTRAINT `tbl_refer_fk` FOREIGN KEY (`name_id`) REFERENCES `tbl_name` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_refer_fk2` FOREIGN KEY (`owner_id`) REFERENCES `tbl_name` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_refer_fk3` FOREIGN KEY (`type_id`) REFERENCES `tbl_refer_type` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_refer_fk4` FOREIGN KEY (`location_id`) REFERENCES `tbl_location` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tbl_refer_fk5` FOREIGN KEY (`logger_id`) REFERENCES `tbl_user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbl_refer_type
-- ----------------------------
DROP TABLE IF EXISTS `tbl_refer_type`;
CREATE TABLE `tbl_refer_type`  (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_id` int(11) DEFAULT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) DEFAULT NULL,
  `role_id` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tbl_user_username_uindex`(`username`) USING BTREE,
  INDEX `tbl_user_fk`(`name_id`) USING BTREE,
  CONSTRAINT `tbl_user_fk` FOREIGN KEY (`name_id`) REFERENCES `tbl_name` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 13, 'sb', '1', NULL, 2);
INSERT INTO `tbl_user` VALUES (4, 15, 'sb1', '1', NULL, 1);
INSERT INTO `tbl_user` VALUES (6, 16, 'dffd', 'f', NULL, 1);

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
	inner join tbl_name na on mom.name_id=na.id ; ;

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
-- View structure for viewprovinces
-- ----------------------------
DROP VIEW IF EXISTS `viewprovinces`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewprovinces` AS SELECT
	id,
name 
FROM
	tbl_location 
WHERE
	refer_id = 0 ; ;

-- ----------------------------
-- View structure for viewrefers
-- ----------------------------
DROP VIEW IF EXISTS `viewrefers`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `viewrefers` AS SELECT
tbl_refer.id,
tbl_refer.name_id,
tbl_refer.owner_id,
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
tbl_refer_type.type,
tbl_name.name

FROM
tbl_refer
INNER JOIN tbl_refer_type ON tbl_refer.type_id = tbl_refer_type.id
INNER JOIN tbl_name ON tbl_refer.name_id = tbl_name.id ; ;

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
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertlocation`(IN location VARCHAR(50), IN refer_id INT)
BEGIN

DECLARE bool INT;

SET bool = ( SELECT id FROM tbl_location WHERE `name` = location );
	IF (bool > 0) THEN 
		SELECT bool AS id;
	ELSE
		INSERT INTO tbl_location ( `name`, `refer_id` )
		VALUES ( location, refer_id );
		SELECT LAST_INSERT_ID() AS id;
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

SET FOREIGN_KEY_CHECKS = 1;
