<?php
require_once "includes/database.php";


//database connection
/** @var mysqli $database */


//Get the result set from the database with a SQL query
$query = "SELECT * FROM `appointment`";
$result = mysqli_query($database, $query) or die ('Error: ' . $query);

//Loop through the result to create a custom array
$reserveringen = [];
while ($row = mysqli_fetch_assoc($result)) {
    $reserveringen[] = $row;
}
//Close connection
mysqli_close($database);




?>