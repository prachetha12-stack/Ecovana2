<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Nurseries";
$conn=new mysqli("localhost","root","","Nurseries");
if($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);
}
?>