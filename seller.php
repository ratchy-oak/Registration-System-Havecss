<?php
require_once 'config/db.php';
require_once 'function.php';

if (!isset($_SESSION['seller_login'])) {
    flash('Message', 'กรุณาเข้าสู่ระบบ', 'alert alert-danger');
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container d-grid gap-2 d-md-flex">
            <a class="navbar-brand mb-0 h1" href="seller.php">หัวข้อเรื่อง</a>
            <div>
                <a href="logout.php" type="button" class="btn btn-danger">ออกจากระบบ</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h3 class="mt-4">ยินดีต้อนรับผู้ขาย, <?= $_SESSION['seller_name'] ?></h3>
    </div>
</body>

</html>