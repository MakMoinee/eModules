/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : emodules

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 25/11/2022 00:02:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for academic_strands
-- ----------------------------
DROP TABLE IF EXISTS `academic_strands`;
CREATE TABLE `academic_strands`  (
  `strandID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`strandID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of academic_strands
-- ----------------------------
INSERT INTO `academic_strands` VALUES (1, 'ABM', '2022-11-16 21:43:19', NULL);
INSERT INTO `academic_strands` VALUES (2, 'GAS', '2022-11-16 21:43:23', NULL);
INSERT INTO `academic_strands` VALUES (3, 'HUMSS', '2022-11-16 21:43:39', NULL);
INSERT INTO `academic_strands` VALUES (4, 'STEM', '2022-11-16 21:43:52', NULL);
INSERT INTO `academic_strands` VALUES (5, 'TVL', '2022-11-16 21:44:33', NULL);

SET FOREIGN_KEY_CHECKS = 1;
