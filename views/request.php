<?php include 'includes/header.php' ?>

<?php
  //mysqli requests CREATE record
  //fill in using variables below
  //autofill status as new
  //autofill processor as unassigned
  //autofill requester as user currently logged in?
?>

  <!-- Display image of card layout -->

  <form class="form-group" action="request.php" method="post">
    <input type="text" class="form-control" name="name" value="" placeholder="name as it should appear on badge">
    <input type="text" class="form-control" name="position" value="" placeholder="position as it should appear on badge">
    <input type="date" class="form-control" name="expiration" value="" placeholder="badge expiration date">
    <input type="number" class="form-control" name="barcode" value="" placeholder="barcode number">
    <input type="image" class="form-control" name="image" value="attach a jpg">
    <input type="submit" class="btn btn-danger btn-lg form-control" name="" value="submit">
  </form>

<?php include 'includes/footer.php'; ?>
