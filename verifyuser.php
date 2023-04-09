<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['username'], $_GET['password'])) {
    $username = $_GET['username'];
    $user_password = $_GET['password'];

    $host = 'localhost'; 
    $db_username = 'root'; 
    $db_password = ''; 
    $database = 'cat_2_takeaway';

    $conn = new mysqli($host, $db_username, $db_password, $database);

    $sql = "SELECT * FROM `username` WHERE `username`='$username' AND `password`='$user_password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $_SESSION['username'] = $username;
      $conn->close();

      header("Location: userprofile.php");
      exit();
    } 

    $conn->close();
  } else {
    $error_message = "Please enter username and password.";
  }
}
?>
