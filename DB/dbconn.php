<?php

$servername = "localhost";
$username = "root";
$password = "23281777";

try {
  $conn = new PDO("mysql:host=$servername;dbname=memberWeb", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die("DB連接失敗");
}




try {
    $conn = new PDO("mysql:host=$servername;dbname=memberWeb", $username, $password);
  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // sql to create table
    $sql = "CREATE TABLE  IF NOT EXISTS  Member (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    chtName VARCHAR(30) NOT NULL,
    engName VARCHAR(30),
    PicSrc VARCHAR(30),
    Sex Integer,
    Addr VARCHAR(30),
    BirthDay VARCHAR(10),
    BDY VARCHAR(4),
    IDCard VARCHAR(10),
    School VARCHAR(10),
    Department VARCHAR(10),
    Age VARCHAR(10),
    Phone VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    IsSubscript Integer,
    join_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $conn->exec($sql);
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }




  try {
    $conn = new PDO("mysql:host=$servername;dbname=memberWeb", $username, $password);
  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // sql to create table
    $sql = "CREATE TABLE  IF NOT EXISTS  Active (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ActiveName VARCHAR(30) NOT NULL,
    Price VARCHAR(30),
    JoinCount Integer,
    Addr VARCHAR(30),
    BirthDay VARCHAR(10),
    Phone VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    IsSubscript Integer,
    MemberList VARCHAR(50),
    Active_date TIMESTAMP ,
    Add_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  
    // use exec() because no results are returned
    $conn->exec($sql);
    // echo "Table MyGuests created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  
  $conn = null;



?>