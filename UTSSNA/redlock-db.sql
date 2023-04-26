CREATE DATABASE Redlock;
use Redlock;

CREATE TABLE users(
   ID VARCHAR(6) UNIQUE NOT NULL PRIMARY KEY,
   Nama VARCHAR(50) NOT NULL,
   Alamat VARCHAR(100) NOT NULL,
   Jabatan VARCHAR(50) NOT NULL
);

INSERT INTO users VALUES('RD001', 'Budi', 'jalan kodok', 'siswa');
INSERT INTO users VALUES('RD002', 'Joni', 'jalan sumatra', 'staff');
INSERT INTO users VALUES('RD003', 'Rudi', 'jalan serigala', 'staff');
INSERT INTO users VALUES('RD004', 'Aplagi', 'jalan bebek', 'dosen');



