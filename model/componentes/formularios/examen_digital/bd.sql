CREATE DATABASE examen;

use examen;



CREATE TABLE respuestas(
id_respuesta INT AUTO_INCREMENT PRIMARY KEY,
nombre_estudiante VARCHAR(50),
identificacion INT(20),
respuesta1 VARCHAR(500),
respuesta2 VARCHAR(500),
respuesta3 VARCHAR(500),
respuesta4 VARCHAR(500),
respuesta5 VARCHAR(500),
id_examen INT(50),
FOREIGN KEY (id_examen) REFERENCES preguntas(id_examen)
);


CREATE TABLE notas(

nota INT(20),
id_respuesta INT(50),
id_examen INT(50),
FOREIGN KEY (id_examen) REFERENCES preguntas(id_examen),
FOREIGN KEY (id_respuesta) REFERENCES respuestas(id_respuesta)
);

CREATE TABLE preguntas(
id_examen INT AUTO_INCREMENT PRIMARY KEY,
pregunta1 VARCHAR(500),
pregunta2 VARCHAR(500),
pregunta3 VARCHAR(500),
pregunta4 VARCHAR(500),
pregunta5 VARCHAR(500)
);



ALTER TABLE respuestas
ADD COLUMN corregido ENUM('Y', 'N')
DEFAULT 'N';





