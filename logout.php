<?php
session_start();
unset($_SESSION['admin_login']);
unset($_SESSION['buyer_login']);
unset($_SESSION['seller_login']);
unset($_SESSION['user_login']);
header('location: login.php');
