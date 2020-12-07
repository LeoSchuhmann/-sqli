<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://dpsvdv74uwwos.cloudfront.net/Content/css" rel="stylesheet">
  <link href="https://dpsvdv74uwwos.cloudfront.net/statics/css/custom.css?v=BEC887C1F30F87C7B62BCED95B70111D" rel="stylesheet">
</head>
<body>




<?php

if(isset($_POST['Hinzufügen'])){
$email = $_POST['email'];
}

$sql_query = "SELECT * FROM users WHERE email_address = '$email'";


echo "<code>$sql_query</code>";
?>
<body>
  </html>
