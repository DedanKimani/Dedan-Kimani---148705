<?php
session_start();

if (isset($_POST['username'], $_POST['password'], $_POST['name'])) {
    $user_name = $_POST['username'];
    $_SESSION['username'] = $user_name;

    $name = $_POST['name'];
    $password = $_POST['password'];

    $host = 'localhost'; 
    $db_username = 'root'; 
    $db_password = ''; 
    $database = 'cat_2_takeaway';


    $conn = new mysqli($host, $db_username, $db_password, $database);

    $sql = "INSERT INTO `username` (`username`, `password`, `Name`) VALUES ('$user_name', '$password', '$name')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: userprofile.php");
        exit();
    }
    $conn->close();
} else {
    echo "Error: Please input all the fields.";
}
?>
