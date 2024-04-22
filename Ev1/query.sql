CREATE TABLE servicios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    beneficios TEXT NOT NULL
);

CREATE TABLE nosotros (
    id INT PRIMARY KEY AUTO_INCREMENT,
    mision TEXT NOT NULL,
    vision TEXT NOT NULL,
    valores TEXT NOT NULL
);
