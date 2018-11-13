/*
MySQL Backup
Database: bazarci
Backup Time: 2018-11-14 00:17:18
*/

SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `bazarci`.`ci_sessions`;
DROP TABLE IF EXISTS `bazarci`.`custom_fields`;
DROP TABLE IF EXISTS `bazarci`.`email_templates`;
DROP TABLE IF EXISTS `bazarci`.`home_stats`;
DROP TABLE IF EXISTS `bazarci`.`ip_block`;
DROP TABLE IF EXISTS `bazarci`.`ipn_log`;
DROP TABLE IF EXISTS `bazarci`.`login_attempts`;
DROP TABLE IF EXISTS `bazarci`.`password_reset`;
DROP TABLE IF EXISTS `bazarci`.`payment_logs`;
DROP TABLE IF EXISTS `bazarci`.`payment_plans`;
DROP TABLE IF EXISTS `bazarci`.`profile_comments`;
DROP TABLE IF EXISTS `bazarci`.`reset_log`;
DROP TABLE IF EXISTS `bazarci`.`site_layouts`;
DROP TABLE IF EXISTS `bazarci`.`site_settings`;
DROP TABLE IF EXISTS `bazarci`.`user_custom_fields`;
DROP TABLE IF EXISTS `bazarci`.`user_data`;
DROP TABLE IF EXISTS `bazarci`.`user_events`;
DROP TABLE IF EXISTS `bazarci`.`user_group_users`;
DROP TABLE IF EXISTS `bazarci`.`user_groups`;
DROP TABLE IF EXISTS `bazarci`.`user_logs`;
DROP TABLE IF EXISTS `bazarci`.`user_notifications`;
DROP TABLE IF EXISTS `bazarci`.`user_role_permissions`;
DROP TABLE IF EXISTS `bazarci`.`user_roles`;
DROP TABLE IF EXISTS `bazarci`.`users`;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `custom_fields` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `options` varchar(2000) NOT NULL,
  `required` int(11) NOT NULL,
  `profile` int(11) NOT NULL,
  `edit` int(11) NOT NULL,
  `help_text` varchar(500) NOT NULL,
  `register` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `email_templates` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `hook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `home_stats` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `google_members` int(11) NOT NULL DEFAULT '0',
  `facebook_members` int(11) NOT NULL DEFAULT '0',
  `twitter_members` int(11) NOT NULL DEFAULT '0',
  `total_members` int(11) NOT NULL DEFAULT '0',
  `new_members` int(11) NOT NULL DEFAULT '0',
  `active_today` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
CREATE TABLE `ip_block` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IP` varchar(500) NOT NULL DEFAULT '',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `reason` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `ipn_log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `data` text,
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `IP` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `login_attempts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IP` varchar(500) NOT NULL DEFAULT '',
  `username` varchar(500) NOT NULL DEFAULT '',
  `count` int(11) NOT NULL DEFAULT '0',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
CREATE TABLE `password_reset` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `token` varchar(255) NOT NULL DEFAULT '',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `IP` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `payment_logs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  `email` varchar(500) NOT NULL DEFAULT '',
  `processor` varchar(255) NOT NULL,
  `hash` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `payment_plans` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `hexcolor` varchar(6) NOT NULL DEFAULT '',
  `fontcolor` varchar(6) NOT NULL DEFAULT '',
  `cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `days` int(11) NOT NULL DEFAULT '0',
  `sales` int(11) NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL DEFAULT '',
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
CREATE TABLE `profile_comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `profileid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `reset_log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IP` varchar(500) NOT NULL DEFAULT '',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `site_layouts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `layout_path` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `site_settings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(500) NOT NULL,
  `site_desc` varchar(500) NOT NULL,
  `upload_path` varchar(500) NOT NULL,
  `upload_path_relative` varchar(500) NOT NULL,
  `site_email` varchar(500) NOT NULL,
  `site_logo` varchar(1000) NOT NULL DEFAULT 'logo.png',
  `register` int(11) NOT NULL,
  `disable_captcha` int(11) NOT NULL,
  `date_format` varchar(25) NOT NULL,
  `avatar_upload` int(11) NOT NULL DEFAULT '1',
  `file_types` varchar(500) NOT NULL,
  `twitter_consumer_key` varchar(255) NOT NULL,
  `twitter_consumer_secret` varchar(255) NOT NULL,
  `disable_social_login` int(11) NOT NULL,
  `facebook_app_id` varchar(255) NOT NULL,
  `facebook_app_secret` varchar(255) NOT NULL,
  `google_client_id` varchar(255) NOT NULL,
  `google_client_secret` varchar(255) NOT NULL,
  `file_size` int(11) NOT NULL,
  `paypal_email` varchar(1000) NOT NULL,
  `paypal_currency` varchar(100) NOT NULL DEFAULT 'USD',
  `payment_enabled` int(11) NOT NULL,
  `payment_symbol` varchar(5) NOT NULL DEFAULT '$',
  `global_premium` int(11) NOT NULL,
  `install` int(11) NOT NULL DEFAULT '1',
  `login_protect` int(11) NOT NULL,
  `activate_account` int(11) NOT NULL,
  `default_user_role` int(11) NOT NULL,
  `secure_login` int(11) NOT NULL,
  `stripe_secret_key` varchar(1000) NOT NULL,
  `stripe_publish_key` varchar(1000) NOT NULL,
  `google_recaptcha` int(11) NOT NULL,
  `google_recaptcha_secret` varchar(255) NOT NULL,
  `google_recaptcha_key` varchar(255) NOT NULL,
  `logo_option` int(11) NOT NULL,
  `layout` varchar(500) NOT NULL,
  `profile_comments` int(11) NOT NULL,
  `avatar_width` int(11) NOT NULL,
  `avatar_height` int(11) NOT NULL,
  `cache_time` int(11) NOT NULL,
  `checkout2_secret` varchar(255) NOT NULL,
  `checkout2_accountno` varchar(255) NOT NULL,
  `currently_online` int(11) NOT NULL,
  `resize_avatar` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
CREATE TABLE `user_custom_fields` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `fieldid` int(11) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `user_data` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `twitter` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `google` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `user_events` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IP` varchar(255) NOT NULL DEFAULT '',
  `event` varchar(255) NOT NULL DEFAULT '',
  `timestamp` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `user_group_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `groupid` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
CREATE TABLE `user_groups` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `default` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
CREATE TABLE `user_logs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `IP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `user_notifications` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `fromid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `user_role_permissions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `classname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `user_roles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `admin` int(11) NOT NULL DEFAULT '0',
  `admin_settings` int(11) NOT NULL DEFAULT '0',
  `admin_members` int(11) NOT NULL DEFAULT '0',
  `admin_payment` int(11) NOT NULL DEFAULT '0',
  `banned` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `token` varchar(255) NOT NULL DEFAULT '',
  `IP` varchar(500) NOT NULL DEFAULT '',
  `username` varchar(25) NOT NULL DEFAULT '',
  `first_name` varchar(25) NOT NULL DEFAULT '',
  `last_name` varchar(25) NOT NULL DEFAULT '',
  `avatar` varchar(1000) NOT NULL DEFAULT 'default.png',
  `joined` int(11) NOT NULL DEFAULT '0',
  `joined_date` varchar(10) NOT NULL DEFAULT '',
  `online_timestamp` int(11) NOT NULL DEFAULT '0',
  `oauth_provider` varchar(40) NOT NULL DEFAULT '',
  `oauth_id` varchar(1000) NOT NULL DEFAULT '',
  `oauth_token` varchar(1500) NOT NULL DEFAULT '',
  `oauth_secret` varchar(500) NOT NULL DEFAULT '',
  `email_notification` int(11) NOT NULL DEFAULT '1',
  `aboutme` varchar(1000) NOT NULL DEFAULT '',
  `points` decimal(10,2) NOT NULL DEFAULT '0.00',
  `premium_time` int(11) NOT NULL DEFAULT '0',
  `user_role` int(11) NOT NULL DEFAULT '0',
  `premium_planid` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `activate_code` varchar(255) NOT NULL DEFAULT '',
  `profile_comments` int(11) NOT NULL DEFAULT '1',
  `profile_views` int(11) NOT NULL DEFAULT '0',
  `address_1` varchar(255) NOT NULL DEFAULT '',
  `address_2` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(255) NOT NULL DEFAULT '',
  `noti_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
