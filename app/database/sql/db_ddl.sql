-- Crear tabla 'Institution'
CREATE TABLE `Institution` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255),
    `city` VARCHAR(100),
    `country` VARCHAR(100),
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Crear tabla 'Election'
CREATE TABLE `Election` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `start_date` TIMESTAMP NOT NULL,
    `end_date` TIMESTAMP NOT NULL,
    `institution_id` INT UNSIGNED,
    `description` TEXT,
    `status` ENUM('Planned', 'Ongoing', 'Finished') DEFAULT 'Planned',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`institution_id`) REFERENCES `Institution`(`id`)
);

-- Crear tabla 'Option'
CREATE TABLE `Option` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `image_url` VARCHAR(255),
    `election_id` INT UNSIGNED,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`election_id`) REFERENCES `Election`(`id`)
);

-- Crear tabla 'Candidate'
CREATE TABLE `Candidate` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `political_party` VARCHAR(255),
    `option_id` INT UNSIGNED,
    `photo_url` VARCHAR(255),
    `date_of_birth` DATE,
    `experience` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`option_id`) REFERENCES `Option`(`id`)
);

-- Crear tabla 'User'
CREATE TABLE `User` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `dni` VARCHAR(20) UNIQUE,
    `email` VARCHAR(255) UNIQUE,
    `institution_id` INT UNSIGNED,
    `registration_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `type` ENUM('Administrator', 'Regular User') DEFAULT 'Regular User',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`institution_id`) REFERENCES `Institution`(`id`)
);

-- Crear tabla 'Vote'
CREATE TABLE `Vote` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT UNSIGNED,
    `option_id` INT UNSIGNED,
    `vote_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `User`(`id`),
    FOREIGN KEY (`option_id`) REFERENCES `Option`(`id`)
);
