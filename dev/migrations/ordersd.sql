CREATE TABLE ordersd (`abc` INT PRIMARY KEY NOT NULL AUTO_INCREMENT, `acbdid` INT  NOT NULL CHECK (LENGTH(acbdid) <= 10), `ddd` INT  NOT NULL CHECK (LENGTH(ddd) <= 10), `ordersdUpdated` TIMESTAMP  NOT NULL, `ordersdIdentify` VARCHAR(255)  NOT NULL)