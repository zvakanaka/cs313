-- scripture FATIH
DROP DATABASE scriptureRepo;
CREATE DATABASE scriptureRepo;
USE scriptureRepo;
DROP TABLE IF EXISTS scriptures;
CREATE TABLE scriptures
( scripture_id           INT UNSIGNED PRIMARY KEY AUTO_INCREMENT
, scripture_book         VARCHAR(30) NOT NULL
, scripture_chapter      INT  NOT NULL
, scripture_verse        INT NOT NULL
, scripture_content      TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO scriptures
( scripture_book        
, scripture_chapter     
, scripture_verse       
, scripture_content)
VALUES 
( 'Hebrews'
, 11
, 1
, '1 Now faith is the substance of things hoped for, the evidence of things not seen.'
);

INSERT INTO scriptures
( scripture_book        
, scripture_chapter     
, scripture_verse       
, scripture_content)
VALUES 
( 'Enos'
, 1
, 8
, '8 And he said unto me: Because of thy faith in Christ, whom thou hast never before heard nor seen. And many years pass away before he shall manifest himself in the flesh; wherefore, go to, thy faith hath made thee whole.'
);

INSERT INTO scriptures
( scripture_book        
, scripture_chapter     
, scripture_verse       
, scripture_content)
VALUES 
( 'Moroni'
, 7
, 33
, '33 And Christ hath said: If ye will have faith in me ye shall have power to do whatsoever thing is expedient in me.'
);

INSERT INTO scriptures
( scripture_book        
, scripture_chapter     
, scripture_verse       
, scripture_content)
VALUES 
( 'Ether'
, 12
, 19
, '19 And there were many whose faith was so exceedingly strong, even before Christ came, who could not be kept from within the veil, but truly saw with their eyes the things which they had beheld with an eye of faith, and they were glad.'
);