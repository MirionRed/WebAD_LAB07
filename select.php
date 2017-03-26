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
    <?php while($select->fetch()): ?>
      <tr>
        <td><?= $id ?></td>
        <td><?= $subject ?></td>
        <td><?= $message ?></td>
        <td><?= $type ?></td>
        <td><?= $posted ?></td>
      </tr>
    <?php endwhile; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>0 results</p>
  <?php endif; ?>
</body>
</html>
