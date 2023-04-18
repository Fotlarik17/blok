<?php
$clanekId = $_GET["id"];
$servername = "localhost";
$username = "root";
$password = "";
$database = "travelblog";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) 
  die("Connection failed: " . $conn->connect_error);

  $query = "SELECT * FROM articles WHERE idArticles = $clanekId";
  $result = $conn->query($query);
  echo mysqli_fetch_assoc($result)["Title"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>