<?php
/* 305/pizza/includes/connect.php*/

//Connect to database
$username = "acamposg_grcuser";
$password = ".6CCl.^2b77[";
$hostname = "localhost";
$database = "acamposg_grc";

$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die("<p>Oops! We weren't able to connect to the database.</p>");
