<?php
include "koneksi.php";
$username = $_POST['username'];
// $password = md5($_POST['password']);
$password = $_POST['password'];
$query = "select * from user where username ='$username' and 
password='$password'";
$result = mysqli_query($connect,$query);
$fechResult = mysqli_fetch_assoc($result);
$rowcount = mysqli_num_rows($result);
if ($rowcount>0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
}
if ($fechResult['role']=='admin') {
    header("Location: index.php");
}elseif ($fechResult['role']=='user') {
    header("Location: index.php");
}
else {
    echo "Anda gagal login ";
    echo " <a href='loginForm.php'>Login Form</a>"; 
}
mysqli_close($connect);
?>