<?php
include 'db.com.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['User_id'])) {
    echo "<script>alert('User not authenticated.');</script>";
    exit();
}

$user_id = $_SESSION['User_id'];

$uploaddir = "C:/xampp/htdocs/REGISTRATION_FORM/img/";

// Get the original file extension
$file_extension = pathinfo($_FILES['ufile']['name'], PATHINFO_EXTENSION);

$newfilename = "profile-" . $user_id . "." . $file_extension;

$uploadfile = $uploaddir . $newfilename;

// Check if the form was submitted
if (isset($_POST['uploadPic'])) {
    // Check if the file was uploaded successfully
    if (move_uploaded_file($_FILES['ufile']['tmp_name'], $uploadfile)) {
        echo '<img src="/REGISTRATION_FORM/img/' . $newfilename . '" width="200" height="200">';
        
        // Store only the filename in the database
        $file_path = $newfilename;

        $update_query = "UPDATE user SET user_profile = '$file_path' WHERE User_id = '$user_id'";
        $result = mysqli_query($conn, $update_query);

        if ($result) {
            header('Location: dashboard.php');
            echo "<script>alert('Profile picture updated successfully.');</script>";
        } else {
            echo "<script>alert('Error updating profile picture.');</script>";
        }
    } else {
        echo "<script>alert('Image upload failed, please try again.');</script>";
    }
}
?>
