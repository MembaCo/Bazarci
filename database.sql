
CREATE TABLE `bazarci`.`ayar`  (
  `ayar_id` int(11) NULL DEFAULT NULL,
  `ayar_tip` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `ayar_deger` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

CREATE TABLE `bazarci`.`kullanicilar`  (
  `kul_id` int(11) NOT NULL AUTO_INCREMENT,
  `kul_adi` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kul_soyadi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kul_eposta` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kul_tel` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kul_adres1` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kul_adres2` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kul_il` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kul_ilce` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`kul_poskod` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`kul_ulke` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
	`kul_dil` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kul_sifre` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kul_olu_tarih` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kul_google_plus` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kul_skype` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kul_facebook` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kul_wishlist` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `kul_son_giris` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kul_tipi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'default',
  `kul_tipi_zaman` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kul_urun_tipi` varchar(5000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '[]',
  `kul_indirilenler` varchar(10000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '[]',
  `kul_cuzdan` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kul_urun_yukleme` int(11) NOT NULL,
  `kul_paket_bilgi` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`kul_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

CREATE TABLE `bazarci`.`yetki`  (
  `yetki_id` int(11) NOT NULL AUTO_INCREMENT,
  `yetki_adi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `yetki_kodu` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `yetki_parent` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `yetki_aciklama` longtext CHARACTER SET utf8 COLLATE utf8_bin NULL,
  PRIMARY KEY (`yetki_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

CREATE TABLE `bazarci`.`kul_grup`  (
  `grp_id` int(11) NOT NULL AUTO_INCREMENT,
  `grp_adi` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `grp_yetki` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `grp_aciklama` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`grp_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;