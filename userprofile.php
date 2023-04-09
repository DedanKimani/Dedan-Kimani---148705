<!DOCTYPE html>
<html>
<head>
  <title>User page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<?php
session_start();
$username = $_SESSION['username'];

$host = 'localhost'; 
$db_username = 'root'; 
$db_password = ''; 
$database = 'cat_2_takeaway';
$conn = new mysqli($host, $db_username, $db_password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Name`, `password` FROM `username` WHERE `username`='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['name'] = $row['Name'];
    $_SESSION['password'] = $row['password'];
}

$conn->close();
$user_name = $_SESSION['name'];
$user_password = $_SESSION['password'];

?>
  <div class="container">
    <h3>HELLO <?php echo $user_name; ?>!!!</h3>
    <h4>@<?php echo $username; ?></h4>
  </div>
  <form class="container" action="edit.php" method="POST">

    <div class="mb-3 " hidden>
      <input autocomplete="off" type="text" class="form-control"  value="<?php echo $username; ?>" name="username" id="username" readonly >
    </div>

    <div class="mb-3">
      <label class="form-label">Change your  name</label>
      <input autocomplete="off" type="text" class="form-control"  value="<?php echo $user_name; ?>" name="name" placeholder="Type your name">
    </div>

    <div class="mb-3">
      <label class="form-label">Change your  password</label>
      <input autocomplete="off" type="text" class="form-control" name="password"  value="<?php echo $user_password; ?>" placeholder="Type your name">
    </div>  

    <div class="mb-3">
      <input autocomplete="off" type="submit" class="btn btn-primary" value="Submit">
    </div>
   </form>


  <form class="container" action="logout.php">
    <div class="mb-3">
      <input autocomplete="off" type="submit" class="btn btn-outline-danger" value="Log out">
    </div>
  </form>


</body>



</html>
