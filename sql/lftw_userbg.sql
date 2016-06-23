CREATE TABLE lftw_userbg (
  id bigint(20) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_id bigint(20) unsigned,

  gender varchar(255) DEFAULT '' NOT NULL,
  age varchar(255) DEFAULT '' NOT NULL,
  role varchar(255) DEFAULT '' NOT NULL,
  education1 varchar(255) DEFAULT '' NOT NULL,
  education2 varchar(255) DEFAULT '' NOT NULL,

  location varchar(255) DEFAULT '' NOT NULL,
  organic varchar(255) DEFAULT '' NOT NULL,
  `type` varchar(255) DEFAULT '' NOT NULL,
  count_dairy varchar(255) DEFAULT '' NOT NULL,
  count_suckler varchar(255) DEFAULT '' NOT NULL,
  count_beef varchar(255) DEFAULT '' NOT NULL,
  count_hiefer varchar(255) DEFAULT '' NOT NULL,
  count_calf varchar(255) DEFAULT '' NOT NULL,

  tiknown varchar(255) DEFAULT '' NOT NULL,
  tiknownfrom varchar(255) DEFAULT '' NOT NULL,
  tiknown_text text DEFAULT '' NOT NULL,
  timeaning varchar(255) DEFAULT '' NOT NULL,
  suitability varchar(255) DEFAULT '' NOT NULL,

  crdate int(11) unsigned DEFAULT '0' NOT NULL,
	KEY user_id (user_id)
);