/*
Navicat MySQL Data Transfer

Source Server         : PMA_RCTI
Source Server Version : 50150
Source Host           : localhost:3306
Source Database       : db_chalenggercti28

Target Server Type    : MYSQL
Target Server Version : 50150
File Encoding         : 65001

Date: 2017-08-03 16:55:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES ('1', 'andre', 'andre', '1234');
INSERT INTO `tbl_admin` VALUES ('2', 'admin', 'admin', 'admin');

-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unix_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `merk_hp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipe_hp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text COLLATE utf8_unicode_ci,
  `no_iden` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1287 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('1280', 'Aming', null, '1501720880', null, null, null, null, '085715209286', null, null, '1988-02-24', 'Ciledug jaya', '353682990100', '0', '2017-08-03 07:41:20', '2017-08-03 07:41:20');
INSERT INTO `tbl_users` VALUES ('1281', 'Viko', null, '1501743090', null, null, null, null, '513155312', null, null, '0000-00-00', 'jogja', '001234', '0', '2017-08-03 13:51:30', '2017-08-03 13:51:30');
INSERT INTO `tbl_users` VALUES ('1282', 'Kakung Jati Pramono', null, '1501745146', null, null, null, null, '089692496692', null, null, '1994-07-05', 'Cengkareng', '', '0', '2017-08-03 14:25:46', '2017-08-03 14:25:46');
INSERT INTO `tbl_users` VALUES ('1283', 'Aries Ardiansyah', null, '1501747012', null, null, null, null, '08997150794', null, null, '1989-06-27', 'ciputat', '123', '0', '2017-08-03 14:56:52', '2017-08-03 14:56:52');
INSERT INTO `tbl_users` VALUES ('1284', 'Oktavianus', null, '1501751688', null, null, null, null, '081212172206', null, null, '1996-10-28', 'Jl. Pekapuran 2/7 tambora jakarta barat', '3173042810960006', '0', '2017-08-03 16:14:48', '2017-08-03 16:14:48');
INSERT INTO `tbl_users` VALUES ('1285', 'Oktavianus', null, '1501751693', null, null, null, null, '081212172206', null, null, '1996-10-28', 'Jl. Pekapuran 2/7 tambora jakarta barat', '3173042810960006', '0', '2017-08-03 16:14:53', '2017-08-03 16:14:53');
INSERT INTO `tbl_users` VALUES ('1286', 'Oktavianus', null, '1501751710', null, null, null, null, '081212172206', null, null, '1996-10-28', 'Jl. Pekapuran 2/7 tambora jakarta barat', '3173042810960006', '0', '2017-08-03 16:15:10', '2017-08-03 16:15:10');
