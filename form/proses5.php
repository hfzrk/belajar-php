<?php
if (isset($_POST['Login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == 'mamato' && $pass == '6969'){
        echo "<h2>Login Berhasil</h2>";
    }else{
        echo "<h2>minggir lo</h2>";
    }
}