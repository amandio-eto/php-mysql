create database php_mysql_db;
use php_mysql_db;
  create table users(
    id INT AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at date DEFAULT null,
    deleted_at date DEFAULT null,
    PRIMARY key(id)
   )engine =InnoDB;
   
 

   