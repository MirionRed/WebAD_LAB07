<?php
$subject = $message = $type = $posted = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $update = $db->prepare("UPDATE announcement SET subject=?, message=?, type=?, posted=? WHERE id=?");
  $update->bind_param("ssssi", $subject, $message, $type, $posted, $id);

  date_default_timezone_set("Asia/Kuala_Lumpur");
  $id = $_GET['id'];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  $type = $_POST["type"];
  $posted = date("Y-m-d H:i:s");

  if($update->execute()===true){
    ?> <script>console.log("Record upddated");</script> <?php
    ?> <script>window.alert("Record updated");</script> <?php
    ?> <script>window.location.href='index.php';</script> <?php
  } else {
    ?> <script>console.log("Unable to update record");</script> <?php
  }

  $update->close();
} else {
  //Does this even do anything at all ? lol
}
 ?>
