# Redis Caching Demo

A PHP project demonstrating caching database queries using Redis to improve performance.

---

## Features

- Fetch data from MySQL database
- Cache results in Redis for faster subsequent queries
- Automatic cache expiration (TTL)
- Simple and easy-to-understand PHP implementation

---

## Prerequisites

Make sure the following are installed:

- PHP >= 8.0
- Composer
- MySQL server
- Redis server
- PHP Redis extension (`pecl install redis`) or use Predis client

---

## Project Structure

redis-caching-demo/
│── index.php
│── composer.json
│── readme.md


---

## Database Setup

Before running the project, create a MySQL database and table:

1. **Create Database**

```sql
CREATE DATABASE demo;

2. Use Database

USE demo;

3.Create Users Table

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

4. Insert Sample Data

INSERT INTO users (name, email) VALUES
('Ajay', 'ajay@example.com'),
('Sizzy', 'sizzy@example.com'),
('Charls', 'charls@example.com');

5. Update Database Credentials in index.php

$pdo = new PDO('mysql:host=127.0.0.1;dbname=demo', 'root', '');

Replace 'root' and password with your MySQL credentials.

## Usage
Run the PHP built-in server: php -S localhost:8000
Open your browser and go to: http://localhost:8000

First load: Data fetched from Database

Subsequent loads (within TTL): Data fetched from Redis cache

## Caching Logic
Check if the data exists in Redis.

If yes, return cached data.

If not, query the database and store the result in Redis with a TTL (Time to Live).

License
MIT License


This README is **fully ready** for your project, including **database creation, caching explanation, and usage instructions**.  

