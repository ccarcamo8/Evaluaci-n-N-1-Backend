-- mysql
CREATE DATABASE Evaluacion1_Backend;
CREATE USER 'ciisa_backend_v1_71'@'localhost' IDENTIFIED BY 'l4cl4v3-c11s4';
GRANT ALL PRIVILEGES ON ciisa_backend_v1_71.* TO 'ciisa_backend_v1_71'@'localhost';
FLUSH PRIVILEGES;

CREATE TABLE Servicios(
    id INT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL UNIQUE,
    activo BOOLEAN NOT NULL DEFAULT FALSE
)

-- GET / ALL
SELECT id, nombre, activo FROM mantenedor;
-- GET / BY ID
SELECT id, nombre, activo FROM mantenedor WHERE id = 3;
-- POST
INSERT INTO servicios (id, nombre) VALUES 
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');
-- PATCH / ENABLE
UPDATE Servicios SET activo = true WHERE id = 3;
-- PATCH / DISABLE
UPDATE Servicios SET activo = false WHERE id = 3;
-- PUT
UPDATE Servicios SET nombre = 'Example 3' WHERE id = 3;
-- DELETE
DELETE FROM Servicios WHERE id = 3;
