CREATE TABLE lftw_results (
  id bigint(20) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_id bigint(20) unsigned,
  quiz varchar(255) NOT NULL,
  kappa FLOAT(3.2) DEFAULT '0.00' NOT NULL,
  answers text DEFAULT '' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
	KEY user_id (user_id)
);