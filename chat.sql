/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : chat

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-08-25 15:16:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=281 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('270', '老虎', '哈哈', '1440095751');
INSERT INTO `content` VALUES ('271', '老虎', '啊啊', '1440096130');
INSERT INTO `content` VALUES ('272', '老虎', '啊啊啊', '1440096134');
INSERT INTO `content` VALUES ('273', '老虎', '航航', '1440096917');
INSERT INTO `content` VALUES ('274', '小猫', '喵', '1440141808');
INSERT INTO `content` VALUES ('275', '小猫', '喵喵喵', '1440141815');
INSERT INTO `content` VALUES ('276', '小猫', '...', '1440142057');
INSERT INTO `content` VALUES ('277', '小猫', '.....', '1440142455');
INSERT INTO `content` VALUES ('278', 'skila', '啦啦啦\n', '1440249448');
INSERT INTO `content` VALUES ('279', 'skila', '行行行', '1440256787');
INSERT INTO `content` VALUES ('280', 'skila', 'data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAQDAwQDAwQEAwQFBAQFBgoHBgYGBg0JCggKDw0QEA8NDw4RExgUERIXEg4PFRwVFxkZGxsbEBQdHx0aHxgaGxr/2wBDAQQFBQYFBgwHBwwaEQ8RGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGhoaGho', '1440346052');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_psw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('24', 'skila', 'ecfd4001d7f82d0be4eccc31f2060114', '1');
INSERT INTO `user` VALUES ('25', '猴子', 'ecfd4001d7f82d0be4eccc31f2060114', '0');
INSERT INTO `user` VALUES ('26', '老虎', 'ecfd4001d7f82d0be4eccc31f2060114', '1');
INSERT INTO `user` VALUES ('27', '小猫', 'ecfd4001d7f82d0be4eccc31f2060114', '0');
