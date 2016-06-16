CREATE TABLE lftw_userbg (
  id bigint(20) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_id bigint(20) unsigned,
	KEY user_id (user_id)
);