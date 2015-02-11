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

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'A', '002220', UTC_DATE());

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'F', '003210', UTC_DATE());

SELECT 'chord' AS "INSERT INTO";
INSERT INTO chord VALUES
( NULL, 'C', '032010', UTC_DATE());
