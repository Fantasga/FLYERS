
CREATE DATABASE FLYERS;
USE FLYERS;

CREATE TABLE UTENTE(
	KEYUTENTE INT AUTO_INCREMENT,
	ID VARCHAR(32),
	EMAIL VARCHAR(40),
  CITTA VARCHAR(70),
	PASS VARCHAR(16),
	UNIQUE (EMAIL,ID),
	PRIMARY KEY (KEYUTENTE)
)
ENGINE = InnoDB;

CREATE TABLE TAG(
	KEYTAG INT AUTO_INCREMENT,
	NOME VARCHAR(50) NOT NULL,
	UNIQUE (NOME),
	PRIMARY KEY (KEYTAG)
)
ENGINE = InnoDB;



CREATE TABLE APPUNTI(
	KEYAPPUNTI INT AUTO_INCREMENT,
	NOME VARCHAR(70) NOT NULL,
	CATEGORIA VARCHAR (25) NOT NULL,
	DESCRIZIONE VARCHAR(300),
	RAITING DOUBLE,
	PATH VARCHAR (300),
  DATADICARICAMENTO DATE NOT NULL,
  KEYUTENTE INT,
    
    PRIMARY KEY (KEYAPPUNTI),
    
    FOREIGN KEY(KEYUTENTE)
    REFERENCES UTENTE (KEYUTENTE)
		ON DELETE CASCADE
		ON UPDATE SET NULL
)
ENGINE = InnoDB;



CREATE TABLE ANNUNCIO(
	KEYANNUNCIO INT AUTO_INCREMENT,
	TITOLO VARCHAR(70) NOT NULL,
	DESCRIZIONE VARCHAR(300),
  CONTATTO VARCHAR(70),
  DATADICARICAMENTO DATE NOT NULL,
  KEYUTENTE INT,
    
    PRIMARY KEY (KEYANNUNCIO),
    
    FOREIGN KEY(KEYUTENTE)
    REFERENCES UTENTE (KEYUTENTE)
		ON DELETE CASCADE
		ON UPDATE SET NULL
)
ENGINE = InnoDB;


CREATE TABLE TAGPERANNUNCIO(
	KEYTAG INT,
    KEYANNUNCIO INT,
    PRIMARY KEY ( KEYTAG , KEYANNUNCIO),
    FOREIGN KEY (KEYTAG) REFERENCES TAG (KEYTAG),
    FOREIGN KEY (KEYANNUNCIO) REFERENCES ANNUNCIO (KEYANNUNCIO)
)
ENGINE = InnoDB;

CREATE TABLE TAGPERAPPUNTI(
	KEYTAG INT,
    KEYAPPUNTI INT,
    PRIMARY KEY ( KEYTAG , KEYAPPUNTI),
    FOREIGN KEY (KEYTAG) REFERENCES TAG (KEYTAG),
    FOREIGN KEY (KEYAPPUNTI) REFERENCES APPUNTI (KEYAPPUNTI)
)
ENGINE = InnoDB;

