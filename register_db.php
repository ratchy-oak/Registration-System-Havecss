<?php
require_once 'config/db.php';
require_once 'function.php';

if (isset($_POST['register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $tel = $_POST['tel'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    if ($password === $c_password) {
        $email_sql = "SELECT email FROM users WHERE email = '$email'";
        $check_email = mysqli_query($conn, $email_sql);
        $enum = mysqli_num_rows($check_email);

        $username_sql = "SELECT username FROM users WHERE username = '$username'";
        $check_username = mysqli_query($conn, $username_sql);
        $unum = mysqli_num_rows($check_username);

        if ($enum == 0 && $unum == 0) {
            $sql = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `tel`, `role`, `password`) VALUES (NULL, '$firstname', '$lastname', '$email', '$username', '$tel', '$role', '$password');";
            $stmt = mysqli_query($conn, $sql);
            flash('Message', 'เพิ่มข้อมูลสำเร็จ', 'alert alert-success');
            header('location: login.php');
        } else if ($enum == 1 && $unum == 0) {
            flash('Message', 'มีอีเมลนี้ในระบบแล้ว', 'alert alert-danger');
            header('location: register.php');
        } else if ($enum == 0 && $unum == 1) {
            flash('Message', 'ชื่อผู้ใช้นี้ถูกใช้ไปแล้ว', 'alert alert-danger');
            header('location: register.php');
        } else {
            flash('Message', 'มีอีเมลนี้ในระบบแล้ว', 'alert alert-danger');
            header('location: register.php');
        }
    } else {
        flash('Message', 'รหัสผ่านไม่ตรงกัน', 'alert alert-danger');
        header('location: register.php');
    }
}