BEGIN;
LOCK TABLES `bazarci`.`ci_sessions` WRITE;
DELETE FROM `bazarci`.`ci_sessions`;
INSERT INTO `bazarci`.`ci_sessions` (`id`,`ip_address`,`timestamp`,`data`) VALUES ('02032n7nueu4rnaus4d04m8t5bdb145l', '::1', 1541933885, 0x5F5F63695F6C6173745F726567656E65726174657C693A313534313933333838343B),('ai88ctakccnnt47appt1ieirohlabl0e', '::1', 1542046046, 0x5F5F63695F6C6173745F726567656E65726174657C693A313534323034363034363B73637C693A33343936313B),('chnrhqgaj534q3leqfb661ohkjnm3m6d', '::1', 1541933884, 0x5F5F63695F6C6173745F726567656E65726174657C693A313534313933333838343B),('dsahinjv9gjfd2vcpd8i24cddsl8rvn7', '::1', 1542043695, 0x5F5F63695F6C6173745F726567656E65726174657C693A313534323034333638393B),('ltiicel6eukh680r0gbp4hchq5n8mbec', '::1', 1542045288, 0x5F5F63695F6C6173745F726567656E65726174657C693A313534323034353238383B73637C693A33343936313B),('o1673lmbtfffu2072tdsu4p393lin8ab', '::1', 1542046048, 0x5F5F63695F6C6173745F726567656E65726174657C693A313534323034363034373B73637C693A38333430303B);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`custom_fields` WRITE;
DELETE FROM `bazarci`.`custom_fields`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`email_templates` WRITE;
DELETE FROM `bazarci`.`email_templates`;
INSERT INTO `bazarci`.`email_templates` (`ID`,`title`,`message`,`hook`,`language`) VALUES (1, 'Forgot Your Password', '<p>Dear [NAME],<br />\r\n<br />\r\nSomeone (hopefully you) requested a password reset at [SITE_URL].<br />\r\n<br />\r\nTo reset your password, please follow the following link: [EMAIL_LINK]<br />\r\n<br />\r\nIf you did not reset your password, please kindly ignore this email.<br />\r\n<br />\r\nYours,<br />\r\n[SITE_NAME]</p>\r\n', 'forgot_password', 'english'),(2, 'Email Activation', '<p>Dear [NAME],<br />\r\n<br />\r\nSomeone (hopefully you) has registered an account on [SITE_NAME] using this email address.<br />\r\n<br />\r\nPlease activate the account by following this link: [EMAIL_LINK]<br />\r\n<br />\r\nIf you did not register an account, please kindly ignore this email.<br />\r\n<br />\r\nYours,<br />\r\n[SITE_NAME]</p>\r\n', 'email_activation', 'english');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`home_stats` WRITE;
DELETE FROM `bazarci`.`home_stats`;
INSERT INTO `bazarci`.`home_stats` (`ID`,`google_members`,`facebook_members`,`twitter_members`,`total_members`,`new_members`,`active_today`,`timestamp`) VALUES (1, 0, 0, 0, 1, 0, 1, 1542043691);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`ip_block` WRITE;
DELETE FROM `bazarci`.`ip_block`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`ipn_log` WRITE;
DELETE FROM `bazarci`.`ipn_log`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`login_attempts` WRITE;
DELETE FROM `bazarci`.`login_attempts`;
INSERT INTO `bazarci`.`login_attempts` (`ID`,`IP`,`username`,`count`,`timestamp`) VALUES (1, '::1', 'membaco@gmail.com', 1, 1542142774);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`password_reset` WRITE;
DELETE FROM `bazarci`.`password_reset`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`payment_logs` WRITE;
DELETE FROM `bazarci`.`payment_logs`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`payment_plans` WRITE;
DELETE FROM `bazarci`.`payment_plans`;
INSERT INTO `bazarci`.`payment_plans` (`ID`,`name`,`hexcolor`,`fontcolor`,`cost`,`days`,`sales`,`description`,`icon`) VALUES (2, 'BASIC', '65E0EB', 'FFFFFF', 3.00, 30, 8, 'This is the basic plan which gives you a introduction to our Premium Plans', 'glyphicon glyphicon-heart-empty'),(3, 'Professional', '55CD7B', 'FFFFFF', 7.99, 90, 3, 'Get all the benefits of basic at a cheaper price and gain content for longer.', 'glyphicon glyphicon-piggy-bank'),(4, 'LIFETIME', 'EE5782', 'FFFFFF', 300.00, 0, 1, 'Become a premium member for life and have access to all our premium content.', 'glyphicon glyphicon-gift');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`profile_comments` WRITE;
DELETE FROM `bazarci`.`profile_comments`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`reset_log` WRITE;
DELETE FROM `bazarci`.`reset_log`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`site_layouts` WRITE;
DELETE FROM `bazarci`.`site_layouts`;
INSERT INTO `bazarci`.`site_layouts` (`ID`,`name`,`layout_path`) VALUES (1, 'Basic', 'layout/themes/layout.php'),(2, 'Titan', 'layout/themes/titan_layout.php'),(3, 'Dark Fire', 'layout/themes/dark_fire_layout.php'),(4, 'Light Blue', 'layout/themes/light_blue_layout.php');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`site_settings` WRITE;
DELETE FROM `bazarci`.`site_settings`;
INSERT INTO `bazarci`.`site_settings` (`ID`,`site_name`,`site_desc`,`upload_path`,`upload_path_relative`,`site_email`,`site_logo`,`register`,`disable_captcha`,`date_format`,`avatar_upload`,`file_types`,`twitter_consumer_key`,`twitter_consumer_secret`,`disable_social_login`,`facebook_app_id`,`facebook_app_secret`,`google_client_id`,`google_client_secret`,`file_size`,`paypal_email`,`paypal_currency`,`payment_enabled`,`payment_symbol`,`global_premium`,`install`,`login_protect`,`activate_account`,`default_user_role`,`secure_login`,`stripe_secret_key`,`stripe_publish_key`,`google_recaptcha`,`google_recaptcha_secret`,`google_recaptcha_key`,`logo_option`,`layout`,`profile_comments`,`avatar_width`,`avatar_height`,`cache_time`,`checkout2_secret`,`checkout2_accountno`,`currently_online`,`resize_avatar`) VALUES (1, 'Bazarci.com', 'Bazarci.com Proje', 'C:/wamp64/www/admin/uploads', 'uploads', 'test@test.com', 'logo.png', 0, 1, 'd/m/Y', 1, 'gif|png|jpg|jpeg', '0', '0', 1, '0', '0', '0', '0', 1028, '0', 'USD', 1, '$', 0, 0, 1, 0, 5, 1, '0', '0', 0, '0', '0', 0, 'layout/themes/dark_fire_layout.php', 1, 80, 80, 3600, '0', '0', 1, 1);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`user_custom_fields` WRITE;
DELETE FROM `bazarci`.`user_custom_fields`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`user_data` WRITE;
DELETE FROM `bazarci`.`user_data`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`user_events` WRITE;
DELETE FROM `bazarci`.`user_events`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`user_group_users` WRITE;
DELETE FROM `bazarci`.`user_group_users`;
INSERT INTO `bazarci`.`user_group_users` (`ID`,`groupid`,`userid`) VALUES (1, 1, 2),(2, 1, 3),(3, 1, 4);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`user_groups` WRITE;
DELETE FROM `bazarci`.`user_groups`;
INSERT INTO `bazarci`.`user_groups` (`ID`,`name`,`default`) VALUES (1, 'Default Group', 1);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`user_logs` WRITE;
DELETE FROM `bazarci`.`user_logs`;
INSERT INTO `bazarci`.`user_logs` (`ID`,`userid`,`timestamp`,`message`,`IP`,`user_agent`) VALUES (1, 1, 1541931425, 'Logged In', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36'),(2, 1, 1542045300, 'Logged In', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36'),(3, 1, 1542045302, 'Logged In', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36'),(4, 1, 1542045390, 'Updated Global Settings', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36'),(5, 1, 1542046046, 'Logged Out', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36'),(6, 1, 1542142781, 'Logged In', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36'),(7, 4, 1542142860, 'Logged In', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36'),(8, 1, 1542143166, 'Logged In', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`user_notifications` WRITE;
DELETE FROM `bazarci`.`user_notifications`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`user_role_permissions` WRITE;
DELETE FROM `bazarci`.`user_role_permissions`;
INSERT INTO `bazarci`.`user_role_permissions` (`ID`,`name`,`description`,`classname`,`hook`) VALUES (1, 'ctn_308', 'ctn_308', 'admin', 'admin'),(2, 'ctn_309', 'ctn_309', 'admin', 'admin_settings'),(3, 'ctn_310', 'ctn_310', 'admin', 'admin_members'),(4, 'ctn_311', 'ctn_311', 'admin', 'admin_payment'),(5, 'ctn_33', 'ctn_33', 'banned', 'banned');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`user_roles` WRITE;
DELETE FROM `bazarci`.`user_roles`;
INSERT INTO `bazarci`.`user_roles` (`ID`,`name`,`admin`,`admin_settings`,`admin_members`,`admin_payment`,`banned`) VALUES (1, 'Admin', 1, 0, 0, 0, 0),(2, 'Member Manager', 0, 0, 1, 0, 0),(3, 'Admin Settings', 0, 1, 0, 0, 0),(4, 'Admin Payments', 0, 0, 0, 1, 0),(5, 'Member', 0, 0, 0, 0, 0),(6, 'Banned', 0, 0, 0, 0, 1);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `bazarci`.`users` WRITE;
DELETE FROM `bazarci`.`users`;
INSERT INTO `bazarci`.`users` (`ID`,`email`,`password`,`token`,`IP`,`username`,`first_name`,`last_name`,`avatar`,`joined`,`joined_date`,`online_timestamp`,`oauth_provider`,`oauth_id`,`oauth_token`,`oauth_secret`,`email_notification`,`aboutme`,`points`,`premium_time`,`user_role`,`premium_planid`,`active`,`activate_code`,`profile_comments`,`profile_views`,`address_1`,`address_2`,`city`,`state`,`zipcode`,`country`,`noti_count`) VALUES (1, 'membaco@gmail.com', '$2a$12$gOJFfgVMN7gXhn36hdHl1uNbCc2t6sa2FYiBlFQmLwX7RcOI8dh8O', '5eff9462e01bc28698010093a1783336', '::1', 'membaco', 'Admin', 'User', 'default.png', 1541931415, '11-2018', 1542143166, '', '', '', '', 1, '', 0.00, 0, 1, 0, 1, '', 1, 0, '', '', '', '', '', '', 0),(2, 'membaco@yilmaz.com', '$2a$12$a32gmqpoonLzSOHnNtTIxumibEILCUI3im9vwXXY0nKltiJn7GnpG', '', '::1', 'membaco7', '', '', 'default.png', 1542142190, '11-2018', 0, '', '', '', '', 1, '', 0.00, 0, 5, 0, 1, '', 1, 0, '', '', '', '', '', '', 0),(3, 'membaco@yilma3z.com', '$2a$12$CExihXvoBrmFQjsbroHozutR4Vt/zp1FA6VlCKD9gCmKLWSJeWOs2', '', '::1', 'membaco73', '', '', 'default.png', 1542142336, '11-2018', 0, '', '', '', '', 1, '', 0.00, 0, 5, 0, 1, '', 1, 0, '', '', '', '', '', '', 0),(4, 'membaco2@gmail.com', '$2a$12$9nv.c0lGHT6gsci2Y.GBWeM6Dd08koFzfEleCTIJszXtyQ.21N9R2', '5eb1b2e55cb93dfbd1b07bc05527bdf8', '::1', '86800011335430000', '', '', 'default.png', 1542142847, '11-2018', 1542142860, '', '', '', '', 1, '', 0.00, 0, 5, 0, 1, '', 1, 0, '', '', '', '', '', '', 0);
UNLOCK TABLES;
COMMIT;
