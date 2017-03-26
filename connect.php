<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "uecs2094_pie";

$db = new mysqli($servername, $username, $password, $database);

if ($db->connect_error){
  die("Connection failed: ".$db->connect_error);
} else {
  ?> <script>console.log("Connected successfully");</script> <?php
}
 ?>
