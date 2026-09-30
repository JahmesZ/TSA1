-- Tasks for Today Management System | IT0049 TSA1
-- Import with phpMyAdmin (Import tab) or:  mysql -u root < tasks_for_today.sql
-- Task dates use CURDATE(), so "today" always has records whenever you import.

CREATE DATABASE IF NOT EXISTS tasks_for_today
  CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE tasks_for_today;

DROP TABLE IF EXISTS tasks;
DROP TABLE IF EXISTS users;

CREATE TABLE tasks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150) NOT NULL,
  status VARCHAR(20) NOT NULL DEFAULT 'pending',
  task_date DATE NOT NULL,
  created_at DATETIME NOT NULL
);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Submit weekly progress report',             'done',        DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Back up the project database',              'done',        DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Daily stand-up meeting (9:00 AM)',          'done',        CURDATE(),                           NOW()),
('Review pull requests from the team',        'in progress', CURDATE(),                           NOW()),
('Fix login page validation bug',             'pending',     CURDATE(),                           NOW()),
('Update project documentation',              'pending',     CURDATE(),                           NOW()),
('Prepare demo for client presentation',      'pending',     DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Design database schema for reports',        'pending',     DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Deploy version 1.2 to the staging server',  'pending',     DATE_ADD(CURDATE(), INTERVAL 2 DAY), NOW()),
('Conduct user acceptance testing',           'pending',     DATE_ADD(CURDATE(), INTERVAL 2 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
('mclara', 'Maria Clara Santos', 'maria.santos@example.com', NOW());
