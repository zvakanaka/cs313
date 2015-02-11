DROP DATABASE IF EXISTS pluckit;
CREATE DATABASE pluckit;
USE pluckit;
SELECT 'SONG' AS "Drop Table";
DROP TABLE IF EXISTS song;

SELECT 'SONG' AS "Create Table";
CREATE TABLE song
( song_id         INT UNSIGNED PRIMARY KEY AUTO_INCREMENT
, song_name       VARCHAR(100)     NOT NULL
, song_composer   VARCHAR(100)     NOT NULL
, creation_date   DATE            NOT NULL    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- New Songs
INSERT INTO song VALUES
( NULL, 'My Arms are Goose Wings Over a Lake', 'Adam Q', UTC_DATE());

INSERT INTO song VALUES
( NULL, 'Wind', 'Adam Q', UTC_DATE());

INSERT INTO song VALUES
( NULL, 'We are Dust', 'Adam Q', UTC_DATE());