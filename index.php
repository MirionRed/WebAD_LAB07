<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>Main</h1>
  <?php include('connect.php'); ?>
  <?php include('insert.php'); ?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
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
    <a href="select.php">View Table</a>
  </form>

</body>
</html>
