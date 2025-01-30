CREATE DATABASE hospital_db;

USE hospital_db;

CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    date DATE NOT NULL,
    doctor VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    specialty VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO doctors (name, specialty, description, image_url) VALUES
('Dr. John Doe', 'Cardiologist', 'Dr. John Doe is a highly experienced cardiologist with over 15 years of experience in treating heart-related conditions.', 'Project pictures/Doctor2.png'),
('Dr. Jane Smith', 'Pediatrician', 'Dr. Jane Smith specializes in pediatric care and has a passion for helping children lead healthy lives.', 'Project pictures/Doctor1.png'),
('Dr. Michael Johnson', 'Orthopedic Surgeon', 'Dr. Michael Johnson is a renowned orthopedic surgeon with expertise in joint replacements and sports injuries.', 'Project pictures/Doctor3.jpg');