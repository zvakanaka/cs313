-- user.sql
USE pluckit;
DROP TABLE IF EXISTS user;

CREATE TABLE user
( user_id         INT UNSIGNED     PRIMARY KEY NOT NULL AUTO_INCREMENT
, user_name       VARCHAR(20)      NOT NULL
, user_password   VARCHAR(256)      NOT NULL    
, creation_date   DATE             NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO user VALUES
( NULL
, 'frank'
, 'eagle'
, UTC_DATE());