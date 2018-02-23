<?php include 'includes/header.php' ?>

  <ul>
    <?php
      requestArray.foreach ($variable as $key => $value) {
        echo "<li>" $status . " " . $organization . " " . $name . " " . "</li>";
      }
    ?>
  </ul>

<?php include 'includes/footer.php'; ?>
