CREATE DATABASE paw;
USE paw;
CREATE Table usuarios(
idusuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
usuario VARCHAR(20), 
clave VARCHAR(255), 
token VARCHAR(10), 
tipo INT,
estado INT,
);