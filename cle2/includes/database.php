<?php
$host       = "";
$database   = "";
$user       = "";
$password   = "";

$db = mysqli_connect($host, $user, $password, $database)
    or die("Error: " . mysqli_connect_error());;
