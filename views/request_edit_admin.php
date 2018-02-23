<?php include 'includes/header.php' ?>

<?php
  //mysqli requests EDIT record
  //fill in using variables below
  //autofill status as needs_confirmation
  //autofill processor as current admin
  //DO NOT CHANGE REQUESTER
  //notify requester
?>

<!-- Display request as entered by user (ideally in card layout) -->

  <form class="form-group" action="request.php" method="post">
    <input type="text" class="form-control" name="name" value="" placeholder="name as it should appear on badge">
    <input type="text" class="form-control" name="position" value="" placeholder="position as it should appear on badge">
    <input type="date" class="form-control" name="expiration" value="" placeholder="badge expiration date">
    <input type="number" class="form-control" name="barcode" value="" placeholder="barcode number">
    <input type="image" class="form-control" name="image" value="attach a jpg">
    <input type="radio" name="status" value="new">
    <input type="radio" name="status" value="in-process">
    <input type="radio" name="status" value="needs-confirmation">
    <input type="radio" name="status" value="complete">
    <input type="submit" class="btn btn-danger btn-lg form-control" name="" value="submit">
  </form>

<?php include 'includes/footer.php'; ?>
