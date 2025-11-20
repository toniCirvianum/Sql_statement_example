<?php
include('database.php');
$sql = "CREATE TABLE IF NOT EXISTS users
(id INT AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(100) NOT NULL UNIQUE, 
password VARCHAR(100) NOT NULL, 
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);";

$result =executQyuery($sql);

if ($result) {
    echo "<h3 style='color:green'>Taula creada </h3>";
} else {
    echo "<h3 style='color:red'>LA Taula ja existeix</h3>";
}