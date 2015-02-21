-- user.sql
USE pluckit;
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS secret;

CREATE TABLE user
( user_id         INT UNSIGNED      PRIMARY KEY NOT NULL AUTO_INCREMENT
, user_name       VARCHAR(20)       NOT NULL
, user_password VARCHAR(256) NOT NULL     
, creation_date   DATE              NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*
CREATE TABLE secret
( secret_id         INT UNSIGNED     PRIMARY KEY NOT NULL AUTO_INCREMENT
, secret_password   VARCHAR(256)      NOT NULL    
, creation_date   DATE             NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE user
( user_id         INT UNSIGNED      PRIMARY KEY NOT NULL AUTO_INCREMENT
, user_name       VARCHAR(20)       NOT NULL
, user_secret_password INT UNSIGNED  NOT NULL     
, creation_date   DATE              NOT NULL
, CONSTRAINT FOREIGN KEY (user_secret_password) REFERENCES secret(secret_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO secret VALUES
( NULL
, 'eagle'
, UTC_DATE());

SET @lv_secret_id := last_insert_id();

INSERT INTO user VALUES
( NULL
, 'frank'
, @lv_secret_id
, UTC_DATE());
*/
INSERT INTO user VALUES
( NULL
, 'frank'
, 'eagle'
, UTC_DATE());
