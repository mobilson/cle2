<?php
session_start();
require_once "includes/database.php";
/** @var mysqli $db */

$query = "SELECT * FROM `appointment`
            WHERE id='{$_SESSION['new_id']}'";
$result = mysqli_query($db, $query) or die ('Error: ' . $query);
//Loop through the result to create a custom array
$reserveringen = [];
$reserveringen = mysqli_fetch_assoc($result);

$to = $_SESSION['email'];
$subject = "HTML email";

$message = '
<html>
<head>
<title>Bedankt voor de resevering</title>
</head>
<body>
<p>De resevering is goed gemaakt en we zien u binnenkort</p>
<table>
<tr>
<th>Datum</th>
<th>Tijd</th>
</tr>
<tr>
<td>'.htmlentities($reserveringen['date']).'</td>
<td>'.htmlentities($reserveringen['time']).'</td>
</tr>
</table>
</body>
</html>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <cmgt@hr.nl>' . "\r\n";

mail($to,$subject,$message,$headers);
//print_r($_SESSION);
//print_r($to);
header('location:email_confirm.php')
?>



