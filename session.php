<?php 
include('db.com.php');
session_start();
if(isset($_SESSION['User_id'])) {
    $user_id = $_SESSION['User_id'];
    $sql_session = "SELECT * FROM user WHERE User_id = '$user_id'";
    $result_session = $conn->query($sql_session);

    if ($result_session) {
        if ($result_session->num_rows > 0) {
            $row_session = $result_session->fetch_assoc();
        } else {
            echo "User not found in the database.";
            exit();
        }
    } else {
        echo "Error querying the database.";
        exit();
    }
} else {
    echo "User_id not set in the session.";
    exit();
}
?>
