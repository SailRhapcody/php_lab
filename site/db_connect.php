<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$db = "mysite";

// Create connection
$link = mysqli_connect($servername, $username, $password);

// Check connection
mysqli_select_db($link, $db);
?>