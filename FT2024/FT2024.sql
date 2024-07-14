-- Új adatbázis létrehozása
CREATE DATABASE `FT2024`;

-- Az FT2024 adatbázis használata
USE `FT2024`;

-- Kapcsolattartok tábla létrehozása
CREATE TABLE `Kapcsolattartok` (
  `Id` INT PRIMARY KEY AUTO_INCREMENT,
  `Nev` VARCHAR(100) NOT NULL,
  `Telefon` VARCHAR(20) NOT NULL,
  `Email` VARCHAR(50) NOT NULL
);

-- Termekek tábla létrehozása   --('Beerkezett=0', 'Hibafeltaras=1', 'Alkatresz beszerzes alatt=2', 'Javitas=3', 'Kesz=4')
CREATE TABLE `Termekek` (
  `Szeriaszam` VARCHAR(50) PRIMARY KEY,
  `Gyarto` VARCHAR(50) NOT NULL,
  `Tipus` VARCHAR(50) NOT NULL,
  `LeadasDatuma` DATETIME NOT NULL,
  `Statusz` TINYINT NOT NULL, 
  `UtolsoStatuszvaltozas` DATETIME NOT NULL,
  `KapcsolattartoId` INT NOT NULL,

  FOREIGN KEY (`KapcsolattartoId`)
  REFERENCES `Kapcsolattartok`(`Id`)
  ON DELETE CASCADE
);

-- Új kapcsolattartó beszúrása
INSERT INTO Kapcsolattartok (Nev, Telefon, Email) VALUES ('Kiss Eva', '1234567890', 'ke@ke.com');

-- Új termék beszúrása
INSERT INTO Termekek (Szeriaszam, Gyarto, Tipus, LeadasDatuma, Statusz, UtolsoStatuszvaltozas, KapcsolattartoId) 
VALUES ('ABC123', 'Gyárto', 'Termék típus', '2022-01-01 00:00:00', '0', '2022-01-01 00:00:00', 1);

-- Összes kapcsolattartó lekérdezése
SELECT * FROM Kapcsolattartok;

-- Összes termék lekérdezése
SELECT * FROM Termekek;

-- Egy konkrét termék lekérdezése sorozatszám alapján
SELECT * FROM Termekek WHERE Szeriaszam = 'ABC123';

-- Egy konkrét kapcsolattartóhoz tartozó összes termék lekérdezése
SELECT * FROM Termekek WHERE KapcsolattartoId = 1;

-- Egy termék státuszának frissítése
UPDATE Termekek SET Statusz = 'Hibafeltaras' WHERE Szeriaszam = 'ABC123';

-- Egy kapcsolattartó törlése
DELETE FROM Kapcsolattartok WHERE Id = 1;

-- Egy termék törlése
DELETE FROM Termekek WHERE Szeriaszam = 'ABC123';