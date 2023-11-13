<?php
include ('db.com.php');
$uname = $_POST['uname'];
$email = $_POST['uEmail'];
$gender = $_POST['gender'];
$pass = md5($_POST['upass']);

$sql = "SELECT * FROM user WHERE User_email = '$email'";
$rsult = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Register successfully');</script>";
    header("location: login.php");
    exit();
} else {
    echo "<script>alert('Register successfully');</script>";
    $sql = "INSERT INTO user (`User_name`, `User_password`, `User_email`, `User_type`) VALUES ('$uname', '$pass', '$email', '$gender')";
    $result = $conn->query($sql);
    if ($result) {
        echo "<script>alert('Registration successful');</script>";
        header("location: login.php?loginsuccess=true");
        exit();
    } else {
        echo "<script>alert('Registration failed');</script>";
        header("location: Registration-form.php?loginsuccess=false&error=insert_failed");
        exit();
    }
}

?>