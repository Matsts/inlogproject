<?php
include "connect.php";

session_start();

$UserId = $_POST['us'];
$UserPwd = $_POST['psw'];

$sql = "SELECT us, psw FROM login_data WHERE $UserId=us AND $UserPwd=psw ";
$query = $conn->prepare($sql);
$query->execute(array($UserId, $UserPwd));

if ($query->rowCount() >= 1) {
    $_SESSION['us'] = $UserId;
    header("location: index.php");
    echo '<script>alert("W")</script>';

} else {
    $message = "Username/Password is wrong";
    echo '<script>alert("L")</script>';

}
?>
