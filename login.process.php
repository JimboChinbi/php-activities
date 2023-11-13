<?php
require_once "db.com.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $pass = md5($_POST['upass']);
    $email = $_POST['uname'];

    $sql = "SELECT * FROM user WHERE User_password = '$pass' AND User_email = '$email'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if ($count == 1) {
        $_SESSION['User_id'] = $row['User_id'];
        header("location: /REGISTRATION_FORM/dashboard.php?loginsuccess=true");
        exit(); // Add this line to prevent further execution
    } else {
        header("location: /REGISTRATION_FORM/login.php?loginsuccess=false");
        exit(); // Add this line to prevent further execution
    }
} else {
    header("location: /REGISTRATION_FORM/login.php?loginsuccess=false");
    exit(); // Add this line to prevent further execution
}
?>
