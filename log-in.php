<?php
//include ('verifica.php');
include ('config.php');

if(empty($_POST['user']) || empty($_POST['password'])){
    
    header('Location: login');
    exit();
}

$user = mysqli_real_escape_string($com, $_POST['user']);
$password = mysqli_real_escape_string($com, $_POST['password']);

$query = "select * from login where user = '$user' and password = md5('$password')";

$result = mysqli_query($com, $query);

$rows = mysqli_num_rows($result);

if($rows == 1){
    session_start();
    $_SESSION['navigation'] = $user+"~"+$password;
    $_SESSION['user'] = $user;
    $_SESSION['password'] = $password;
    header('Location: home');
    exit();
}else{
    header('Location: login');
    exit();
}

?>


