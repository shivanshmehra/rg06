<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "login_register_youtube";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed");

$base_url = "http://localhost/phpmyadmin/index.php?route=/database/structure&db=login_register_youtube";
$my_email = "shivanshmehra06@gmail.com";

?>