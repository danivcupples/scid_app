<?php include 'includes/header.php' ?>

<?php
  //checks request status, if !in-process || !complete =>
    //mysqli requests EDIT record
    //fill in using variables below
    //autofill status as updated
    //DO NOT CHANGE ADMIN
    //DO NOT CHANGE REQUESTER
    //notify admin
  //else => email form
?>

<!-- Display request as entered by user (ideally in card layout) -->

  <form class="form-group" action="request.php" method="post">
    <input type="text" class="form-control" name="name" value="" placeholder="name as it should appear on badge">
    <input type="text" class="form-control" name="position" value="" placeholder="position as it should appear on badge">
    <input type="date" class="form-control" name="expiration" value="" placeholder="badge expiration date">
    <input type="number" class="form-control" name="barcode" value="" placeholder="barcode number">
    <input type="image" class="form-control" name="image" value="attach a jpg">
    <input type="submit" class="btn btn-danger btn-lg form-control" name="" value="submit">
  </form>

<?php include 'includes/footer.php'; ?>
