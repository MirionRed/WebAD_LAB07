<?php include('connect.php') ?>
<?php
$delete = $db->prepare("DELETE FROM announcement WHERE id=?");
$delete->bind_param("i", $id);

$id = $_GET["id"];

if($delete->execute()===true){
  ?> <script>console.log("Record deleted");</script> <?php
  ?> <script>window.alert("Record deleted");</script> <?php
  ?> <script>window.location.href='index.php';</script> <?php
} else {
  ?> <script>console.log("Unable to update record");</script> <?php
}
 ?>
