<?php
require_once 'config/db.php';
require_once 'function.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data_sql = "SELECT * FROM users WHERE username = '$username'";
    $check_data = mysqli_query($conn, $data_sql);
    $fetch = mysqli_fetch_array($check_data);
    $num = mysqli_num_rows($check_data);

    if ($num == 1) {
        if ($fetch['password'] == $password) {
            if ($fetch['role'] == 'admin') {
                $_SESSION['admin_login'] = $fetch['id'];
                $_SESSION['admin_name'] = $fetch['username'];
                header('location: admin.php');
            } else if ($fetch['role'] == 'buyer') {
                $_SESSION['buyer_login'] = $fetch['id'];
                $_SESSION['buyer_name'] = $fetch['username'];
                header('location: buyer.php');
            } else if ($fetch['role'] == 'seller') {
                $_SESSION['seller_login'] = $fetch['id'];
                $_SESSION['seller_name'] = $fetch['username'];
                header('location: seller.php');
            } else if ($fetch['role'] == 'user') {
                $_SESSION['user_login'] = $fetch['id'];
                $_SESSION['user_name'] = $fetch['username'];
                header('location: user.php');
            }
        } else {
            flash('Message', 'รหัสผ่านผิด', 'alert alert-danger');
            header('location: login.php');
        }
    } else {
        flash('Message', 'ไม่มีข้อมูลในระบบ', 'alert alert-danger');
        header('location: login.php');
    }
}
