CREATE TABLE log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    hora TIME,
    actividad VARCHAR(100),
    estado VARCHAR(50),
    imagen VARCHAR(100)
);

-- Insertar datos de prueba (Las imágenes deben coincidir con las que pongas en la carpeta web)
INSERT INTO log (hora, actividad, estado, imagen) VALUES 
('10:00:00', 'Inicio de servidor', 'Exitoso', 'img1.png'),
('10:30:00', 'Conexion usuario', 'Pendiente', 'img2.png');