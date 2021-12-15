<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'recipes';

$conn = mysqli_connect($servername,$username,$password,$database);

if (mysqli_connect_errno()) {
    die("Can't connect to database");
}