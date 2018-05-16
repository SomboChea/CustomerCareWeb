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

 Date: 11/05/2018 03:26:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;


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
INNER JOIN tbl_name ON tbl_refer.name_id = tbl_name.id ;

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
