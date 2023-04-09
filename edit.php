<?php

if (isset($_POST['username'], $_POST['password'], $_POST['name'])) {
    $user_name = $_POST['name'];
    $user_username = $_POST['username'];
    $user_password = $_POST['password'];

    $host = 'localhost'; 
    $db_username = 'root'; 
    $db_password = ''; 
    $database = 'cat_2_takeaway';

    $conn = new mysqli($host, $db_username, $db_password, $database);

    $sql = "UPDATE `username` SET `password`=?, `Name`=? WHERE `username`=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $user_password, $user_name, $user_username);

    if ($stmt->execute()) {
        session_start();
        $_SESSION['name'] = $user_name;
        $_SESSION['password'] = $user_password;
        header("Location: userprofile.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Error: Please input all the fields.";
}
?>
