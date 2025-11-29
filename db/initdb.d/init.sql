CREATE TABLE log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    hora TIME,
    actividad VARCHAR(100),
    estado VARCHAR(50),
    imagen VARCHAR(100)
);

INSERT INTO log (hora, actividad, estado, imagen) VALUES 
('10:00:00', 'Contenedores corriendo', 'Exitoso', 'img1.png'),
('10:30:00', 'Contenedores Detenidos y activos', 'Exitoso', 'img2.png'),
('10:30:00', 'Imagenes en la maquina', 'Exitoso', 'img3.png'),
('10:30:00', 'Volumenes', 'Exitoso', 'img4.png'),
('10:30:00', 'Logs del contenedor web', 'Exitoso', 'img5.png'),
('10:30:00', 'Ping entre servicios', 'Exitoso', 'img6.png'),
('10:30:00', 'Healthcheck', 'Exitoso', 'img7.png'),
('10:30:00', 'WebFuncionando', 'Exitoso', 'img8.png'),
('10:30:00', 'Tabla Log Visible', 'Exitoso', 'img9.png');
