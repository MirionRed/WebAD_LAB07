<?php
$subject = $message = $type = $posted = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $insert = $db->prepare("INSERT INTO announcement (subject, message, type, posted) VALUES (?,?,?,?)");
  $insert->bind_param("ssss", $subject, $message, $type, $posted);

  date_default_timezone_set("Asia/Kuala_Lumpur");
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  $type = $_POST["type"];
  $posted = date("Y-m-d H:i:s");

  if($insert->execute()===true){
    ?> <script>console.log("Record added");</script> <?php
    ?> <script>window.alert("Record added");</script> <?php
  } else {
    ?> <script>console.log("Unable to insert record");</script> <?php
  }
  $insert->close();
} else {
  //Does this even do anything at all ? lol
}
function input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 ?>
