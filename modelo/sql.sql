CREATE TABLE IF NOT EXISTS usuarios (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombres VARCHAR(50),
    Apellidos VARCHAR(50),
    tipo_doc VARCHAR(20),
    documento VARCHAR(20),
    correo VARCHAR(100)
);

INSERT INTO usuarios (Nombres, Apellidos, tipo_doc, documento, correo)
VALUES ('Santiago', 'Hernandez', 'Cedula de Ciudadania', '1003493883', 'thiago@gmail.com');

INSERT INTO usuarios (Nombres, Apellidos, tipo_doc, documento, correo)
VALUES 
('Maria', 'Gomez', 'Cedula de Ciudadania', '1003493884', 'maria@gmail.com'),
('Jose', 'Martinez', 'Cedula de Ciudadania', '1003493885', 'jose@gmail.com'),
('Ana', 'Lopez', 'Cedula de Ciudadania', '1003493886', 'ana@gmail.com'),
('Luis', 'Perez', 'Cedula de Ciudadania', '1003493887', 'luis@gmail.com'),
('Lucia', 'Ramirez', 'Cedula de Ciudadania', '1003493888', 'lucia@gmail.com');



CREATE TABLE IF NOT EXISTS libros (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Titulo VARCHAR(100),
    Autor VARCHAR(100),
    ISBN VARCHAR(20),
    Editorial VARCHAR(50),
    Categoria VARCHAR(50),
     INT
);