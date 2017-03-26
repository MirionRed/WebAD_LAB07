<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php include('connect.php'); ?>
  <?php $select = $db->prepare("SELECT * FROM announcement"); ?>
  <?php $select->execute(); ?>
  <?php $select->store_result(); ?>
  <?php $select->bind_result($id, $subject, $message, $type, $posted); ?>
  <?php if($select->num_rows > 0): ?>
    <table>
      <thead>
        <tr>
          <td>ID</td>
          <td>Subject</td>
          <td>Message</td>
          <td>Type</td>
          <td>Posted</td>
        </tr>
      </thead>
      <tbody>
    <?php $row_number = 1; ?>
    <?php while($select->fetch()): ?>
      <tr>
        <td><?= $row_number ?></td>
        <td><?= $subject ?></td>
        <td><?= $message ?></td>
        <td><?= $type ?></td>
        <td><?= $posted ?></td>
        <td><a href="editForm.php?id=<?= $id ?>">edit</a><td>/
        <td><a href="delete.php?id=<?= $id ?>">delete</a><td>
      </tr>
    <?php $row_number++; ?>
    <?php endwhile; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>0 results</p>
  <?php endif; ?>
  <a href="index.php">Return</a>
</body>
</html>
