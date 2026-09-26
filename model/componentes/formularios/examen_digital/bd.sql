CREATE DATABASE examen;

use examen;



CREATE TABLE respuestas(
id_examen INT AUTO_INCREMENT PRIMARY KEY
nombre_estudiante VARCHAR(50),
identificacion INT(20),
respuesta1 VARCHAR(500),
respuesta2 VARCHAR(500),
respuesta3 VARCHAR(500),
respuesta4 VARCHAR(500),
respuesta5 VARCHAR(500)
);


CREATE TABLE notas(
nota INT(20),
id_examen INT(50),
FOREIGN KEY (id_examen) REFERENCES respuestas(id_examen)

);

ALTER TABLE respuestas
ADD COLUMN corregido ENUM('Y', 'N')
DEFAULT 'N';






