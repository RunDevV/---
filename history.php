<?php
    include "service/auth.php";
    require_once "service/class/user.class.php";
    $userClass = new User;
    require_once "service/user_record.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idshop</title>
    <?php include "body/head.php"; ?>
</head>

<body>
    <?php include "body/navbar.php"; ?>

    <div class="container mt-5">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h3>ประวัติการสั่งซื้อ</h3>
                <hr>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>