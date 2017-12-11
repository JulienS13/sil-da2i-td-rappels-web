
-- Creation des tables 

DROP TABLE IF EXISTS person;

CREATE TABLE person (
  id int NOT NULL AUTO_INCREMENT,
  lastname varchar(255) NOT NULL,
  firstname varchar(255) NOT NULL,
  birthDate date NOT NULL,
  biography longtext,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS movie;

CREATE TABLE movie (
  id int NOT NULL AUTO_INCREMENT,
  title varchar(255) DEFAULT NULL,
  releaseDate int(4) NOT NULL,
  synopsis varchar(10000) DEFAULT NULL,
  rating int(5) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS picture;

CREATE TABLE picture (
id int NOT NULL AUTO_INCREMENT,
path varchar(255) NOT NULL,
legend varchar(255) NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS movieHasPerson;

CREATE TABLE movieHasPerson (
  idMovie int NOT NULL DEFAULT 0,
  idPerson int(11) NOT NULL DEFAULT 0,
  role varchar(255) DEFAULT NULL,
  FOREIGN KEY (idMovie) REFERENCES movie(id),
  FOREIGN KEY (idPerson) REFERENCES person(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS personHasPicture;

CREATE TABLE personHasPicture (
  idPerson int NOT NULL DEFAULT 0,
  idPicture int NOT NULL DEFAULT 0,
  FOREIGN KEY (idPerson) REFERENCES person(id),
  FOREIGN KEY (idPicture) REFERENCES picture(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS movieHasPicture;

CREATE TABLE movieHasPicture (
  idMovie int NOT NULL DEFAULT 0,
  idPicture int(11) NOT NULL DEFAULT 0,
  role varchar(255) DEFAULT NULL,
  FOREIGN KEY (idMovie) REFERENCES movie(id),
  FOREIGN KEY (idPicture) REFERENCES picture(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






-- REMPLISSAGE DES TABLES


INSERT INTO person VALUES ('1','Scott','Ridley','1937-11-30','Scott est reconnu pour son style visuel très concentré et atmosphérique, qui a inspiré un grand nombre de réalisateurs1,2. Il a été nommé à trois reprises à l"oscar du meilleur réalisateur, ainsi qu"aux Golden Globes et BAFTA Awards. En 2003, il est anobli par la reine Élisabeth II pour services rendus aux arts britanniques, et en 2015, il reçoit un doctorat honorifique par le Royal College of Art de Londres.'),('2','Skeritt','Tom','1933-08-25',NULL),('3','Weaver','Sigourney','1949-10-08',NULL),('4','Cartwright','Veronica','1949-04-20',NULL),('5','Stanton','Harry Dean','1926-07-14',NULL);

INSERT INTO movie VALUES ('1','Alien','1979','Le vaisseau commercial Nostromo et son équipage, sept hommes et femmes, rentrent sur Terre avec une importante cargaison de minerai. Mais lors d"un arrêt forcé sur une planète déserte, l"officier Kane se fait agresser par une forme de vie inconnue, une arachnide qui étouffe son visage','4');

INSERT INTO picture VALUES ('1','img/alienaffiche.jpg','Affiche du Film'),('2','img/ripley.jpg','Ripley'),('3','img/nostromo.jpg','Nostromo'),('4','img/ridleyscott.jpg','Ridley Scott'),('5','img/tomskeritt.jpg','Tom Skeritt'),('6','img/sigourneyweaver.jpg','Sigourney Weaver'),('7','img/veronicacartwright.jpg','Veronica Cartwright'),('8','img/harrydeanstanton.jpg','Harry Dean Stanton');

INSERT INTO movieHasPerson VALUES ('1','1','director'),('1','2','actor'),('1','3','actor'),('1','4','actor'),('1','5','actor');

INSERT INTO personHasPicture VALUES ('1','4'),('2','5'),('3','6'),('4','7'),('5','8');

INSERT INTO movieHasPicture VALUES ('1','1','poster'),('1','2','gallery'),('1','3','gallery');