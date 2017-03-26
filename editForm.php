<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php include('connect.php'); ?>
  <?php include('edit.php'); ?>
  <h1>Update</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]), '?id='.$_GET['id'] ?>">
    Subject:
    <input type="text" name="subject"><br>
    Message:
    <input type="text" name="message"><br>
    Type:
    <select name="type">
      <option value="P">Project Updates</opiton>
      <option value="T">Traffic Announcement<option>
    </select><br>
    <input type="submit" value="Submit">
  </form>
  <a href="index.php">Return</a>

</body>
</html>
