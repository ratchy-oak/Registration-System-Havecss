<?php
require_once 'config/db.php';
require_once 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container d-grid gap-2 d-md-flex">
            <a class="navbar-brand mb-0 h1" href="index.php">หัวข้อเรื่อง</a>
            <div>
                <a href="index.php" type="button" class="btn btn-success">กลับสู่หน้าแรก</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h3 class="mt-4">สมัครสมาชิก</h3>
        <hr>
        <?php flash('Message'); ?>
        <form action="register_db.php" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">ชื่อจริง</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">อีเมล</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">เบอร์โทรศัพท์</label>
                <input type="tel" class="form-control" name="tel" pattern="[0-9]{10}" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">สิทธิผู้ใช้งาน</label>
                <select name="role" class="form-select" required>
                    <option value="">เลือกสิทธิผู้ใช้งาน</option>
                    <option value="buyer">ผู้ซื้อสินค้า</option>
                    <option value="seller">ผู้ขายสินค้า</option>
                    <option value="user">ผู้ซื้อและผู้ขายสินค้า</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="mb-3">
                <label for="confirm password" class="form-label">ยืนยันรหัสผ่าน</label>
                <input type="password" class="form-control" name="c_password" required>
            </div>
            <button type="submit" name="register" class="btn btn-primary">สมัครสมาชิก</button>
        </form>
        <hr>
        <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="login.php">เข้าสู่ระบบ</a></p>
    </div>
</body>

</html>