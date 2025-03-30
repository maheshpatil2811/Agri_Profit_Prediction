<?php
session_start();
include 'db.php';
include 'inc/database/database.php';
//include 'functions.php';
$db = new Database();
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];
$user=$_SESSION['user'];
$user = $db->select("user", "*", ['AND' => ['user_id' =>$user['user_id'] ]])[0];
// print_r($user);
// echo md5($old_password);
// echo $user['password'];
if (strcmp($old_password, $user['password']) != 0 or strcmp($new_password, $confirm_password) != 0) {
    echo "<script>alert('password unmatch', true);</script>";
    echo "<script> window.history.back();</script>";
} else {
    $confirm_password =$confirm_password;
    $user = $db->update("user", ['password' => $confirm_password], ['AND' => ['user_id' => $_SESSION['user']['user_id'], 'user_id' => $_SESSION['user']['user_id']]]);
    echo "success";
    if ($user) {
        echo "<script>alert('Successful, Password is updated!');</script>";
        echo "<script>window.location='change-password.php';</script>";
    } else {
        echo "<script>alert('Faild, 'Password not updated!', true);</script>";
        echo "<script>window.location='change-password.php';</script>";
    }
}
