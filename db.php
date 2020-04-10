<?php
$servername="localhost";
$username="root";
$password ="arjun";
$conn= new mysqli($servername,$username,$password);
if ($conn->connect_error)
{
die ("connection failed".$conn->connect_error);
}
else
{
echo "Connection built";
if ($conn->query("create database db2;"))
{
echo "database is created";
}
else
echo "error caught";
}























