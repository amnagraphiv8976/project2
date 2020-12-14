<?php
// connect with server
$conn = new mysqli("localhost" , "root" , "" , "MYCHANNEL");

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";

//   //Create DATABASE
//   $amna1 = "CREATE DATABASE MYCHANNEL";
//   if ($conn->query($amna1) === TRUE) {
//     echo "Database created successfully";
//   } else {
//     echo "Error creating database: " . $conn->error;
//   }

  // sql to create table
// $amna1 = "CREATE TABLE MyQwerty (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     Username VARCHAR(100) NOT NULL,
//     Passwords VARCHAR(60) NOT NULL
//     )";
    
//     if ($conn->query($amna1) === TRUE) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }

$amna1 = "INSERT INTO MyQwerty (Username, Passwords)
VALUES ('fariha', '123456')";

if ($conn->query($amna1) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $amna1 . "<br>" . $conn->error;
}
  
  $conn->close();
?>