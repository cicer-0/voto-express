-- Insertar datos en la tabla 'Institution'
INSERT INTO vote_express.`Institution` (`name`, `address`, `city`, `country`)
VALUES
    ('Universidad Nacional Agraria de la Selva', 'Carretera Central km. 1.21', 'Tingo Maria', 'Perú')

-- Insertar datos en la tabla 'Election' - muestra
INSERT INTO vote_express.`Election` (`name`, `start_date`, `end_date`, `institution_id`, `description`, `status`)
VALUES
    ('Consejo Universitario', '2024-03-25 00:00:00', '2024-04-05 23:59:59', 1, 'Elección de Consejo Universitario', 'Ongoing'),
    ('Consejo Estudiantil', '2024-03-25 00:00:00', '2024-04-05 23:59:59', 1, 'Elección de Consejo Estudiantil', 'Ongoing')

-- Insertar datos en la tabla 'Option' - muestra
INSERT INTO vote_express.`Option` (`name`, `description`, `image_url`, `election_id`)
VALUES
    ('Opción 1', 'Somos Perú', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Logo_Partido_Democr%C3%A1tico_Somos_Per%C3%BA.svg/1200px-Logo_Partido_Democr%C3%A1tico_Somos_Per%C3%BA.svg.png', 1),
    ('Opción 2', 'Podemos Perú', 'https://upload.wikimedia.org/wikipedia/commons/0/07/Logo_Podemos_Per%C3%BA.png', 1),
    ('Opción 3', 'Fuerza Popular', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmgqmXBJEnAkba7TBePMQPLrZ7Qtre3hVh6Ornc9WL3A&s', 1),
    ('Opción 4', 'Acción Popular', 'https://upload.wikimedia.org/wikipedia/commons/9/91/Acci%C3%B3n_Popular.svg', 1),
    ('Opción 1', 'Fuerza Unas', 'https://i.pinimg.com/736x/77/ac/fb/77acfbb1052aabd472f53b239f299ca3.jpg', 2),
    ('Opción 2', 'Uru Unas', 'https://i.pinimg.com/236x/5d/ca/94/5dca94dfe5bdbb839a89eb71ebea07c7.jpg', 2),
    ('Opción 3', 'Exelencia Unasina', 'https://e7.pngegg.com/pngimages/355/505/png-clipart-graphy-logo-tree-leaf-branch.png', 2),
    ('Opción 4', 'Podemos Unas', 'https://www.shutterstock.com/image-vector/vector-illustration-cow-pig-goat-600nw-1377523625.jpg', 2)

-- Insertar datos en la tabla 'Candidate'
INSERT INTO vote_express.`Candidate` (`name`, `last_name`, `political_party`, `option_id`, `photo_url`, `date_of_birth`, `experience`)
VALUES

    ('Diego', 'Gómez', 'Somos Perú', 1, 'ejemplo.com/foto1.jpg', '1985-05-15', 'Presidente'),
    ('Laura', 'Martínez', 'Somos Perú', 1, 'ejemplo.com/foto2.jpg', '1989-09-20', 'Vicepresidente'),
    ('Ana', 'Hernández', 'Somos Perú', 1, 'ejemplo.com/foto3.jpg', '1987-11-02', 'Secretario'),

    ('Sofía', 'Gómez', 'Podemos Perú', 2, 'ejemplo.com/foto4.jpg', '1988-05-15', 'Presidente'),
    ('Martín', 'Martínez', 'Podemos Perú', 2, 'ejemplo.com/foto5.jpg', '1990-09-20', 'Vicepresidente'),
    ('Valentina', 'Hernández', 'Podemos Perú', 2, 'ejemplo.com/foto6.jpg', '1989-11-02', 'Secretario'),

    ('Gabriel', 'Gómez', 'Fuerza Popular', 3, 'ejemplo.com/foto7.jpg', '1992-05-15', 'Presidente'),
    ('Valeria', 'Martínez', 'Fuerza Popular', 3, 'ejemplo.com/foto8.jpg', '1994-09-20', 'Vicepresidente'),
    ('Hugo', 'Hernández', 'Fuerza Popular', 3, 'ejemplo.com/foto9.jpg', '1993-11-02', 'Secretario'),

    ('Rodrigo', 'Gómez', 'Acción Popular', 4, 'ejemplo.com/foto10.jpg', '1990-05-15', 'Presidente'),
    ('María', 'Martínez', 'Acción Popular', 4, 'ejemplo.com/foto11.jpg', '1992-09-20', 'Vicepresidente'),
    ('Lucas', 'Hernández', 'Acción Popular', 4, 'ejemplo.com/foto12.jpg', '1991-11-02', 'Secretario'),

    ('Emilio', 'Gómez', 'Fuerza Unas', 5, 'ejemplo.com/foto1.jpg', '2000-03-15', 'Presidente'),
    ('Daniela', 'Martínez', 'Fuerza Unas', 5, 'ejemplo.com/foto2.jpg', '2002-07-20', 'Vicepresidente'),
    ('Rodrigo', 'Hernández', 'Fuerza Unas', 5, 'ejemplo.com/foto3.jpg', '1999-11-02', 'Secretario General'),
    ('Valeria', 'López', 'Fuerza Unas', 5, 'ejemplo.com/foto4.jpg', '1997-09-10', 'Tesorero'),
    ('Cristina', 'Ramírez', 'Fuerza Unas', 5, 'ejemplo.com/foto5.jpg', '2000-04-25', 'Coordinador de Campaña'),
    ('Juan', 'García', 'Fuerza Unas', 5, 'ejemplo.com/foto6.jpg', '1996-12-30', 'Director de Comunicación'),
    ('Laura', 'Sánchez', 'Fuerza Unas', 5, 'ejemplo.com/foto7.jpg', '1998-08-12', 'Jefe de Prensa'),
    ('Diego', 'Martín', 'Fuerza Unas', 5, 'ejemplo.com/foto8.jpg', '1997-06-05', 'Director de Estrategia'),

    ('Gabriel', 'Rodríguez', 'Uru Unas', 6, 'ejemplo.com/foto9.jpg', '2001-02-18', 'Presidente'),
    ('Valeria', 'Gómez', 'Uru Unas', 6, 'ejemplo.com/foto10.jpg', '1999-05-10', 'Vicepresidente'),
    ('Joaquín', 'López', 'Uru Unas', 6, 'ejemplo.com/foto11.jpg', '1998-09-22', 'Secretario General'),
    ('María', 'Martínez', 'Uru Unas', 6, 'ejemplo.com/foto12.jpg', '2000-07-30', 'Tesorero'),
    ('Lucas', 'García', 'Uru Unas', 6, 'ejemplo.com/foto13.jpg', '1997-12-15', 'Coordinador de Campaña'),
    ('Camila', 'Ramírez', 'Uru Unas', 6, 'ejemplo.com/foto14.jpg', '1999-04-05', 'Director de Comunicación'),
    ('Diego', 'Sánchez', 'Uru Unas', 6, 'ejemplo.com/foto15.jpg', '1996-10-28', 'Jefe de Prensa'),
    ('Laura', 'Hernández', 'Uru Unas', 6, 'ejemplo.com/foto16.jpg', '2002-03-03', 'Director de Estrategia'),

    ('Marcela', 'Gómez', 'Excelencia Unasina', 7, 'ejemplo.com/foto17.jpg', '2000-03-15', 'Presidente'),
    ('Fernando', 'Martínez', 'Excelencia Unasina', 7, 'ejemplo.com/foto18.jpg', '2002-07-20', 'Vicepresidente'),
    ('Gabriela', 'Hernández', 'Excelencia Unasina', 7, 'ejemplo.com/foto19.jpg', '1999-11-02', 'Secretario General'),
    ('Ricardo', 'López', 'Excelencia Unasina', 7, 'ejemplo.com/foto20.jpg', '1997-09-10', 'Tesorero'),
    ('Natalia', 'Ramírez', 'Excelencia Unasina', 7, 'ejemplo.com/foto21.jpg', '2000-04-25', 'Coordinador de Campaña'),
    ('Martín', 'García', 'Excelencia Unasina', 7, 'ejemplo.com/foto22.jpg', '1996-12-30', 'Director de Comunicación'),
    ('Carolina', 'Sánchez', 'Excelencia Unasina', 7, 'ejemplo.com/foto23.jpg', '1998-08-12', 'Jefe de Prensa'),
    ('Diego', 'Martín', 'Excelencia Unasina', 7, 'ejemplo.com/foto24.jpg', '1997-06-05', 'Director de Estrategia'),

    ('Juan', 'Gómez', 'Podemos Unas', 8, 'ejemplo.com/foto25.jpg', '2001-05-15', 'Presidente'),
    ('Martina', 'Martínez', 'Podemos Unas', 8, 'ejemplo.com/foto26.jpg', '1999-09-20', 'Vicepresidente'),
    ('Valentín', 'Hernández', 'Podemos Unas', 8, 'ejemplo.com/foto27.jpg', '2000-11-02', 'Secretario General'),
    ('Luciana', 'López', 'Podemos Unas', 8, 'ejemplo.com/foto28.jpg', '1998-07-10', 'Tesorero'),
    ('Simón', 'Ramírez', 'Podemos Unas', 8, 'ejemplo.com/foto29.jpg', '2001-02-25', 'Coordinador de Campaña'),
    ('María', 'García', 'Podemos Unas', 8, 'ejemplo.com/foto30.jpg', '1997-12-30', 'Director de Comunicación'),
    ('Luis', 'Sánchez', 'Podemos Unas', 8, 'ejemplo.com/foto31.jpg', '1999-08-12', 'Jefe de Prensa'),
    ('Ana', 'Martín', 'Podemos Unas', 8, 'ejemplo.com/foto32.jpg', '1998-06-05', 'Director de Estrategia')


-- Insertar datos en la tabla 'User' - muestra
INSERT INTO vote_express.`User` (`name`, `last_name`, `dni`, `email`, `password`, `institution_id`, `type`)
VALUES
    ('Jesus Noriel', 'Chavez Duran', '71011459', 'noriel@gmail.com', 'contrasena123', 1, 'Regular User'),
    ('Luis Ever', 'Chaparin Clemente', '75665515', 'luis@gmail.com', 'mipassword', 1, 'Regular User'),
    ('Luis Vicente', 'Gorpa Cruzado', '76324122', 'gorpa@gmail.com', '123456', 1, 'Regular User'),
    ('Ricardo Jeanzel', 'Vasquez yalle ', '70751268', 'ricardo@gmail.com', 'miclave', 1, 'Regular User');

-- Insertar datos en la tabla 'Vote'
INSERT INTO `Vote` (`user_id`, `option_id`, `vote_date`)
VALUES
    /*(1, 1, '2024-05-10 10:30:00'),
    (2, 2, '2024-05-12 15:45:00'),
    (1, 3, '2024-06-02 09:00:00'),
    (2, 4, '2024-06-05 18:20:00');
    */
