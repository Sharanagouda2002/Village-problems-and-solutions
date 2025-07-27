CREATE DATABASE village_db;

USE village_db;

CREATE TABLE problems (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    village VARCHAR(100),
    problem TEXT,
    solution TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
