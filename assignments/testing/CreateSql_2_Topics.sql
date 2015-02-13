USE teamActivity4;

GRANT SELECT, INSERT, UPDATE ON teamActivity4.* TO 'ta4User'@'localhost' IDENTIFIED BY 'ta4pass';
FLUSH PRIVILEGES;

DROP TABLE IF EXISTS topic;
CREATE TABLE topic (
  id int PRIMARY KEY AUTO_INCREMENT,
  name varchar(40) NOT NULL
  );

INSERT INTO topic (name) VALUES ('Faith');
INSERT INTO topic (name) VALUES ('Sacrifice');
INSERT INTO topic (name) VALUES ('Charity');
/*
CREATE TABLE scripture_topic (
  id int PRIMARY KEY AUTO_INCREMENT
, scriptureId int NOT NULL
, topicId int NOT NULL);

Alter table scripture_topic
ADD CONSTRAINT scripture_topic_fk1 FOREIGN KEY (scriptureId) REFERENCES scripture(id)
ADD CONSTRAINT scripture_topic_fk2 FOREIGN KEY (topicId) REFERENCES topic(id));
*/
DROP TABLE IF EXISTS scripture_topic;
CREATE TABLE scripture_topic (
scriptureId int NOT NULL
, topicId int NOT NULL
, FOREIGN KEY (scriptureId) REFERENCES scripture(id)
, FOREIGN KEY (topicId) REFERENCES topic(id)
);