<?php
$servername="localhost";
$username="root";
$password ="arjun";
$database="db2";
$conn= new mysqli($servername,$username,$password,$database);
if ($conn->connect_error)
{
die ("connection failed".$conn->connect_error);
}
else
{
if ($conn->query("CREATE TABLE users (
  id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(100) NOT NULL
) ;"))
{
echo "Table users is created";
}
else
echo "error caught";
}























