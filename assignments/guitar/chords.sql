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

DELETE FROM chord;

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'F', '003210', UTC_DATE());

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'A maj', 'X02220', UTC_DATE());

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'A 7', 'X02020', UTC_DATE());

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'A min', 'X02210', UTC_DATE());

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'C maj', 'X32010', UTC_DATE());

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'C 7', 'X32310', UTC_DATE());

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'C min', 'X3101X', UTC_DATE());



