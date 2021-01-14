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
        <div class="row justify-content-center">
            <div class="col-6 col-md-3">
                <div class="card border-0 shadow">
                    <img src="assets/img/netflix-logo.png" class="img-fluid" alt="">
                    <div class="card-body text-center">
                        <div class="card-title">
                            <h5>Netflix premuim</h5>
                            <hr>
                        </div>
                        <p>สินค้าเหลือ <b>0</b> ชิ้น</p>
                        <form>
                            <button class="btn red-btn col-12">ซื้อ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
</body>

</html>