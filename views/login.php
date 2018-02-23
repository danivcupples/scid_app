<?php

if (isset($_POST['submit'])){
  echo "it works!";

  $email =  $_POST['email'];
  $password = $_POST['password'];

  $connection = mysqli_connect('localhost', 'root', 'root', 'badge_request_app');
  if(!$connection) {
     die("Database connection failed");
  } else {
    echo "<br>you're in!";
  }

  function logIn(){
    global $connection;
    $query = "SELECT * FROM users WHERE email === $email";
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('Query failed' . mysqli_error());
    }
    while($)
  }

  //check user credentials in user database
  //if role === admin => take to dashboard_admin
  //elseif role === user => take to dashboard_user
  //else => reject
}

?>
