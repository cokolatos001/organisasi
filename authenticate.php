<?php
// Script otentikasi sederhana untuk demonstrasi
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'password') {
    header('Location: ../index.html');
} else {
    echo 'Username atau password salah';
}
?>
