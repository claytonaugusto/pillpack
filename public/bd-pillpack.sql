DROP DATABASE if EXISTS `pillpack`;
CREATE DATABASE  IF NOT EXISTS `pillpack`;
USE `pillpack`;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `idusers` INT NOT NULL AUTO_INCREMENT,
  `users_name` varchar(50) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `users_password` varchar(100) NOT NULL,
  `users_phone` INT(15),
  `users_cpf` VARCHAR(15) not NULL,
  `users_rg` varchar(20),
  `user_status` INT(2) NOT NULL,
  `permission` VARCHAR(50),
  `date_entry_system` date not NULL,
  `sexo` enum('m','f'),
  `users_observation` LONGTEXT,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `iddoctors` INT NOT NULL AUTO_INCREMENT,
  `doctors_name` varchar(50),
  `doctors_crm` varchar(15) NOT NULL,
  `doctors_email` varchar(100) NOT NULL,
  `doctors_specialty` varchar(100) NOT NULL,
  `doctors_phone` INT(15) NOT NULL,
  `doctors_resgistration_date` DATE,
  PRIMARY KEY (`iddoctors`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `patienst`;

CREATE TABLE `patienst` (
  `idpatienst` INT NOT NULL AUTO_INCREMENT,
  `patienst_name` varchar(50) NOT NULL,
  `patienst_phone` INT(15) NOT NULL,
  `patienst_email` VARCHAR(100) NOT NULL,
  `patienst_date_of_birth` DATE NOT NULL,
  `patienst_rg` VARCHAR(20) NOT NULL,
  `patienst_cpf` VARCHAR(15) NOT NULL,
  `patienst_status` VARCHAR(20) NOT NULL,
  `patienst_date_entry_system` DATE NOT NULL,
  `patienst_sex` ENUM('m','f') NOT NULL,
  PRIMARY KEY (`idpatienst`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `vital_date`;

CREATE TABLE `vital_date` (
  `idvital_date` int NOT NULL AUTO_INCREMENT,
  `vital_date_date` DATE NOT NULL,
  `vital_date_blood_pressure` FLOAT,
  `vital_date_saturation` INT,
  `vital_date_frequency_cardiac` INT,
  `vital_date_frequency_respiratory` INT,
  `vital_date_temperature` FLOAT,
  `vital_date_fast_blood_glucose` INT,
  `vital_date_fast_blood_aa` INT,
  `vital_date_fast_blood_aj` INT,
  `vital_date_fast_blood_ad` INT,
  `vital_date_mic` VARCHAR(50),
  `vital_date_evacuation` VARCHAR(5),
  `vital_date_responsible` VARCHAR(50),
  `vital_date_action` VARCHAR(50),
  `vital_date_observation` LONGTEXT,
  `idpatienst` INT NOT NULL,
  PRIMARY KEY (`idvital_date`),
  KEY `fkIdx_82` (`idpatienst`),
  CONSTRAINT `FK_82` FOREIGN KEY (`idpatienst`) REFERENCES `patienst` (`idpatienst`)
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
