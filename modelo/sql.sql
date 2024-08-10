CREATE TABLE IF NOT EXISTS usuarios (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombres VARCHAR(50),
    Apellidos VARCHAR(50),
    Fecha_de_nacimiento DATE,
    cedula VARCHAR(20),
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