<?php

require "config/constants.php";

$servername = "us-cdbr-east-06.cleardb.net";
$username = "baaa6bb3a55649";
$password = "fe722353";
$db = "heroku_86547dcf118f6bf";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
