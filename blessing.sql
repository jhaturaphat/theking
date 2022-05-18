/*
 Navicat Premium Data Transfer

 Source Server         : 192.168.231.221
 Source Server Type    : MySQL
 Source Server Version : 100021
 Source Host           : 192.168.231.221:3306
 Source Schema         : hospital-detudom

 Target Server Type    : MySQL
 Target Server Version : 100021
 File Encoding         : 65001

 Date: 18/05/2022 11:15:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for blessing
-- ----------------------------
DROP TABLE IF EXISTS `blessing`;
CREATE TABLE `blessing`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `txt` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `king_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '12 สิงหาคม 2564',
  `create_at` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 812 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
