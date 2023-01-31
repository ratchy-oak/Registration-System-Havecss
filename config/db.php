<?php
session_start();

$server_name = "localhost";
$db_name = "registration-system";
$db_user = "root";
$db_password = "";
$db_char_code = "utf8";
$db_collation = "utf8mb4_general_ci";
$conn = mysqli_connect($server_name, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    die('Can not connect to DB Server : ' . mysqli_connect_error());
}

mysqli_query($conn, "SET NAMES $db_char_code") or die(mysqli_error(($conn)));
mysqli_query($conn, "SET collation_connection = '$db_collation'");
