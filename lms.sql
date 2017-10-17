/*
Navicat MySQL Data Transfer

Source Server         : XAMPP
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : lms

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-10-17 17:48:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for classes
-- ----------------------------
DROP TABLE IF EXISTS `classes`;
CREATE TABLE `classes` (
  `id_class` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_parent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of classes
-- ----------------------------

-- ----------------------------
-- Table structure for courses
-- ----------------------------
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id_course` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `directory` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id_course`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of courses
-- ----------------------------

-- ----------------------------
-- Table structure for permisions
-- ----------------------------
DROP TABLE IF EXISTS `permisions`;
CREATE TABLE `permisions` (
  `id_permission` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_permission`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of permisions
-- ----------------------------
INSERT INTO `permisions` VALUES ('1', 'Administrator', 'fa fa-user');
INSERT INTO `permisions` VALUES ('2', 'Project Manager', null);
INSERT INTO `permisions` VALUES ('3', 'Developer', null);
INSERT INTO `permisions` VALUES ('4', 'Platform Manager', null);
INSERT INTO `permisions` VALUES ('5', 'User', null);

-- ----------------------------
-- Table structure for profiles
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id_profile` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of profiles
-- ----------------------------
INSERT INTO `profiles` VALUES ('1', 'Administrator', 'fa fa-user');
INSERT INTO `profiles` VALUES ('2', 'Project Manager', null);
INSERT INTO `profiles` VALUES ('3', 'Developer', null);
INSERT INTO `profiles` VALUES ('4', 'Platform Manager', null);
INSERT INTO `profiles` VALUES ('5', 'User', null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `profile_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `profile` (`profile_id`),
  CONSTRAINT `profile_user` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id_profile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
