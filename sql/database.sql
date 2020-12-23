-- ----------------------------------
-- DATABASE PHP SYMFONY P5
-- source D:\wamp\www\php-symfony-p5\sql\database.sql;
-- ----------------------------------

DROP DATABASE IF EXISTS symfony_p5;

CREATE DATABASE symfony_p5
  CHARACTER SET utf8
  COLLATE utf8_general_ci;

USE symfony_p5 ;

-- ----------------------------------
-- USER
-- ----------------------------------

CREATE TABLE `user`
(
  id                      SMALLINT      UNSIGNED  NOT NULL AUTO_INCREMENT, -- 65535 utilisateurs possibles
  pseudo                  VARCHAR(60)   NOT NULL,                          -- prénom le plus long du  monde        = 60 lettres
  email                   VARCHAR(345)  UNIQUE NOT NULL,                   -- adresse mail la plus longue du monde = 345 lettres
  pwd                     VARCHAR(70)   NOT NULL,                          -- la fonction SHA1() renvoie un hexa de 40 caractères
  is_admin                TINYINT(1)    NOT NULL  DEFAULT 0,               -- par défaut : 0

  PRIMARY KEY (id)
  
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------------
-- POST
-- ----------------------------------

CREATE TABLE `post`
(
  id                      SMALLINT      UNSIGNED  NOT NULL AUTO_INCREMENT, -- 65535 posts possibles
  title                   VARCHAR(60)   NOT NULL,                          -- 60 caractères max
  summary                 VARCHAR(255)  NOT NULL,                          -- 255 caractères max
  updated_at              DATETIME      NOT NULL,                          --
  content                 LONGTEXT      NOT NULL,                          -- 4 294 967 295 caractères max
  user_id                 SMALLINT      UNSIGNED  NOT NULL,                -- 65535 utilisateurs possibles  
	
  PRIMARY KEY (id),
  
  CONSTRAINT fk_post_user_id
    FOREIGN KEY (user_id)
    REFERENCES user(id)
	
) ENGINE = InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------------
-- COMMENT
-- ----------------------------------

CREATE TABLE `comment`
(
  id                      SMALLINT      UNSIGNED  NOT NULL AUTO_INCREMENT, -- 65535 utilisateurs possibles
  updated_at              DATETIME      NOT NULL,                          -- 
  content                 TEXT(1000)    NOT NULL,                          -- 1000 caractères max
  com_status              TINYINT(1)    NOT NULL,                          -- 10 statuts possibles
  user_id                 SMALLINT      UNSIGNED  NOT NULL,                -- clé étrangère
  post_id                 SMALLINT      UNSIGNED  NOT NULL,                -- clé étrangère
	
  PRIMARY KEY (id),
  
  CONSTRAINT fk_comment_user_id
    FOREIGN KEY (user_id)
    REFERENCES `user`(id),
	
  CONSTRAINT fk_post_id
    FOREIGN KEY (post_id)
    REFERENCES post(id)
	
) ENGINE = InnoDB DEFAULT CHARSET=utf8;
