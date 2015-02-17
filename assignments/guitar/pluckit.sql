SYSTEM rm pluckit_log.txt
TEE pluckit_log.txt
DROP DATABASE IF EXISTS pluckit;
CREATE DATABASE pluckit;
USE pluckit;

SELECT 'SONG' AS "Drop Table";
DROP TABLE IF EXISTS song;

source songs.sql

/*SELECT 'SONG' AS "Create Table";
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
*/

source chords.sql
/*
SELECT 'CHORD' AS "Drop Table";
DROP TABLE IF EXISTS chord;
-- TODO - INSERT data for those last two songs
SELECT 'chord' AS "Create Table";
CREATE TABLE chord
( chord_id         INT UNSIGNED  PRIMARY KEY NOT NULL AUTO_INCREMENT
, chord_name       VARCHAR(20)      NOT NULL
, strings          VARCHAR(6)       NOT NULL    
, creation_date    DATE          NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

SET @lv_song_id := last_insert_id();

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'A', '002220', UTC_DATE());

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'F', '003210', UTC_DATE());

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'C', '032010', UTC_DATE());
*/
SELECT 'chord' AS "INSERT INTO";
SELECT 'left_hand' AS "Drop Table";
DROP TABLE IF EXISTS left_hand;

SELECT 'left_hand' AS "Create Table";
CREATE TABLE left_hand
( left_hand_id     INT UNSIGNED  PRIMARY KEY NOT NULL AUTO_INCREMENT
, chord_id         INT UNSIGNED  NOT NULL
, finger_pattern VARCHAR(6)
, capo             INT(2)
, creation_date    DATE          NOT NULL
, CONSTRAINT left_hand_fk1 FOREIGN KEY (chord_id) REFERENCES chord(chord_id)   
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

SELECT 'left hand' AS "INSERT INTO";
-- LEFT INSERT
INSERT INTO left_hand VALUES
( NULL 
, (SELECT chord_id
FROM chord
WHERE chord_name = 'A')
, NULL
, UTC_DATE()
);

-- LEFT INSERT
INSERT INTO left_hand VALUES
( NULL 
, (SELECT chord_id
FROM chord
WHERE chord_name = 'F')
, NULL
, UTC_DATE()
);

SELECT 'right_hand' AS "Drop Table";
DROP TABLE IF EXISTS right_hand;

SELECT 'right_hand' AS "Create Table";
CREATE TABLE right_hand
( right_hand_id    INT UNSIGNED  PRIMARY KEY NOT NULL AUTO_INCREMENT
, start_times      VARCHAR(6)    NOT NULL    -- for when strings are plucked
, end_times        VARCHAR(6)    NOT NULL    -- how long 
, plucking         VARCHAR(6)    NOT NULL     -- which fingers are on what strings
, creation_date    DATE          NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- LEFT INSERT
INSERT INTO right_hand VALUES
( NULL 
, '012345' 
, '------'
, '012345' 
, UTC_DATE()
);

SELECT 'lookup' AS "Drop Table";
DROP TABLE IF EXISTS lookup;

SELECT 'lookup' AS "Create Table";
CREATE TABLE lookup
( lookup_id         INT UNSIGNED  PRIMARY KEY NOT NULL AUTO_INCREMENT
, song_id           INT UNSIGNED  NOT NULL
, left_hand_id      INT UNSIGNED  NOT NULL
, right_hand_id     INT UNSIGNED  NOT NULL
, creation_date     DATE          NOT NULL
, CONSTRAINT lookup_fk1 FOREIGN KEY (song_id) REFERENCES song(song_id)    
, CONSTRAINT lookup_fk2 FOREIGN KEY (left_hand_id) REFERENCES left_hand(left_hand_id)    
, CONSTRAINT lookup_fk3 FOREIGN KEY (right_hand_id) REFERENCES right_hand(right_hand_id)    
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO lookup VALUES
( NULL
, (SELECT song_id 
  FROM song
  WHERE song_name = 'My Arms are Goose Wings Over a Lake'
  AND  song_composer = 'Adam Q')
, 1, 1, UTC_DATE());

DESC song;
-- SHOW CREATE TABLE song;
DESC chord;
-- SHOW CREATE TABLE chord;
SELECT * FROM chord;

NOTEE

SYSTEM grep 'error' -i -n pluckit_log.txt
