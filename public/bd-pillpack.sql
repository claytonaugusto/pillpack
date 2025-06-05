DROP DATABASE if EXISTS `pillpack`;
CREATE DATABASE  IF NOT EXISTS `pillpack`;
USE `pillpack`;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_date_register` date NOT NULL,
  `user_date_of_birth` date NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_phone_one` INT(15),
  `user_phone_two` INT(15),
  `user_sex` enum('m','f'),
  `user_status` INT(2) NOT NULL,
  `user_cpf` VARCHAR(15) not NULL,
  `user_rg` varchar(20),
  `user_permission` VARCHAR(50),
  `user_observation` LONGTEXT,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `clients`
CREATE TABLE `clients`(
  `clients_id` INT NOT NULL AUTO_INCREMENT,
  `clients_name` VARCHAR(100) NOT NULL,
  `clients_email` VARCHAR(100) NOT NULL,
  `clients_date_register` DATE NOT NULL,
  `clients_date_of_birth` DATE NOT NULL,
  `clients_phone_one` VARCHAR(15) NOT NULL,
  `clients_phone_two` VARCHAR(15),
  `clients_sex` ENUM('m','f') NOT NULL,
  `clients_status` VARCHAR(45) NOT NULL,
  `clients_cpf` VARCHAR(11) NOT NOT,
  `clients_rg` VARCHAR(25),
  `clients_observations` TEXT,
  PRIMARY KEY (`clients_id`)  
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `doctors_id` INT NOT NULL AUTO_INCREMENT,
  `doctors_name` varchar(50) NOT NULL,
  `doctors_email` varchar(100) NOT NULL,
  `doctors_crm` varchar(15) NOT NULL,
  `doctors_phone_one` INT(15) NOT NULL,
  `doctors_phone_two` INT(15),
  `doctors_date_register` DATE NOT NULL,
  `doctors_sex` ENUM('m','f') NOT NULL,
  `doctors_status` VARCHAR(45) NOT NULL
  PRIMARY KEY (`doctors_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `specialties`;

CREATE TABLE `specialties` (
  `specialties_id` INT NOT NULL AUTO_INCREMENT,
  `specialties_name` varchar(50) NOT NULL,
  `specialties_date_of_register` DATE NOT NULL,
  `patienst_status` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`specialties_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `drugstore`;

CREATE TABLE `drugstore` (
  `drugstore_id` INT NOT NULL AUTO_INCREMENT,
  `drugstore_name` VARCHAR(100) NOT NULL,
  `drugstore_surname` VARCHAR(100),
  `drugstore_phone_one` VARCHAR(50) NOT NULL,
  `drugstore_phone_two` VARCHAR(50),
  PRIMARY KEY (`drugstore_id`),
  -- KEY `fkIdx_82` (`idpatienst`),
  -- CONSTRAINT `FK_82` FOREIGN KEY (`idpatienst`) REFERENCES `patienst` (`idpatienst`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `specialties`;
CREATE TABLE `specialties` (
  `idspecialties` INT unsigned NOT NULL AUTO_INCREMENT,
  `specialties_name` VARCHAR(100) NOT NULL,
  `specialties_status` VARCHAR(45) NOT NULL,
  `iddoctors` INT NOT NULL,
  PRIMARY KEY (`idspecialties`),
  KEY `fkIdx_37` (`iddoctors`),
  CONSTRAINT `FK_37` FOREIGN KEY (`iddoctors`) REFERENCES `doctors` (`iddoctors`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `new_recipe`;

CREATE TABLE `new_recipe` (
  `idnew_recipe` int NOT NULL AUTO_INCREMENT,
  `new_recipe_date` DATE NOT NULL,
  `new_recipe_start_date` DATE NOT NULL,
  `new_recipe_end_date` DATE NOT NULL,
  `new_recipe_type` VARCHAR(45) NOT NULL,
  `new_recipe_specialty` VARCHAR(45) NOT NULL,
  `new_recipe_doctor_name` VARCHAR(45) NOT NULL,
  `new_recipe_drug_hour` TIME NOT NULL,
  `new_recipe_frequency` VARCHAR(45) NOT NULL,
  `new_recipe_quantity` INT NOT NULL,
  `new_recipe_observation` LONGTEXT,
  `idpatienst` int NOT NULL,
  `iddoctors` int NOT NULL,
  PRIMARY KEY (`idnew_recipe`),
  KEY `fkIdx_33` (`idpatienst`),
  KEY `fkIdx_34` (`iddoctors`),
  CONSTRAINT `FK_33` FOREIGN KEY (`idpatienst`) REFERENCES `patienst` (`idpatienst`),
  CONSTRAINT `FK_34` FOREIGN KEY (`iddoctors`) REFERENCES `doctors` (`iddoctors`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `idsales` int NOT NULL AUTO_INCREMENT,
  `sales_date_start` DATE NOT NULL,
  `sales_date_end` DATE NOT NULL,
  `sales_tax_receipt` FLOAT NOT NULL,
  `sales_saller` VARCHAR(45) NOT NULL,
  `sales_value` FLOAT NOT NULL,
  `sales_drugs` VARCHAR(100) NOT NULL,
  `sales_observation` LONGTEXT,
  `idusers` int NOT NULL,
  `idpatienst` int NOT NULL,
  PRIMARY KEY (`idsales`),
  KEY `fkIdx_83` (`idusers`),
  KEY `fkIdx_89` (`idpatienst`),
  CONSTRAINT `FK_83` FOREIGN KEY (`idusers`) REFERENCES `users` (`idusers`),
  CONSTRAINT `FK_89` FOREIGN KEY (`idpatienst`) REFERENCES `patienst` (`idpatienst`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `drugs`;

CREATE TABLE `drugs` (
  `iddrugs` int NOT NULL AUTO_INCREMENT,
  `drugs_name` VARCHAR(100) NOT NULL,
  `drugs_laboratory` VARCHAR(100) NOT NULL,
  `drugs_type` VARCHAR(45) NOT NULL,
  `drugs_dosage` VARCHAR(45) NOT NULL,
  `drugs_batch` VARCHAR(45) NOT NULL,
  `drugs_continuos_use` VARCHAR(45) NOT NULL,
  `drugs_expiration_date` DATE NOT NULL,
  `idpatienst` INT NOT NULL,
  `idsales` INT NOT NULL,
  PRIMARY KEY (`iddrugs`),
  KEY `fkIdx_53` (`idpatienst`),
  KEY `fkIdx_59` (`idsales`),
  CONSTRAINT `FK_53` FOREIGN KEY (`idpatienst`) REFERENCES `patienst` (`idpatienst`),
  CONSTRAINT `FK_59` FOREIGN KEY (`idsales`) REFERENCES `sales` (`idsales`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `idaddress` int NOT NULL AUTO_INCREMENT,
  `address_street` VARCHAR(100) NOT NULL,
  `address_number` VARCHAR(20) NOT NULL,
  `address_complement` VARCHAR(45),
  `address_city` VARCHAR(45) NOT NULL,
  `address_state` VARCHAR(45) NOT NULL,
  `address_zipcode` INT(8) NOT NULL,
  `idpatienst` INT NOT NULL,
  PRIMARY KEY (`idaddress`),
  KEY `fkIdx_43` (`idpatienst`),
  CONSTRAINT `FK_43` FOREIGN KEY (`idpatienst`) REFERENCES `patienst` (`idpatienst`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `drugstore`;

CREATE TABLE `drugstore` (
  `iddrugstore` int NOT NULL AUTO_INCREMENT,
  `address_name` VARCHAR(100) NOT NULL,
  `address_phone` VARCHAR(20) NOT NULL,
  `idaddress` int NOT NULL,
  PRIMARY KEY (`iddrugstore`),
  KEY `fkIdx_73` (`idaddress`),
  CONSTRAINT `FK_73` FOREIGN KEY (`idaddress`) REFERENCES `address` (`idaddress`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `historical`;

CREATE TABLE `historical` (
  `idhistorical` int NOT NULL AUTO_INCREMENT,
  `idusers` int NOT NULL,
  `idpatienst` int NOT NULL,
  `iddrugs` int NOT NULL,
  `iddoctors` int NOT NULL,
  PRIMARY KEY (`idhistorical`),
  KEY `fkIdx_93` (`idusers`),
  KEY `fkIdx_94` (`idpatienst`),
  KEY `fkIdx_14` (`iddrugs`),
  KEY `fkIdx_17` (`iddoctors`),
  CONSTRAINT `FK_93` FOREIGN KEY (`idusers`) REFERENCES `users` (`idusers`),
  CONSTRAINT `FK_94` FOREIGN KEY (`idpatienst`) REFERENCES `patienst` (`idpatienst`),
  CONSTRAINT `FK_14` FOREIGN KEY (`iddrugs`) REFERENCES `drugs` (`iddrugs`),
  CONSTRAINT `FK_17` FOREIGN KEY (`iddoctors`) REFERENCES `doctors` (`iddoctors`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
